<?php

  require_once(get_template_directory() . '/includes/enqueue-scripts.php');

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


  function ajout_personnalisation_about($wp_customize){
    $wp_customize->add_panel('panel-about',[
      'title' => __('Section modif about'),
      'description'=> __('Personnalitaion du la partie aboute')
    ]);

    $wp_customize->add_section('about-section-text',[
      'panel' => 'panel-about',
      'title' => __('Personnalisation du texte'),
      'description' => __('Personnalisez le texte')
    ]);

    $wp_customize->add_setting('about-text',[
      'type' => 'theme_mod',
      'sanitize_callbalck' => 'sanitize_textarea_field'
    ]);

    $wp_customize->add_control('about-text-control',[
      'section' => 'about-section-text',
      'settings' => 'about-text',
      'label' => __('Texte au about'),
      'description' => __('Personnalisez le texte de la section about'),
      'type' =>  'textarea'
    ]);
  }
  add_action('customize_register', 'ajout_personnalisation_about');
?>