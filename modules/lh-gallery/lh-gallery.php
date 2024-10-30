<?php

/**
 * Image Gallery Module
 * setup necessary to get it working.
 *
 * @class LH_Gallery
 */
class LH_Gallery extends FLBuilderModule
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
            'name' => __('Gallery', 'lh'),
            'description' => __('This is for Recent Posts Module', 'lh'),
            'category' => __('Lemon Hive Modules', 'lh'),
            'dir' => LH_MODULE_DIR . 'modules/lh-gallery/',
            'url' => LH_MODULE_URL . 'modules/lh-gallery/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
        ]);

        /**
         * Use these methods to enqueue css and js already
         * Already registered
         */
        $this->add_css('justifiedGallery');
        $this->add_css('magnific');
        $this->add_js('justifiedGallery');
        $this->add_js('magnific');
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('LH_Gallery', [
    'general' => [ // Tab
        'title' => __('General', 'lh'), // Tab title
        'sections' => [ // Tab section
            'general' => [ // Section
                'title' => __('Content', 'lh'), // Section title
                'fields' => [ // Section fields
                    'lh_gallery_photos' => [
                        'type' => 'form',
                        'label' => __('Gallery', 'lh'),
                        'form' => 'lh_gallery',
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
                    'lh_row_justify' => [
                        'type' => 'select',
                        'label' => __('Select The Last Row', 'lh'),
                        'default' => 'justify',
                        'options' => [
                            'justify' => __(' Justify the last row', 'lh'),
                            'nojustify' => __('No justify the last row', 'lh'),
                        ]
                    ],
                    'lh_gallery_margin' => [
                        'type' => 'text',
                        'label' => __('Margin', 'lh'),
                        'placeholder' => __('2', 'lh'),
                        'default' => '5',
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
                    'lh_image_title_color' => [
                        'type' => 'color',
                        'label' => __('Image Title Text Hover Color', 'lh'),
                        'responsive' => true,
                        'default' => 'ffffff',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-image-info h2',
                            'property' => 'color',
                        ],
                    ],
                    'lh_image_title_typography' => [
                        'type' => 'typography',
                        'label' => __('Image Title Text Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-image-info h2'
                        ],
                    ],
                    'lh_image_s_title_color' => [
                        'type' => 'color',
                        'label' => __('Image Sub Title Text Color', 'lh'),
                        'responsive' => true,
                        'default' => 'ffffff',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-image-info h4',
                            'property' => 'color',
                        ],
                    ],
                    'lh_image_s_title_typography' => [
                        'type' => 'typography',
                        'label' => __('Image Sub Title Text Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-image-info h4'
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
FLBuilder::register_settings_form('lh_gallery', [
    'title' => __('Gallery', 'lh'),
    'tabs' => [
        'general' => [
            'title' => __('General', 'lh'),
            'sections' => [
                'general' => [
                    'title' => '',
                    'fields' => [
                        'lh_gallery_photo' => [
                            'type' => 'photo',
                            'label' => __('Upload gallery photo', 'lh'),
                            'preview' => [
                                'type' => 'none',
                            ],
                        ],
                        'lh_gallery_title' => [
                            'type' => 'textarea',
                            'label' => __('Image title', 'lh'),
                            'placeholder' => __('Image title', 'lh'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.lh-image-info h2',
                            ],
                        ],
                        'lh_gallery_sub_title' => [
                            'type' => 'textarea',
                            'label' => __('Image sub title', 'lh'),
                            'placeholder' => __('Image sub title', 'lh'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => '.lh-image-info h4',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
]);


