<?php

/**
 * This file should be used to render each module instance.
 *
 * $settings The module's settings.
 *
 */
$lh_testimonial_slides = $settings->lh_testimonial_slides;

?>
<div class="lh-testimonial-slide">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="lh-testimonial-slider-<?php echo esc_attr($id); ?>" class="lh-testimonial-quotes">

                    <?php
                    if (!empty($lh_testimonial_slides)):
                        foreach ($lh_testimonial_slides as $lh_testimonial_item):
                            ?>
                            <div class="lh-testimonial-item">
                                <div class="lh-testimonial-content">
                                    <div class="lh-testimonial-icon">
                                        <?php
                                         $star =  $lh_testimonial_item->lh_star;
                                        for($i = 1; $i <= $star; $i++):?>
                                        <i class="<?php echo esc_attr($lh_testimonial_item->lh_t_icon); ?>"></i>
                                        <?php endfor;?>
                                    </div>
                                    <p class="testimonial-description">
                                        <?php echo esc_html($lh_testimonial_item->lh_t_desc); ?>
                                    </p>
                                    <div class="customer-meta">
                                        <?php if(!empty($lh_testimonial_item->lh_t_photo_src)): ?>
                                        <div class="customer-photo">
                                            <img src="<?php echo esc_url($lh_testimonial_item->lh_t_photo_src); ?>" >
                                        </div>
                                            <?php endif;?>
                                        <div class="testimonial-meta">
                                            <h3 class="testimonial-meta-name"><?php echo esc_html($lh_testimonial_item->lh_t_name); ?></h3>
                                            <span class="testimonial-meta-post"><?php echo esc_html($lh_testimonial_item->lh_t_title); ?></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>