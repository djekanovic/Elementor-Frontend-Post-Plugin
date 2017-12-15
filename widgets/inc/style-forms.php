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



$this->start_controls_tabs( 'form_tabs_style' );
    $this->start_controls_tab(
      'form_tab_normal',
      [
        'label' => __( 'Normal', 'dj-frontend-post' ),
      ]
    );
    $this->add_control(
    'form_value_text_padding',
    [
      'label' => __( 'Value Text Padding', 'dj-frontend-post' ),
      'type' => Controls_Manager::DIMENSIONS,
      'size_units' => [ 'px', 'em', '%' ],
      'selectors' => [
        '{{WRAPPER}} .global-class ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
      ],
      'separator' => 'before',
    ]
    );

    $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name' => 'typography_value',
            'label' => __( 'Typography', 'dj-frontend-post-modal-button' ),
            'selector' => '{{WRAPPER}} .global-class',
        ]
    );

    $this->add_control(
      'form_value_text_color',
      [
        'label' => __( 'Value Text Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'default' => '',
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_2,
        ],
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
          'value' => Scheme_Color::COLOR_1,
        ],
        'selectors' => [
          '{{WRAPPER}} .global-class' => 'background-color: {{VALUE}};',
        ],
      ]
    );


    $this->add_responsive_control(
        'form_responsive_space_between',
        [
            'label' => __( 'Space Between', 'dj-frontend-post' ),
            'type' => Controls_Manager::SLIDER,
            'default' => [
                'size' => 10,
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
            'size_units' => [ 'px', '%' ],
            'selectors' => [
                '{{WRAPPER}} .global-class' => 'margin:{{SIZE}}{{UNIT}} 0{{UNIT}};',
            ],
        ]
    );



    $this->add_responsive_control(
        'form_title_height',
        [
            'label' => __( 'Post Title Height', 'dj-frontend-post' ),
            'type' => Controls_Manager::SLIDER,
            'default' => [
                'size' => 50,
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
            'size_units' => [ 'px', '%' ],
            'selectors' => [
                '{{WRAPPER}} .el-fr-post-title' => 'height:{{SIZE}}{{UNIT}};',
            ],
        ]
    );



    $this->add_responsive_control(
        'form_content_height',
        [
            'label' => __( 'Post Content Height', 'dj-frontend-post' ),
            'type' => Controls_Manager::SLIDER,
            'default' => [
                'size' => 300,

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
            'size_units' => [ 'px', '%' ],
            'selectors' => [
                '{{WRAPPER}} .el-fr-post-content' => 'height:{{SIZE}}{{UNIT}};',
            ],
            'condition' => [
              'tinymce_on_off' => '',
            ],
        ]
    );



    $this->add_responsive_control(
        'form_submit_height',
        [
            'label' => __( 'Submit Height', 'dj-frontend-post' ),
            'type' => Controls_Manager::SLIDER,
            'default' => [
                'size' => 100,
                'unit' => '%'

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
            'size_units' => [ 'px', '%' ],
            'selectors' => [
                '{{WRAPPER}} .el-fr-post-submit' => 'height:{{SIZE}}{{UNIT}};',
            ],
        ]
    );

    $this->add_control(
      'form_responsive_submit_height',
      [
        'label' => __( 'View', 'dj-frontend-post' ),
        'type' => Controls_Manager::HIDDEN,
        'default' => 'traditional',
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
      'form_value_focus_text_color',
      [
        'label' => __( 'Value Text Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'default' => '',
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_4,
        ],
        'selectors' => [
          '{{WRAPPER}} .global-class:focus' => 'color: {{VALUE}} !important;',
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
