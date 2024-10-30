<?php

/**
 * Testimonial Quote Module
 * setup necessary to get it working.
 *
 * @class LHHeroSection
 */
class LHHeroSection extends FLBuilderModule
{

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct([
            'name' => __('Hero Section', 'lh'),
            'description' => __('This is for Hero Section Module', 'lh'),
            'category' => __('Lemon Hive Modules', 'lh'),
            'dir' => LH_MODULE_DIR . 'modules/lh-hero-section/',
            'url' => LH_MODULE_URL . 'modules/lh-hero-section/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
        ]);

        /**
         * Use these methods to enqueue css and js already
         * Already registered
         */
        $this->add_css('swiper-css');
        $this->add_css('bootstrap');
        $this->add_js('swiper-js');
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('LHHeroSection', [
    'general' => [ // Tab
        'title' => __('General', 'lh'), // Tab title
        'sections' => [ // Tab section
            'general' => [ // Section
                'title' => __('Content', 'lh'), // Section title
                'fields' => [ // Section fields
                    'lh_banner_type' => [
                        'type' => 'select',
                        'label' => __('Hero Banner Type', 'lh'),
                        'default' => 'slider',
                        'options' => [
                            'slider' => __('Slider', 'lh'),
                            'normal' => __('Normal', 'lh'),
                        ]
                    ],
                    'lh_hero_slides' => [
                        'type' => 'form',
                        'label' => __('Hero Section', 'lh'),
                        'form' => 'lh_section_slider',
                        'multiple' => true
                    ],
                ],
            ],
        ],
    ],
    'options' => [
        'title' => __('Options', 'lh'),
        'sections' => [
            'general' => [
                'title' => __('Options', 'lh'),
                'fields' => [
                    'lh_dots' => [
                        'type' => 'select',
                        'label' => __('Show Dots?', 'lh'),
                        'default' => 'true',
                        'options' => [
                            'true' => __('Yes', 'lh'),
                            'false' => __('No', 'lh'),
                        ]
                    ],
                    'lh_arrows' => [
                        'type' => 'select',
                        'label' => __('Show Arrows?', 'lh'),
                        'default' => 'false',
                        'options' => [
                            'true' => __('Yes', 'lh'),
                            'false' => __('No', 'lh'),
                        ]
                    ],
                    'lh_autoplay' => [
                        'type' => 'select',
                        'label' => __('Autoplay?', 'lh'),
                        'default' => 'true',
                        'options' => [
                            'true' => __('Yes', 'lh'),
                            'false' => __('No', 'lh'),
                        ]
                    ],
                    'lh_autoplay_speed' => [
                        'type' => 'text',
                        'label' => __('Autoplay Speed', 'lh'),
                        'default' => '3000',
                    ],
                    'lh_dots_color' => [
                        'type' => 'color',
                        'label' => __('Slide Dots Color', 'lh'),
                        'show_reset'    => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-hero-section-slider .swiper-pagination-bullet',
                            'property' => 'background-color'
                        ]
                    ],
                    'lh_dots_active_color' => [
                        'type' => 'color',
                        'label' => __('Slide Active Dots Color', 'lh'),
                        'show_reset'    => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-hero-section-slider .swiper-pagination-bullet-active',
                            'property' => 'background-color'
                        ]
                    ],
                ],
            ],
        ],
    ],
    'style' => [
        'title' => __('Style', 'lh'),
        'sections' => [
            'general' => [
                'title' => __('Style', 'lh'),
                'fields' => [
                    'lh_hero_content_overlay_color' => [
                        'type' => 'color',
                        'label' => __('Hero Content Overlay Color', 'lh'),
                        'show_reset'    => true,
                        'show_alpha'    => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-hero-item-bg:before',
                            'property' => 'background'
                        ]
                    ],
                    'padding_hero_content' => [
                        'type' => 'dimension',
                        'label' => __('Padding Content', 'lh'),
                        'responsive' => true,
                        'units' => ['px'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-hero-content',
                            'property' => 'padding',
                            'unit' => 'px',
                        ],
                    ],
                    'lh_hero_title_color' => [
                        'type' => 'color',
                        'label' => __('Hero Title Color', 'lh'),
                        'show_reset'    => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-hero-content .lh-hero-title h1',
                            'property' => 'color'
                        ]
                    ],
                    'lh_hero_title_typography' => [
                        'type' => 'typography',
                        'label' => __('Hero Title Typography', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-hero-content .lh-hero-title h1',
                        ],
                        'responsive' => true
                    ],
                    'lh_hero_desc_color' => [
                        'type' => 'color',
                        'label' => __('Hero Description Color', 'lh'),
                        'show_reset'    => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-hero-content p.lh-hero-desc',
                            'property' => 'color'
                        ]
                    ],
                    'lh_hero_desc_typography' => [
                        'type' => 'typography',
                        'label' => __('Hero Description Typography', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-hero-content p.lh-hero-desc',
                        ],
                        'responsive' => true
                    ],
                    'lh_hero_btn_bg_color' => [
                        'type' => 'color',
                        'label' => __('Hero Button Background Color', 'lh'),
                        'show_reset'    => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-hero-content-bottom a.lh-hero-btn',
                            'property' => 'background-color'
                        ]
                    ],
                    'lh_hero_btn_color' => [
                        'type' => 'color',
                        'label' => __('Hero Button Background Color', 'lh'),
                        'show_reset'    => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-hero-content-bottom a.lh-hero-btn',
                            'property' => 'color'
                        ]
                    ],
                    'lh_hero_btn_bg_hover_color' => [
                        'type' => 'color',
                        'label' => __('Hero Button Background Hover Color', 'lh'),
                        'show_reset'    => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-hero-content-bottom a.lh-hero-btn:hover',
                            'property' => 'background-color'
                        ]
                    ],
                    'lh_hero_btn_hover_color' => [
                        'type' => 'color',
                        'label' => __('Hero Button Background Hover Color', 'lh'),
                        'show_reset'    => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-hero-content-bottom a.lh-hero-btn:hover',
                            'property' => 'color'
                        ]
                    ],
                    'lh_hero_btn_typography' => [
                        'type' => 'typography',
                        'label' => __('Hero Button Typography', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-hero-content-bottom a.lh-hero-btn',
                        ],
                        'responsive' => true
                    ],
                ],
            ],
        ],
    ],
]);

/**
 * Register the module and its form settings.
 */
FLBuilder::register_settings_form('lh_section_slider', [
    'title' => __('Hero Slide', 'lh'),
    'tabs' => [
        'general' => [
            'title' => __('General', 'lh'),
            'sections' => [
                'general' => [
                    'title' => '',
                    'fields' => [
                        'hero_slide_bg' => [
                            'type'          => 'photo',
                            'label'         => __('Hero Background', 'lh'),
                            'default' => '',
                        ],
                        'hero_slide_heading' => [
                            'type' => 'text',
                            'label' => __('Hero Slide Heading', 'lh'),
                            'placeholder' => __('Inside of every problem lies an opportunity', 'lh'),
                            'default' => __('Inside of every problem lies an opportunity', 'lh'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.lh-hero-title h1',
                            ],
                        ],
                        'hero_slide_desc' => [
                            'type' => 'textarea',
                            'label' => __('Hero Slide Description', 'lh'),
                            'placeholder' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. In donec facilisis justo, eget. Posuere morbi pellentesque velit morbi purus eget sit congue et. Fames elementum, tempus cursus lacinia aliquet tellus at.', 'lh'),
                            'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. In donec facilisis justo, eget. Posuere morbi pellentesque velit morbi purus eget sit congue et. Fames elementum, tempus cursus lacinia aliquet tellus at.', 'lh'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.lh-hero-desc p',
                            ],
                        ],
                        'hero_slide_btn_txt' => [
                            'type' => 'text',
                            'label' => __('Hero Button Text', 'lh'),
                            'default' => __('get started', 'lh'),
                            'preview' => [
                                'type' => 'none',
                                'selector' => '.lh-hero-btn',
                            ],
                        ],
                        'hero_slide_btn_url' => [
                            'type' => 'link',
                            'label' => __('Hero Button Link', 'lh'),
                            'preview' => [
                                'type' => 'none',
                                'selector' => '.lh-hero-btn',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
]);




