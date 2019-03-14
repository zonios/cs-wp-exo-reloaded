<?php
  class MgCustomize{
    public static function ajout_personnalisation_about($wp_customize){
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
  }
  add_action('customize_register', [MgCustomize::class ,'ajout_personnalisation_about']);
?>