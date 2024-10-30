<?php

    // Title text color
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_title_color',
       'selector'     => ".fl-builder-content .fl-node-$id h3.lh-post-title a",
       'prop'         => 'color',
    ] );

    // Title text hover color
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_title_color_h',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-post-slide:hover .lh-post-header h3.lh-post-title a",
       'prop'         => 'color',
    ] );

    // Tittle typography
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'selector'     => ".fl-builder-content .fl-node-$id h3.lh-post-title",
        'setting_name' => 'lh_title_typography',

    ]);

    // Post meta text color
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_post_meta_color',
       'selector'     => ".fl-builder-content .fl-node-$id ul.lh-recent-post-meta li",
       'prop'         => 'color',
    ] );

    // Post meta comment text color
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_post_comment_color',
       'selector'     => ".fl-builder-content .fl-node-$id ul.lh-recent-post-meta li a",
       'prop'         => 'color',
    ] );

    // Post meta text typography
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'selector'     => ".fl-builder-content .fl-node-$id ul.lh-recent-post-meta li",
        'setting_name' => 'lh_post_meta_typography',

    ]);


    // Comment text color
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_comment_color',
       'selector'     => ".fl-builder-content .fl-node-$id p.recent-post-comment a",
       'prop'         => 'color',
    ] );

    // Comment hover text color
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_comment_h_color',
       'selector'     => ".fl-builder-content .fl-node-$id p.recent-post-comment a:hover",
       'prop'         => 'color',
    ] );

    // Commment text typography
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'selector'     => ".fl-builder-content .fl-node-$id p.recent-post-comment",
        'setting_name' => 'lh_comment_typography',

    ]);

    // Slide button color
    FLBuilderCSS::rule( [
		'selector' => ".fl-node-$id .lh-slick-slide button",
		'enabled'  => ! empty( $settings->lh_dots_color ),
		'props'    => [
			'background-color' => $settings->lh_dots_color,
			'border-color' => $settings->lh_dots_color,
		],
	] );
    // Slide active button color
    FLBuilderCSS::rule( [
		'selector' => ".fl-node-$id .lh-slick-slide li.slick-active button",
		'enabled'  => ! empty( $settings->lh_dots_active_color ),
		'props'    => [
			'background-color' => $settings->lh_dots_active_color,
			'border-color' => $settings->lh_dots_active_color,
		],
	] );

    //Background Image Height
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_bg_height',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-recent-post-thumb",
       'prop'         => 'height'
    ] );

 ?>


