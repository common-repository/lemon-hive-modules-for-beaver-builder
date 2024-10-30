<?php

/**
 * Services Module
 * setup necessary to get it working.
 *
 * @class LHServices
 */
class LHServices extends FLBuilderModule
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
            'name' => __('Services', 'lh'),
            'description' => __('Lemon hive services', 'lh'),
            'category' => __('Lemon Hive Modules', 'lh'),
            'dir' => LH_MODULE_DIR . 'modules/lh-services/',
            'url' => LH_MODULE_URL . 'modules/lh-services/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
        ]);
      $this->add_css( 'bootstrap' );
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('LHServices', [
    'general' => [ // Tab
        'title' => __('General', 'lh'), // Tab title
        'sections' => [ // Tab section
            'general' => [  // Section
                'title' => __('Content', 'lh'), // Section title
                'fields' => [ // Section fields
                    'lh_service_items' => [
                        'type' => 'form',
                        'label' => __('Service', 'lh'),
                        'form' => 'lh_services_form',
                        'preview_text' => 'label',
                        'multiple' => true,
                    ],
                    'lh_service_column' => [
                      'type'          => 'select',
                      'label'         => __( 'Select Column', 'lh' ),
                      'default'       => 'option-1',
                      'options'       => [
                        'col-lg-6 col-md-6 col-sm-12'      => __( 'Column-02', 'lh' ),
                        'col-lg-4 col-md-6 col-sm-12'      => __( 'Column-03', 'lh' )
                        ],
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
                    'lh_s_title_color' => [
                        'type' => 'color',
                        'label' => __('Service Title Text Color', 'lh'),
                        'responsive' => true,
                        'default' => '283849',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-content h4',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_title_color_h' => [
                        'type' => 'color',
                        'label' => __('Service Title Text Hover Color', 'lh'),
                        'responsive' => true,
                        'default' => 'ffffff',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-single-item:hover .lh-service-content h4',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_title_typography' => [
                        'type' => 'typography',
                        'label' => __('Service Title Text Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-content h4'
                        ],
                    ],
                    'lh_s_desc_color' => [
                        'type' => 'color',
                        'label' => __('Service Description Text Color', 'lh'),
                        'responsive' => true,
                        'default' => '304254',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-content p',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_desc_color_h' => [
                        'type' => 'color',
                        'label' => __('Service Description Text Hover Color', 'lh'),
                        'responsive' => true,
                        'default' => 'FFFFFF',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-single-item:hover .lh-service-content p',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_desc_typography' => [
                        'type' => 'typography',
                        'label' => __('Service Description Text Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-content p'
                        ],
                    ],
                    'lh_s_icon_font_color' => [
                        'type' => 'color',
                        'label' => __('Icon Color', 'lh'),
                        'default' => 'F8931F',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-icon-circle i',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_icon_font_color_h' => [
                        'type' => 'color',
                        'label' => __('Icon Hover Color', 'lh'),
                        'default' => 'FFFFFF',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-single-item:hover .lh-service-icon-circle i',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_icon_font_size' => [
                        'type' => 'unit',
                        'label' => __('Icon Size', 'lh'),
                        'default' => '40',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-icon-circle i',
                            'property' => 'font-size',
                            'unit' => 'px',
                        ],
                    ],
                    'lh_s_btn_color' => [
                        'type' => 'color',
                        'label' => __('Service Button Text Color', 'lh'),
                        'responsive' => true,
                        'default' => 'F8931F',
                        'preview' => [
                            'type' => 'css',
                            'selector' => 'a.lh-service-more-btn',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_btn_color_h' => [
                        'type' => 'color',
                        'label' => __('Service Button Text Hover Color', 'lh'),
                        'responsive' => true,
                        'default' => 'FFFFFF',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-single-item:hover a.lh-service-more-btn',
                            'property' => 'color',
                        ],
                    ],
                    'lh_s_btn_typography' => [
                        'type' => 'typography',
                        'label' => __('Service Button Text Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => 'a.lh-service-more-btn'
                        ],
                    ],
                    'lh_service_b_color' => [
                        'type' => 'color',
                        'label' => __('Service Border Color', 'lh'),
                        'responsive' => true,
                        'default' => 'E4E6F5',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-single-item',
                            'property' => 'border-color',
                        ],
                    ],
                    'lh_service_b_color_h' => [
                        'type' => 'color',
                        'label' => __('Service Border Hover Color', 'lh'),
                        'responsive' => true,
                        'default' => 'F8931F',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-single-item:hover',
                            'property' => 'border-color',
                        ],
                    ],
                    'lh_service_padding' => [
                        'type' => 'dimension',
                        'label' => __('Service Single Item', 'lh'),
                        'default' => '30',
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-single-item',
                            'property' => 'padding',
                        ],
                    ],
                    'lh_service_bg' => [
                        'type' => 'color',
                        'label' => __('Service Single Item Background Color', 'lh'),
                        'default' => 'FFFFFF',
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-single-item',
                            'property' => 'background-color',
                        ],
                    ],
                    'lh_service_bg_h' => [
                        'type' => 'color',
                        'label' => __('Service Single Item Background Hover Color', 'lh'),
                        'default' => 'F8931F',
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-service-single-item:hover',
                            'property' => 'background-color',
                        ],
                    ],
                ],
            ],
        ],

    ],
]);

/**
 * Register the module and its form settings.
 */
FLBuilder::register_settings_form('lh_services_form', [
    'title' => __('Add service', 'lh'),
    'tabs' => [
        'general' => [
            'title' => __('General', 'lh'),
            'sections' => [
                'general' => [
                    'title' => '',
                    'fields' => [
                        'lh_service_icon' => [
                            'type' => 'icon',
                            'label' => __('Select Icon', 'lh'),
                            'default' => 'fas fa-blog',
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.lh-service-icon-circle i'
                            ]
                        ],
                        'lh_service_title' => [
                            'type' => 'textarea',
                            'label' => __('Title', 'lh'),
                            'placeholder' => __('Web Services', 'lh'),
                            'default' => __('Web Services', 'lh'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.lh-service-single-item h4'
                            ]
                        ],
                        'lh_service_content' => [
                            'type' => 'editor',
                            'label' => __('Web Services Short Description', 'lh'),
                            'placeholder' => __('Web services short description', 'lh'),
                            'default' => __('Web services short description', 'lh'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.lh-service-single-item p'
                            ]
                        ],
                        'lh_service_link' => [
                            'type' => 'link',
                            'label' => __('Service Link URL', 'lh'),
                            'placeholder' => __('https://google.com', 'lh'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => 'a.lh-service-more-btn'
                            ]
                        ],
                        'lh_service_link_text' => [
                            'type' => 'textarea',
                            'label' => __('Service Link Button Text', 'lh'),
                            'default' => "View details",
                            'preview' => [
                                'type' => 'text',
                                'selector' => 'a.lh-service-more-btn'
                            ]
                        ],
                        'lh_service_view_icon' => [
                            'type' => 'icon',
                            'label' => __('View More Icon', 'lh'),
                            'default' => 'fas fa-arrow-right',
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.lh-service-icon-circle i'
                            ]
                        ],
                    ],
                ],
            ],
        ],
    ],
]);