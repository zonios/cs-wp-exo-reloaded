<?php
  class MgThemeSetup{
    public static function ajout_image_article(){
      //Ajout de la fonctionnalité d'ajout d'image pour les posts pour ce thème ci
      add_theme_support('post-thumbnails');
      $test = 0;
    }
  }
  add_action('after_setup_theme', [MgThemeSetup::class, 'ajout_image_article']);
?>