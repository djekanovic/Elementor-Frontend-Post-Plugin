<?php


use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

$this->start_controls_section(
  'style',
  [
    'label' => __( 'Button Style', 'dj-frontend-post' ),
    'tab' => Controls_Manager::TAB_STYLE,
  ]
);


$this->add_control(
'more_options',
[
    'label' => __( 'Button Style', 'dj-frontend-post' ),
    'type' => Controls_Manager::HEADING,
    'separator' => 'before',
]
);


$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'typography',
        'label' => __( 'Typography', 'dj-frontend' ),
        'selector' => '{{WRAPPER}} .el-fr-post-submit',
    ]
);


$this->add_control(
'text_padding',
[
  'label' => __( 'Text Padding', 'dj-frontend-post' ),
  'type' => Controls_Manager::DIMENSIONS,
  'size_units' => [ 'px', 'em', '%' ],
  'selectors' => [
    '{{WRAPPER}} .el-fr-post-submit ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
  ],
  'separator' => 'before',
]
);

$this->start_controls_tabs( 'tabs_style' );
    $this->start_controls_tab(
      'tab_normal',
      [
        'label' => __( 'Normal', 'dj-frontend-post' ),
      ]
    );
    $this->add_control(
      'text_color',
      [
        'label' => __( 'Text Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'default' => '',
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_3,
        ],
        'selectors' => [
          '{{WRAPPER}} .el-fr-post-submit' => 'color: {{VALUE}};',
        ],
      ]
    );
    $this->add_control(
      'background_color',
      [
        'label' => __( 'Background Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_4,
        ],
        'selectors' => [
          '{{WRAPPER}} .el-fr-post-submit' => 'background-color: {{VALUE}};',
        ],
      ]
    );
    $this->end_controls_tab();
    $this->start_controls_tab(
      'tab_hover',
      [
        'label' => __( 'On Focus', 'dj-frontend-post' ),
      ]
    );
    $this->add_control(
      'text_submit_hover_color',
      [
        'label' => __( 'Text Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'default' => '',
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_4,
        ],
        'selectors' => [
          '{{WRAPPER}} .el-fr-post-submit:hover' => 'color: {{VALUE}};',
        ],
      ]
    );


    $this->add_control(
      'background_hover_color',
      [
        'label' => __( 'Background Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_3,
        ],
        'selectors' => [
          '{{WRAPPER}} .el-fr-post-submit:hover' => 'background-color: {{VALUE}};',
        ],
      ]
    );
    $this->add_control(
      'hover_border_color',
      [
        'label' => __( 'Border Color', 'dj-frontend-post' ),
        'type' => Controls_Manager::COLOR,
        'condition' => [
          'border_border!' => 'border',
        ],
        'selectors' => [
          '{{WRAPPER}} .el-fr-post-submit:hover' => 'border-color: {{VALUE}};',
        ],
      ]
    );


    $this->end_controls_tab();
    $this->end_controls_tabs();

    $this->add_group_control(
Group_Control_Border::get_type(),
[
  'name' => 'border',
  'label' => __( 'Border', 'dj-frontend-post' ),
  'placeholder' => '1px',
  'default' => '1px',
  'selector' => '{{WRAPPER}} .el-fr-post-submit',
  'separator' => 'before',
]
);
$this->add_control(
'border_radius',
[
  'label' => __( 'Border Radius', 'dj-frontend-post' ),
  'type' => Controls_Manager::DIMENSIONS,
  'size_units' => [ 'px', '%' ],
  'selectors' => [
    '{{WRAPPER}} .el-fr-post-submit' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
  ],
]
);
$this->add_group_control(
Group_Control_Box_Shadow::get_type(),
[
  'name' => 'box_shadow',
  'selector' => '{{WRAPPER}} .el-fr-post-submit',
]
);
