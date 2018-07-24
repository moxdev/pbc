<?php
/**
 * Custom function for homepage
 *
 * @package Promo_Box_Club
 */

function promo_box_club_home_video_carousel_section() {
	if ( function_exists( 'get_field' ) ) {
    $home_video                 = get_posts( array('post_type' => 'home_videos', 'posts_per_page' => -1) );
    $home_videos_section_title  = get_field( 'video_carousel_section_title' );
    $home_videos_btn_text       = get_field( 'video_carousel_section_button_text' );
    $home_videos_page_link      = get_field( 'video_carousel_section_button_page_link' );

    if ($home_video) {
        // WP_Query arguments
        $args = array(
            'post_type'   => array( 'home_videos' ),
            'post_status' => array( 'publish' ),
            'nopaging'    => true,
            'order'       => 'DESC',
            'orderby'     => 'date',
        );
        // The Query
        $home_videos = new WP_Query( $args );
        // The Loop
        if ( $home_videos->have_posts() ) { ?>

          <section class="home-video-carousel">
            <div class="home-video-wrapper">

              <?php if ( $home_videos_section_title ): ?>
                <h2 class="section-title"><?php echo wp_kses_post( $home_videos_section_title ); ?></h2>
              <?php endif; ?>

              <div class="video-carousel">

              <?php while ( $home_videos->have_posts() ) {
                  $home_videos->the_post();
                  $youtube_video = get_field( 'video_carousel_youtube_video', $post->ID ); ?>

                  <div class="cell">
                    <div class="cell-wrapper">

                      <figure class="video-featured-image">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-video-feature'); ?></a>
                      </figure>

                      <span class="title"><?php the_title(); ?></span>

                      <div class="video-content-wrapper">
                        <?php the_content(); ?>
                      </div>

                    </div><!-- cell-wrapper -->
                  </div><!-- cell -->

                <?php

              } ?>

              </div><!-- video-carousel -->

              <div class="button-wrapper">
                <p class="carousel-status"></p>

                <a href="<?php echo esc_attr( $home_videos_page_link ); ?>"><button><?php echo esc_html( $home_videos_btn_text ); ?></button></a>

              </div>
            </div><!-- home-video-wrapper -->
          </section>

        <?php
        }
        // Restore original Post Data
        wp_reset_postdata();
    }
	}
}
