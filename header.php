<<<<<<< HEAD
<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package indreams
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'indreams' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="menu-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav id="site-navigation" class="main-navigation text-center" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
						<nav id="mobile-navigation" class="text-center" role="navigation">
						<div id="mobile-menu-trigger">
	    					<span></span>
	    					<span></span>
	    					<span></span>
	    				</div>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'mobile-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div>

		<div class="site-branding-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="site-branding text-center">
							<?php indreams_the_custom_logo(); ?>
							<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
							</h1>
						<?php
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
						</div><!-- .site-branding -->
					</div>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<div class="container">    
        <div class="row">
            <p id="back-top">
                <a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
            </p>
        </div>
    </div>

	<div id="content" class="site-content">
=======
<?php
 ?>
<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(); ?></title>

        <?php wp_head(); ?>
 
    </head>
    <body <?php body_class(); ?>>
        <div>
            <div class="header">
                <a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'indreams' ); ?></a>    
            </div>
        <!-- header start here -->
       
            <div class="header-wrapper">
            <div class="container">
                <div class="col-md-12 col-sm-12">
                    <div class="logo">
                        <?php if (indreams_get_option('indreams_logo') != '') { ?>
                                <a href="<?php echo home_url('/'); ?>">
                                    <img src="<?php echo indreams_get_option('indreams_logo'); ?>" alt="<?php bloginfo('name'); ?>">
				</a>
				<?php } else { ?> 
                                       <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
						<p><?php bloginfo('description'); ?></p>
				<?php } ?>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="contact" >
                        <?php if (indreams_get_option('indreams_rightside') != '') { ?>
                                <p><?php echo esc_html(indreams_get_option('indreams_rightside')); ?></p>
                        <?php } else { 
                             } ?> 
                    </div>
                </div>
            </div>
        </div>
        <!-- menu start here -->	
        <div class="menu-wrapper">
            <div class="container">
                <div class="col-md-12">          
                    <header>
                        <nav><?php indreams_mobile_nav(); ?>   </nav>                                           
                    </header>
                </div>
            
                <div class="col-md-12">
                    <div class='menu ' >
                       <?php indreams_nav(); ?>
                    </div>
                </div>
            </div>
        </div>
         <!-- menu end here -->
        <!-- header end here --> 
        
         <!-- this code is used for a button that go to top of website --> 
        <div class="container">
            <p id="back-top" style="display: block;">
                            <a href="#top"><span><i class="fa fa-arrow-up"><span>Back to Top</span></i></span></a>
            </p>
        </div>
       

        <!---------------------------------------------------->
>>>>>>> 5dba24a (Sorta backport to my theme)
