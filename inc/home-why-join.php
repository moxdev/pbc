<?php
/**
 * Custom function for homepage Why Join Section
 *
 * @package Promo_Box_Club
 */

function promo_box_club_home_why_join_section() {
	if ( function_exists( 'get_field' ) ) {
    if( have_rows( 'why_join_section_information' ) ):
      $why_join_section_title    = get_sub_field( 'why_join_section_title' ); ?>

    <section class="home-why-join">
      <div class="wrapper">

        <?php while( have_rows('why_join_section_information') ): the_row();
          $why_join_first_column     = get_sub_field( 'why_join_first_column' );
          $why_join_second_column    = get_sub_field( 'why_join_second_column' );
          $why_join_featured_image   = get_sub_field( 'why_join_featured_image' );
          $why_join_button_text      = get_sub_field( 'why_join_button_text' );
          $why_join_button_page_link = get_sub_field( 'why_join_button_page_link' ); ?>

        <div class="inner-wrapper">

          <?php if( $why_join_first_column ) : ?>
            <div class="flex-column first-col-wrapper">
              <?php echo $why_join_first_column; ?>
            </div>
          <?php endif; ?>

          <?php if( $why_join_second_column ) : ?>
            <div class="flex-column second-col-wrapper">
              <?php echo $why_join_second_column; ?>
            </div>
          <?php endif; ?>

          <?php if( $why_join_featured_image ) : ?>
            <div class="flex-column img-wrapper">
              <img src="<?php echo esc_url( $why_join_featured_image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $why_join_featured_image['alt'] ); ?>" description="<?php echo esc_attr( $why_join_featured_image['description'] ); ?>">
            </div>
          <?php endif; ?>

          <?php if( $why_join_button_text ) : ?>
            <div class="flex-column button-wrapper">
              <a class="btn" href="<?php wp_kses_post( $why_join_button_page_link ); ?>"><?php echo wp_kses_post( $why_join_button_text ); ?></a>
            </div>
          <?php endif; ?>

        </div>
        <?php endwhile; ?>

      </div>
    </section>

    <?php endif;
	}
}
