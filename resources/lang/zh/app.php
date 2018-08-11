<?php

return [
    'update' => '更新',
    'save' => '保存',
    'add' => '添加',
    'cancel' => '取消',
    'delete' => '删除',
    'edit' => '编辑',
    'upload' => '上传',
    'close' => '关闭',
    'create' => '创建',
    'remove' => '删除',
    'revoke' => '撤销',
    'done' => '完成',
    'verify' => '验证',
    'for' => '为',
    'new' => '新',
    'unknown' => '我不知道',
    'load_more' => '载入更多',
    'loading' => '正在加载...',
    'with' => '与',
    'days' => '天|天',

    'application_title' => 'Monica – 您的私人社交关系管家',
    'application_description' => 'Monica是用来收集并管理您与亲朋好友之间的关系的得力助手。',
    'application_og_title' => '促进你们之间的感情。一个免费且开源的面向亲朋好友的CRM工具',

    'markdown_description' => '想用一种美观的方式格式化文本吗？我们以Markdown语法支持粗体、斜体、列表等样式。',
    'markdown_link' => '阅读文档',

    'header_settings_link' => '设置',
    'header_logout_link' => '注销',
    'header_changelog_link' => '更新日志',

    'main_nav_cta' => '添加人员',
    'main_nav_dashboard' => '仪表盘',
    'main_nav_family' => '联系人',
    'main_nav_journal' => '记录',
    'main_nav_activities' => '活动',
    'main_nav_tasks' => '任务',

    'footer_remarks' => '有什么意见吗？',
    'footer_send_email' => '给我发电子邮件',
    'footer_privacy' => '隐私条款',
    'footer_release' => '版本说明',
    'footer_newsletter' => '新闻简报',
    'footer_source_code' => '捐助',
    'footer_version' => '版本::version',
    'footer_new_version' => '有新版本可用！',

    'footer_modal_version_whats_new' => '新增内容',
    'footer_modal_version_release_away' => '您有一个最新发布版本可更新。您应该更新实例. |您已经有:number个版本没有更新，应该更新了。',

    'breadcrumb_dashboard' => '仪表盘',
    'breadcrumb_list_contacts' => '人名单',
    'breadcrumb_journal' => '记录',
    'breadcrumb_settings' => '设置',
    'breadcrumb_settings_export' => '导出',
    'breadcrumb_settings_users' => '用户',
    'breadcrumb_settings_users_add' => '添加用户',
    'breadcrumb_settings_subscriptions' => '订阅',
    'breadcrumb_settings_import' => '导入',
    'breadcrumb_settings_import_report' => '导入报表',
    'breadcrumb_settings_import_upload' => '上传',
    'breadcrumb_settings_tags' => '标签',
    'breadcrumb_add_significant_other' => '添加其他重要',
    'breadcrumb_edit_significant_other' => '编辑其他重要',
    'breadcrumb_add_note' => '添加注释',
    'breadcrumb_edit_note' => '编辑注释',
    'breadcrumb_api' => 'API',
    'breadcrumb_edit_introductions' => '你是怎么知道的',
    'breadcrumb_settings_personalization' => '个性化',
    'breadcrumb_settings_security' => '安全',
    'breadcrumb_settings_security_2fa' => '双重验证',

    'gender_male' => '男',
    'gender_female' => '女',
    'gender_none' => '保密',

    'error_title' => '糟糕! 出错了。',
    'error_unauthorized' => '你没有权限编辑此页',
    'error_save' => '当储存数据时出现了一个错误',

    'default_save_success' => '数据已被保存',

    'compliance_title' => '抱歉，打扰您一下',
    'compliance_desc' => '我们更新了<a href=":urlterm" hreflang=":hreflang">用户协议</a> 以及 <a href=":url" hreflang=":hreflang">隐私政策</a>，您需要阅读并同意才能继续使用您的账号。',
    'compliance_desc_end' => '我们会保护您的隐私安全。',
    'compliance_terms' => '我已阅读并同意',

    // Relationship types
    // Yes, each relationship type has 8 strings associated with it.
    // This is because we need to indicate the name of the relationship type,
    // and also the name of the opposite side of this relationship (father/son),
    // and then, the feminine version of the string. Finally, in some sentences
    // in the UI, we need to include the name of the person we add the relationship
    // to.
    'relationship_type_group_love' => '恋爱关系',
    'relationship_type_group_family' => '家庭关系',
    'relationship_type_group_friend' => '朋友关系',
    'relationship_type_group_work' => '工作关系',
    'relationship_type_group_other' => '其他关系',

    'relationship_type_partner' => '搭档',
    'relationship_type_partner_female' => '搭档',
    'relationship_type_partner_with_name' => ':name的搭档',
    'relationship_type_partner_female_with_name' => ':name的搭档',

    'relationship_type_spouse' => '配偶',
    'relationship_type_spouse_female' => '配偶',
    'relationship_type_spouse_with_name' => ':name的配偶',
    'relationship_type_spouse_female_with_name' => ':name的配偶',

    'relationship_type_date' => '约会对象',
    'relationship_type_date_female' => '约会对象',
    'relationship_type_date_with_name' => ':name的约会对象',
    'relationship_type_date_female_with_name' => ':name的约会对象',

    'relationship_type_lover' => '情人',
    'relationship_type_lover_female' => '情人',
    'relationship_type_lover_with_name' => ':name的情人',
    'relationship_type_lover_female_with_name' => ':name的情人',

    'relationship_type_inlovewith' => '喜欢的人',
    'relationship_type_inlovewith_female' => '喜欢的人',
    'relationship_type_inlovewith_with_name' => ':name喜欢的人',
    'relationship_type_inlovewith_female_with_name' => ':name喜欢的人',

    'relationship_type_lovedby' => '追求者',
    'relationship_type_lovedby_female' => '追求者',
    'relationship_type_lovedby_with_name' => ':name的追求者',
    'relationship_type_lovedby_female_with_name' => ':name的追求者',

    'relationship_type_ex' => '前男友',
    'relationship_type_ex_female' => '前女友',
    'relationship_type_ex_with_name' => ':name的前男友',
    'relationship_type_ex_female_with_name' => ':name的前女友',

    'relationship_type_parent' => '父亲',
    'relationship_type_parent_female' => '母亲',
    'relationship_type_parent_with_name' => ':name的父亲',
    'relationship_type_parent_female_with_name' => ':name的母亲',

    'relationship_type_child' => '儿子',
    'relationship_type_child_female' => '女儿',
    'relationship_type_child_with_name' => ':name的儿子',
    'relationship_type_child_female_with_name' => ':name的女人',

    'relationship_type_sibling' => '兄弟',
    'relationship_type_sibling_female' => '姐妹',
    'relationship_type_sibling_with_name' => ':name的兄弟',
    'relationship_type_sibling_female_with_name' => ':name的姐妹',

    'relationship_type_grandparent' => '祖父',
    'relationship_type_grandparent_female' => '祖母',
    'relationship_type_grandparent_with_name' => ':name的祖父',
    'relationship_type_grandparent_female_with_name' => ':name的祖母',

    'relationship_type_grandchild' => '曾孙',
    'relationship_type_grandchild_female' => '曾孙女',
    'relationship_type_grandchild_with_name' => ':name的曾孙',
    'relationship_type_grandchild_female_with_name' => ':name的曾孙女',

    'relationship_type_uncle' => '叔叔',
    'relationship_type_uncle_female' => '阿姨',
    'relationship_type_uncle_with_name' => ':name的叔叔',
    'relationship_type_uncle_female_with_name' => ':name的阿姨',

    'relationship_type_nephew' => '外甥',
    'relationship_type_nephew_female' => '外甥女',
    'relationship_type_nephew_with_name' => ':name的外甥',
    'relationship_type_nephew_female_with_name' => ':name的外甥女',

    'relationship_type_cousin' => '堂兄弟',
    'relationship_type_cousin_female' => '堂姐妹',
    'relationship_type_cousin_with_name' => ':name的堂兄弟',
    'relationship_type_cousin_female_with_name' => ':name的堂姐妹',

    'relationship_type_godfather' => '神父',
    'relationship_type_godfather_female' => '神母',
    'relationship_type_godfather_with_name' => ':name的神父',
    'relationship_type_godfather_female_with_name' => ':name的神母',

    'relationship_type_godson' => '义子',
    'relationship_type_godson_female' => '义女',
    'relationship_type_godson_with_name' => ':name的义子',
    'relationship_type_godson_female_with_name' => ':name的义女',

    'relationship_type_friend' => '朋友',
    'relationship_type_friend_female' => '朋友',
    'relationship_type_friend_with_name' => ':name的朋友',
    'relationship_type_friend_female_with_name' => ':name的朋友',

    'relationship_type_bestfriend' => '基友',
    'relationship_type_bestfriend_female' => '闺密',
    'relationship_type_bestfriend_with_name' => ':name的基友',
    'relationship_type_bestfriend_female_with_name' => ':name的闺密',

    'relationship_type_colleague' => '同事',
    'relationship_type_colleague_female' => '同事',
    'relationship_type_colleague_with_name' => ':name的同事',
    'relationship_type_colleague_female_with_name' => '同事',

    'relationship_type_boss' => '上司',
    'relationship_type_boss_female' => '上司',
    'relationship_type_boss_with_name' => ':name的上司',
    'relationship_type_boss_female_with_name' => ':name的上司',

    'relationship_type_subordinate' => '下属',
    'relationship_type_subordinate_female' => '下属',
    'relationship_type_subordinate_with_name' => ':name的下属',
    'relationship_type_subordinate_female_with_name' => ':name的下属',

    'relationship_type_mentor' => '老师',
    'relationship_type_mentor_female' => '老师',
    'relationship_type_mentor_with_name' => ':name的老师',
    'relationship_type_mentor_female_with_name' => ':name的老师',

    'relationship_type_protege' => '学生',
    'relationship_type_protege_female' => '学生',
    'relationship_type_protege_with_name' => ':name的学生',
    'relationship_type_protege_female_with_name' => ':name的学生',

    'relationship_type_ex_husband' => '前夫',
    'relationship_type_ex_husband_female' => '前妻',
    'relationship_type_ex_husband_with_name' => ':name的前夫',
    'relationship_type_ex_husband_female_with_name' => '前妻',
];
