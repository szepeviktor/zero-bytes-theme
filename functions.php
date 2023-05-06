<?php

// convert -size 1200x900 xc:transparent screenshot.png

// Remove theme_support features
add_action('after_setup_theme', static function () {
    remove_theme_support('core-block-patterns');
    remove_theme_support('widgets-block-editor');
});
// Remove default filters
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
// Disable emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_resource_hints', 2);
// Disable global styles
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_enqueue_scripts', 'wp_common_block_scripts_and_styles');
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
