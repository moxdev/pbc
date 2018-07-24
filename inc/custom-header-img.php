<?php
/**
 * Custom function for Custom Header Image
 *
 * @package Promo_Box_Club
 */

function promo_box_club_custom_header_section() {
  if( is_front_page() && has_post_thumbnail() ) { ?>

    <section class="hero">

      <?php the_post_thumbnail('home-feature'); ?>

      <?php if ( function_exists( 'get_field' ) ) :
        $hero_title        = get_field( 'home_hero_title' );
        $hero_accent_title = get_field( 'home_hero_title_accent_color' );
        $hero_btn_text     = get_field( 'home_hero_button_text' );
        $hero_btn_link     = get_field( 'home_hero_button_page_link' ); ?>

        <div class="title-wrapper">
          <span class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></span>
          <span class="accent-title"><?php echo wp_kses_post( $hero_accent_title ); ?></span>
          <a class="btn" href="<?php echo wp_kses_post( $hero_btn_link ); ?>"><?php echo wp_kses_post( $hero_btn_text ); ?></a>
        </div>

      <?php endif; ?>

    </section>

    <?php

  } elseif ( is_home() || is_archive() || is_single() || is_404() ) {
    $news_feature_img = get_the_post_thumbnail( get_option( 'page_for_posts' ), 'feature-img' ); ?>

    <section class="hero">
      <figure class="feature-img">
        <?php echo $news_feature_img; ?>
      </figure>
    </section>

    <?php

  } elseif ( is_page() && has_post_thumbnail() ) { ?>

    <section class="hero">
      <figure class="feature-img">
        <?php the_post_thumbnail('feature-img'); ?>
      </figure>
    </section>

    <?php
  }
}
