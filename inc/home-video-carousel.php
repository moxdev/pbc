<?php
/**
 * Custom function for homepage
 *
 * @package Promo_Box_Club
 */

function promo_box_club_home_video_carousel_section() {
	if ( function_exists( 'get_field' ) ) {
    $home_video            = get_posts( array('post_type' => 'home_videos', 'posts_per_page' => -1) );
    $home_videos_btn_text  = get_field( 'home_videos_button_text' );
    $home_videos_page_link = get_field( 'home_videos_page_link' );

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
              <div class="video-carousel">

              <?php while ( $home_videos->have_posts() ) {
                  $home_videos->the_post();
                  $excerpt = get_field( 'testimonial_excerpt', $post->ID );

                  ?>

                  <div class="cell">
                    <div class="cell-wrapper">
                      <div class="excerpt-wrapper">

                        <span class="title"><?php the_title(); ?></span>

                      </div>

                      <div class="testimonial-content-wrapper">
                        <?php the_content(); ?>
                      </div>

                    </div>
                  </div><!-- cell -->

                <?php

              } ?>

              </div><!-- testimonial-carousel -->

              <a class="btn" href="<?php echo esc_attr( $home_videos_page_link ); ?>"><?php echo esc_html( $home_video_btn_text ); ?></a>

            </div><!-- home-testimonial-wrapper -->
          </section>

        <?php
        }
        // Restore original Post Data
        wp_reset_postdata();
    }
	}
}
