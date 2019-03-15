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
    public static function ajout_perso_color_h1($wp_customize){
      $wp_customize->add_panel('panel-color-h1',[
        'title' => __('Section color h1'),
        'description' => __('"color h1" -_- y a quoi de dur ?')
      ]);
      $wp_customize->add_section('section-h1-color',[
        'panel' => 'panel-color-h1',
        'title' => __('Perso de la color du h1'),
        'description' => __('Perso de h1')
      ]);
      $wp_customize->add_setting('color-h1',[
        'type' => 'theme_mod'
      ]);
      $wp_customize->add_control( 
        new WP_Customize_Color_Control( 
          $wp_customize, 
          'color-h1', 
          [
            'label'      => __( 'Header Color'),
            'section'    => 'section-h1-color',
            'settings'   => 'color-h1',
          ] 
        ) 
      );
    }
  }
  add_action('customize_register', [MgCustomize::class ,'ajout_personnalisation_about']);
  add_action('customize_register', [MgCustomize::class ,'ajout_perso_color_h1']);
?>