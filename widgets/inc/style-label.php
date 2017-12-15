<?php


use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

$this->start_controls_section(
  'label_style',
  [
    'label' => __( 'Label Style', 'dj-frontend-post' ),
    'tab' => Controls_Manager::TAB_STYLE,
  ]
);


$this->add_control(
'label_more_options',
[
    'label' => __( 'Label Style', 'dj-frontend-post' ),
    'type' => Controls_Manager::HEADING,
    'separator' => 'before',
]
);


$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'label_typography',
        'label' => __( 'Typography', 'dj-frontend-post' ),
        'selector' => '{{WRAPPER}} .input-label',
    ]
);


$this->add_control(
'label_text_padding',
[
  'label' => __( 'Text Padding', 'dj-frontend-post' ),
  'type' => Controls_Manager::DIMENSIONS,
  'size_units' => [ 'px', 'em', '%' ],
  'selectors' => [
    '{{WRAPPER}} .input-label ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
  ],
  'separator' => 'before',
]
);


$this->add_control(
'label_text_margin',
[
  'label' => __( 'Text Margin', 'dj-frontend-post' ),

  'type' => Controls_Manager::DIMENSIONS,
  'size_units' => [ 'px', 'em', '%' ],
  'selectors' => [
    '{{WRAPPER}} .input-label ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
  ],
  'separator' => 'before',
]
);

$this->start_controls_tabs( 'label_tabs_style' );
    $this->start_controls_tab(
      'label_tab_normal',
      [
        'label' => __( 'Normal', 'dj-frontend-post' ),
      ]
    );
    $this->add_control(
      'label_text_color',
      [
        'label' => __( 'Text Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_4,
        ],
        'default' => '',
        'selectors' => [
          '{{WRAPPER}} .input-label' => 'color: {{VALUE}};',
        ],
      ]
    );
    $this->add_control(
      'label_background_color',
      [
        'label' => __( 'Background Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .input-label' => 'background-color: {{VALUE}};',
        ],
      ]
    );
    $this->end_controls_tab();
    $this->start_controls_tab(
      'label_tab_hover',
      [
        'label' => __( 'On Hover', 'dj-frontend-post' ),
      ]
    );
    $this->add_control(
      'label_hover_color',
      [
        'label' => __( 'Text Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .input-label:hover' => 'color: {{VALUE}};',
        ],
      ]
    );
    $this->add_control(
      'label_background_hover_color',
      [
        'label' => __( 'Background Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .input-label:hover' => 'background-color: {{VALUE}};',
        ],
      ]
    );
    $this->add_control(
      'label_hover_border_color',
      [
        'label' => __( 'Border Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'condition' => [
          'label_border_border!' => 'label_border',
        ],
        'selectors' => [
          '{{WRAPPER}} .input-label:hover' => 'border-color: {{VALUE}};',
        ],
      ]
    );


    $this->end_controls_tab();
    $this->end_controls_tabs();

    $this->add_group_control(
Group_Control_Border::get_type(),
[
  'name' => 'label_border',
  'label' => __( 'Border', 'dj-frontend-post' ),
  'placeholder' => '1px',
  'default' => '1px',
  'selector' => '{{WRAPPER}} .input-label',
  'separator' => 'before',
]
);
$this->add_control(
'label_border_radius',
[
  'label' => __( 'Border Radius', 'dj-frontend-post' ),
  'type' => Controls_Manager::DIMENSIONS,
  'size_units' => [ 'px', '%' ],
  'selectors' => [
    '{{WRAPPER}} .input-label' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
  ],
]
);
$this->add_group_control(
Group_Control_Box_Shadow::get_type(),
[
  'name' => 'label_box_shadow',
  'selector' => '{{WRAPPER}} .input-label',
]
);
