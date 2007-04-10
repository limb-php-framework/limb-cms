<?php
/**
 * Limb Web Application Framework
 *
 * @link http://limb-project.com
 *
 * @copyright  Copyright &copy; 2004-2007 BIT
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 * @version    $Id: lmbConfTools.class.php 5549 2007-04-06 07:59:52Z pachanga $
 * @package    log
 */
lmb_require('limb/toolkit/src/lmbAbstractTools.class.php');
lmb_require('limb/log/src/lmbLog.class.php');
lmb_require('limb/log/src/lmbLogFileWriter.class.php');

class lmbLogTools extends lmbAbstractTools
{
  protected $log;

  function setLog($log)
  {
    $this->log = $log;
  }

  function getLog()
  {
    if($this->log)
      return $this->log;

    $this->log = new lmbLog();

    if(defined('LIMB_VAR_DIR'))
      $this->log->registerWriter(new lmbLogFileWriter(LIMB_VAR_DIR . '/log/'));

    return $this->log;
  }
}
?>
