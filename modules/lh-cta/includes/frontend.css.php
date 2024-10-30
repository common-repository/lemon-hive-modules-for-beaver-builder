<?php
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_cta_content_color',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-cta-text p",
       'prop'         => 'color',
    ] );

    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_cta_content_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-cta-text p",
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_cta_btn_color',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-cta-btn a",
       'prop'         => 'color',
    ] );
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_cta_btn_color_h',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-cta-btn a:hover",
       'prop'         => 'color',
    ] );
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_cta_btn_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-cta-btn a",
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_cta_btn_bg',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-cta-btn a",
       'prop'         => 'background-color',
    ] );
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_cta_btn_bg_h',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-cta-btn a:hover",
       'prop'         => 'background-color',
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_cta_bg',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-cta-section",
       'prop'         => 'background-color',
    ] );

    FLBuilderCSS::dimension_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_cta_padding',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-cta-section",
        'unit'         => 'px',
        'props'        => [
            'padding-top'    => 'lh_cta_padding_top',
            'padding-right'  => 'lh_cta_padding_right',
            'padding-bottom' => 'lh_cta_padding_bottom',
            'padding-left'   => 'lh_cta_padding_left',
        ],
    ] );

    FLBuilderCSS::dimension_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_cta_btn_padding',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-cta-btn a",
        'unit'         => 'px',
        'props'        => [
            'padding-top'    => 'lh_cta_btn_padding_top',
            'padding-right'  => 'lh_cta_btn_padding_right',
            'padding-bottom' => 'lh_cta_btn_padding_bottom',
            'padding-left'   => 'lh_cta_btn_padding_left',
        ],
    ] );
?>

