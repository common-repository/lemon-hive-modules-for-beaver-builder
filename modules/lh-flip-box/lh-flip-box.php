<?php

/**
 * Flip Box Module
 * setup necessary to get it working.
 *
 * @class LHFlipBox
 */
class LHFlipBox extends FLBuilderModule
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
            'name' => __('Flip Box', 'lh'),
            'description' => __('This is for Flip Box Module', 'lh'),
            'category' => __('Lemon Hive Modules', 'lh'),
            'dir' => LH_MODULE_DIR . 'modules/lh-flip-box/',
            'url' => LH_MODULE_URL . 'modules/lh-flip-box/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
        ]);
        $this->add_css('font-awesome');
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('LHFlipBox', [ // Tab title
    'general' => [ // Tab Sections
        'title' => __('General', 'lh'), // Section
        'sections' => [ // Section Title
            'general' => [ // Section
                'title' => __('Content', 'lh'), // Section Title
                'fields' => [ // Section Fields
                    'lh_flip_box_image' => [
                        'type' => 'photo',
                        'label' => __('Flip Box Image', 'lh'),
                        'default' => __('', 'lh'),
                        'preview' => [
                            'type' => 'none',
                        ],
                    ],
                    'lh_flip_box_back_title' => [
                        'type' => 'textarea',
                        'label' => __('Flip Box Back Text Title', 'lh'),
                        'placeholder' => __('Title Text', 'lh'),
                        'default' => __('Fames dignissim ut hac', 'lh'),
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.lh-dual-heading span.heading-two'
                        ],
                        'connections' => ['string']
                    ],
                    'lh_flip_box_back_desc' => [
                        'type' => 'textarea',
                        'label' => __('Flip Box Back Text Sub Title', 'lh'),
                        'placeholder' => __('Description Text', 'lh'),
                        'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque, consectetur aliquam amet integer augue morbi volutpat.', 'lh'),
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.lh-dual-heading span.heading-two'
                        ],
                        'connections' => ['string']
                    ],
                    'lh_flipbox_link' => [
                        'type' => 'link',
                        'label' => __('Flip Box Link URL', 'lh'),
                        'placeholder' => __('https://google.com', 'lh'),
                        'preview' => [
                            'type' => 'text',
                            'selector' => 'a.lh-flipbox-readmore-btn'
                        ]
                    ],
                    'lh_flipbox_link_text' => [
                        'type' => 'text',
                        'label' => __('Flipbox Link Button Text', 'lh'),
                        'default' => "view details",
                        'preview' => [
                            'type' => 'text',
                            'selector' => 'a.lh-flipbox-readmore-btn'
                        ]
                    ],
                    'btn_icon' => [
                        'type' => 'icon',
                        'label' => __( 'Icon', 'kcm' ),
                        'default' => 'fas fa-arrow-right',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-flipbox-readmore-btn span',
                            'property' => 'icon'
                        ],
                        'show_remove'   => true,
                    ],
                ],
            ],
        ],

    ],
    'style' => [
        'title' => __('Style', 'lh'),
        'sections' => [
            'general' => [
                'title' => __('Content', 'lh'),
                'fields' => [
                    'flip_box_height' => [
                        'type' => 'unit',
                        'label' => __('Flip Box Height', 'lh'),
                        'units' => ['px', 'vw', '%'],
                        'default_unit' => 'px',
                        'default' => '410',
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.flip-box',
                            'property' => 'height',
                        ]
                    ],
                    'f_bg_color' => [
                        'type' => 'color',
                        'connections' => ['color'],
                        'label' => __('Front Background Color', 'lh'),
                        'responsive' => true,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'background-color',
                            'selector' => '.flip-box-front'
                        ],
                    ],
                    'b_bg_color' => [
                        'type' => 'color',
                        'connections' => ['color'],
                        'label' => __('Back Background Color', 'lh'),
                        'responsive' => true,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'background-color',
                            'selector' => '.flip-box-back'
                        ],
                    ],
                    'b_title_typography' => [
                        'type' => 'typography',
                        'label' => __('Back Title Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-flip-box-content h2'
                        ],
                    ],
                    'b_title_color' => [
                        'type' => 'color',
                        'label' => __('Back Title Color', 'lh'),
                        'responsive' => true,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'color',
                            'selector' => '.lh-flip-box-content h2'
                        ],
                    ],
                    'b_desc_typography' => [
                        'type' => 'typography',
                        'label' => __('Back Description Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-flip-box-content p'
                        ],
                    ],
                    'b_desc_color' => [
                        'type' => 'color',
                        'label' => __('Back Description Color', 'lh'),
                        'responsive' => true,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'color',
                            'selector' => '.lh-flip-box-content p'
                        ],
                    ],
                    'btn_typography' => [
                        'type' => 'typography',
                        'label' => __('Button Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => 'a.lh-flipbox-readmore-btn'
                        ],
                    ],
                    'btn_color' => [
                        'type' => 'color',
                        'label' => __('Button Color', 'lh'),
                        'responsive' => true,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'color',
                            'selector' => 'a.lh-flipbox-readmore-btn'
                        ],
                    ],
                    'btn_h_color' => [
                        'type' => 'color',
                        'label' => __('Button Color', 'lh'),
                        'responsive' => true,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'color',
                            'selector' => 'a.lh-flipbox-readmore-btn:hover'
                        ],
                    ],
                ],
            ],
        ],

    ],
]);