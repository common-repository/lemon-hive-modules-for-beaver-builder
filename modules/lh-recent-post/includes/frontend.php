<?php

/**
 * This file should be used to render each module instance.
 *
 * $settings The module's settings.
 *
 */
$lh_recent_post = $settings->lh_recent_post;
$posts_order = $settings->lh_posts_order;

$args = [
    'post_type' => $lh_recent_post,
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'orderby' => 'title',
    'order' => $posts_order
];
$query = new WP_Query($args);
?>

<div class="lh-rect-post-slide">
    <div class="lh-slick-slide" id="lh-recent-post-slider-<?php echo esc_attr($id); ?>">
        <?php
        if ($query->have_posts()):
            while ($query->have_posts()): $query->the_post();
                $thumbnail = get_the_post_thumbnail_url(get_the_ID());
                ?>
                <div class="lh-post-slide">
                    <a href="<?php echo esc_url(get_the_permalink()); ?>" class="lh-recent-post-thumb">
                        <?php if (!empty($thumbnail)): ?>
                            <img src="<?php echo esc_url($thumbnail); ?>" alt="Thumbnail">
                        <?php endif; ?>
                    </a>

                    <ul class="lh-recent-post-meta">
                        <li><?php echo esc_html(get_the_date('m F, Y')); ?></li>
                    </ul>
                    <div class="lh-post-header">
                        <h3 class="lh-post-title"><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php
                                echo wp_trim_words(get_the_title(), 5, '...');
                                ?></a></h3>
                    </div>
                    <p class='recent-post-comment'><?php
                        comments_popup_link('No comment', '1 comment', '% comments', 'comments-link', 'Comments are off');
                        ?>
                    </p>
                </div>
            <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>