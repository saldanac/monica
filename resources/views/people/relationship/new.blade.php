@extends('layouts.skeleton')

@section('content')

<section class="ph3 ph0-ns">

  {{-- Breadcrumb --}}
  <div class="mt4 mw7 center mb3">
    <p><a href="{{ route('people.show', $contact) }}">< {{ $contact->name }}</a></p>
    <div class="mt4 mw7 center mb3">
      <h3 class="f3 fw5">{{ trans('people.relationship_form_add') }}</h3>
    </div>
  </div>

  <div class="mw7 center br3 ba b--gray-monica bg-white mb6">

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    @include('partials.errors')

    <form action="{{ route('people.relationships.store', $contact) }}" method="POST">
      {{ csrf_field() }}

      {{-- New contact / link existing --}}
      <div class="pa4-ns ph3 pv2 mb3 mb0-ns bb b--gray-monica">
        <p class="mb2 b">{{ trans('people.relationship_form_add_choice') }}</p>
        <div class="dt dt--fixed">
          <div class="dtc pr2">
            <input type="radio" id="new" name="relationship_type" value="new" @click="global_relationship_form_new_contact = true" checked>
            <label for="new" class="pointer">{{ trans('people.relationship_form_create_contact') }}</label>
          </div>
          <div class="dtc">
            <input type="radio" id="existing" name="relationship_type" value="existing" @click="global_relationship_form_new_contact = false">
            <label for="existing" class="pointer">{{ trans('people.relationship_form_associate_contact') }}</label>
          </div>
        </div>
      </div>

      <div v-if="global_relationship_form_new_contact">
        {{-- Name --}}
        <div class="pa4-ns ph3 pv2 bb b--gray-monica">
          {{-- This check is for the cultures that are used to say the last name first --}}
          <div class="mb3 mb0-ns">
            @if (auth()->user()->getNameOrderForForms() == 'firstname')

            <div class="dt dt--fixed">
              <div class="dtc pr2">
                <form-input
                  value=""
                  v-bind:input-type="'text'"
                  v-bind:id="'first_name'"
                  v-bind:required="true"
                  v-bind:title="'{{ trans('people.people_add_firstname') }}'">
                </form-input>
              </div>
              <div class="dtc">
                <form-input
                  value=""
                  v-bind:input-type="'text'"
                  v-bind:id="'last_name'"
                  v-bind:required="false"
                  v-bind:title="'{{ trans('people.people_add_lastname') }}'">
                </form-input>
              </div>
            </div>

            @else

            <div class="dt dt--fixed">
              <div class="dtc pr2">
                <form-input
                  value=""
                  v-bind:input-type="'text'"
                  v-bind:id="'last_name'"
                  v-bind:required="false"
                  v-bind:title="'{{ trans('people.people_add_lastname') }}'">
                </form-input>
              </div>
              <div class="dtc">
                <form-input
                  value=""
                  v-bind:input-type="'text'"
                  v-bind:id="'first_name'"
                  v-bind:required="true"
                  v-bind:title="'{{ trans('people.people_add_firstname') }}'">
                </form-input>
              </div>
            </div>

            @endif
          </div>
        </div>

        {{-- Gender --}}
        <div class="pa4-ns ph3 pv2 mb3 mb0-ns bb b--gray-monica">
          <form-select
            :options="{{ $genders }}"
            v-bind:required="true"
            v-bind:title="'{{ trans('people.people_add_gender') }}'"
            v-bind:id="'gender_id'">
          </form-select>
        </div>

        {{-- Birthdate --}}
        <form-specialdate
          v-bind:months="{{ $months }}"
          v-bind:days="{{ $days }}"
          v-bind:default-date="'{{ $birthdate }}'"
          v-bind:locale="'{{ auth()->user()->locale }}'"
        ></form-specialdate>

        <div class="pa4-ns ph3 pv2 bb b--gray-monica">
          <div class="mb3 mb0-ns">
            <label class="pa0 ma0 lh-copy pointer" for="realContact">
              <input type="checkbox" id="realContact" name="realContact"> {{ trans('people.relationship_form_also_create_contact') }} <span class="silver">{{ trans('people.relationship_form_add_description') }}</span>
            </label>
          </div>
        </div>
      </div>

      <div v-if="!global_relationship_form_new_contact">
        <div class="pa4-ns ph3 pv2 mb3 mb0-ns bb b--gray-monica">
          @if ($existingContacts->count() == 0)
            <div class="mb1 mt2 tc">
              <img src="/img/people/no_record_found.svg">
              <p>{{ trans('people.relationship_form_add_no_existing_contact', ['name' => $contact->first_name]) }}</p>
            </div>
          @else
            <contact-select
              v-bind:required="true"
              v-bind:title="'{{ trans('people.relationship_form_associate_dropdown') }}'"
              v-bind:name="'existing_contact_id'"
              v-bind:placeholder="'{{ trans('people.relationship_form_associate_dropdown_placeholder') }}'"
              v-bind:default-options="{{ $existingContacts }}"
              v-bind:user-contact-id="'{{ $contact->hashID() }}'"
              v-bind:inputId="'{{ $contact->hashID() }}'">
            </contact-select>
          @endif
        </div>
      </div>

      {{-- Nature of relationship --}}
      <div class="pa4-ns ph3 pv2 mb3 mb0-ns bb b--gray-monica">
        <form-select
          :options="{{ $relationshipTypes }}"
          value="{{ $type }}"
          v-bind:required="true"
          v-bind:title="'{{ trans('people.relationship_form_is_with', ['name' => $contact->name]) }}'"
          v-bind:id="'relationship_type_id'">
        </form-select>
      </div>

      {{-- Form actions --}}
      <div class="ph4-ns ph3 pv3 bb b--gray-monica">
        <div class="flex-ns justify-between">
          <div class="">
            <a href="{{ route('people.show', $contact) }}" class="btn btn-secondary w-auto-ns w-100 mb2 pb0-ns">{{ trans('app.cancel') }}</a>
          </div>
          <div class="">
            @if ($existingContacts->count() == 0)
            <button class="btn btn-primary w-auto-ns w-100 mb2 pb0-ns" disabled v-if="!global_relationship_form_new_contact" name="save" type="submit">{{ trans('app.add') }}</button>
            <button class="btn btn-primary w-auto-ns w-100 mb2 pb0-ns" v-if="global_relationship_form_new_contact" name="save" type="submit">{{ trans('app.add') }}</button>
            @else
            <button class="btn btn-primary w-auto-ns w-100 mb2 pb0-ns" name="save" type="submit">{{ trans('app.add') }}</button>
            @endif
          </div>
        </div>
      </div>

    </form>
  </div>
</section>

@endsection
