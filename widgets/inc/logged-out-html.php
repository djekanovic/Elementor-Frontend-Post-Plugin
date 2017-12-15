<?php
use Elementor\Controls_Manager;



		$this->start_controls_section(
			'Logged Out',
			[
				'label' => __( 'Logged Out Users Content', 'dj-frontend-post' ),
			]
		);
		$this->add_control(
			'html_logged_out',
			[
				'label' => __('Enter your Custom Code or Elementor Library Shortcode', 'dj-frontend-post'),
				'type' => Controls_Manager::CODE,
				'default' => '',
        'language' => 'html',
				'placeholder' => __( 'Enter your Custom Code or Elementor Library Shortcode', 'dj-frontend-post' ),
				'show_label' => true,

			]
		);
