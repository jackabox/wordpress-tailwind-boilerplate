<?php

/**
 * declare any widgets
 *
 * @return void
 */
function jackabox_widgets_init()
{
  register_sidebar([
    'name'          => __('Main sidebar', 'jackabox'),
    'id'            => 'sidebar-main',
    'description'   => __('Appears to the right side of most posts and pages.', 'jackabox'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ]);
}

add_action('widgets_init', 'jackabox_widgets_init');
