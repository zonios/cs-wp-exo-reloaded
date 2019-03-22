<?php
  define('INCLUDE_DIR', get_template_directory() . "/includes");

  require_once(INCLUDE_DIR . '/enqueue-scripts.php');
  require_once(INCLUDE_DIR . '/menu.php');
  require_once(INCLUDE_DIR . '/theme-setup.php');
  require_once(INCLUDE_DIR . '/customize.php');
  require_once(INCLUDE_DIR . '/sidebars.php');

  require_once(INCLUDE_DIR . '/custom-css.php');

  require_once('plugins/plugins.php');
?>