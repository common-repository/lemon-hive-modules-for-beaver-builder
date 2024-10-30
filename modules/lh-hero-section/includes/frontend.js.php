<?php
$lh_banner_type = $settings->lh_banner_type;
$lh_dots = $settings->lh_dots;
$lh_arrows = $settings->lh_arrows;
$lh_autoplay = $settings->lh_autoplay;
$lh_speed = $settings->lh_autoplay_speed;
$lh_autoplaySpeed = $settings->lh_autoplay_speed;

?>

<?php if( $lh_banner_type == "slider" ): ?>
(function ($) {
  const swiper = new Swiper('#lh-hero-section-slider-<?php echo esc_attr($id);?>', {
      loop: true,
      loopFillGroupWithBlank: true,
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
      waitForTransition: true,
      <?php if( $lh_autoplay == 'true' ): ?>
      autoplay: {
        delay: <?php echo esc_attr($lh_speed); ?>,
      },
      <?php endif; ?>
      <?php if( $lh_dots == 'true' ): ?>
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      <?php endif; ?>
      <?php if( $lh_arrows == 'true' ): ?>
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      <?php endif; ?>
  });
})(jQuery);
<?php endif; ?>

