<?php

/**
 * This file should be used to render each module instance.
 *
 * $settings The module's settings.
 *
 */
$lh_gallery_photos = $settings->lh_gallery_photos;
?>

<div class="lh-gallery">
    <div class="gallery-container" id="lh-gallery-<?php echo esc_attr($id);?>">
        <?php
        if (!empty($lh_gallery_photos)):
            foreach ($lh_gallery_photos as $lh_gallery_photo):
                ?>
                <a class="image-gallery" href="<?php echo esc_url($lh_gallery_photo->lh_gallery_photo_src) ?>">
                    <img alt="<?php echo esc_html($lh_gallery_photo->lh_gallery_title) ?>"
                         src="<?php echo esc_url($lh_gallery_photo->lh_gallery_photo_src) ?>"/>
                    <div class="lh-image-info">
                        <?php if(!empty($lh_gallery_photo->lh_gallery_sub_title)):?>
                        <h4><?php echo esc_html($lh_gallery_photo->lh_gallery_sub_title) ?></h4>
                        <?php endif;?>
                        <?php if(!empty($lh_gallery_photo->lh_gallery_title)):?>
                        <h2><?php echo esc_html($lh_gallery_photo->lh_gallery_title) ?></h2>
                        <?php endif;?>
                    </div>
                </a>
            <?php endforeach; endif; ?>
    </div>

</div>