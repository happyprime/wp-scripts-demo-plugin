<?php
/*
Plugin Name: WP Scripts Demo Plugin
Plugin URI: https://github.com/happyprime/wp-scripts-demo-plugin
Description: A demo plugin that starts with the wp-scripts package and builds its way up
Author: Happy Prime, jeremyfelt
Version: 0.0.1
Author URI: https://happyprime.co
*/

/**
 * Enqueue scripts.
 */
function wp_scripts_demo_scripts() {
    wp_enqueue_script(
        'wp-scripts-demo-blocks',
        get_theme_file_uri( '/build/index.js' ),
        array(
            'wp-blocks',
        ),
        '0.0.1',
        true
    );
}
add_action( 'enqueue_block_editor_assets', 'wp_scripts_demo_scripts' );
