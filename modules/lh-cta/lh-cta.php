<?php

/**
 * Call to action Module
 * setup necessary to get it working.
 *
 * @class LHCTA
 */
class LHCTA extends FLBuilderModule
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
            'name' => __('Call to action', 'lh'),
            'description' => __('This is for Call to action Module ', 'lh'),
            'category' => __('Lemon Hive Modules', 'lh'),
            'dir' => LH_MODULE_DIR . 'modules/lh-cta/',
            'url' => LH_MODULE_URL . 'modules/lh-cta/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
        ]);
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('LHCTA', [
    'general' => [ // Tab
        'title' => __('General', 'lh'), // Tab title
        'sections' => [ // Tab section
            'general' => [  // Section
                'title' => __('Content', 'lh'), // Section title
                'fields' => [ // Section fields
                    'lh_cta_icon' => [
                        'type' => 'icon',
                        'label' => __('Select Icon', 'lh'),
                        'default' => 'fas fa-arrow-right',
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.lh-cta-btn'
                        ]
                    ],
                    'lh_cta_content' => [
                        'type' => 'textarea',
                        'label' => __('CTA Text', 'lh'),
                        'placeholder' => __('CTA Content', 'lh'),
                        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare mi non amet.', 'lh',
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.lh-cta-text p'
                        ]
                    ],
                    'lh_cta_link' => [
                        'type' => 'link',
                        'label' => __('CTA Link URL', 'lh'),
                        'placeholder' => __('https://google.com', 'lh'),
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.lh-cta-btn a'
                        ]
                    ],
                    'lh_cta_link_text' => [
                        'type' => 'textarea',
                        'label' => __('CTA Link Text', 'lh'),
                        'default' => "View Details",
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.lh-cta-btn a'
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
                'title' => __('Content', 'lh'),
                'fields' => [
                    'lh_cta_bg' => [
                        'type' => 'color',
                        'label' => __('CTA Background', 'lh'),
                        'default' => 'F8931F',
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-cta-section',
                            'property' => 'background-color',
                        ],
                    ],
                    'lh_cta_padding' => [
                        'type' => 'dimension',
                        'label' => __('CTA Padding', 'lh'),
                        'default' => '30',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-cta-section',
                            'property' => 'padding',
                        ],
                    ],
                    'lh_cta_content_color' => [
                        'type' => 'color',
                        'label' => __('CTA Text Color', 'lh'),
                        'responsive' => true,
                        'default' => 'ffffff',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-cta-text p',
                            'property' => 'color',
                        ],
                    ],
                    'lh_cta_content_typography' => [
                        'type' => 'typography',
                        'label' => __('CTA Text Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-cta-text p'
                        ],
                    ],
                    'lh_cta_btn_color' => [
                        'type' => 'color',
                        'label' => __('CTA Button Text Color', 'lh'),
                        'responsive' => true,
                        'default' => 'ffffff',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-cta-btn a',
                            'property' => 'color',
                        ],
                    ],
                    'lh_cta_btn_color_h' => [
                        'type' => 'color',
                        'label' => __('CTA Button Text Hover Color', 'lh'),
                        'responsive' => true,
                        'default' => 'ffffff',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-cta-btn a:hover',
                            'property' => 'color',
                        ],
                    ],
                    'lh_cta_btn_typography' => [
                        'type' => 'typography',
                        'label' => __('CTA Button Text Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-cta-btn a'
                        ],
                    ],
                    'lh_cta_btn_bg' => [
                        'type' => 'color',
                        'label' => __('CTA Button Background Color', 'lh'),
                        'responsive' => true,
                        'show_reset'    => true,
                        'show_alpha'    => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-cta-btn a',
                            'property' => 'background-color',
                        ],
                    ],
                    'lh_cta_btn_bg_h' => [
                        'type' => 'color',
                        'label' => __('CTA Button Hover Background Color', 'lh'),
                        'responsive' => true,
                        'default' => '283849',
                        'show_reset'    => true,
                        'show_alpha'    => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-cta-btn a:hover',
                            'property' => 'background-color',
                        ],
                    ],
                    'lh_cta_btn_padding' => [
                        'type' => 'dimension',
                        'label' => __('CTA Button Padding', 'lh'),
                        'default' => '30',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-cta-btn a',
                            'property' => 'padding',
                        ],
                    ],
                ],
            ],
        ],

    ],
]);