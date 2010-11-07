<?php /* This file is generated from /home/korchasa/www/limb/constructor/template/admin_templates/create.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor4ac77f868d4628871cc7f5516a4c3ce2', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor4ac77f868d4628871cc7f5516a4c3ce2 extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?>[[wrap with="admin_modal_page_layout.phtml" into="content_zone"]]
  [[form id='object_form' name='user_form' method='post' enctype="multipart/form-data"]]

    <h1>Создать <?php echo htmlspecialchars($this->model_url,3); ?></h1>

    [[include file='_admin/form_errors.phtml'/]]
    [[include file='admin_<?php echo htmlspecialchars($this->model_url,3); ?>/include/form_fields.phtml'/]]
    [[include file='_admin/form_buttons.phtml'/]]

  [[/form]]
[[/wrap]]<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor4ac77f868d4628871cc7f5516a4c3ce2';