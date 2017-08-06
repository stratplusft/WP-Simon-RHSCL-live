<?php
/**
 * The Header without an image for our child theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package simone-child
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
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header no-header-image" role="banner">
            <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'simone' ); ?></a>
                
            <?php
                // No Header image - just use branding
                    echo '<div class="site-branding">';
               
            ?>
                    <div class="title-box">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    </div>
		</div>

		<nav id="site-navigation" class="main-navigation clear" role="navigation">
                    <h1 class="menu-toggle"><a href="#"><?php _e( 'Menu', 'simone' ); ?></a></h1>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                
                        <div class="search-toggle">
                            <i class="fa fa-search"></i>
                            <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'simone' ); ?></a>
                        </div>
                        <?php simone_social_menu(); ?>


		</nav><!-- #site-navigation -->

                <div id="header-search-container" class="search-box-wrapper clear hide">
			<div class="search-box clear">
				<?php get_search_form(); ?>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
