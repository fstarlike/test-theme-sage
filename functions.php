<?php
/**
 * Hamkaran includes
 *
 * The $hamkaran_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/hamkaran/pull/1042
 */
$hamkaran_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/post-types/init.php', // Post Types Init
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

add_action( 'after_setup_theme', 'hamkaran_crb_load' );
function hamkaran_crb_load() {
    require_once( __DIR__ . '/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}


foreach ($hamkaran_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'hamkaran'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
