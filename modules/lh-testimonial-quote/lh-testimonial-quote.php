<?php

/**
 * Testimonial Quote Module
 * setup necessary to get it working.
 *
 * @class LHTestimonialQuote
 */
class LHTestimonialQuote extends FLBuilderModule
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
            'name' => __('Testimonial Quote', 'lh'),
            'description' => __('This is for Testimonial Quote Module', 'lh'),
            'category' => __('Lemon Hive Modules', 'lh'),
            'dir' => LH_MODULE_DIR . 'modules/lh-testimonial-quote/',
            'url' => LH_MODULE_URL . 'modules/lh-testimonial-quote/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
        ]);

        /**
         * Use these methods to enqueue css and js already
         * Already registered
         */
        $this->add_css('slick');
        $this->add_js('slick');
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('LHTestimonialQuote', [
    'general' => [ // Tab
        'title' => __('General', 'lh'), // Tab title
        'sections' => [ // Tab section
            'general' => [ // Section
                'title' => __('Content', 'lh'), // Section title
                'fields' => [ // Section fields
                    'lh_testimonial_slides' => [
                        'type' => 'form',
                        'label' => __('Testimonial', 'lh'),
                        'form' => 'lh_testimonial_slider',
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
                    'lh_slide_to_show' => [
                        'type' => 'text',
                        'label' => __('Slide To Show', 'lh'),
                        'default' => '2',
                    ],
                    'lh_slide_to_scroll' => [
                        'type' => 'text',
                        'label' => __('Slide To Scroll', 'lh'),
                        'default' => '1',
                    ],
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
                    'lh_speed' => [
                        'type' => 'text',
                        'label' => __('Speed', 'lh'),
                        'default' => '2000',
                    ],
                    'lh_dots_color' => [
                        'type' => 'color',
                        'label' => __('Slide Dots Color', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-testimonial-quotes button',
                            'property' => 'color'
                        ]
                    ],
                    'lh_dots_active_color' => [
                        'type' => 'color',
                        'label' => __('Slide Active Dots Color', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-testimonial-quotes li.slick-active button',
                            'property' => 'color'
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
                    'lh_box_item_bg' => [
                        'type' => 'color',
                        'label' => __('Testimonial Box Background', 'lh'),
                        'default' => 'FFFFFF',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-testimonial-item .lh-testimonial-content',
                            'property' => 'background'
                        ]
                    ],
                    'lh_testimonial_padding' => [
                        'type' => 'dimension',
                        'label' => __('Content padding', 'lh'),
                        'default' => '30',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-testimonial-item .lh-testimonial-content',
                            'property' => 'padding',
                        ],
                    ],
                    'lh_icon_color' => [
                        'type' => 'color',
                        'label' => __('Icon Color', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-testimonial-content .lh-testimonial-icon i',
                            'property' => 'color'
                        ]
                    ],
                    'lh_icon_font_size' => [
                        'type' => 'unit',
                        'label' => __('Icon Size', 'lh'),
                        'default' => '24',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-testimonial-content .lh-testimonial-icon i',
                            'property' => 'font-size',
                            'unit' => 'px',
                        ],
                    ],
                    'lh_desc_color' => [
                        'type' => 'color',
                        'label' => __('Testimonial Description Text Color', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-testimonial-item .testimonial-description',
                            'property' => 'color'
                        ]
                    ],
                    'lh_desc_typography' => [
                        'type' => 'typography',
                        'label' => __('Testimonial Description Text Typography', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-testimonial-item .testimonial-description',
                        ],
                        'responsive' => true
                    ],
                    'lh_name_color' => [
                        'type' => 'color',
                        'label' => __('Name Text Color', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.testimonial-meta .testimonial-meta-name',
                            'property' => 'color'
                        ]
                    ],
                    'lh_name_typography' => [
                        'type' => 'typography',
                        'label' => __('Name Text Typography', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.testimonial-meta .testimonial-meta-name',
                        ],
                        'responsive' => true
                    ],
                    'lh_post_color' => [
                        'type' => 'color',
                        'label' => __('Title Text Color', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.testimonial-meta .testimonial-meta-post',
                            'property' => 'color'
                        ]
                    ],
                    'lh_post_typography' => [
                        'type' => 'typography',
                        'label' => __('Title Text Typography', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.testimonial-meta .testimonial-meta-post',
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
FLBuilder::register_settings_form('lh_testimonial_slider', [
    'title' => __('Stack Slide', 'lh'),
    'tabs' => [
        'general' => [
            'title' => __('General', 'lh'),
            'sections' => [
                'general' => [
                    'title' => '',
                    'fields' => [
                        'lh_t_icon' => [
                            'type' => 'icon',
                            'label' => __('Quote Icon', 'lh'),
                            'default' => 'fa fa-star',
                            'preview' => [
                                'type' => 'none',
                            ],
                        ],
                        'lh_star' => [
                            'type' => 'select',
                            'label' => __('Show Stars', 'lh'),
                            'default' => '5',
                            'options' => [
                                '1' => __('1', 'lh'),
                                '2' => __('2', 'lh'),
                                '3' => __('3', 'lh'),
                                '4' => __('4', 'lh'),
                                '5' => __('5', 'lh'),
                            ]
                        ],
                        'lh_t_desc' => [
                            'type' => 'textarea',
                            'label' => __('Testimonial Description', 'lh'),
                            'placeholder' => __('Testimonial description', 'lh'),
                            'default' => 'Feugiat donec tempor ac mauris pulvinar aliquam in aliquam. Id at urna, elementum nunc libero. Sit nunc, neque viverra ac felis cursus amet in quis.',
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.lh-tech-title h3',
                            ],
                        ],
                        'lh_t_name' => [
                            'type' => 'textarea',
                            'label' => __('Name', 'lh'),
                            'placeholder' => __('Name', 'lh'),
                            'default' => 'John doe',
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.lh-tech-title h3',
                            ],
                        ],
                        'lh_t_title' => [
                            'type' => 'textarea',
                            'label' => __('Designation', 'lh'),
                            'placeholder' => __('Designation', 'lh'),
                            'default' => 'UI/UX Designer',
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.lh-tech-title h3',
                            ],
                        ],                        
                        'lh_t_photo' => [
                            'type' => 'photo',
                            'label' => __('Customer Photo', 'lh'),
                            'show_remove'   => true,
                        ],
                    ],
                ],
            ],
        ],
    ],
]);




