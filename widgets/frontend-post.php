<?php
namespace djFrontendPost\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */



class Frontend_Post extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'dj-frontend-post';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Frontend Post', 'dj-frontend-post' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-form-horizontal';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general-elements' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'dj-frontend-post' ];
	}









	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {


// CONTENT SECTION HERE
			require __DIR__ . '/inc/content.php';


	$this->end_controls_section();

	// STYLE SECTION - LABEL

	require __DIR__ . '/inc/style-label.php';

		$this->end_controls_section();

		require __DIR__ . '/inc/style-placeholder.php';

		$this->end_controls_section();

		require __DIR__ . '/inc/style-forms.php';

		$this->end_controls_section();

		require __DIR__ . '/inc/style-button.php';

		$this->end_controls_section();

		require __DIR__ . '/inc/style-tinymce.php';

		$this->end_controls_section();

		require __DIR__ . '/inc/logged-out-html.php';



	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings();
		$title_color = $this->get_settings( 'title_color' );
		$label_title = $this->get_settings( 'post_title_label' );
		$label_content = $this->get_settings( 'post_content_label' );
		$placeholder_title = $this->get_settings( 'post_title_placeholder' );
		$placeholder_content = $this->get_settings( 'post_content_placeholder' );
		$submit_button = $this->get_settings( 'post_submit_button' );
		$align_labels = $this->get_settings( 'post_label_align' );
		$align_placeholders = $this->get_settings( 'post_placeholder_align' );
		$my_option = get_option( 'my_option' );
		$tiny_label = $this->get_settings( 'tinymce_label' );
		$html_logged_out = $this->get_settings('html_logged_out');


		if ( is_user_logged_in() ) {

		echo '<div class="title-bro">';

		if ( 'yes' == $settings['show_labels'] ) {
    echo '<p class="input-label">' . $label_title .  ' </p>';
}
		echo ' <input type="text" name="el-fr-post-title" id="el-fr-post-title" class="el-fr-post-title global-class" placeholder="' . $placeholder_title . ' "required>';


		if ( 'yes' == $settings['show_labels'] ) {
		echo '<p class="input-label content-label">' . $label_content .  ' </p>';


}

echo ' <textarea rows="7" cols="60" name="el-fr-post-content" id="el-fr-post-content" class="el-fr-post-content global-class" placeholder="' . $placeholder_content . ' "required></textarea>';

		if ( 'yes' == $settings['tinymce_on_off'] ) {

			if ( 'yes' == $settings['show_labels'] ) {

 echo '<p class="input-label">' . $tiny_label .  ' </p>';
}
			wp_editor( $my_option , 'el-fr-post-content-wp', array(
					'wpautop'       => true,
					'media_buttons' => true,
					'textarea_name' => 'el-fr-post-tiny',
					'editor_class'  => 'el-fr-post-tiny',
					'textarea_rows' => '',
			) );

			?> <style> .el-fr-post-content { display: none;} .content-label { display: none;} </style> <?php

}

		echo '<button name="el-fr-post-submit" id="el-fr-post-submit" class="el-fr-post-submit" ><span>' . $submit_button . '</span></button>';
		echo '</div>';
	} else {

		echo $html_logged_out;

		return $content;

	}

		$settings = $this->get_settings();
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template() {
		?>
		<div class="custom-wrapper">
			<# if ( 'yes' === settings.show_labels ) { #>
    <p class="input-label">{{{ settings.post_title_label }}}</p>

<# } #>

<input type="text" name="el-fr-post-title" id="el-fr-post-title" class="el-fr-post-title global-class" placeholder="{{{ settings.post_title_placeholder }}}" required>
<# if ( 'yes' === settings.show_labels ) { #>
<p class="input-label content-label">{{{ settings.post_content_label }}}</p>
<# } #>

<textarea rows="7" cols="60" name="el-fr-post-content" id="el-fr-post-content" class="el-fr-post-content global-class" placeholder="{{{ settings.post_content_placeholder }}}"required></textarea>

<# if ( 'yes' === settings.tinymce_on_off ) { #>

	<# if ( 'yes' === settings.show_labels ) { #>

<p class="input-label">{{{settings.tinymce_label}}}</p>

<# } #>

<?php
wp_editor( $my_option , 'el-fr-post-content-wp', array(
		'wpautop'       => true,
		'media_buttons' => true,
		'textarea_name' => 'el-fr-post-tiny',
		'editor_class'  => 'el-fr-post-tiny',
		'textarea_rows' => '',
) );
?>

<style> .el-fr-post-content { display: none;} .content-label { display: none;} </style>
<# } #>


<button name="el-fr-post-submit" id="el-fr-post-submit" class="el-fr-post-submit" ><span>{{{ settings.post_submit_button }}}</span></button>

{{{ settings.html_logged_out}}}
		</div>


		<?php
	}
}