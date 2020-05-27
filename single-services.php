<?php
/**
 * @package unrealbarbershop
 */
get_header(); ?>

    <div class="tip-wrapper">
        <div class="tip-content">
            <div class="tip-breadcrumbs">
                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
            </div>
            <div class="tip-title">
                <?php the_title(); ?>
            </div>
            <div class="tip-content-wrapper">
                <div class="tip-content-text">
                    <?php the_post(); the_content();?>
                </div>
                <div class="tip-content-img">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                </div>
            </div>

        </div>
    </div>

<?php
get_footer();

