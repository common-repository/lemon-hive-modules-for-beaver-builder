<?php

/**
 * This file should be used to render each module instance.
 *
 * $settings The module's settings.
 *
 */
$lh_timeline = $settings->lh_timeline;
$lh_timeline_style = $settings->style_type;
?>
<div class="timeline-section-wrapp">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline <?php echo esc_attr($lh_timeline_style); ?>">
                    <?php
                    $lh_tl_item = 0;
                    foreach ($lh_timeline as $lh_timeline_item):?>
                        <div class="timeline">
                            <<?php echo ($lh_timeline_item->lh_timeline_link) ? esc_html('a') : esc_html('div'); ?> <?php if(!empty($lh_timeline_item->lh_timeline_link)): ?>href="<?php echo esc_url($lh_timeline_item->lh_timeline_link);?>" <?php endif; ?>
                               id="lh-tl-item-<?php echo esc_attr($lh_tl_item);?>" class="timeline-content">
                                <div class="timeline-icon"><i
                                            class="<?php echo esc_attr($lh_timeline_item->lh_timeline_icon);?>"></i></div>
                                <div class="timeline-year"><?php echo esc_attr($lh_timeline_item->lh_timeline_year);?></div>
                                <h3 class="title"><?php echo esc_attr($lh_timeline_item->lh_timeline_title);?></h3>
                                <p class="description"><?php echo esc_attr($lh_timeline_item->lh_timeline_content);?></p>
                            </<?php echo ($lh_timeline_item->lh_timeline_link) ? esc_html('a') : esc_html('div'); ?>>
                        </div>
                        <?php
                        $lh_tl_item++;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
