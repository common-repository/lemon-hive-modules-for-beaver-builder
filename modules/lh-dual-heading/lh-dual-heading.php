<?php

/**
 * Dual Heading Module
 * setup necessary to get it working.
 *
 * @class LHDualHeading
 */
class LHDualHeading extends FLBuilderModule
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
            'name' => __('Dual Heading', 'lh'),
            'description' => __('This is for Dual Heading Module', 'lh'),
            'category' => __('Lemon Hive Modules', 'lh'),
            'dir' => LH_MODULE_DIR . 'modules/lh-dual-heading/',
            'url' => LH_MODULE_URL . 'modules/lh-dual-heading/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
        ]);
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('LHDualHeading', [
    'general' => [ // Tab
        'title' => __('General', 'lh'), // Tab title
        'sections' => [ // Tab Sections
            'general' => [ // Section
                'title' => __('Content', 'lh'), // Section Title
                'fields' => [ // Section Fields                    
                    'heading_one' => [
                        'type' => 'text',
                        'label' => __('First Text', 'lh'),
                        'placeholder' => __('First Text', 'lh'),
                        'default' => __('Hello', 'lh'),
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.lh-dual-heading span.heading-one'
                        ],
                        'connections' => ['string']
                    ],
                    'heading_two' => [
                        'type' => 'text',
                        'label' => __('Second Text', 'lh'),
                        'placeholder' => __('Second Text', 'lh'),
                        'default' => __('World!', 'lh'),
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.lh-dual-heading span.heading-two'
                        ],
                        'connections' => ['string']
                    ],
                    'select_heading' => [
                        'type' => 'select',
                        'label' => __('Select Heading', 'lh'),
                        'default' => 'h2',
                        'options' => [
                            'h1' => 'h1',
                            'h2' => 'h2',
                            'h3' => 'h3',
                            'h4' => 'h4',
                            'h5' => 'h5',
                            'h6' => 'h6',
                        ],
                        'preview' => [
                            'type' => 'none',
                        ],
                    ],
                    'sub_heading' => [
                        'type' => 'text',
                        'label' => __('Sub Heading Text', 'lh'),
                        'placeholder' => __('Heading 1', 'lh'),
                        'preview' => [
                            'type' => 'text',
                            'selector' => '.lh-dual-heading p.sub-heading'
                        ],
                        'connections' => ['string']
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
                    'padding_dual_heading' => [
                        'type'        => 'dimension',
                        'label'       => 'Padding Dual Heading',
                        'responsive' => true,
                        'units' => ['px'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-dual-heading',
                            'property' => 'padding',
                        ],
                    ],
                    'dual_heading_border' => [
                        'type'       => 'border',
                        'label'      => 'Dual Heading Border',
                        'responsive' => true,
                        'preview'    => [
                            'type'     => 'css',
                            'selector' => '.lh-dual-heading',
                        ],
                    ],
                    'lh_dual_heading_colored_border_size' => [
                        'type' => 'unit',
                        'label' => __('Colored Border Size', 'lh'),
                        'units'          => [ 'px' ],
                        'default_unit' => 'px',
                        'slider' => [
                            'min'   => 0,
                            'max'   => 10,
                            'step'  => 1,
                        ],
                        'preview'    => [
                            'type'          => 'css',
                            'selector'      => '.lh-dual-heading:before',
                            'property'      => 'width',
                        ],
                    ],
                    'dual_heading_colored_border' => [
                        'type' => 'color',
                        'label' => __('Dual Heading Colored Border', 'lh'),
                        'show_reset'    => true,
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'background-color',
                            'selector' => '.lh-dual-heading:before'
                        ],
                    ],
                    'f_title_typography' => [
                        'type' => 'typography',
                        'label' => __('Title Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-dual-heading .lh-d-heading'
                        ],
                    ],
                    'one_title_color' => [
                        'type' => 'color',
                        'label' => __('First Text Color', 'lh'),
                        'show_reset'    => true,
                        'responsive' => true,
                        'default' => 'F8931F',
                        'preview' => [
                            'type' => 'css',
                            'property' => 'color',
                            'selector' => '.lh-dual-heading span.heading-one'
                        ],
                    ],
                    'two_title_color' => [
                        'type' => 'color',
                        'label' => __('Second Title Color', 'lh'),
                        'show_reset'    => true,
                        'responsive' => true,
                        'default' => '304254',
                        'preview' => [
                            'type' => 'css',
                            'property' => 'color',
                            'selector' => '.lh-dual-heading span.heading-two'
                        ],
                    ],
                    'sub_heading_typography' => [
                        'type' => 'typography',
                        'label' => __('Sub Heading Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-dual-heading .sub-heading'
                        ],
                    ],
                    'sub_heading_color' => [
                        'type' => 'color',
                        'label' => __('Sub Heading Color', 'lh'),
                        'show_reset'    => true,
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'color',
                            'selector' => '.lh-dual-heading .sub-heading'
                        ],
                    ],
                ],
            ],
        ],

    ],
]);