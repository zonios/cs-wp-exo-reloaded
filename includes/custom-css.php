<?php
add_action('wp_head', function() {
    echo '
    <style> * {color:' . get_theme_mod('color-h1','#000000') . ';
      background-color:'. get_theme_mod('color-h1','#000000') .  ';
    } 
    
    </style>';
  });