<<<<<<< HEAD
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package indreams
 */

?>

	</div><!-- #content -->

	<?php

        $footer_widget_style = esc_attr(get_theme_mod('footer_widget_style', '3'));
$footer_credits      = get_theme_mod('footer_credits');

?>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div id="" class="footer-wrapper">
			<div class="container">
			<?php if (is_active_sidebar('first-footer-widget') || is_active_sidebar('second-footer-widget') || is_active_sidebar('third-footer-widget') || is_active_sidebar('fourth-footer-widget')) { ?>
				<div class="row footer-widget-wrapper">
		            <?php if($footer_widget_style == '4') { ?>
		                <div class="col-md-3 first">
		            <?php } elseif($footer_widget_style == '3') { ?>
		                <div class="col-md-4 first">
		            <?php } elseif($footer_widget_style == '2') { ?>
		                <div class="col-md-6 first">
		            <?php } elseif($footer_widget_style == '1') { ?>
		                <div class="col-md-12 first">
		            <?php } ?>
		                    <div class="footer-widget-column">
		                      	<?php if (is_active_sidebar('first-footer-widget')) : ?>
		                            <?php dynamic_sidebar('first-footer-widget'); ?>
		                        <?php endif; ?>
		                    </div>    
		                </div>
		                    
		            <?php if($footer_widget_style == '4') { ?>
		                <div class="col-md-3 second">
		            <?php } elseif($footer_widget_style == '3') { ?>
		                <div class="col-md-4 second">
		            <?php } elseif($footer_widget_style == '2') { ?>
		                <div class="col-md-6 second">
		            <?php } ?>
		            <?php if($footer_widget_style == '4' || $footer_widget_style == '3' || $footer_widget_style == '2') { ?>
		                    <div class="footer-widget-column">
		                       <?php if (is_active_sidebar('second-footer-widget')) : ?>
		                            <?php dynamic_sidebar('second-footer-widget'); ?>
		                     <?php endif; ?>
		                    </div>
		                </div>
		             <?php } ?>
		                    
		            <?php if($footer_widget_style == '4') { ?>
		                <div class="col-md-3 third">
		            <?php } elseif($footer_widget_style == '3') { ?>
		                <div class="col-md-4 third">
		            <?php } ?>
		            <?php if($footer_widget_style == '4' || $footer_widget_style == '3') { ?>
		                    <div class="footer-widget-column">
	                        <?php if (is_active_sidebar('third-footer-widget')) : ?>
	                            <?php dynamic_sidebar('third-footer-widget'); ?>
		                     <?php endif; ?>
		                    </div>
		                </div>
		             <?php } ?>
		                    
		            <?php if($footer_widget_style == '4') { ?>
		                <div class="col-md-3 fourth">
		                    <div class="footer-widget-column">
	                        <?php if (is_active_sidebar('fourth-footer-widget')) : ?>
	                            <?php dynamic_sidebar('fourth-footer-widget'); ?>
		                     <?php endif; ?>
		                    </div>
		                </div>
		            <?php } ?>
		        </div>
		    <?php } ?>

		        <div class="row">
		        	<div class="col-md-12">
						<div class="site-info text-center">
						<?php if(isset($footer_credits) && $footer_credits != '') { ?>
							<?php echo $footer_credits; ?>
						<?php } else { ?>
							<a href="<?php echo esc_url(__('https://wordpress.org/', 'indreams')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'indreams'), 'WordPress'); ?></a>
							<span class="sep"> | </span>
							<?php printf(esc_html__('Theme: %1$s by %2$s.', 'indreams'), 'indreams', '<a href="http://gleedthemes.com/" rel="designer">GleedThemes.com</a>'); ?>
						<?php } ?>
						</div><!-- .site-info -->
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
=======
<?php
/**
 * The template for displaying the footer
 *
 * @package InDreams
 */
?>

        <!--foter sidebar start here --> 
        <div class="footer-sidebar-wrapper">
            <div class="container">
                <div class="col-md-3">
                    <div class='fsidebar' >
                    </div>

                </div>
                <div class="col-md-3">
                    <div class='fsidebar' >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class='fsidebar'>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class='fsidebar'>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer sidebar end here -->  
        <!---------------------------------------------------->

        <!--foter sidebar start here --> 
        <div class="footer-wrapper">
            <div class="container">
                <div class="col-md-6 col-sm-6">
                    <div class='footer-left'>
                        <?php if (indreams_get_option('indreams_footertext') != '') { ?>
                        <p><?php echo esc_html(indreams_get_option('indreams_footertext')); ?></p>

                <?php } else { ?>    
                    <p> <a href="<?php echo esc_url(__('http://themes.t15.org/indreams', 'indreams')); ?>"><?php printf(__('Proudly powered by %s', 'indreams'), 'InDreams'); ?></a></p>
                <?php } ?>
                        
                    </div>

                </div>
                <div class="col-md-6 col-sm-6">
                    <div class='social-icons wow bounce'>
                        <ul>
                            <?php if (indreams_get_option('indreams_facebook') != '') { ?>
                            <li><a href="<?php echo esc_url(indreams_get_option('indreams_facebook')); ?>" alt="facebook"><i class="ftr-fb"><span>Facebook</span></i></a></li>
                        <?php
                            } else {
                            }
?>

                        <?php if (indreams_get_option('indreams_twitter') != '') { ?>
                            <li><a href="<?php echo esc_url(indreams_get_option('indreams_twitter')); ?>" alt="twitter"><i class="ftr-tw"><span>Twitter</span></i></a></li>
                        <?php
                        } else {
                        }
?>

                        <?php if (indreams_get_option('indreams_google') != '') { ?>
                            <li><a href="<?php echo esc_url(indreams_get_option('indreams_google')); ?>" alt="google+"><i class="ftr-gp"><span>Google+</span></i></a></li>
                        <?php
                        } else {
                        }
?>

                        <?php if (indreams_get_option('indreams_rss') != '') { ?>
                            <li><a href="<?php echo esc_url(indreams_get_option('indreams_rss')); ?>" alt="RSS"><i class="ftr-rs"><span>RSS</span></i></a></li>
                        <?php
                        } else {
                        }
?>

                        <?php if (indreams_get_option('indreams_pinterest') != '') { ?>
                            <li><a href="<?php echo esc_url(indreams_get_option('indreams_pinterest')); ?>" alt="linkedin"><i class="ftr-pn"><span>Pinterest</span></i></a></li>
                        <?php
                        } else {
                        }
?>

                        <?php if (indreams_get_option('indreams_linkedin') != '') { ?>
                           <li><a href="<?php echo esc_url(indreams_get_option('indreams_linkedin')); ?>" alt="linkedin"><i class="ftr-ln"><span>Linkedin</span></i></a></li>
                        <?php
                        } else {
                        }
?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- footer sidebar end here -->  
        <!---------------------------------------------------->
        </div>
         <?php wp_footer(); ?>
    </body>
</html>

>>>>>>> 5dba24a (Sorta backport to my theme)
