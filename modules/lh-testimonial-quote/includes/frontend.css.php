<?php
    FLBuilderCSS::responsive_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_icon_font_size',
        'selector'     => ".fl-node-$id .lh-testimonial-content .lh-testimonial-icon i",
        'prop'         => 'font-size',
    ]);

    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_desc_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-testimonial-item .testimonial-description",
    ] );
    FLBuilderCSS::responsive_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_desc_color',
        'selector'     => ".fl-node-$id .lh-testimonial-item .testimonial-description",
        'prop'         => 'color',
    ] );

    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_name_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .testimonial-meta .testimonial-meta-name",
    ] );
    FLBuilderCSS::responsive_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_name_color',
        'selector'     => ".fl-node-$id .testimonial-meta .testimonial-meta-name",
        'prop'         => 'color',
    ] );

    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_post_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .testimonial-meta .testimonial-meta-post",
    ] );
    FLBuilderCSS::responsive_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_post_color',
        'selector'     => ".fl-node-$id .testimonial-meta .testimonial-meta-post",
        'prop'         => 'color',
    ] );

    FLBuilderCSS::dimension_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_testimonial_padding',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-testimonial-item .lh-testimonial-content",
        'unit'         => 'px',
        'props'        => [
            'padding-top'    => 'lh_testimonial_padding_top',
            'padding-right'  => 'lh_testimonial_padding_right',
            'padding-bottom' => 'lh_testimonial_padding_bottom',
            'padding-left'   => 'lh_testimonial_padding_left',
        ],
    ] );

    // Slide button color
    FLBuilderCSS::rule( [
		'selector' => ".fl-node-$id .lh-testimonial-quotes button",
		'enabled'  => ! empty( $settings->lh_dots_color ),
		'props'    => [
			'background-color' => $settings->lh_dots_color,
			'border-color' => $settings->lh_dots_color,
		],
	] );
    // Slide active button color
    FLBuilderCSS::rule( [
		'selector' => ".fl-node-$id .lh-testimonial-quotes li.slick-active button",
		'enabled'  => ! empty( $settings->lh_dots_active_color ),
		'props'    => [
			'background-color' => $settings->lh_dots_active_color,
			'border-color' => $settings->lh_dots_active_color,
		],
	] );

    if ( !empty( $settings->section_title_color ) ) {
        ?>
    .fl-builder-content .fl-node-<?php echo esc_attr($id); ?> .stack-section-title h2 {
        color:<?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->section_title_color)); ?>;
    }
    <?php
    }
?>

<?php
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'stack_title_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-stack-single-item h4",
    ] );

    if ( !empty( $settings->stack_title_color ) ) {
        ?>
.fl-builder-content .fl-node-<?php echo esc_attr($id); ?> .lh-stack-single-item h4 {
    color:<?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->stack_title_color)); ?>;
}
<?php
}
?>

<?php
    if ( !empty( $settings->lh_icon_bg ) ) {
        ?>
.fl-builder-content .fl-node-<?php echo esc_attr($id); ?> .lh-testimonial-content .lh-testimonial-icon {
    background: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->lh_icon_bg ));?>;
}
<?php
}
?>

<?php
    if ( !empty( $settings->lh_box_item_bg ) ) {
        ?>
    .fl-builder-content .fl-node-<?php echo esc_attr($id); ?> .lh-testimonial-item .lh-testimonial-content {
        background: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->lh_box_item_bg ));?>;
    }
    .fl-builder-content .fl-node-<?php echo esc_attr($id); ?> .lh-testimonial-item {
        box-shadow: 0 3px 5px 5px <?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->lh_box_item_bg ));?>;
    }
<?php
}
?>
