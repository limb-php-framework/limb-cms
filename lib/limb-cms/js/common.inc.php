<?php
/*
 * Limb PHP Framework
 *
 * @link http://limb-project.com
 * @copyright  Copyright &copy; 2004-2012 BIT(http://bit-creative.com)
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 */

/**
 * @package js
 */
require_once('limb/core/common.inc.php');
lmb_package_require('fs');
lmb_package_require('toolkit');

lmb_env_setor('JQUERY_FILE_URL','/shared/js/js/jquery/v1.2.3.js');

lmb_package_register('js', dirname(__FILE__));
