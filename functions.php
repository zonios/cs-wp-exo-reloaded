<?php
  function ajout_css_js(){
    wp_enqueue_style('fontawesome', get_template_directory_uri() . "/vendor/fontawesome-free/css/all.min.css");
    wp_enqueue_style('merriweather-sans',"https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700");
    wp_enqueue_style('merriweather',"https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic");
    wp_enqueue_style('magnific-pop', get_template_directory_uri() . "/vendor/magnific-popup/magnific-popup.css");
    wp_enqueue_style('creative-css', get_template_directory_uri() . "/css/creative.min.css");

    wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', [], null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', [], null, true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', [], null, true );
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', [], null, true);
    wp_enqueue_script('creative-js', get_template_directory_uri() . '/js/creative.min.js', [], null, true);
  }
  
  add_action('wp_enqueue_scripts','ajout_css_js');

  function register_main_menu(){
    register_nav_menu('main-menu', 'Menu principal dans le header.');
  }
  add_action('after_setup_theme', 'register_main_menu');
  
  /** pour les classes des "li" **/
  function ajout_classes_li($classes, $item, $args) {
    if($args->theme_location == 'main-menu') {
      $classes[] = 'px-1 mx-1';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'ajout_classes_li', 1, 3);
  //pour les ul c'est "nav_menu"
  // function ajout_menu_a_class($atts, $item, $args){
  //   if($args->theme_location == 'main-menu'){
  //     $atts['class'] = 'nav-link p-3 mx-2 js-scroll-trigger';
  //     return $atts;
  //   }
  // }

  // Ajout d'un écouteur d'événement de type filtre qui nous permet de changer les attributs des balises <a>
  // les add_action et add_filter peuvent avoit jusqu'à 4 paramêtre. Le 3ème pour l'ordre d'execution et le 4 ème pour le nombre de parammètre qui seront passer à la fonction callback
  
  // add_filter('nav_menu_link_attributes', 'ajout_menu_a_class', 10, 3);

  function ajout_image_article()
  {
    //Ajout de la fonctionnalité d'ajout d'image pour les posts pour ce thème ci
    add_theme_support('post-thumbnails');
    $test = 0;
  }
  // Ajout d'un écouteur d'événement pour activer les images mise en avant pour les post (article)
  add_action('after_setup_theme', 'ajout_image_article');
?>