<?php
/**
 * Limb Web Application Framework
 *
 * @link http://limb-project.com
 *
 * @copyright  Copyright &copy; 2004-2007 BIT
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 * @version    $Id: lmbDebugPrintDispatcher.class.php 4995 2007-02-08 15:36:14Z pachanga $
 * @package    log
 */

class lmbLogEchoWriter
{
  function write($entry)
  {
    echo $entry->toString();
  }
}

?>
