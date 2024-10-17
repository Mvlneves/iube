<?php

function iube_load() {
  wp_register_script('iube-script', get_template_directory_uri() . '/assets/js/scripts.js',array( 'jquery' ), '1.0.1', true );
  wp_enqueue_script('iube-script');

  wp_register_style('iube-style', get_template_directory_uri() . '/style.css', [], '1.0.0', false);
  wp_enqueue_style('iube-style');
  }
  add_action('wp_enqueue_scripts', 'iube_load');


  ?>