<?php

/**
 * This file should be used to render each module instance.
 *
 * $settings The module's settings.
 *
 */
    $flip_box_bg_img = $settings->lh_flip_box_image_src;
    $lh_flip_box_back_title = $settings->lh_flip_box_back_title;
    $lh_flip_box_back_desc = $settings->lh_flip_box_back_desc;
    $btn_icon = $settings->btn_icon;
?>
<div class="lh-flip-box">
    <div class="flip-box">
        <div class="flip-box-inner">
            <div class="flip-box-front">
                <div class="lh-flip-box-front-img-bg" <?php if(!empty($flip_box_bg_img)): ?>style="background-image:url(<?php echo esc_url($flip_box_bg_img); ?>)"<?php endif; ?>></div>
            </div>
            <div class="flip-box-back">
                <div class="lh-flip-box-content">
                    <h2><?php echo esc_html($lh_flip_box_back_title);?></h2>
                    <p><?php echo esc_html($lh_flip_box_back_desc);?></p>
                    <?php if(!empty($settings->lh_flipbox_link)): ?>
                        <a class="lh-flipbox-readmore-btn" href="<?php echo esc_url($settings->lh_flipbox_link); ?>"><?php echo esc_html($settings->lh_flipbox_link_text); ?><?php if(!empty($btn_icon)): ?><span class="<?php echo esc_attr($btn_icon); ?>"></span><?php endif; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
