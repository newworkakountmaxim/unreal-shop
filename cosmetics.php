<?php
/**
 *Template Name: Cosmetics-page
 * @package unrealbarbershop
 */
get_header(); ?>

    <div class="tip-wrapper">
        <div class="tip-content">
            <div class="">

                <div  class="tip-title"><?php pll_e('assortiment'); ?></div>
                <div class="tip-buttons">
                    <a href="tel:0990993636"><?php pll_e('call'); ?></a>
                    <a href="<?php echo get_site_url().'/contacts'; ?>"><?php pll_e('map'); ?></a>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();