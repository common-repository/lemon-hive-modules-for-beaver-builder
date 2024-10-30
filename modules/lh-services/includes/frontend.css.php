<?php
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_s_title_color',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-service-content h4",
       'prop'         => 'color',
    ] );
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_s_title_color_h',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-service-single-item:hover .lh-service-content h4",
       'prop'         => 'color',
    ] );
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_s_title_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-service-content h4",
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_s_desc_color',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-service-content p",
       'prop'         => 'color',
    ] );
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_s_desc_color_h',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-service-single-item:hover .lh-service-content p",
       'prop'         => 'color',
    ] );
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_s_desc_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-service-content p",
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_s_btn_color',
       'selector'     => ".fl-builder-content .fl-node-$id a.lh-service-more-btn",
       'prop'         => 'color',
    ] );
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_s_desc_color_h',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-service-single-item:hover a.lh-service-more-btn",
       'prop'         => 'color',
    ] );
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_s_btn_typography',
        'selector'     => ".fl-builder-content .fl-node-$id a.lh-service-more-btn",
    ] );


    FLBuilderCSS::responsive_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_s_icon_font_color',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-service-icon-circle i",
        'prop'         => 'color',
    ] );
    FLBuilderCSS::responsive_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_s_icon_font_color_h',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-service-single-item:hover .lh-service-icon-circle i",
        'prop'         => 'color',
    ] );
    FLBuilderCSS::responsive_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_s_icon_font_size',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-service-icon-circle i",
        'prop'         => 'font-size',
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_service_bg',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-service-single-item",
       'prop'         => 'background-color',
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_service_bg_h',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-service-single-item:hover",
       'prop'         => 'background-color',
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_service_b_color',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-service-single-item",
       'prop'         => 'border-color',
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_service_b_color_h',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-service-single-item:hover",
       'prop'         => 'border-color',
    ] );

    FLBuilderCSS::dimension_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_service_padding',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-service-single-item",
        'unit'         => 'px',
        'props'        => [
            'padding-top'    => 'lh_service_padding_top',
            'padding-right'  => 'lh_service_padding_right',
            'padding-bottom' => 'lh_service_padding_bottom',
            'padding-left'   => 'lh_service_padding_left',
        ],
    ] );
?>

