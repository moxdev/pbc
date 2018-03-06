<?php
/**
 * Custom function for homepage See What's Inside Section
 *
 * @package Promo_Box_Club
 */

function promo_box_club_home_see_whats_inside_section() {
	if ( function_exists( 'get_field' ) ) {
    if( have_rows( 'home_see_whats_inside_section_content' ) ): ?>

      <?php while( have_rows('home_see_whats_inside_section_content') ): the_row();
        $see_whats_inside_section_title           = get_sub_field( 'see_whats_inside_section_title' );
        $see_whats_inside_section_image           = get_sub_field( 'see_whats_inside_section_image' );
        $see_whats_inside_section_image_page_link = get_sub_field( 'see_whats_inside_section_image_page_link' );
        $see_whats_inside_section_content         = get_sub_field( 'see_whats_inside_section_content' );
        $see_whats_inside_section_content_button  = get_sub_field( 'see_whats_inside_section_content_button' ); ?>

        <section class="home-see-whats-inside">
          <div class="wrapper">

          <?php if( $see_whats_inside_section_title ) : ?>
            <h2><?php echo wp_kses_post( $see_whats_inside_section_title ); ?></h2>
          <?php endif; ?>

            <div class="flex-wrapper">

              <?php if( $see_whats_inside_section_image ) : ?>
                <div class="flex-img-wrapper">
                  <a href="<?php echo wp_kses_post( $see_whats_inside_section_image_page_link ); ?>">
                    <img src="<?php echo esc_url( $see_whats_inside_section_image['sizes']['home-see-whats-inside-feature-img'] ); ?>" alt="<?php echo esc_attr( $see_whats_inside_section_image['alt'] ); ?>" description="<?php echo esc_attr( $see_whats_inside_section_image['description'] ); ?>">
                  </a>
                </div>
              <?php endif; ?>

              <?php if( $see_whats_inside_section_content ) : ?>
                <div class="flex-content-wrapper">
                  <?php echo wp_kses_post( $see_whats_inside_section_content ); ?>
                </div>
              <?php endif; ?>

            </div><!-- flex-wrapper -->

            <?php if( $see_whats_inside_section_content_button ) : ?>
              <div class="button-wrapper">
                <?php echo wp_kses_post( $see_whats_inside_section_content_button ); ?>
              </div>
            <?php endif; ?>

          </div><!-- wrapper -->
        </section>
      <?php endwhile; ?>

    <?php endif;
	}
}
