<?php

/**
 * Disable the emojis
 */
function disable_emojis()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}

/**
 * Undocumented function
 */
function disable_emojis_tinymce($plugins)
{
  if (is_array($plugins)) {
    return array_diff($plugins, ['wpemoji']);
  } else {
    return [];
  }
}

/**
 * remove version numberd
 */
function jackabox_remove_version()
{
  return '';
}

/**
 * Remove default link to image
 */
function jackabox_imagelink_setup()
{
  $image_set = get_option('image_default_link_type');

  if ($image_set !== 'none') {
    update_option('image_default_link_type', 'none');
  }
}

add_action('init', 'disable_emojis');
add_filter('the_generator', 'jackabox_remove_version');
add_action('admin_init', 'jackabox_imagelink_setup', 10);
