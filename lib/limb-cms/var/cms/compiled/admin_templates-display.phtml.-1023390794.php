<?php /* This file is generated from /home/korchasa/www/limb-cms/lib/limb-cms/constructor/tests/cases/../../template/admin_templates/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor573cdef8fd55d83a636f34a6a636185f', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor573cdef8fd55d83a636f34a6a636185f extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?>[[wrap with="admin_page_layout.phtml" in="content_zone"]]

  [[include file="_admin/selectors.phtml"/]]
  [[include file="_admin_object/actions.phtml"/]]

  <div id="header">
    <h1><?php echo htmlspecialchars($this->model_name,3); ?></h1>
    <div class="header_actions">
      [[apply template="object_action" action="create" is_link="true" title="Создать <?php echo htmlspecialchars($this->model_name,3); ?>"/]]
    </div>

    [[include file='_admin/pager.phtml' items='[$this->items]'/]]
  </div>

  <div id="body">

    [[list using="[$this->items]" as="$item" counter="$counter" parity='$parity']]

      <div class='list'>
        <div class='list_actions'>
          [[apply template="selectors_button" action="delete" title="Удалить" /]]
        </div>
        <table>
          <tr>
            <th>[[apply template="selectors_toggler"/]]</th><?php $I = 0;$K = $this->columns;

if(!is_array($K) && !($K instanceof Iterator) && !($K instanceof IteratorAggregate)) {
$K = array();}
$J = $K;
foreach($J as $column) {if($I == 0) {} ?>

            <th><?php $M='';
$N = $column;
$M = $N->getName();
echo htmlspecialchars($M,3); ?>

            [[include file='_admin/sort_by_column.phtml' field='<?php $O='';
$P = $column;
$O = $P->getName();
echo htmlspecialchars($O,3); ?>'/]]
            </th><?php $I++;}if($I > 0) { ?>

            <th>Действия</th>
          <?php } ?></tr>

          [[list:item]]
            <tr class="[$parity]">
              <td>[[apply template="selector" value="[$item.id]"/]]</td><?php $U = 0;$W = $this->columns;

if(!is_array($W) && !($W instanceof Iterator) && !($W instanceof IteratorAggregate)) {
$W = array();}
$V = $W;
foreach($V as $column) {if($U == 0) {} ?>

              <td><?php  $column_name = $column->getName(); ?><?php echo $this->fields_for_display[$column_name]; ?></td><?php $U++;}if($U > 0) {} ?>

              <td class='actions'>
                [[apply template="object_action_edit" item="[$item]"/]]
                <?php echo $this->apply_publish_templates; ?>

                [[apply template="object_action_delete" item="[$item]"/]]
              </td>
            </tr>
          [[/list:item]]
          [[list:empty]]
            <div class="empty_list"><?php echo htmlspecialchars($this->model_name,3); ?> отсутствуют</div>
          [[/list:empty]]
        </table>
        <div class='list_actions'>
          [[apply template="selectors_button" action="delete" title="Удалить" /]]
        </div>
      </div>

    [[/list]]

  </div>

[[/wrap]]
<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor573cdef8fd55d83a636f34a6a636185f';