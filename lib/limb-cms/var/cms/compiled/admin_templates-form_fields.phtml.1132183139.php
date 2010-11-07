<?php /* This file is generated from /home/korchasa/www/limb-cms/lib/limb-cms/constructor/tests/cases/../../template/admin_templates/form_fields.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor1b303fbbac9199baf09536e67864d2fb', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor1b303fbbac9199baf09536e67864d2fb extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><div class='tabs'>

  <ul>
    <li id='properties'><a>Свойства</a></li>
  </ul>

  <div id="tab_properties">
    <?php $G = 0;$I = $this->column_names;

if(!is_array($I) && !($I instanceof Iterator) && !($I instanceof IteratorAggregate)) {
$I = array();}
$H = $I;
foreach($H as $column_name) {$parity = (( ($G + 1) % 2) ? "odd" : "even");if($G == 0) { ?>

      <?php } ?>

        <dl class="field">
          <dt>[[label for="<?php echo htmlspecialchars($column_name,3); ?>"]]<?php echo htmlspecialchars($column_name,3); ?>:[[/label]]</dt>
          <dd><?php echo $this->form_fields[$column_name]; ?></dd>
        </dl>
      <?php $G++;}if($G > 0) { ?>

    <?php } ?>

  </div>

</div><?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor1b303fbbac9199baf09536e67864d2fb';