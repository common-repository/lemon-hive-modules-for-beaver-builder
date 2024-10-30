<?php
    // Slide content bg
    FLBuilderCSS::rule( [
		'selector' => ".fl-node-$id .lh-hero-section-slider .lh-hero-item-bg:before",
		'enabled'  => ! empty( $settings->lh_hero_content_overlay_color ),
		'props'    => [
			'background' => $settings->lh_hero_content_overlay_color,
		],
	] );
    FLBuilderCSS::dimension_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'padding_hero_content',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-hero-content",
        'unit'         => 'px',
        'props'        => [
            'padding-top'    => 'padding_hero_content_top',
            'padding-right'  => 'padding_hero_content_right',
            'padding-bottom' => 'padding_hero_content_bottom',
            'padding-left'   => 'padding_hero_content_left',
        ],
    ] );
    // Slide button color
    FLBuilderCSS::rule( [
		'selector' => ".fl-node-$id .lh-hero-section-slider .swiper-pagination-bullet",
		'enabled'  => ! empty( $settings->lh_dots_color ),
		'props'    => [
			'background-color' => $settings->lh_dots_color,
			'border-color' => $settings->lh_dots_color,
		],
	] );
    // Slide active button color
    FLBuilderCSS::rule( [
		'selector' => ".fl-node-$id .lh-hero-section-slider .swiper-pagination-bullet-active",
		'enabled'  => ! empty( $settings->lh_dots_active_color ),
		'props'    => [
			'background-color' => $settings->lh_dots_active_color,
		],
	] );

?>

<?php
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_hero_title_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-hero-title h1",
    ] );

    if ( !empty( $settings->lh_hero_title_color ) ) {
        ?>
.fl-builder-content .fl-node-<?php echo esc_attr($id); ?> .lh-hero-title h1 {
    color:<?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->lh_hero_title_color)); ?>;
}
<?php
}
?>

<?php
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_hero_desc_typography',
        'selector'     => ".fl-builder-content .fl-node-$id p.lh-hero-desc",
    ] );

    if ( !empty( $settings->lh_hero_desc_color ) ) {
        ?>
.fl-builder-content .fl-node-<?php echo esc_attr($id); ?> p.lh-hero-desc {
    color:<?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->lh_hero_desc_color)); ?>;
}
<?php
}
?>

<?php
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_hero_btn_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-hero-content-bottom a.lh-hero-btn",
    ] );

    if ( !empty( $settings->lh_hero_btn_bg_color ) ) {
        ?>
.fl-builder-content .fl-node-<?php echo esc_attr($id); ?> .lh-hero-content-bottom a.lh-hero-btn {
    background-color:<?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->lh_hero_btn_bg_color)); ?>;
}
<?php
}

if ( !empty( $settings->lh_hero_btn_bg_hover_color ) ) {
    ?>
.fl-builder-content .fl-node-<?php echo esc_attr($id); ?> .lh-hero-content-bottom a.lh-hero-btn:hover {
background-color:<?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->lh_hero_btn_bg_hover_color)); ?>;
}
<?php
}

if ( !empty( $settings->lh_hero_btn_color ) ) {
    ?>
.fl-builder-content .fl-node-<?php echo esc_attr($id); ?> .lh-hero-content-bottom a.lh-hero-btn {
color:<?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->lh_hero_btn_color)); ?>;
}
<?php
}

if ( !empty( $settings->lh_hero_btn_hover_color ) ) {
    ?>
.fl-builder-content .fl-node-<?php echo esc_attr($id); ?> .lh-hero-content-bottom a.lh-hero-btn:hover {
color:<?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->lh_hero_btn_hover_color)); ?>;
}
<?php
}


?>
