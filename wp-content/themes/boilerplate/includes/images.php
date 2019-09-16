<?php

/**
 * Add image sizes
 */
function jackabox_add_image_sizes()
{
  // Images
  add_image_size('sm', 360, 9999);
  add_image_size('md', 560, 9999);
  add_image_size('lg', 768, 9999);
  add_image_size('xl', 960, 9999);
  add_image_size('xxl', 1200, 9999);
  add_image_size('sup', 1500, 9999);
}

/**
 * Set Image Size Names
 */
function jackabox_custom_image_size_names($sizes)
{
  return array_merge($sizes, [
    'sm' => __('Small'),
    'md' => __('Medium'),
    'lg' => __('Large'),
    'xl' => __('Extra Large'),
    'xxl' => __('2x Extra Large'),
    'sup' => __('Super Large'),
  ]);
}

/**
 * responsive image
 */
function responsive_image($post_id)
{
  $image_id = get_post_thumbnail_id($post_id);
  $img_src = wp_get_attachment_image_url($image_id, 'xxl');
  $img_srcset = wp_get_attachment_image_srcset($image_id, 'sup');
  $img_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

  return sprintf('<img src="%s" srcset="%s" sizes="100vw" alt="%s">', [
    esc_attr($img_src),
    esc_attr($img_srcset),
    $img_alt
  ]);
}

add_action('after_setup_theme', 'jackabox_add_image_sizes');
add_filter('image_size_names_choose', 'jackabox_custom_image_size_names');
