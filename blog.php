<?php
/**
 *Template Name: Blog-page
 * @package unrealbarbershop
 */
get_header(); ?>

    <div class="tip-wrapper">
        <div class="tip-content">
            <div class="">
                <div class="tip-breadcrumbs">
                    breadcrumbs
                </div>
                <div  class="tip-title"><?php the_title(); ?></div>
                <div class="tip-subtitle">
                    <?php the_post(); the_content(); ?>
                </div>
                <div class="tip-buttons">
                    <a href="tel:0990993636"><?php pll_e('call'); ?></a>
                    <a href="<?php echo get_site_url().'/contacts'; ?>"><?php pll_e('map'); ?></a>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();