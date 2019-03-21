<?php
add_action('wp_head', function() {
    echo '
    <style> 
    .test {
      color:' . get_theme_mod('color-h1') . ';
      background-color:'. get_theme_mod('color-h1') .  ';
    } 
    </style>';
  });