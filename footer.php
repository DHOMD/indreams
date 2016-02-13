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
                    <p> <a href="<?php echo esc_url( __( 'http://themes.t15.org/indreams', 'indreams' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'indreams' ), 'InDreams' ); ?></a></p>
                <?php } ?>
                        
                    </div>

                </div>
                <div class="col-md-6 col-sm-6">
                    <div class='social-icons wow bounce'>
                        <ul>
                            <?php if (indreams_get_option('indreams_facebook') != '') { ?>
                            <li><a href="<?php echo esc_url(indreams_get_option('indreams_facebook')); ?>" alt="facebook"><i class="ftr-fb"><span>Facebook</span></i></a></li>
                        <?php
                        } else {}
                        ?>

                        <?php if (indreams_get_option('indreams_twitter') != '') { ?>
                            <li><a href="<?php echo esc_url(indreams_get_option('indreams_twitter')); ?>" alt="twitter"><i class="ftr-tw"><span>Twitter</span></i></a></li>
                        <?php
                        } else {}
                        ?>

                        <?php if (indreams_get_option('indreams_google') != '') { ?>
                            <li><a href="<?php echo esc_url(indreams_get_option('indreams_google')); ?>" alt="google+"><i class="ftr-gp"><span>Google+</span></i></a></li>
                        <?php
                        } else {}
                        ?>

                        <?php if (indreams_get_option('indreams_rss') != '') { ?>
                            <li><a href="<?php echo esc_url(indreams_get_option('indreams_rss')); ?>" alt="RSS"><i class="ftr-rs"><span>RSS</span></i></a></li>
                        <?php
                        } else {}
                        ?>

                        <?php if (indreams_get_option('indreams_pinterest') != '') { ?>
                            <li><a href="<?php echo esc_url(indreams_get_option('indreams_pinterest')); ?>" alt="linkedin"><i class="ftr-pn"><span>Pinterest</span></i></a></li>
                        <?php
                        } else {}
                        ?>

                        <?php if (indreams_get_option('indreams_linkedin') != '') { ?>
                           <li><a href="<?php echo esc_url(indreams_get_option('indreams_linkedin')); ?>" alt="linkedin"><i class="ftr-ln"><span>Linkedin</span></i></a></li>
                        <?php
                        } else {}
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

