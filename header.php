<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Promo_Box_Club
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'promo_box_club' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
      <div class="flex-wrapper">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
          <span>Menu</span>
          <span class="hamburger"></span>
          <span class="hamburger"></span>
        </button>

        <div class="pbc-logo">
          <a href="<?php echo get_home_url(); ?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="72.25" height="60.26" viewBox="0 0 72.25 60.26"><defs><style>.a{fill:none;}.b{fill:#3a2a1d;}.c{clip-path:url(#a);}.d{fill:#f04923;}.e{fill:#eda920;}.f{fill:#2abbaf;}</style><clipPath id="a" transform="translate(0 0)"><rect class="a" width="72.25" height="60.26"/></clipPath></defs><title>pbc-logo</title><polygon class="b" points="0 0 0 60.26 10.37 60.26 10.37 57.11 3.57 57.11 3.57 3.15 10.37 3.15 10.37 0 0 0"/><polygon class="b" points="61.88 0 61.88 2.94 68.89 2.94 68.89 57.32 61.88 57.32 61.88 60.26 72.25 60.26 72.25 0 61.88 0"/><g class="c"><path class="d" d="M16.54,13h1.33c.7,0,1.4-.25,1.4-1.09s-.94-1.06-1.71-1.06h-1Zm-2-3.83H17.9c1.88,0,3.44.6,3.44,2.74S19.89,14.71,18,14.71H16.54v3.52h-2Z" transform="translate(0 0)"/><path class="d" d="M23.86,12.94H25c.72,0,1.67,0,1.67-1s-.82-1-1.55-1h-1.3Zm-2-3.74h3.5c1.85,0,3.4.64,3.4,2.74a2.33,2.33,0,0,1-1.95,2.48l2.3,3.81H26.73l-1.89-3.61h-1v3.61h-2Z" transform="translate(0 0)"/><path class="d" d="M33.26,16.62c1.52,0,2.52-1.22,2.52-2.91a2.55,2.55,0,1,0-5.05,0,2.61,2.61,0,0,0,2.53,2.91m0-7.65c2.53,0,4.38,1.85,4.38,4.74s-1.85,4.75-4.38,4.75-4.39-1.85-4.39-4.75S30.72,9,33.26,9" transform="translate(0 0)"/></g><polygon class="d" points="38.3 9.2 41.31 9.2 43.39 15.09 43.41 15.09 45.51 9.2 48.5 9.2 48.5 18.23 46.51 18.23 46.51 11.3 46.49 11.3 44.11 18.23 42.6 18.23 40.31 11.3 40.29 11.3 40.29 18.23 38.3 18.23 38.3 9.2"/><g class="c"><path class="d" d="M53.47,16.62A2.61,2.61,0,0,0,56,13.71a2.55,2.55,0,1,0-5.06,0,2.61,2.61,0,0,0,2.53,2.91m0-7.65c2.54,0,4.39,1.85,4.39,4.74S56,18.46,53.47,18.46s-4.39-1.85-4.39-4.75S50.93,9,53.47,9" transform="translate(0 0)"/><path class="e" d="M17.87,33.93h2.91c1,0,2.15-.44,2.15-1.72s-1.55-1.62-2.61-1.62H17.87Zm0-6.08h2.35c1,0,2-.41,2-1.6s-1.16-1.53-2.18-1.53h-2.2ZM14.64,22h5.47c2.57,0,5.37.54,5.37,3.73A3.3,3.3,0,0,1,23,29v0a3.52,3.52,0,0,1,3.22,3.59c0,3.07-2.91,4.08-5.52,4.08h-6Z" transform="translate(0 0)"/><path class="e" d="M35,34.05a4.43,4.43,0,0,0,4.56-4.73,4.56,4.56,0,1,0-9.12,0A4.43,4.43,0,0,0,35,34.05m0-12.44c4.58,0,7.92,3,7.92,7.71S39.54,37,35,37,27,34,27,29.32s3.34-7.71,7.92-7.71" transform="translate(0 0)"/></g><polygon class="e" points="47.44 28.99 42.59 21.98 46.65 21.98 49.78 27.13 52.79 21.98 56.71 21.98 51.96 28.93 57.27 36.66 53.21 36.66 49.62 30.75 46.13 36.66 42.3 36.66 47.44 28.99"/><g class="c"><path class="f" d="M22.91,43.19a2.85,2.85,0,0,0-2.28-1,3.58,3.58,0,0,0-3.48,3.88A3.57,3.57,0,0,0,20.55,50,2.86,2.86,0,0,0,23,48.67l2.21,1.65a5.24,5.24,0,0,1-4.35,2.09c-3.76,0-6.5-2.46-6.5-6.32s2.74-6.33,6.5-6.33A5.16,5.16,0,0,1,25,41.53Z" transform="translate(0 0)"/></g><polygon class="f" points="26.79 40.06 29.44 40.06 29.44 49.66 34.36 49.66 34.36 52.11 26.79 52.11 26.79 40.06"/><g class="c"><path class="f" d="M45.57,47.46c0,2.84-1.74,4.95-5.07,4.95s-5.08-2.11-5.08-4.95v-7.4h2.65v7.3a2.43,2.43,0,1,0,4.85,0v-7.3h2.65Z" transform="translate(0 0)"/><path class="f" d="M50.79,49.86h2.38c.84,0,1.77-.35,1.77-1.41s-1.27-1.33-2.14-1.33h-2Zm0-5h1.92c.82,0,1.67-.34,1.67-1.31s-1-1.26-1.78-1.26H50.79Zm-2.65-4.81h4.49c2.11,0,4.4.44,4.4,3.06A2.71,2.71,0,0,1,55,45.78v0a2.9,2.9,0,0,1,2.64,2.95c0,2.51-2.38,3.35-4.53,3.35H48.14Z" transform="translate(0 0)"/></g></svg></a>
        </div>

        <div class="aux-nav-container">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'aux-menu',
              'menu_id'        => 'aux-menu',
            ) );
          ?>
        </div>

      </div>


			<?php
				wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'menu_id'        => 'main-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<?php if( is_front_page() && has_post_thumbnail() ) : ?>

    <section class="hero">
	    <figure class="feature-img">
	  	  <?php the_post_thumbnail('home-feature'); ?>
	    </figure>

      <?php if ( function_exists( 'get_field' ) ) :
        $hero_title        = get_field( 'home_hero_title' );
        $hero_accent_title = get_field( 'home_hero_title_accent_color' );
        $hero_btn_text     = get_field( 'home_hero_button_text' );
        $hero_btn_link     = get_field( 'home_hero_button_page_link' ); ?>

        <div class="title-wrapper">
          <span class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></span>
          <span class="accent-title"><?php echo wp_kses_post( $hero_accent_title ); ?></span>
          <a href="<?php echo wp_kses_post( $hero_btn_link ); ?>"><button><?php echo wp_kses_post( $hero_btn_text ); ?></button></a>
        </div>

      <?php endif; ?>

    </section>

	<?php endif; ?>

  <?php if( !is_front_page() && has_post_thumbnail() ) : ?>

    <section class="hero">
	    <figure class="feature-img">
	  	  <?php the_post_thumbnail('home-feature'); ?>
	    </figure>
    </section>

	<?php endif; ?>

	<div id="content" class="site-content">


