<?php
/**
 * Plugin Name: Elementor Frontend Post
 * Description: Enable Publishing Post's for Logged In users from Frontend via API. Hidden for logged-out users, And custom HTML or Elementor Template Shortcode for Them.
 * Version:     1.0
 * Author:      Djekanovic
 * Author URI:  https://djekanovic.com/
 * Text Domain: dj-frontend-post
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define( 'DJ_FRONTEND_POST', __FILE__ );

/**
 * Load Hello World
 *
 * Load the plugin after Elementor (and other plugins) are loaded.
 *
 * @since 1.0.0
 */
function dj_frontend_post_load() {

	// Load localization file
	load_plugin_textdomain( 'dj-frontend-post' );

	// Notice if the Elementor is not active
	if ( ! did_action( 'elementor/loaded' ) ) {
		add_action( 'admin_notices', 'dj_frontend_post_fail_load' );
		return;
	}

	// Check required version
	$elementor_version_required = '1.8.0';
	if ( ! version_compare( ELEMENTOR_VERSION, $elementor_version_required, '>=' ) ) {
		add_action( 'admin_notices', 'dj_frontend_post_fail_load_out_of_date' );
		return;
	}

	// Require the main plugin file
	require( __DIR__ . '/plugin.php' );
}
add_action( 'plugins_loaded', 'dj_frontend_post_load' );


function dj_frontend_post_fail_load_out_of_date() {
	if ( ! current_user_can( 'update_plugins' ) ) {
		return;
	}

	$file_path = 'elementor/elementor.php';

	$upgrade_link = wp_nonce_url( self_admin_url( 'update.php?action=upgrade-plugin&plugin=' ) . $file_path, 'upgrade-plugin_' . $file_path );
	$message = '<p>' . __( 'Elementor Frontend Post is not working because you are using an old version of Elementor.', 'dj-frontend-post' ) . '</p>';
	$message .= '<p>' . sprintf( '<a href="%s" class="button-primary">%s</a>', $upgrade_link, __( 'Update Elementor Now', 'dj-frontend-post' ) ) . '</p>';

	echo '<div class="error">' . $message . '</div>';
}



/**
 * Setup JavaScript
 */
add_action( 'wp_enqueue_scripts', function() {

	//load script
	wp_enqueue_script( 'my-post-submitter', plugin_dir_url( __FILE__ ) . './assets/js/ajax.js', array( 'jquery' ) );
	// wp_enqueue_script( 'tiny-backend', plugin_dir_url( __FILE__ ) . './assets/js/tiny-backend.js', array( 'jquery' ) );
	wp_enqueue_script( 'tinymce_js', includes_url( 'js/tinymce/' ) . 'wp-tinymce.php', array( 'jquery' ), false, true );


	//localize data for script
	wp_localize_script( 'my-post-submitter', 'POST_SUBMITTER', array(
			'root' => esc_url_raw( rest_url() ),
			'nonce' => wp_create_nonce( 'wp_rest' ),
			'success' => __( 'Thanks for your submission!', 'dj-frontend-post' ),
			'failure' => __( 'Your submission could not be processed.', 'dj-frontend-post' ),
			'current_user_id' => get_current_user_id()
		)
	);

});


// Add custom styles to TinyMCE editor
if ( ! function_exists('tdav_css') ) {
    function tdav_css($wp) {
        $wp .= ',' .  content_url() . '/uploads/elementor/css/post-4.css, /uploads/elementor/css/post-6.css';
        return $wp;
    }
}
add_filter( 'mce_css', 'tdav_css' );
