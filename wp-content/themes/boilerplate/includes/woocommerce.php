<?php

function jackabox_wrapper_start()
{
  echo '<section id="main">';
}

function jackabox_wrapper_end()
{
  echo '</section>';
}

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'jackabox_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'jackabox_wrapper_end', 10);

// Remove all of the default CSS
add_filter('woocommerce_enqueue_styles', '__return_empty_array');
