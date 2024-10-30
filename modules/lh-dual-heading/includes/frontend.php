<?php

/**
 * This file should be used to render each module instance.
 *
 * $settings The module's settings.
 *
 */
$heading_one = $settings->heading_one;
$heading_two = $settings->heading_two;
$select_heading = $settings->select_heading;
$sub_heading = $settings->sub_heading;
?>
<div class="lh-dual-heading">
    <?php  if (!empty($sub_heading)) { ?>
    <p class="sub-heading"><?php echo esc_html($sub_heading); ?></p>
    <?php } ?>
    <<?php echo esc_attr($select_heading);?> class="lh-d-heading">
    <?php if (!empty($heading_one)) { ?>
        <span class="heading-one"><?php echo esc_html($heading_one); ?></span>
    <?php } ?>
    <?php if (!empty($heading_two)) { ?>
        <span class="heading-two"><?php echo esc_html($heading_two); ?></span>
    <?php } ?>
</<?php echo esc_attr($select_heading);?>>
</div>
