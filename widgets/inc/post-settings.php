<?php
use Elementor\Controls_Manager;


$this->start_controls_section(
  'post_settings',
  [
    'label' => __( 'Post Settings', 'dj-frontend-post' ),
  ]
);


$this->add_control(
  'post_status',
  [
     'label' => __( 'Post Status', 'dj-frontend-post' ),
     'type' => Controls_Manager::SELECT,
     'options' => [
        'publish' => __( 'Published', 'dj-frontend-post' ),
        'draft' => __( 'Draft', 'dj-frontend-post' ),
     ],
     'default' => 'draft',
  ]
);
