<?php
/*
 * Limb PHP Framework
 *
 * @link http://limb-project.com
 * @copyright  Copyright &copy; 2004-2007 BIT(http://bit-creative.com)
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 */

class lmbMacroHtmlSpecialCharsFilterTest extends lmbBaseMacroTest
{
  function testSimple()
  {
    $code = '{$#var|htmlspecialchars}';
    $tpl = $this->_createMacroTemplate($code, 'tpl.html');
    $tpl->set('var', '<hello>');
    $out = $tpl->render();
    $this->assertEqual($out, '&lt;hello&gt;');
  }
}

