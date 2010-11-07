<?php
/*
 * Limb PHP Framework
 *
 * @link http://limb-project.com
 * @copyright  Copyright &copy; 2004-2012 BIT(http://bit-creative.com)
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 */

/**
 * @package cms-core
 */
require_once('limb/core/common.inc.php');

lmb_env_setor('LIMB_CONTROLLERS_INCLUDE_PATH', 'src/controller;limb-cms/core/src/controller;limb/web_app/src/controller');

lmb_package_require('web_app');
lmb_require('limb-cms/core/toolkit.inc.php');

lmb_env_setor('CMS_STATIC_FILES_VERSION', '1');

lmb_package_register('cms', dirname(__FILE__));

function lmb_cms_load_packages($packages_dir)
{  
  $cms_packages = lmb_glob($packages_dir.'/*');
  foreach ($cms_packages as $cms_package)
  {
    lmb_env_set('LIMB_CMS_PACKAGES_DIR', realpath(dirname($cms_package)));
    if(is_dir($cms_package))
      lmb_package_require(basename($cms_package), $packages_dir);
  }
}

function lmb_cms_get_loaded_packages()
{
  if(!lmb_env_has('LIMB_CMS_PACKAGES_DIR'))
    throw new lmbCmsException('Packages not inited. Use lmb_cms_load_packages().');
  return array_keys(lmb_packages_list(lmb_env_get('LIMB_CMS_PACKAGES_DIR')));
}