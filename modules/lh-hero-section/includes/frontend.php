<?php

/**
 * This file should be used to render each module instance.
 *
 * $settings The module's settings.
 *
 */
$lh_hero_slides = $settings->lh_hero_slides;
$lh_dots = $settings->lh_dots;
$lh_arrows = $settings->lh_arrows;
$allowed_html = [
    'br' => [],
    'strong' => []
];
?>
<div class="lh-hero-section-slide">
    <div id="lh-hero-section-slider-<?php echo esc_attr($id); ?>" class="lh-hero-section-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
        <?php
        if (!empty($lh_hero_slides)):
            foreach ($lh_hero_slides as $lh_hero_item):
                ?>
                <div class="swiper-slide lh-hero-item">
                    
                    <div class="lh-hero-item-bg" <?php if(!empty($lh_hero_item->hero_slide_bg_src)) : ?>style="background-image:url(<?php echo esc_url($lh_hero_item->hero_slide_bg_src); ?>)"<?php endif; ?> ></div>                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="lh-hero-content">
                                    <div class="lh-hero-title">
                                        <h1><?php echo wp_kses($lh_hero_item->hero_slide_heading, $allowed_html); ?></h1>
                                    </div>
                                    <p class="lh-hero-desc">
                                        <?php echo esc_html($lh_hero_item->hero_slide_desc); ?>
                                    </p>
                                    <?php if(!empty($lh_hero_item->hero_slide_btn_url)) : ?>
                                    <div class="lh-hero-content-bottom">
                                        <a class="lh-hero-btn" href="<?php echo esc_url($lh_hero_item->hero_slide_btn_url); ?>"><?php echo esc_html($lh_hero_item->hero_slide_btn_txt); ?></a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            <?php endforeach; endif; ?>
        </div>
        <?php if($lh_dots == "true"): ?>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <?php endif; ?>
        <?php if($lh_arrows == "true"): ?>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <?php endif; ?>
    </div>
</div>