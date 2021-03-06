<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kyle_Westaway_-_Minimal
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		
		<nav class="navbar navbar-fixed-top" role="navigation">
		  	<div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      	<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title">
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="site-title-text"><?php bloginfo( 'name' ); ?></span> 
								<!--<img src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); echo $image[0]; ?>" class="img-responsive" height="20" />-->
							</a>
						</h1>

						
					<?php else : ?>
						<span class="site-title">
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="site-title-text"><?php bloginfo( 'name' ); ?></span> 
								<!--<img src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); echo $image[0]; ?>" class="img-responsive" height="20" />-->
							</a>
						</span>
					<?php
					endif;
					?>

			    </div>

		        <?php
		            wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse',
		                'container_id'      => 'bs-navbar-collapse-1',
		                'menu_class'        => 'nav navbar-nav navbar-right',
		                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		                'walker'            => new WP_Bootstrap_Navwalker())
		            );
		        ?>
    		</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
