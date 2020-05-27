<?php
/**
 *Template Name: Barbers-page
 * @package unrealbarbershop
 */
get_header(); ?>

    <div class="barbers-page-wrapper">

            <div class="barbers-content-top">
                <div class="barbers-breadcrumbs">
                    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
                </div>
                <div  class="barbers-title"><?php the_title(); ?></div>
                <div class="barbers-subtitle">
                    <?php the_post(); the_content(); ?>
                </div>
            </div>

            <div class="barbers-content-bottom">
                <div class="barbers-content-slider">
                    <?php
                    wp_reset_postdata();
                    $args = array(
                        'post_type' => 'barbers',
                        'posts_per_page' => -1,
                        'order' => 'ASC');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        ?>
                        <div class="barber-item">
                            <div class="barber-item-title"><?php the_title(); ?></div>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <div class="barber-item-hover">
                                <div class="barber-item-hover-top-barber">top barber</div>
                                <div class="barber-item-hover-title"><?php the_title(); ?></div>
                                <div class="barber-item-hover-content"> <?php echo get_the_content(); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>


    </div>

<?php
get_footer();
?>
<script>
    jQuery( document ).ready(function( $ ) {
        $('.barbers-content-slider').slick({
            centerMode: true,
            //variableWidth: true,
            //respondTo: window,
            //customPaging: 50px,
            //responsive: true,
            //adaptiveHeight: true,
            centerPadding: '170px',
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        centerMode: true,
                        centerPadding: '100px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        centerMode: true,
                        centerPadding: '80px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        centerMode: true,
                        centerPadding: '60px',
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.slick-prev').html('');
        $('.slick-next').html('');
    });
</script>
