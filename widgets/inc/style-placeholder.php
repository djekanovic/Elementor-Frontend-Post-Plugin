<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

$this->start_controls_section(
  'placeholder_style',
  [
    'label' => __( 'Placeholder Style', 'dj-frontend-post' ),
    'tab' => Controls_Manager::TAB_STYLE,
  ]
);


$this->add_control(
'more_options_placeholder',
[
    'label' => __( 'Placeholder Style', 'dj-frontend-post' ),
    'type' => Controls_Manager::HEADING,
    'separator' => 'before',
]
);


$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'placeholder_typography',
        'label' => __( 'Typography', 'dj-frontend-post' ),
        'selector' => '{{WRAPPER}} .global-class::placeholder',
    ]
);


$this->add_control(
'placeholder_text_padding',
[
  'label' => __( 'Text Padding', 'dj-frontend-post' ),
  'type' => Controls_Manager::DIMENSIONS,
  'size_units' => [ 'px', 'em', '%' ],
  'selectors' => [
    '{{WRAPPER}} .global-class::placeholder ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
  ],
  'separator' => 'before',
]
);

$this->start_controls_tabs( 'placeholder_tabs_button_style' );
    $this->start_controls_tab(
      'tab_button_normal',
      [
        'label' => __( 'Normal', 'dj-frontend-post' ),
      ]
    );
    $this->add_control(
      'button_text_color',
      [
        'label' => __( 'Text Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_2,
        ],
        'default' => '',
        'selectors' => [
          '{{WRAPPER}} .global-class::placeholder' => 'color: {{VALUE}};',
        ],
      ]
    );


    $this->end_controls_tab();
    $this->start_controls_tab(
      'tab_button_hover',
      [
        'label' => __( 'On Focus', 'dj-frontend-post' ),
      ]
    );
    $this->add_control(
      'hover_color',
      [
        'label' => __( 'Text Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .global-class:focus::placeholder' => 'color: {{VALUE}};',
        ],
      ]
    );
    $this->add_control(
      'button_background_hover_color',
      [
        'label' => __( 'Background Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .global-class:focus::placeholder' => 'background-color: {{VALUE}};',
        ],
      ]
    );
    $this->add_control(
      'button_hover_border_color',
      [
        'label' => __( 'Border Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'condition' => [
          'border_border!' => '',
        ],
        'selectors' => [
          '{{WRAPPER}} .global-class:focus::placeholder' => 'border-color: {{VALUE}};',
        ],
      ]
    );


    $this->end_controls_tab();
    $this->end_controls_tabs();

    $this->add_group_control(
Group_Control_Border::get_type(),
[
  'name' => 'placeholder_border',
  'label' => __( 'Border', 'dj-frontend-post' ),
  'placeholder' => '1px',
  'default' => '1px',
  'selector' => '{{WRAPPER}} .global-class::placeholder',
  'separator' => 'before',
]
);
$this->add_control(
'placeholder_border_radius',
[
  'label' => __( 'Border Radius', 'dj-frontend-post' ),
  'type' => Controls_Manager::DIMENSIONS,
  'size_units' => [ 'px', '%' ],
  'selectors' => [
    '{{WRAPPER}} .global-class::placeholder' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
  ],
]
);
$this->add_group_control(
Group_Control_Box_Shadow::get_type(),
[
  'name' => 'placeholder_box_shadow',
  'selector' => '{{WRAPPER}} .global-class::placeholder',
]
);
