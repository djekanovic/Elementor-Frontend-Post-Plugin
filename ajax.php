<?php
/**
 Plugin Name: Post Submission Example
 */

/**
 * Output form on page "submit-post"
 */
add_filter( 'the_content', function( $content ) {
	if ( is_page( 'submit-post' ) ) {
		//only show to logged in users who can edit posts
		if ( is_user_logged_in() && current_user_can( 'edit_posts' ) ) {
			ob_start();?>
			
			
			
			
			
		<?php 	echo do_shortcode( '[elementor-template id="298"]' );?>
			
			
			
			<form id="post-submission-form">
				<div>
					<label for="post-submission-title">
						<?php _e( 'Title', 'your-text-domain' ); ?>
					</label>
					<input type="text" name="post-submission-title" id="post-submission-title" required aria-required="true">
				</div>
				<div>
					<label for="post-submission-excerpt">
						<?php _e( 'Excerpt', 'your-text-domain' ); ?>
					</label>
					<textarea rows="2" cols="20" name="post-submission-excerpt" id="post-submission-excerpt" required aria-required="true"></textarea>
				</div>
				<div>
					<label for="post-submission-content">
						<?php _e( 'Content', 'your-text-domain' ); ?>
					</label>
					<textarea rows="10" cols="20" name="post-submission-content" id="post-submission-content"></textarea>
				</div>
				<input type="submit" value="<?php esc_attr_e( 'Submit', 'your-text-domain'); ?>">
			</form>
			<?php
			$content .= ob_get_clean();
		}else{
			$content .=  sprintf( '<a href="%1s">%2s</a>', esc_url( wp_login_url() ), __( 'Click Here To Login', 'your-text-domain' ) );
		}
	}

	return $content;
});


/**
 * Setup JavaScript
 */
add_action( 'wp_enqueue_scripts', function() {

	//load script
	wp_enqueue_script( 'my-post-submitter', plugin_dir_url( __FILE__ ) . 'post-submitter.js', array( 'jquery' ) );

	//localize data for script
	wp_localize_script( 'my-post-submitter', 'POST_SUBMITTER', array(
			'root' => esc_url_raw( rest_url() ),
			'nonce' => wp_create_nonce( 'wp_rest' ),
			'success' => __( 'Thanks for your submission!', 'your-text-domain' ),
			'failure' => __( 'Your submission could not be processed.', 'your-text-domain' ),
			'current_user_id' => get_current_user_id()
		)
	);

});
