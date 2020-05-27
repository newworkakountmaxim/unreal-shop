<?php
/**
 *Template Name: Services-page
 * @package unrealbarbershop
 */
get_header(); ?>

    <div class="service-page-wrapper">
        <div class="service-content-top">
            <div class="service-breadcrumbs">
                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
            </div>
            <div  class="service-title"><?php the_title(); ?></div>
            <div class="service-subtitle">
                <?php the_post(); the_content(); ?>
            </div>
        </div>

        <div class="service-content-bottom">
            <div class="service-wrapper">

                <?php
                $args = array(
                    'post_type' => 'services',
                    'posts_per_page' => -1,
                    'order' => 'ASC');
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                    ?>
                    <div class="service-item">
                        <div class="service-item-title"><?php the_title(); ?></div>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <div class="service-item-prices">
                            <div class="service-item-prices-left"><?php echo get_field('barber'); ?></div>
                            <div class="service-item-prices-right"><?php echo get_field('top_barber'); ?></div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>


    </div>

<?php
get_footer();