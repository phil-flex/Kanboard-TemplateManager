<!-- REMOVE THIS SECTION -->
<!-- ------------------- -->
<!-- TEMPLATE FILE FOR LOCAL TRANSLATIONS - KEEP FILENAME IN LOWERCASE AS translations.php UNDER LANGUAGE CODE -->
<!-- EXAMPLE FILE: /Locale/en_GB/translations.php -->
<!-- EXAMPLE FILE: /Locale/en_US/translations.php -->
<!-- EXAMPLE FILE: /Locale/fr_FR/translations.php -->
<!-- EXAMPLE FILE: /Locale/de_DE/translations.php -->
<!-- ------------------- -->
<!-- REMOVE THIS SECTION -->
<?php

return array(
  //
  // GENERAL
  //
  'Speed through your tasks replacing Predefined Contents with the new Template Manager. Users can impove consistency of project data whilst saving time creating repetitive comments using saved templates. Project Editors can easily manage their template content for each project. Templates can be created for task descriptions (core feature), comments (new feature), global templates (new feature) and email subjects (core feature) all in one place including adding notes and instructions separate to the template content to help keep content neat. The global templates feature displays for every project and can be used as a way to guide and advise users within tasks. Templates can also be useful in environments where auditing or standardization is required.' => '利用新的模板管理器取代預定義內容，加快完成任務的速度。用戶可以提高項目數據的一致性，同時節省使用已保存模板創建重復注釋的時間。項目編輯人員可以輕松管理每個項目的模板內容。可以在一個地方為任務描述（核心功能）、注釋（新功能）、全局模板（新功能）和電子郵件主題（核心功能）創建模板，包括在模板內容中單獨添加注釋和說明，以幫助保持內容整潔。全局模板功能在每個項目中都會顯示，可用於在任務中為用戶提供指導和建議。在需要審計或標准化的環境中，模板也非常有用。',
  //
  // Controller/CommentTemplateController.php
  //
  'Template created successfully' => '模板創建成功',
  'Unable to create this template' => '無法創建此模板',
  'Template updated successfully' => '模板更新成功',
  'Unable to update this template' => '無法更新此模板',
  'Template deleted successfully' => '模板已成功刪除',
  'Unable to delete this template' => '無法刪除此模板',
  //
  // Controller/TemplateContentController.php
  //
  'Email subject templates updated successfully' => '電子郵件主題模板更新成功',
  'Unable to update email subject templates' => '無法更新電子郵件主題模板',
  //
  // CORE OVERRIDES OR 3RD PARTY PLUGIN TRANSLATIONS AFFECTING THIS PLUGIN
  //
  'Settings' => '設置',
  'None' => '沒有',
  'Create' => '創建',
  'Cancel' => '取消',
  'Save' => '保存',
  'Delete' => '刪除',
  'Template' => '模板',
  'Close' => '關閉',
  'View' => '查看',
  'Edit' => '編輯',
  'Summary' => '摘要',
  'Edit Project' => '編輯項目',
  'Categories' => '類別',
  'Tags' => '標記',
  'Columns' => '欄目',
  'Swimlanes' => '泳道',
  'Automatic Actions' => '自動執行',
  'Custom Filters' => '自定義過濾器',
  'Public Access' => '公眾訪問',
  'Notifications' => '通知',
  'Integrations' => '整合',
  'Permissions' => '權限',
  'Custom Roles' => '自定義角色',
  'Import Tasks' => '導入任務',
  'Closing this project will make it read only' => '關閉該項目將使其成為只讀項目',
  'Close Project' => '關閉項目',
  'Open Project' => '開放項目',
  'Duplicate Project' => '重復項目',
  'Delete Project' => '刪除項目',
  //
  // Helper/TemplateTitleHelper.php
  //
  'Templates available for this project' => '本項目可用模板',
  //
  // comment_template/create.php
  //
  'Template Manager' => '模板管理器',
  'Create Comment Template' => '創建評論模板',
  'Title' => '標題', 
  'My Template Title' => '我的模板標題',
  'Topic' => '主題',
  'e.g. General' => '例如：一般',
  'Topics can help group and label similar templates' => '主題可幫助對類似模板進行分組和標記',
  'Note' => '',
  'This note has specific instructions' => '本說明有具體說明',
  'Add a short note to describe this template' => '添加簡短說明以描述此模板',
  'Instructions' => '說明',
  'Add some useful instructions on how to use this template' => '添加一些有用的說明，介紹如何使用此模板',
  'Template Content' => '模板內容',
  'Clear any changes made on this page' => '清除本頁面上的任何更改',
  'Reset' => '重置',
  //
  // comment_template/edit.php
  //
  'Edit Task Comment Template' => '編輯任務評論模板',
  'Saves any changes made on this page' => '保存對本頁所做的任何更改',
  //
  // comment_template/remove.php
  //
  'Delete Task Comment Template' => '刪除任務評論模板',
  'Click on the button to confirm you would like to delete the template from the database' => '點擊按鈕確認要從數據庫中刪除模板',
  //
  // comment_template/show.php
  //
  'Task Comment Template' => '任務評論模板',
  //
  // config/global-templates.php
  //
  'Global Templates' => '全局模板',
  'Add Template' => '添加模板',
  'Add Global Template' => '添加全局模板',
  'These templates are used to guide users in their workflow. Global templates are available throughout the application. Templates are shown above the comments section of each task. Use topics to group and label similar templates. Use notes to describe the template.' => '這些模板用於指導用戶的工作流程。全局模板可在整個應用程序中使用。模板顯示在每個任務的注釋部分上方。使用主題對類似模板進行分組和標記。使用注釋來描述模板。',
  'ID' => 'ID',
  'Actions' => '行動',
  'View Template' => '查看模板',
  'Edit Template' => '編輯模板',
  'Delete Template' => '刪除模板',
  'Add a template to get started' => '添加模板開始',
  //
  // global_template/create.php
  //
  'Create Global Template' => '創建全局模板',
  //
  // global_template/edit.php
  //
  'Edit Global Template' => '編輯全局模板',
  //
  // global_template/remove.php
  //
  'Delete Global Template' => '刪除全局模板',
  //
  // global_template/show.php
  //
  'Global Template' => '全局模板',
  //
  // predefined_task_description/create.php
  //
  'Create Task Description Template' => '創建任務描述模板',
  //
  // predefined_task_description/edit.php
  //
  'Edit Task Description Template' => '編輯任務描述模板',
  //
  // predefined_task_description/remove.php
  //
  'Delete Task Description Template' => '刪除任務描述模板',
  //
  // predefined_task_description/show.php
  //
  'Task Description Template' => '任務描述模板',
  //
  // project_predefined_content/show.php
  //
  'Content Templates' => '內容模板',
  'Add Task Description Template' => '添加任務描述模板',
  'Add Comment Template' => '添加評論模板',
  'Add Global Template' => '添加全局模板',
  'View Global Templates' => '查看全球模板',
  'Content templates are useful for repetitive content. Templates listed here apply to this project only. Each section describes how users should use the saved templates.' => '內容模板對重復內容非常有用。此處列出的模板僅適用於本項目。每個部分都說明了用戶應如何使用保存的模板。',
  'Task Description Templates' => '任務描述模板',
  'These templates are used as descriptions for tasks in projects. When you create a task, you can choose from a list of these templates in the task creation form. Topics can help group and label similar templates. Notes are used to describe the template.' => '這些模板用作項目中任務的描述。創建任務時，可以從任務創建表單的模板列表中進行選擇。主題可以幫助對類似模板進行分組和標記。注釋用於描述模板。',
  'Task Comment Templates' => '任務評論模板',
  'These templates are available as comments for any task in a project. In the comments section of a task, select your template from the associated comment templates. Topics can help group and label similar templates. Notes are used to describe the template.' => '這些模板可作為項目中任何任務的注釋。在任務的注釋部分，從相關注釋模板中選擇模板。主題可以幫助對類似模板進行分組和標記。注釋用於描述模板。',
  'Email Subject Templates' => '電子郵件主題模板',
  'Subjects for emails are used both by tasks and automatic actions which can help in creating automated emails (as confirmations, reports or for auditing activity).' => '電子郵件主題既可用於任務，也可用於自動操作，有助於創建自動電子郵件（作為確認、報告或用於審計活動）。',
  'One subject per line only' => '每行僅限一個主題',
  'Inside a task' => '任務內部',
  'Use the \'Send by email\' option from the task side menu' => '使用任務側菜單中的 \'通過電子郵件發送\' 選項',
  'Using Automatic Actions' => '使用自動操作',
  'Choose the \'Send a task by email to someone\' action' => '選擇\' 通過電子郵件向某人發送任務\' 操作',
  'This option can use templates with interpolation expressions (double braces). Follow the example below:' => '該選項可以使用帶有插值表達式（雙括號）的模板。請參考下面的示例:',
  'Activity Result:' => '活動結果:',
  'The task was moved to the \'Done\' column by the user' => '該任務被用戶移動到了（\'已完成\'）欄中',
  'Email Subject Received:' => '收到的電子郵件主題:',
  'Done: Make Sales Report (#101)' => '制作銷售報告 (#101)',
  'Automatic Action Procedure:' => '自動行動程序:',
  'Send a task by email to someone' => '通過電子郵件向某人發送任務',
  'Event Name:' => '活動名稱:',
  'Move a task to another column' => '將任務移至另一列',
  'Column:' => '欄：',
  'Done' => '已完成',
  'User that will receive the email:' => '將收到電子郵件的用戶：',
  'User' => '用戶',
  'Email Subject:' => '電子郵件主題：',
  //
  // task/global-templates.php
  //
  'General Templates & Actions' => '一般模板和操作',
  'Copy to Clipboard' => '復制到剪貼板',
  'Copy' => '復制',
  'Go to the top of this section' => '轉到本節頂部',
  'Section' => '部門',
  'Go to the top of this page' => '轉到本頁頂部',
  'Page' => '頁次',
  //
  // task_comments/show.php
  //
  'Comments' => '評論',
  'No comments' => '沒有評論',
  'Change sorting' => '更改排序',
  'Send by email' => '通過電子郵件發送',
  'Add a comment' => '添加評論',
  'Comment Templates' => '評論模板',
  'Paste to Text Editor' => '粘貼到文本編輯器',
);

