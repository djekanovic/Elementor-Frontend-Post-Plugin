<?php


use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

$this->start_controls_section(
  'form_style',
  [
    'label' => __( 'Form Style', 'dj-frontend-post' ),
    'tab' => Controls_Manager::TAB_STYLE,
  ]
);


$this->add_control(
'form_more_options',
[
    'label' => __( 'Form Style', 'dj-frontend-post' ),
    'type' => Controls_Manager::HEADING,
    'separator' => 'before',
]
);


$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'form_typography',
        'label' => __( 'Typography', 'dj-frontend-post' ),
        'selector' => '{{WRAPPER}} .global-class',
    ]
);


$this->add_control(
'form_text_padding',
[
  'label' => __( 'Text Padding', 'dj-frontend-post' ),
  'type' => Controls_Manager::DIMENSIONS,
  'size_units' => [ 'px', 'em', '%' ],
  'selectors' => [
    '{{WRAPPER}} .global-class ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
  ],
  'separator' => 'before',
]
);

$this->start_controls_tabs( 'form_tabs_style' );
    $this->start_controls_tab(
      'form_tab_normal',
      [
        'label' => __( 'Normal', 'dj-frontend-post' ),
      ]
    );
    $this->add_control(
      'form_text_color',
      [
        'label' => __( 'Text Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'default' => '',
        'selectors' => [
          '{{WRAPPER}} .global-class' => 'color: {{VALUE}};',
        ],
      ]
    );
    $this->add_control(
      'form_background_color',
      [
        'label' => __( 'Background Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_4,
        ],
        'selectors' => [
          '{{WRAPPER}} .global-class' => 'background-color: {{VALUE}};',
        ],
      ]
    );
    $this->end_controls_tab();
    $this->start_controls_tab(
      'form_tab_hover',
      [
        'label' => __( 'On Focus', 'dj-frontend-post' ),
      ]
    );
    $this->add_control(
      'form_hover_color',
      [
        'label' => __( 'Text Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .global-class:focus' => 'color: {{VALUE}};',
        ],
      ]
    );
    $this->add_control(
      'form_background_hover_color',
      [
        'label' => __( 'Background Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .global-class:focus' => 'background-color: {{VALUE}};',
        ],
      ]
    );
    $this->add_control(
      'form_hover_border_color',
      [
        'label' => __( 'Border Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'condition' => [
          'form_border_border!' => 'form_border',
        ],
        'selectors' => [
          '{{WRAPPER}} .global-class:focus' => 'border-color: {{VALUE}};',
        ],
      ]
    );


    $this->end_controls_tab();
    $this->end_controls_tabs();

    $this->add_group_control(
Group_Control_Border::get_type(),
[
  'name' => 'form_border',
  'label' => __( 'Border', 'dj-frontend-post' ),
  'placeholder' => '1px',
  'default' => '1px',
  'selector' => '{{WRAPPER}} .global-class',
  'separator' => 'before',
]
);
$this->add_control(
'form_border_radius',
[
  'label' => __( 'Border Radius', 'dj-frontend-post' ),
  'type' => Controls_Manager::DIMENSIONS,
  'size_units' => [ 'px', '%' ],
  'selectors' => [
    '{{WRAPPER}} .global-class' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
  ],
]
);
$this->add_group_control(
Group_Control_Box_Shadow::get_type(),
[
  'name' => 'form_box_shadow',
  'selector' => '{{WRAPPER}} .global-class',
]
);
