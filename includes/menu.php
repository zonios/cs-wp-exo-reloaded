<?php
  class MgMenu{
    public static function register_main_menu(){
      register_nav_menu('main-menu', 'Menu principal dans le header.');
    }

    function ajout_classes_li($classes, $item, $args) {
      if($args->theme_location == 'main-menu') {
        $classes[] = 'px-1 mx-1';
      }
      return $classes;
    }
  }

  add_action('after_setup_theme', [MgMenu::class , 'register_main_menu']);
  add_filter('nav_menu_css_class', [MgMenu::class , 'ajout_classes_li'], 1, 3);
?>