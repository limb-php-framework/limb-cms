<?php
$conf = array(
  'cache_dir' => lmb_env_get('LIMB_VAR_DIR') . '/cache/macro/',
  /**
   * Force to scan directories for tags, filters and properties (very slow)
   */
  'forcescan' => false,
  /**
   * Force every template to be re-compiled on every request.
   * Option is used for debugging templates when developing template generation code.
   */
  'forcecompile'   => true, 
  'tpl_scan_dirs'  => array('template', 'limb/web_app/template', 'limb-cms/*/template'),
  'tags_scan_dirs' => array('src/macro', 'limb/*/src/macro','limb/macro/src/tags', 'limb-cms/*/src/macro/'),
  'filters_scan_dirs' => array('src/macro','limb/*/src/macro', 'limb/macro/src/filters', 'limb-cms/*/src/macro'),
);