<?php
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_image_title_color',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-image-info h2",
       'prop'         => 'color',
    ] );

    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_image_title_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-image-info h2",
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_image_s_title_color',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-image-info h4",
       'prop'         => 'color',
    ] );
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_image_s_title_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-image-info h4",
    ] );
?>

