<?php
$lh_slide_to_show = $settings->lh_slide_to_show;
$lh_slide_to_scroll = $settings->lh_slide_to_scroll;
$lh_dots = $settings->lh_dots;
$lh_arrows = $settings->lh_arrows;
$lh_autoplay = $settings->lh_autoplay;
$lh_speed = $settings->lh_speed;
$lh_autoplaySpeed = $settings->lh_autoplay_speed;
?>

(function ($) {
    $(function () {
        $("#lh-recent-post-slider-<?php echo esc_attr($id);?>").slick({
            infinite: true,
            autoplay: <?php echo esc_html($lh_autoplay);?>,
            slidesToShow: <?php echo esc_html($lh_slide_to_show);?>,
            slidesToScroll: <?php echo esc_html($lh_slide_to_scroll);?>,
            speed: <?php echo esc_html($lh_speed);?>,
            autoplaySpeed: <?php echo esc_html($lh_autoplaySpeed);?>,
            dots: <?php echo esc_html($lh_dots);?>,
            arrows: <?php echo esc_html($lh_arrows);?>,
            prevArrow: '<i class="fas fa-arrow-left prev-arrow"></i>',
            nextArrow: '<i class="fas fa-arrow-right next-arrow"></i>',
            centerMode: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
})(jQuery);