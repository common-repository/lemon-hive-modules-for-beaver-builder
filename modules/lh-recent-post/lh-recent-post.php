<?php

/**
 * Recent Post Slide Module
 * setup necessary to get it working.
 *
 * @class LHRecentPost
 */
class LHRecentPost extends FLBuilderModule
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
            'name' => __('Recent Posts', 'lh'),
            'description' => __('This is for Recent Posts Module', 'lh'),
            'category' => __('Lemon Hive Modules', 'lh'),
            'dir' => LH_MODULE_DIR . 'modules/lh-recent-post/',
            'url' => LH_MODULE_URL . 'modules/lh-recent-post/',
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
FLBuilder::register_module('LHRecentPost', [
    'general' => [ //Tab
        'title' => __('General', 'lh'), //Tab title
        'sections' => [ // Tab Sections
            'general' => [ //Section
                'title' => __('Content', 'lh'), //Section title
                'fields' => [  //Section fields
                    'lh_recent_post' => [
                        'type' => 'post-type',
                        'label' => __('Select Post Type', 'lh'),
                        'default' => 'post',
                    ],
                    'lh_posts_order' => [
                        'type' => 'select',
                        'label' => __('Order', 'lh'),
                        'default' => 'ASC',
                        'options' => [
                            'ASC' => __('Ascending', 'lh'),
                            'DESC' => __('Descending', 'lh'),
                        ]
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
                        'label' => __('Slides To Show', 'lh'),
                        'placeholder' => __('3', 'lh'),
                        'default' => '3',
                        'preview' => [
                            'type' => 'none',
                        ],
                    ],
                    'lh_slide_to_scroll' => [
                        'type' => 'text',
                        'label' => __('Slides To Scroll', 'lh'),
                        'placeholder' => __('1', 'lh'),
                        'default' => '1',
                        'preview' => [
                            'type' => 'none',
                        ],
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
                            'selector' => '.lh-slick-slide button',
                            'property' => 'color'
                        ]
                    ],
                    'lh_dots_active_color' => [
                        'type' => 'color',
                        'label' => __('Slide Active Dots Color', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-slick-slide li.slick-active button',
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
                    'lh_bg_height' => [
                        'type'         => 'unit',
                        'label'        => __('Background Image Height', 'lh'),
                        'units'          => [ 'px', 'vw', '%' ],
                        'default_unit' => 'px',
                        'default' => 260,
                        'preview'    => [
                            'type'          => 'css',
                            'selector'      => '.lh-recent-post-thumb',
                            'property'      => 'height',
                        ],
                    ],
                    'lh_title_color' => [
                        'type' => 'color',
                        'label' => __('Title Text Color', 'lh'),
                        'default'=> '283849',
                        'preview' => [
                            'type' => 'css',
                            'selector' => 'h3.lh-post-title a',
                            'property' => 'color'
                        ]
                    ],
                    'lh_title_color_h' => [
                        'type' => 'color',
                        'label' => __('Title Text Hover Color', 'lh'),
                        'default'=> 'F8931F',
                        'preview' => [
                            'type' => 'css',
                            'selector' => '.lh-post-slide:hover .lh-post-header h3.lh-post-title a',
                            'property' => 'color'
                        ]
                    ],
                    'lh_title_typography' => [
                        'type' => 'typography',
                        'label' => __('Title Text Typography', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => 'h3.lh-post-title',
                        ],
                        'responsive' => true
                    ],
                    'lh_post_meta_color' => [
                        'type' => 'color',
                        'label' => __('Post Meta Text Color', 'lh'),
                        'default' => 'F8931F',
                        'preview' => [
                            'type' => 'css',
                            'selector' => 'ul.lh-recent-post-meta li',
                            'property' => 'color'
                        ]
                    ],
                    'lh_post_comment_color' => [
                        'type' => 'color',
                        'label' => __('Post Meta Comment Text Color', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => 'ul.lh-recent-post-meta li a',
                            'property' => 'color'
                        ]
                    ],
                    'lh_post_meta_typography' => [
                        'type' => 'typography',
                        'label' => __('Post Meta Text Typography', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => 'ul.lh-recent-post-meta li',
                        ],
                        'responsive' => true
                    ],
                    'lh_comment_color' => [
                        'type' => 'color',
                        'label' => __('Comment Text Color', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => 'p.recent-post-comment a',
                            'property' => 'color'
                        ]
                    ],
                    'lh_comment_h_color' => [
                        'type' => 'color',
                        'label' => __('Comment Hover Text Color', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => 'p.recent-post-comment a:hover',
                            'property' => 'color'
                        ]
                    ],
                    'lh_comment_typography' => [
                        'type' => 'typography',
                        'label' => __('Comment Text Typography', 'lh'),
                        'preview' => [
                            'type' => 'css',
                            'selector' => 'p.recent-post-comment',
                        ],
                        'responsive' => true
                    ],
                ],
            ],
        ],
    ],
]);