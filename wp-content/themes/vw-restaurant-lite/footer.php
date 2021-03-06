<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VW Restaurant Lite
 */
?>
	<div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-1');?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-2');?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-3');?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-4');?>
                </div>
            </div>
        </div>
	</div>
	<div class="inner">
        <div class="copyright copyright-wrapper">
        	<p><?php echo esc_html(get_theme_mod('vw_restaurant_lite_footer_copy',__('Design & Developed By','vw-restaurant-lite'))); ?> <?php echo esc_html(vw_restaurant_lite_credit(),'vw-restaurant-lite'); ?></p>
        </div>
        <div class="clear"></div>
    </div>
    <?php wp_footer(); ?>

    </body>
</html>