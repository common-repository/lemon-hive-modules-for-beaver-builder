<?php
 $lh_row_justify = $settings->lh_row_justify;
 $lh_gallery_margin = $settings->lh_gallery_margin;

?>


(function ($) {
    $(function () {
        $('#lh-gallery-<?php echo esc_attr($id);?>').justifiedGallery({
            lastRow : '<?php echo esc_html($lh_row_justify);?>',
            rowHeight : 200,
            margins : <?php echo esc_html($lh_gallery_margin);?>
        }).on('jg.complete', function () {
            $('.gallery-container').each(function() { // the containers for all your galleries
                $(this).magnificPopup({
                    delegate: 'a', // the selector for gallery item
                    type: 'image',
                    gallery: {
                        enabled:true
                    }
                });
            });
        });

    });
})(jQuery);


