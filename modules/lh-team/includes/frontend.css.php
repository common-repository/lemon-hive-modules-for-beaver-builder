<?php
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_team_name_color',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-team-content h4",
       'prop'         => 'color',
    ] );
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_team_name_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-team-content h4",
    ] );

    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'lh_team_position_color',
       'selector'     => ".fl-builder-content .fl-node-$id .lh-team-content p",
       'prop'         => 'color',
    ] );
    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_team_position_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-team-content p",
    ] );

    FLBuilderCSS::responsive_rule( [
        'settings'     => $settings,
        'setting_name' => 'team_s_icon_size',
        'selector'     => ".fl-builder-content .fl-node-$id a.lh-team-social-btn i",
        'prop'         => 'font-size',
    ] );

    FLBuilderCSS::dimension_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'lh_team_padding',
        'selector'     => ".fl-builder-content .fl-node-$id .lh-service-single-item",
        'unit'         => 'px',
        'props'        => [
            'padding-top'    => 'lh_team_padding_top',
            'padding-right'  => 'lh_team_padding_right',
            'padding-bottom' => 'lh_team_padding_bottom',
            'padding-left'   => 'lh_team_padding_left',
        ],
    ] );

    

?>

<?php
    $lh_team_items = $settings->lh_team_items;
    $lh_team_item_count = 0;

    foreach ($lh_team_items as $lh_team_item):
        $lh_team_social_list = $lh_team_item->lh_team_social_items;
        $lh_sl_item = 0;
        foreach( $lh_team_social_list as $lh_team_social_item ):

        $lh_team_s_item = json_decode($lh_team_social_item);
?>

        .fl-node-<?php echo esc_attr( $id ); ?> #lh-team-items-<?php echo esc_attr($lh_team_item_count); ?> .lh-team-socials #lh-team-social-icon-<?php echo esc_attr($lh_sl_item); ?> i {
            <?php  if ( ! empty( $lh_team_s_item->lh_team_icon_color ) ) :?>
            color: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $lh_team_s_item->lh_team_icon_color ) ); ?>;
            <?php endif;?>
        }

        .fl-node-<?php echo esc_attr( $id ); ?> #lh-team-items-<?php echo esc_attr($lh_team_item_count); ?> .lh-team-socials #lh-team-social-icon-<?php echo esc_attr($lh_sl_item); ?>:hover i {
            <?php  if ( ! empty( $lh_team_s_item->lh_team_icon_color_h ) ) :?>
            color: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $lh_team_s_item->lh_team_icon_color_h ) ); ?>;
            <?php endif;?>
        }

        .fl-node-<?php echo esc_attr( $id ); ?> #lh-team-items-<?php echo esc_attr($lh_team_item_count); ?> .lh-team-socials #lh-team-social-icon-<?php echo esc_attr($lh_sl_item); ?> {
            <?php  if ( ! empty( $lh_team_s_item->lh_team_icon_bg ) ) :?>
            background: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $lh_team_s_item->lh_team_icon_bg ) ); ?>;
            <?php endif;?>
        }

        .fl-node-<?php echo esc_attr( $id ); ?> #lh-team-items-<?php echo esc_attr($lh_team_item_count); ?> .lh-team-socials #lh-team-social-icon-<?php echo esc_attr($lh_sl_item); ?>:hover {
            <?php  if ( ! empty( $lh_team_s_item->lh_team_icon_bg_h ) ) :?>
            background: <?php echo esc_html(FLBuilderColor::hex_or_rgb( $lh_team_s_item->lh_team_icon_bg_h ) ); ?>;
            <?php endif;?>
        }

<?php
        $lh_sl_item++;    
        endforeach;

    $lh_team_item_count++;
    endforeach;
?>

