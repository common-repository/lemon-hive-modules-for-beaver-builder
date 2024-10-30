<?php

/**
 * Timeline Module
 * setup necessary to get it working.
 *
 * @class LHTimeline
 */
class LHTimeline extends FLBuilderModule
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
            'name' => __('Timeline', 'lh'),
            'description' => __('This is for Timeline Module', 'lh'),
            'category' => __('Lemon Hive Modules', 'lh'),
            'dir' => LH_MODULE_DIR . 'modules/lh-timeline/',
            'url' => LH_MODULE_URL . 'modules/lh-timeline/',
            'editor_export' => true,
            'enabled' => true,
            'partial_refresh' => true,
        ]);

        /**
         * Use these methods to enqueue css and js already
         * Already registered
         */
        $this->add_css('bootstrap');
    }
}

FLBuilder::register_module('LHTimeline', [
    'general' => [ // Tab
        'title' => __('General', 'lh'), // Tab title
        'sections' => [ // Tab section
            'general' => [ // Section
                'title' => __('Content', 'lh'), // Section title
                'fields' => [ // Section fields
                    'lh_timeline' => [
                        'type' => 'form',
                        'label' => __('Timeline', 'lh'),
                        'form' => 'lh_timeline_form',
                        'preview_text' => 'label',
                        'multiple' => true,
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
                    'style_type' => [
                        'type'      => 'select',
                        'label'     => __('Style Type', 'lh'),
                        'default'   => 'timeline-justified',
                        'options'       => [
                            'timeline-normal'      => __( 'Style 1', 'lh' ),
                            'timeline-justified'      => __( 'Style 2', 'lh' ),
                        ],
                    ],
                    'lh_title_typography' => [
                        'type' => 'typography',
                        'label' => __('Title Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.timeline-content .title'
                        ],
                    ],
                    'lh_year_typography' => [
                        'type' => 'typography',
                        'label' => __('Year Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.timeline-content .timeline-year'
                        ],
                    ],
                    'lh_desc_typography' => [
                        'type' => 'typography',
                        'label' => __('Description Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.timeline-content .description'
                        ],
                    ],
                    'f_font_size' => [
                        'type' => 'unit',
                        'label' => __('Icon Size', 'lh'),
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.timeline-content .timeline-icon i',
                            'property' => 'font-size',
                            'unit' => 'px',
                        ],
                    ],
                ],
            ],
        ],

    ],
]);


/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form('lh_timeline_form', [
    'title' => __('Add Timeline', 'lh'),
    'tabs' => [
        'general' => [
            'title' => __('General', 'lh'),
            'sections' => [
                'general' => [
                    'title' => '',
                    'fields' => [
                        'lh_timeline_title' => [
                            'type' => 'text',
                            'label' => __('Title', 'lh'),
                            'connections' => ['string'],
                        ],
                        'lh_timeline_icon' => [
                            'type' => 'icon',
                            'label' => __('Select Icon', 'lh'),
                            'default' => 'fas fa-beer',
                        ],
                        'lh_timeline_year' => [
                            'type' => 'textarea',
                            'label' => __('Session', 'lh'),
                            'wpautop' => false,
                            'connections' => ['string'],
                        ],
                        'lh_timeline_link' => [
                            'type' => 'link',
                            'label' => __('URL', 'lh'),
                            'wpautop' => false,
                            'connections' => ['string'],
                        ],
                        'lh_timeline_content' => [
                            'type' => 'editor',
                            'label' => __('Descriptions', 'lh'),
                            'wpautop' => false,
                            'connections' => ['string'],
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
                        'lh_tl_bg_color' => [
                            'type' => 'color',
                            'label' => __('Timeline Background Color ', 'lh'),
                            'responsive' => true,
                            'show_reset' => true,
                            'show_alpha' => true,
                            'preview' => [
                                'type' => 'css',
                                'property' => 'background-color',
                                'selector' => '.main-timeline .timeline-content'
                            ],
                        ],
                        'lh_tl_bg_icon' => [
                            'type' => 'color',
                            'label' => __('Icon Background Color', 'lh'),
                            'responsive' => true,
                            'show_reset' => true,
                            'show_alpha' => true,
                            'preview' => [
                                'type' => 'css',
                                'property' => 'background-color',
                                'selector' => '.main-timeline .timeline-content'
                            ],
                        ],
                        'lh_tl_y_color' => [
                            'type' => 'color',
                            'label' => __('Year Background Color', 'lh'),
                            'responsive' => true,
                            'show_reset' => true,
                            'show_alpha' => true,
                            'preview' => [
                                'type' => 'css',
                                'property' => 'background-color',
                                'selector' => '.main-timeline .timeline-content'
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
]);