<?php


use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

$this->start_controls_section(
  'tiny_style',
  [
    'label' => __( 'Tiny Style', 'dj-frontend-post' ),
    'tab' => Controls_Manager::TAB_STYLE,
    'condition' => [
      'tinymce_on_off' => 'yes',
    ],
  ]
);


$this->add_control(
'tiny_more_options',
[
    'label' => __( 'Tiny Style', 'dj-frontend-post' ),
    'type' => Controls_Manager::HEADING,
    'separator' => 'before',

]
);

$this->start_controls_tabs( 'tiny_tabs_style' );
    $this->start_controls_tab(
      'tiny_tab_normal',
      [
        'label' => __( 'Normal', 'dj-frontend-post' ),
      ]
    );


$this->add_control(
  'tiny_background',
  [
    'label' => __( 'Background Color', 'dj-frontend-post' ),
    'type' => Controls_Manager::COLOR,
    'scheme' => [
      'type' => Scheme_Color::get_type(),
      'value' => Scheme_Color::COLOR_1,
    ],
    'selectors' => [
      '.el-fr-post-content-wp.wp-editor, div#mceu_25-body' => 'background-color: {{VALUE}};',
    ],
  ]
);


$this->add_control(
  'tiny_icons_color',
  [
    'label' => __( 'Icons Color', 'dj-frontend-post' ),
    'type' => Controls_Manager::COLOR,
    'scheme' => [
      'type' => Scheme_Color::get_type(),
      'value' => Scheme_Color::COLOR_2,
    ],
    'selectors' => [
      '#wp-el-fr-post-content-wp-wrap .mce-ico' => 'color: {{VALUE}};',
    ],
  ]
);

$this->add_control(
  'tiny_border_color',
  [
    'label' => __( 'Border Color', 'dj-frontend-post' ),
    'type' => Controls_Manager::COLOR,
    'selectors' => [
      '#wp-el-fr-post-content-wp-wrap .mce-btn' => 'border-color: {{VALUE}};',
    ],
  ]
);

$this->add_control(
  'tiny_toolbar_border_color',
  [
    'label' => __( 'Toolbar Border Color', 'dj-frontend-post' ),
    'type' => Controls_Manager::COLOR,
    'selectors' => [
      '#wp-el-fr-post-content-wp-wrap .mce-toolbar-grp' => 'border-color: {{VALUE}};',
    ],
  ]
);



$this->add_responsive_control(
    'tiny_width',
    [
        'label' => __( 'Width', 'dj-frontend-post' ),
        'type' => Controls_Manager::SLIDER,
        'default' => [
            'size' => 100,
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
        'size_units' => [ 'px', '%' ],
        'selectors' => [
            'div#wp-el-fr-post-content-wp-wrap' => 'width:{{SIZE}}{{UNIT}};',
        ],
    ]
);

$this->add_responsive_control(
    'tiny_height',
    [
        'label' => __( 'Height', 'dj-frontend-post' ),
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
            'iframe#el-fr-post-content-wp_ifr, textarea#el-fr-post-content-wp' => 'height:{{SIZE}}{{UNIT}} !important;',
        ],
    ]
);



$this->end_controls_tab();
$this->start_controls_tab(
  'tiny_tab_hover',
  [
    'label' => __( 'On Hover', 'dj-frontend-post' ),
  ]
);

$this->add_control(
  'tiny_icons_hover_color',
  [
    'label' => __( 'Icons Hover Color', 'dj-frontend-post' ),
    'type' => Controls_Manager::COLOR,
    'scheme' => [
      'type' => Scheme_Color::get_type(),
      'value' => Scheme_Color::COLOR_1,
    ],
    'selectors' => [
      '#wp-el-fr-post-content-wp-wrap button:hover *' => 'color: {{VALUE}};',
      '#wp-el-fr-post-content-wp-wrap button:hover' => 'color: {{VALUE}};',

    ],
  ]
);

$this->add_control(
  'tiny_icons_button_hover_color',
  [
    'label' => __( 'Icons Button Hover Color', 'dj-frontend-post' ),
    'type' => Controls_Manager::COLOR,
    'scheme' => [
      'type' => Scheme_Color::get_type(),
      'value' => Scheme_Color::COLOR_2,
    ],
    'selectors' => [
      '#wp-el-fr-post-content-wp-wrap button:hover' => 'background: {{VALUE}};',
    ],
  ]
);

$this->end_controls_tab();
$this->start_controls_tab(
  'tiny_tab_active',
  [
    'label' => __( 'On Active', 'dj-frontend-post' ),
  ]
);
$this->add_control(
  'tiny_icons_active_color',
  [
    'label' => __( 'Icons Active Color', 'dj-frontend-post' ),
    'type' => Controls_Manager::COLOR,
    'selectors' => [
      '#wp-el-fr-post-content-wp-wrap .mce-active .mce-ico' => 'color: {{VALUE}};',
    ],
  ]
);

$this->add_control(
  'tiny_icons_button_active_color',
  [
    'label' => __( 'Icons Button Active Color', 'dj-frontend-post' ),
    'type' => Controls_Manager::COLOR,
    'selectors' => [
      '#wp-el-fr-post-content-wp-wrap .mce-btn.mce-active' => 'background: {{VALUE}};',
    ],
  ]
);
