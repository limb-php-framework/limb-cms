<?php /* This file is generated from /home/korchasa/www/limb/constructor/template/admin_templates/edit.phtml*/?><?php
if(!class_exists('MacroTemplateExecutore9d75b80b53a393e9dcddd11ff902610', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutore9d75b80b53a393e9dcddd11ff902610 extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?>[[wrap with="admin_modal_page_layout.phtml" into="content_zone"]]
  [[form id='object_form' name='object_form' method='post' enctype="multipart/form-data" runat='server']]

    <h1>Редактирование <?php echo htmlspecialchars($this->model_url,3); ?> &laquo;[$this->item.id]&raquo;</h1>

    [[include file='_admin/form_errors.phtml'/]]
    [[include file='admin_<?php echo htmlspecialchars($this->model_url,3); ?>/include/form_fields.phtml'/]]
    [[include file='_admin/form_buttons.phtml'/]]

  [[/form]]
[[/wrap]]<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutore9d75b80b53a393e9dcddd11ff902610';