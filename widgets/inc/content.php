
<?php
use Elementor\Controls_Manager;

$this->start_controls_section(
  'section_content',
  [
    'label' => __( 'Form', 'dj-frontend-post' ),
  ]
);


$this->add_control(
  'show_labels',
  [
    'label' => __( 'Show Label', 'dj-frontend-post' ),
    'type' => Controls_Manager::SWITCHER,
    'default' => 'label_on',
    'label_on' => __( 'Yes', 'dj-frontend-post' ),
    'label_off' => __( 'No', 'dj-frontend-post' ),
    'return_value' => 'yes',
  ]
);




$this->add_control(
'align_more_options',
[
    'label' => __( 'Align Options', 'dj-frontend-post' ),
    'type' => Controls_Manager::HEADING,
    'separator' => 'before',
]
);



$this->add_responsive_control(
      'align_label',
      [
        'label' => __( 'Label Alignment', 'dj-frontend-post' ),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
          'left' => [
            'title' => __( 'Left', 'dj-frontend-post' ),
            'icon' => 'fa fa-align-left',
          ],
          'center' => [
            'title' => __( 'Center', 'dj-frontend-post' ),
            'icon' => 'fa fa-align-center',
          ],
          'right' => [
            'title' => __( 'Right', 'dj-frontend-post' ),
            'icon' => 'fa fa-align-right',
          ],
          'justify' => [
            'title' => __( 'Justified', 'dj-frontend-post' ),
            'icon' => 'fa fa-align-justify',
          ],
        ],
        'selectors' => [
          '{{WRAPPER}} .input-label' => 'text-align: {{VALUE}} !important;',
        ],
      ]
    );




      $this->add_responsive_control(
      			'align_placeholder',
      			[
      				'label' => __( 'Placeholder Alignment', 'dj-frontend-post' ),
      				'type' => Controls_Manager::CHOOSE,
      				'options' => [
      					'left' => [
      						'title' => __( 'Left', 'dj-frontend-post' ),
      						'icon' => 'fa fa-align-left',
      					],
      					'center' => [
      						'title' => __( 'Center', 'dj-frontend-post' ),
      						'icon' => 'fa fa-align-center',
      					],
      					'right' => [
      						'title' => __( 'Right', 'dj-frontend-post' ),
      						'icon' => 'fa fa-align-right',
      					],
      					'justify' => [
      						'title' => __( 'Justified', 'dj-frontend-post' ),
      						'icon' => 'fa fa-align-justify',
      					],
      				],
      				'selectors' => [
      					'{{WRAPPER}} .global-class::placeholder' => 'text-align: {{VALUE}};',
      				],
      			]
      		);

          $this->end_controls_section();
          $this->start_controls_section(
            'section_post_title_content',
            [
              'label' => __( 'Post Title', 'dj-frontend-post' ),
            ]
          );

$this->add_control(
'title_more_options',
[
    'label' => __( 'Post Title Options', 'dj-frontend-post' ),
    'type' => Controls_Manager::HEADING,
    'separator' => 'before',
]
);

$this->add_control(
  'post_title_label',
  [
    'label' => __( 'Title Label', 'dj-frontend-post' ),
    'type' => Controls_Manager::TEXT,
    'default' => 'Title'
  ]
);

$this->add_control(
  'post_title_placeholder',
  [
    'label' => __( 'Title Placeholder', 'dj-frontend-post' ),
    'type' => Controls_Manager::TEXT,
    'default' => 'Your Post Title'
  ]
);


$this->add_responsive_control(
'width_title',
[
    'label' => __( 'Title Width', 'dj-frontend-post' ),
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
    'size_units' => [ '%', 'px' ],
    'selectors' => [
        '{{WRAPPER}} .el-fr-post-title' => 'width: {{SIZE}}{{UNIT}};',
    ],
]
);

$this->end_controls_section();
$this->start_controls_section(
  'section_post_content',
  [
    'label' => __( 'Post Content', 'dj-frontend-post' ),
  ]
);

$this->add_control(
'content_more_options',
[
    'label' => __( 'Post Content Options', 'dj-frontend-post' ),
    'type' => Controls_Manager::HEADING,
    'separator' => 'before',

]
);

$this->add_control(
  'tinymce_on_off',
  [
    'label' => __( 'Use TinyMCE', 'dj-frontend-post' ),
    'type' => Controls_Manager::SWITCHER,
    'default' => '',
    'label_off' => __( 'no', 'dj-frontend-post' ),
    'label_on' => __( 'yes', 'dj-frontend-post' ),
    'return_value' => 'yes',
  ]
);


$this->add_control(
  'post_content_label',
  [
    'label' => __( 'Content Label', 'dj-frontend-post' ),
    'type' => Controls_Manager::TEXT,
    'default' => 'Get Creative',
    'condition' => [
      'tinymce_on_off' => '',
    ],
  ]

);

$this->add_control(
  'tinymce_label',
  [
    'label' => __( 'Tiny Label', 'dj-frontend-post' ),
    'type' => Controls_Manager::TEXT,
    'default' => 'Get Creative',
    'condition' => [
      'tinymce_on_off' => 'yes',
    ],
  ]

);

$this->add_control(
  'post_content_placeholder',
  [
    'label' => __( 'Content Placeholder', 'dj-frontend-post' ),
    'type' => Controls_Manager::TEXT,
    'default' => 'Your Post Content',
    'condition' => [
      'tinymce_on_off' => '',
    ],
  ]
);



$this->add_responsive_control(
'width_content',
[
    'label' => __( 'Content Width', 'dj-frontend-post' ),
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
    'size_units' => [ '%', 'px' ],
    'selectors' => [
        '.el-fr-post-content' => 'width: {{SIZE}}{{UNIT}};',
    ],
    'condition' => [
      'tinymce_on_off' => '',
    ],
]
);


$this->end_controls_section();
$this->start_controls_section(
  'section_post_submit',
  [
    'label' => __( 'Post Submit', 'dj-frontend-post' ),
  ]
);

$this->add_control(
  'post_submit_button',
  [
    'label' => __( 'Button Text', 'dj-frontend-post' ),
    'type' => Controls_Manager::TEXT,
    'default' => 'Submit',
    // 'capability' => 'eedit_theme_optionss'
  ]
);


$this->add_responsive_control(
'width_button',
[
    'label' => __( 'Button Width', 'dj-frontend-post' ),
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
    'size_units' => [ '%', 'px' ],
    'selectors' => [
        '{{WRAPPER}} .el-fr-post-submit' => 'width: {{SIZE}}{{UNIT}};',
    ],
]
);
