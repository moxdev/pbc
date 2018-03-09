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
    <?php if( function_exists( 'get_field' ) ) :
      $dicount_content = get_field( 'discount_code_content', 'discount-code' );

      if ( $dicount_content ): ?>

        <section class="discount-code">
          <?php echo wp_kses_post( $dicount_content ); ?>
        </section>

      <?php endif; ?>
    <?php endif; ?>

		<div class="site-branding">
			<?php
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

		<div id="site-navigation" class="main-navigation">
      <div class="flex-wrapper">
        <button id="menu-toggle" class="flex-child" aria-controls="primary-menu" aria-expanded="false">
          <span class="menu-title">Menu</span>
          <span class="hamburger"></span>
          <span class="hamburger"></span>
        </button>

        <div class="pbc-logo flex-child">
          <a href="<?php echo get_home_url(); ?>" rel="home">
            <svg xmlns="http://www.w3.org/2000/svg" width="72.25" height="60.26" viewBox="0 0 72.25 60.26"><defs><style>.a{fill:none;}.b{fill:#3a2a1d;}.c{clip-path:url(#a);}.d{fill:#f04923;}.e{fill:#eda920;}.f{fill:#2abbaf;}</style><clipPath id="a"><path d="M0 0h72.25v60.26H0z" class="a"/></clipPath></defs><title>pbc-logo</title><path d="M0 0v60.26h10.37V57.1h-6.8V3.16h6.8V0H0zM61.88 0v2.94h7v54.38h-7v2.94h10.37V0H61.88z" class="b"/><g class="c"><path d="M16.54 13h1.33c.7 0 1.4-.25 1.4-1.1s-.94-1.05-1.7-1.05h-1zm-2-3.83h3.36c1.88 0 3.44.6 3.44 2.74S19.9 14.7 18 14.7h-1.46v3.53h-2zM23.86 12.94H25c.72 0 1.67 0 1.67-1s-.82-1-1.55-1h-1.3zm-2-3.74h3.5c1.85 0 3.4.64 3.4 2.74a2.33 2.33 0 0 1-1.95 2.48l2.3 3.8h-2.37l-1.9-3.6h-1v3.6h-2zM33.26 16.62c1.52 0 2.52-1.22 2.52-2.9a2.55 2.55 0 1 0-5.05 0 2.6 2.6 0 0 0 2.53 2.9m0-7.65c2.53 0 4.38 1.85 4.38 4.74s-1.85 4.76-4.38 4.76-4.4-1.85-4.4-4.75S30.73 9 33.27 9" class="d"/></g><path d="M38.3 9.2h3l2.1 5.9 2.1-5.9h3v9.03h-2V11.3l-2.4 6.93h-1.5l-2.3-6.93v6.93h-2V9.2z" class="d"/><g class="c"><path d="M53.47 16.62a2.6 2.6 0 0 0 2.53-2.9 2.55 2.55 0 1 0-5.06 0 2.6 2.6 0 0 0 2.53 2.9m0-7.65c2.54 0 4.4 1.85 4.4 4.74s-1.87 4.76-4.4 4.76-4.4-1.85-4.4-4.75S50.94 9 53.48 9" class="d"/><path d="M17.87 33.93h2.9c1 0 2.16-.44 2.16-1.72s-1.55-1.6-2.6-1.6h-2.46zm0-6.08h2.35c1 0 2-.4 2-1.6s-1.16-1.53-2.18-1.53h-2.2zM14.64 22h5.47c2.58 0 5.38.54 5.38 3.73A3.3 3.3 0 0 1 23 29a3.52 3.52 0 0 1 3.22 3.6c0 3.06-2.9 4.07-5.52 4.07h-6zM35 34.05a4.43 4.43 0 0 0 4.56-4.73 4.56 4.56 0 1 0-9.12 0A4.43 4.43 0 0 0 35 34.05m0-12.44c4.58 0 7.92 3 7.92 7.72S39.54 37 35 37s-8-3-8-7.68 3.34-7.7 7.92-7.7" class="e"/></g><path d="M47.44 29l-4.85-7.02h4.05l3.13 5.15 3-5.15h3.93l-4.74 6.95 5.3 7.73h-4.05l-3.58-5.9-3.5 5.9H42.3L47.44 29z" class="e"/><path d="M22.9 43.2a2.85 2.85 0 0 0-2.27-1 3.58 3.58 0 0 0-3.48 3.87 3.57 3.57 0 0 0 3.4 3.93A2.86 2.86 0 0 0 23 48.67l2.2 1.65a5.24 5.24 0 0 1-4.34 2.1c-3.76 0-6.5-2.47-6.5-6.33s2.74-6.34 6.5-6.34A5.16 5.16 0 0 1 25 41.53zM26.8 40.06h2.64v9.6h4.92v2.45H26.8V40.07z" class="f"/><g class="c"><path d="M45.57 47.46c0 2.84-1.74 4.95-5.07 4.95s-5.08-2.1-5.08-4.94v-7.4h2.65v7.3a2.43 2.43 0 1 0 4.85 0v-7.3h2.65zM50.8 49.86h2.37c.84 0 1.77-.35 1.77-1.4s-1.27-1.34-2.14-1.34h-2zm0-5h1.9c.83 0 1.68-.34 1.68-1.3s-1-1.27-1.78-1.27h-1.8zm-2.66-4.8h4.5c2.1 0 4.4.43 4.4 3.05A2.7 2.7 0 0 1 55 45.8a2.9 2.9 0 0 1 2.64 2.95c0 2.5-2.38 3.35-4.53 3.35h-4.96z" class="f"/></g></svg>
          </a>

          <span class="logo-title">
            <span class="row-1">Powered by</span>
            <span class="row-2">Millennium Marketing Solutions</span>
          </span>
        </div>

        <nav class="aux-nav flex-child">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'aux-menu',
              'menu_id'        => 'aux-menu',
            ) );
          ?>
        </nav>

      </div>

      <nav class="main-nav">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'main-menu',
            'menu_id'        => 'main-menu',
          ) );
        ?>
      </nav>

		</div><!-- #site-navigation -->
  </header><!-- #masthead -->

  <?php if( function_exists( 'promo_box_club_custom_header_section' ) ) : promo_box_club_custom_header_section(); endif; ?>

	<div id="content" class="site-content">


