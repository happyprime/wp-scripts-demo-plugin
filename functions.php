<?php
/**
 * WP Scripts Demo PHP
 *
 * @package wp-scripts-demo
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
add_action( 'admin_enqueue_scripts', 'wp_scripts_demo_scripts' );
