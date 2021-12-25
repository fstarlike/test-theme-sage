<?php

namespace Roots\Hamkaran\Customizer;

use Roots\Hamkaran\Assets;

/**
 * Add postMeshamkaran support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMeshamkaran';
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('hamkaran/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');
