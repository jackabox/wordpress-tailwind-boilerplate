<?php

/**
 * Load an inline SVG.
 *
 * @param string $filename The filename of the SVG you want to load.
 * @return string The content of the SVG you want to load.
 */
function inline_svg($filename)
{
  $svg_path = '/assets/svgs/';

  // Check the SVG file exists & load it
  if (file_exists(get_stylesheet_directory() .  $svg_path . $filename)) {
    return file_get_contents(get_stylesheet_directory_uri() . $svg_path . $filename);
  }

  return '';
}
