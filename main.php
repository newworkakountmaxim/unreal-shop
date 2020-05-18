<?php
/**
 * Template Name: Main-page
 * @package unrealbarbershop
 */
get_header(); ?>

<div class="main-wrapper">
    <?php if ( !wp_is_mobile() ): ?>
        <video style="position: absolute;z-index:0;top: 0;left: 0;width: 100%;height: 100%;-o-object-fit: cover;object-fit: cover;
	    -o-object-position: center;object-position: center;" id="bgvid" playsinline autoplay muted loop>
            <source src="<?php echo get_template_directory_uri()?>/barbershop2.mp4" type="video/mp4">
        </video>
    <?php endif; ?>
    <div class="main-content">
        <div class="main-content-logo">
            <a href="<?php echo get_site_url(); ?>">
                <img src="<?php echo get_template_directory_uri().'/img/logo.png';?>" alt="">
            </a>
        </div>
        <div class="footer-right-main-text-mob-wrapper">
            <div class="footer-right-main-text">
                <?php the_post(); the_content(); ?>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();