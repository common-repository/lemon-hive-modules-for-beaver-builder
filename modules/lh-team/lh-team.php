<?php

/**
 * Team Module
 * setup necessary to get it working.
 *
 * @class LHTeam
 */
class LHTeam extends FLBuilderModule
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
            'name'              => __('Team', 'lh'),
            'description'       => __('Lemon hive Team', 'lh'),
            'category'          => __('Lemon Hive Modules', 'lh'),
            'dir'               => LH_MODULE_DIR . 'modules/lh-team/',
            'url'               => LH_MODULE_URL . 'modules/lh-team/',
            'icon'              => 'team.svg',
            'editor_export'     => true, // Defaults to true and can be omitted.
            'enabled'           => true, // Defaults to true and can be omitted.
            'partial_refresh'   => true,
        ]);
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('LHTeam', [
    'general' => [ // Tab
        'title' => __('General', 'lh'), // Tab title
        'sections' => [ // Tab section
            'general' => [ // Section
                'title' => __('Content', 'lh'), // Section title
                'fields' => [ // Section fields
                    'lh_team_items' => [
                        'type' => 'form',
                        'label' => __('Team', 'lh'),
                        'form' => 'lh_team_form',
                        'preview_text' => 'label',
                        'multiple' => true,
                    ],                    
                ],
            ],
            'settings' => [ // Section
                'title' => __('Settings', 'lh'), // Section title
                'fields' => [ // Section fields
                    'lh_team_columns' => [
                        'type'        => 'select',
                        'label'       => __( 'Team Column', 'lh' ),
                        'responsive'  => true,
                        'default'     => '4',
                        'options'     => [
                            '6'       => __( '2 Column', 'lh' ),
                            '4'       => __( '3 Column', 'lh' ),
                            '3'       => __( '4 Column', 'lh' ),
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
                    'lh_team_name_color' => [
                        'type' => 'color',
                        'label' => __('Team Name Text Color', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-team-content h4',
                            'property' => 'color',
                        ],
                        'show_reset'    => true,
                        'default' => '283849'
                    ],
                    'lh_team_name_typography' => [
                        'type' => 'typography',
                        'label' => __('Team Name Text Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-team-content h4'
                        ],
                    ],
                    'lh_team_position_color' => [
                        'type' => 'color',
                        'label' => __('Team Position Text Color', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'property' => 'color',
                            'selector' => '.lh-team-content p'
                        ],
                        'show_reset'    => true,
                        'default' => 'F8931F'
                    ],
                    'lh_team_position_typography' => [
                        'type' => 'typography',
                        'label' => __('Team Position Text Typography', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-team-content p'
                        ],
                    ],                    
                    'lh_team_image_overlay' => [
                        'type' => 'color',
                        'label' => __('Team Image Overlay', 'lh'),
                        'responsive' => true,
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-team-image::after',
                            'property' => 'background-color',
                        ],
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => '2c3e50'
                    ],
                    'team_s_icon_size' => [
                        'type' => 'unit',
                        'label' => __('Social Icon Size', 'lh'),
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-team-social-btn',
                            'property' => 'font-size',
                            'unit' => 'px',
                        ],
                    ],
                    'lh_team_padding' => [
                        'type' => 'dimension',
                        'label' => __('Team Content', 'lh'),
                        'responsive' => true,
                        'units' => ['px', 'em', 'rem'],
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-team-content',
                            'property' => 'padding',
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
FLBuilder::register_settings_form('lh_team_form', [
    'title' => __('Add team', 'lh'),
    'tabs' => [
        'general' => [
            'title' => __('General', 'lh'),
            'sections' => [
                'general' => [
                    'title' => '',
                    'fields' => [
                        'lh_team_photo' => [
                            'type' => 'photo',
                            'label' => __('Select Team Photo', 'lh'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => ''
                            ]
                        ],
                        'lh_team_name' => [
                            'type' => 'textarea',
                            'label' => __('Name', 'lh'),
                            'placeholder' => __('Name', 'lh'),
                            'default' => __('Name', 'lh'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => ''
                            ]
                        ],
                        'lh_team_position' => [
                            'type' => 'textarea',
                            'label' => __('Position', 'lh'),
                            'placeholder' => __('Position', 'lh'),
                            'preview' => [
                                'type' => 'text',
                                'selector' => ''
                            ]
                        ],
                        'lh_team_social_items' => [
                            'type' => 'form',
                            'label' => __('Social Icons', 'lh'),
                            'form' => 'lh_team_social_form',
                            'preview_text' => 'label',
                            'multiple' => true,
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
FLBuilder::register_settings_form('lh_team_social_form', [
    'title' => __('Add social', 'lh'),
    'tabs' => [
        'general' => [
            'title' => __('General', 'lh'),
            'sections' => [
                'general' => [
                    'title' => '',
                    'fields' => [
                        'lh_team_social_link' => [
                            'type' => 'link',
                            'label' => __('Team Social Link URL', 'lh'),
                            'placeholder' => __('https://facebook.com', 'lh'),
                            'preview' => [
                                'type' => 'none',
                            ]
                        ],
                        'lh_social_icon' => [
                            'type' => 'icon',
                            'label' => __('Select Team Social Icon', 'lh'),
                            'preview' => [
                                'type' => 'none',
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
                    'title' => '',
                    'fields' => [                        
                        'lh_team_icon_color' => [
                            'type' => 'color',
                            'label' => __('Team Social Icon Color', 'lh'),
                            'preview' => [
                                'type' => 'css',
                                'property' => 'color',
                                'selector' => 'a.lh-team-social-btn i'
                            ],
                            'show_reset'    => true,
                        ],
                        'lh_team_icon_color_h' => [
                            'type' => 'color',
                            'label' => __('Team Social Icon Hover Color', 'lh'),
                            'preview' => [
                                'type' => 'css',
                                'property' => 'color',
                                'selector' => 'a.lh-team-social-btn:hover i'
                            ],
                            'show_reset'    => true,
                        ],
                        'lh_team_icon_bg' => [
                            'type' => 'color',
                            'label' => __('Team Social Icon Background Color', 'lh'),
                            'preview' => [
                                'type' => 'css',
                                'selector' => '.lh-team-social-btn',
                                'property' => 'background-color',
    
                            ],
                            'show_reset'    => true,
                        ],
                        'lh_team_icon_bg_h' => [
                            'type' => 'color',
                            'label' => __('Team Social Icon Background Hover Color', 'lh'),
                            'preview' => [
                                'type' => 'css',
                                'selector' => '.lh-team-social-btn:hover',
                                'property' => 'background-color',
                            ],
                            'show_reset'    => true,
                        ],
                    ],
                ],
            ],
        ],
    ],
]);