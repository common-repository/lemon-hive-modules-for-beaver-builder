<?php
    FLBuilderCSS::dimension_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'padding_dual_heading',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-dual-heading",
        'unit'         => 'px',
        'props'        => [
            'padding-top'    => 'padding_dual_heading_top',
            'padding-right'  => 'padding_dual_heading_right',
            'padding-bottom' => 'padding_dual_heading_bottom',
            'padding-left'   => 'padding_dual_heading_left',
        ],
    ] );

    FLBuilderCSS::border_field_rule( [
        'settings'  => $settings,
        'setting_name'  => 'dual_heading_border',
        'selector'  => ".fl-builder-content .fl-node-$id .lh-dual-heading",
    ] );

    FLBuilderCSS::responsive_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_dual_heading_colored_border_size',
        'selector'     => ".fl-node-$id .lh-dual-heading:before",
        'prop'         => 'width',
    ]);

    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'f_title_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-dual-heading .lh-d-heading",
    ] );
?>

<?php if ( ! empty( $settings->one_title_color ) ) : ?>
.fl-node-<?php echo esc_attr( $id); ?> .lh-dual-heading <?php echo esc_attr($settings->select_heading); ?> span.heading-one {
    color: <?php echo FLBuilderColor::hex_or_rgb( $settings->one_title_color ); ?>;
}
<?php endif; ?>

<?php if ( ! empty( $settings->two_title_color ) ) : ?>
.fl-node-<?php echo esc_attr( $id); ?> .lh-dual-heading <?php echo esc_attr($settings->select_heading); ?> span.heading-two {
    color: <?php echo FLBuilderColor::hex_or_rgb( $settings->two_title_color ); ?>;
}
<?php endif; ?>

<?php
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'sub_heading_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-dual-heading .sub-heading",
    ] );
?>

<?php if ( ! empty( $settings->sub_heading_color ) ) : ?>
.fl-node-<?php echo esc_attr( $id); ?> .lh-dual-heading .sub-heading {
    color: <?php echo FLBuilderColor::hex_or_rgb( $settings->sub_heading_color ); ?>;
}
<?php endif; ?>

<?php if ( ! empty( $settings->two_title_color ) ) : ?>
.fl-node-<?php echo esc_attr( $id); ?> .lh-dual-heading <?php echo esc_attr($settings->select_heading); ?> span.heading-two {
    color: <?php echo FLBuilderColor::hex_or_rgb( $settings->two_title_color ); ?>;
}
<?php endif; ?>

<?php if ( ! empty( $settings->dual_heading_colored_border ) ) : ?>
.fl-node-<?php echo esc_attr( $id); ?> .lh-dual-heading:before {
    background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->dual_heading_colored_border ); ?>;
}
<?php endif; ?>
