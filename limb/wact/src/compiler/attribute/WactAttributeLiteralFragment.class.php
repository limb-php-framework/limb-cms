<?php
/**
 * Limb Web Application Framework
 *
 * @link http://limb-project.com
 *
 * @copyright  Copyright &copy; 2004-2007 BIT
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 * @version    $Id: WactAttributeNode.class.php 5168 2007-02-28 16:05:08Z serega $
 * @package    wact
 */

class WactAttributeLiteralFragment implements WactExpressionInterface
{
  protected $name;

  function __construct($value)
  {
    $this->value = $value;
  }

  function isConstant()
  {
    return TRUE;
  }

  function getValue()
  {
    static $table;
    if (!isset($table))
      $table = array_flip(get_html_translation_table( HTML_SPECIALCHARS, ENT_QUOTES ));

    /* special case for HTML tags like <option selected> where selected attribute has value NULL */
    if (!is_null($this->value))
    {
      /* translate entities to their real values */
      return strtr($this->value, $table);
    }
  }

  function generateFragment($code_writer)
  {
    $code_writer->writeHTML(htmlspecialchars($this->getValue(), ENT_QUOTES));
  }

  function generatePreStatement($code_writer)
  {
  }

  function generateExpression($code_writer)
  {
    $code_writer->writePHPLiteral($this->getValue());
  }

  function generatePostStatement($code_writer)
  {
  }

  function prepare()
  {
  }
}
?>