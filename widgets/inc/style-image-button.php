<?php


use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

$this->start_controls_section(
  'image_button_style',
  [
    'label' => __( 'Image Button Style', 'dj-frontend-post' ),
    'tab' => Controls_Manager::TAB_STYLE,
  ]
);


$this->add_control(
'image_button_more_options',
[
    'label' => __( 'Button Style', 'dj-frontend-post' ),
    'type' => Controls_Manager::HEADING,
    'separator' => 'before',
]
);


$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'image_button_typography',
        'label' => __( 'Typography', 'dj-frontend' ),
        'selector' => '{{WRAPPER}} .frontend-button',
    ]
);


$this->add_control(
'image_button_text_padding',
[
  'label' => __( 'Text Padding', 'dj-frontend-post' ),
  'type' => Controls_Manager::DIMENSIONS,
  'size_units' => [ 'px', 'em', '%' ],
  'selectors' => [
    '{{WRAPPER}} .frontend-button ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
  ],
  'separator' => 'before',
]
);

$this->start_controls_tabs( 'image_button_tabs_style' );
    $this->start_controls_tab(
      'image_button_tab_normal',
      [
        'label' => __( 'Normal', 'dj-frontend-post' ),
      ]
    );
    $this->add_control(
      'image_button_text_color',
      [
        'label' => __( 'Text Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'default' => '',
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_3,
        ],
        'selectors' => [
          '{{WRAPPER}} .frontend-button' => 'color: {{VALUE}};',
        ],
      ]
    );
    $this->add_control(
      'image_button_background_color',
      [
        'label' => __( 'Background Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_4,
        ],
        'selectors' => [
          '{{WRAPPER}} .frontend-button' => 'background-color: {{VALUE}};',
        ],
      ]
    );
    $this->end_controls_tab();
    $this->start_controls_tab(
      'image_button_tab_hover',
      [
        'label' => __( 'On Hover', 'dj-frontend-post' ),
      ]
    );
    $this->add_control(
      'image_button_text_hover_color',
      [
        'label' => __( 'Text Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'default' => '',
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_4,
        ],
        'selectors' => [
          '{{WRAPPER}} .frontend-button:hover' => 'color: {{VALUE}};',
        ],
      ]
    );


    $this->add_control(
      'image_button_background_hover_color',
      [
        'label' => __( 'Background Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_3,
        ],
        'selectors' => [
          '{{WRAPPER}} .frontend-button:hover' => 'background-color: {{VALUE}};',
        ],
      ]
    );
    $this->add_control(
      'image_button_hover_border_color',
      [
        'label' => __( 'Border Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'condition' => [
          'border_border!' => 'border',
        ],
        'selectors' => [
          '{{WRAPPER}} .frontend-button:hover' => 'border-color: {{VALUE}};',
        ],
      ]
    );


    $this->end_controls_tab();
    $this->end_controls_tabs();



    $this->add_responsive_control(
    'image_width_button',
    [
        'label' => __( 'Button Width', 'dj-frontend-post' ),
        'type' => Controls_Manager::SLIDER,
        'default' => [
            'size' => 30,
            'unit' => '%',

        ],
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 1000,
                'step' => 5,
            ],
            '%' => [
                'min' => 0,
                'max' => 100,
            ],
        ],
        'size_units' => [ '%', 'px' ],
        'selectors' => [
            '{{WRAPPER}} .frontend-button' => 'width: {{SIZE}}{{UNIT}};',
        ],
    ]
    );



    $this->add_group_control(
Group_Control_Border::get_type(),
[
  'name' => 'image_button_border',
  'label' => __( 'Border', 'dj-frontend-post' ),
  'placeholder' => '1px',
  'default' => '1px',
  'selector' => '{{WRAPPER}} .frontend-button',
  'separator' => 'before',
]
);
$this->add_control(
'image_button_border_radius',
[
  'label' => __( 'Border Radius', 'dj-frontend-post' ),
  'type' => Controls_Manager::DIMENSIONS,
  'size_units' => [ 'px', '%' ],
  'selectors' => [
    '{{WRAPPER}} .frontend-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
  ],
]
);
$this->add_group_control(
Group_Control_Box_Shadow::get_type(),
[
  'name' => 'image_button_box_shadow',
  'selector' => '{{WRAPPER}} .frontend-button',
]
);
