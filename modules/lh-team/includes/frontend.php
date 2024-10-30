<?php

/**
 * This file should be used to render each module instance.
 *
 * $settings The module's settings.
 *
 */
$lh_team_items = $settings->lh_team_items;
$lh_team_columns = $settings->lh_team_columns;

$allowed_html = [
    'br' => [],
    'strong' => []
]; ?>

<div class="lh-team-section">
    <div class="container">
        <div class="row">
            <?php
            $lh_team_item_count = 0;
            foreach ($lh_team_items as $lh_team_item):
                ?>
                <div class="col-lg-<?php echo esc_attr($lh_team_columns); ?> col-md-<?php echo esc_attr($lh_team_columns); ?> col-sm-12">
                    <div id="lh-team-items-<?php echo esc_attr($lh_team_item_count);?>" class="lh-team-items">
                        <div class="lh-team-single-item">
                            <div class="lh-team-image">
                                <div class="lh-team-member-image">
                                    <?php if (!empty($lh_team_item->lh_team_photo_src)): ?>
                                        <img src="<?php echo esc_url($lh_team_item->lh_team_photo_src); ?>" alt="Team member"/>
                                    <?php endif; ?>
                                </div>
                                <?php
                                $lh_team_social_list = $lh_team_item->lh_team_social_items;
                                if (!empty($lh_team_social_list)):
                                    ?>
                                    <div class="lh-team-socials">
                                        <?php 
                                        $lh_sl_item = 0;
                                        foreach ($lh_team_social_list as $lh_team_social_item):
                                            $lh_team_s_item = json_decode($lh_team_social_item); ?>
                                            <?php if(!empty($lh_team_s_item->lh_team_social_link)): ?>   
                                            <a id="lh-team-social-icon-<?php echo esc_attr($lh_sl_item);?>" href="<?php echo esc_url($lh_team_s_item->lh_team_social_link); ?>"
                                               class="lh-team-social-btn" target="_self">
                                               <?php if(!empty($lh_team_s_item->lh_social_icon)): ?>    
                                               <i class="<?php echo esc_attr($lh_team_s_item->lh_social_icon); ?>"></i>
                                               <?php endif; ?>
                                            </a>
                                            <?php endif; ?>
                                        <?php $lh_sl_item++;
                                    endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="lh-team-content">
                                <?php if(!empty($lh_team_item->lh_team_name)): ?>                            
                                <h4><?php echo esc_html($lh_team_item->lh_team_name); ?></h4>
                                <?php endif; ?>
                                <?php if(!empty($lh_team_item->lh_team_position)): ?>
                                <p><?php echo esc_html($lh_team_item->lh_team_position); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            $lh_team_item_count++;
            endforeach;
            ?>
        </div>
    </div>
</div>