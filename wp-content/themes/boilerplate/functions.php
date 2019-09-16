<?php

require_once(get_stylesheet_directory() . '/includes/cleanup.php');
require_once(get_stylesheet_directory() . '/includes/images.php');
require_once(get_stylesheet_directory() . '/includes/svg.php');
require_once(get_stylesheet_directory() . '/includes/custom-post-types.php');
require_once(get_stylesheet_directory() . '/includes/widgets.php');
require_once(get_stylesheet_directory() . '/includes/woocommerce.php');

/**
 * basic setup
 *
 * @return void
 */
function jackabox_setup()
{
  // Menus
  register_nav_menu('header', __('Header menu', 'jackabox'));
  register_nav_menu('footer', __('Footer menu', 'jackabox'));
}

/** Random string so we can cache css */
function str_random($length = 16)
{
  $string = '';
  while (($len = strlen($string)) < $length) {
    $size = $length - $len;
    $bytes = random_bytes($size);
    $string .= substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $size);
  }
  return $string;
}

/**
 * enqueue assets
 */
function jacakbox_enqueue_assets()
{
  $cache_version = str_random(8);
  wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/app.css'), false, $cache_version);
  wp_enqueue_script('theme-scripts', get_theme_file_uri('/assets/js/app.js'), false, $cache_version);
}

add_action('after_setup_theme', 'jackabox_setup');
add_action('wp_enqueue_scripts', 'jacakbox_enqueue_assets');
