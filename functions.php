<?php
  define('INCLUDE_DIR', get_template_directory() . "/includes");

  require_once(INCLUDE_DIR . '/enqueue-scripts.php');
  require_once(INCLUDE_DIR . '/menu.php');
  require_once(INCLUDE_DIR . '/theme-setup.php');
  require_once(INCLUDE_DIR . '/customize.php');

  // add_action('wp_head', function() {
  //   echo '<style> * {color:' . get_theme_mod('color-h1','#000000') . ';} </style>';
  // });
?>