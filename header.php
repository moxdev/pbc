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
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Main Menu', 'promo_box_club' ); ?></button>
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


