<?php
/**
 * The template for displaying the footer
 *
 * @package unrealbarbershop
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="footer-wrapper">
            <a href="<?php pll_e('Ещё один сайт на WordPress'); ?>" class="footer-left" style="text-decoration: none;">
                <img src="<?php echo get_template_directory_uri().'/img/map/map-marker.png';?>" alt="">
                <?php pll_e('adres_footer'); ?>
            </a>
            <div class="footer-right">
                <?php
                if ( is_front_page() ) : ?>
                    <div class="footer-right-main-text">
                        <?php echo get_the_content(); ?>
                    </div>
                <?php
                endif;
                ?>
                <div class="footer-right-button" style="visibility: hidden">
                    <a href="#">ЗАПИСЬ ОНЛАЙН</a>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<script>
    var yWidgetSettings = {
        buttonColor : '#3451bb',
        background : 'linear-gradient(101.87deg, #5174F0 -128.82%, #2540A0 0.46%, #5174F0 50.85%, #1A338C 101.25%, #5174F0 291.88%), #434343',
        buttonPosition : 'bottom right',
        buttonAutoShow : true,
        buttonText : 'ЗАПИСЬ ОНЛАЙН',
        formPosition : 'right'
    };
</script>
<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161960169-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-161960169-1');
</script>

</body>
</html>