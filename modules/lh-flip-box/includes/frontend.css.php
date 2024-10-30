<?php
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'f_title_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-dual-heading .lh-d-heading",
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'flip_box_height',
       'selector'     => ".fl-builder-content .fl-node-$id .flip-box",
       'prop'         => 'height',
    ] );

    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'b_title_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-flip-box-content h2",
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'b_title_color',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-flip-box-content h2",
       'prop'         => 'color',
    ] );

    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'b_desc_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-flip-box-content p",
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'b_desc_color',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-flip-box-content p",
       'prop'         => 'color',
    ] );

    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'btn_typography',
        'selector'     => ".fl-builder-content .fl-node-$id a.lh-flipbox-readmore-btn",
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'btn_color',
       'selector'     => ".fl-builder-content .fl-node-$id a.lh-flipbox-readmore-btn",
       'prop'         => 'color',
    ] );

    FLBuilderCSS::responsive_rule([
        'settings'     => $settings,
        'setting_name' => 'btn_h_color',
        'selector'     => ".fl-builder-content .fl-node-$id a.lh-flipbox-readmore-btn:hover",
        'prop'         => 'color',
     ] );
?>

<?php if ( ! empty( $settings->btn_color ) ) : ?>
.fl-node-<?php echo esc_attr( $id); ?> a.lh-flipbox-readmore-btn {
    color: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->btn_color )); ?>;
}
<?php endif; ?>

<?php if ( ! empty( $settings->btn_h_color ) ) : ?>
.fl-node-<?php echo esc_attr( $id); ?> a.lh-flipbox-readmore-btn:hover {
    color: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->btn_h_color )); ?>;
}
<?php endif; ?>

<?php if ( ! empty( $settings->f_bg_color ) ) : ?>
.fl-node-<?php echo esc_attr( $id); ?> .flip-box-front .lh-flip-box-front-img-bg {
    background: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->f_bg_color )); ?>;
}
<?php endif; ?>

<?php if ( ! empty( $settings->b_bg_color ) ) : ?>
.fl-node-<?php echo esc_attr( $id); ?> .flip-box-back {
    background: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->b_bg_color )); ?>;
}
<?php endif; ?>
