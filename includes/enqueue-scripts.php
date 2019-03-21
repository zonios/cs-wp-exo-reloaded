<?php
  class Enqueue_scripts{
    public static function ajout_css_js(){
      wp_enqueue_style('fontawesome', get_template_directory_uri() . "/vendor/fontawesome-free/css/all.min.css");
      wp_enqueue_style('merriweather-sans',"https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700");
      wp_enqueue_style('merriweather',"https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic");
      wp_enqueue_style('magnific-pop', get_template_directory_uri() . "/vendor/magnific-popup/magnific-popup.css");
      wp_enqueue_style('creative-css', get_template_directory_uri() . "/css/creative.min.css");
      wp_enqueue_style('coding-theme', get_template_directory_uri() . '/css/coding-theme.css.php');

      wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', [], null, true);
      wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', [], null, true);
      wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', [], null, true );
      wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', [], null, true);
      wp_enqueue_script('creative-js', get_template_directory_uri() . '/js/creative.min.js', [], null, true);
    }
  }
  add_action('wp_enqueue_scripts',[Enqueue_scripts::class,'ajout_css_js']);
  
?>