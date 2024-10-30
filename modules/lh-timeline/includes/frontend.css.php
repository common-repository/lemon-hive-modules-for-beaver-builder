<?php
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_title_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .timeline-content .title",
    ] );

    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_year_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .timeline-content .timeline-year",
    ] );

    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_desc_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .timeline-content .description",
    ] );

    FLBuilderCSS::responsive_rule( array(
        'settings'     => $settings,
        'setting_name' => 'f_font_size',
        'selector'     => ".fl-node-$id .timeline-content .timeline-icon i",
        'prop'         => 'font-size',
    ) );
?>

<?php if ( ! empty( $settings->f_icon_color ) ) : ?>
.fl-node-<?php echo esc_attr($id); ?> .lh-flip-box-icon i {
    color: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->f_icon_color)); ?>;
}
<?php endif; ?>

<?php if ( ! empty( $settings->f_bg_color ) ) :
?>
.fl-node-<?php echo esc_attr($id); ?> .flip-box-front {
    background: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $settings->f_bg_color)); ?>;
}
<?php endif; ?>

<?php
    $lh_timeline_bg = $settings->lh_timeline;
    $lh_tl_item = 0;
     foreach ($lh_timeline_bg as $lh_tl_bg_item):
 ?>
 <?php  if ( ! empty( $lh_tl_bg_item->lh_tl_bg_color) ) :?>
.fl-node-<?php echo esc_attr( $id);?> .main-timeline a#lh-tl-item-<?php echo esc_attr($lh_tl_item);?>.timeline-content {
    background: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $lh_tl_bg_item->lh_tl_bg_color));?>;
}
<?php endif;?>
<?php  if ( ! empty( $lh_tl_bg_item->lh_tl_bg_icon) ) :?>
.fl-node-<?php echo esc_attr( $id);?> .main-timeline a#lh-tl-item-<?php echo esc_attr($lh_tl_item);?>.timeline-content:before  {
    background: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $lh_tl_bg_item->lh_tl_bg_icon));?>;
}
<?php endif;?>
<?php  if ( ! empty( $lh_tl_bg_item->lh_tl_y_color) ) :?>
.fl-node-<?php echo esc_attr( $id);?> .main-timeline a#lh-tl-item-<?php echo esc_attr($lh_tl_item);?>.timeline-content .timeline-year {
    color: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $lh_tl_bg_item->lh_tl_y_color));?>;
}
<?php endif;?>

<?php
    $lh_tl_item++;
    endforeach;
?>
