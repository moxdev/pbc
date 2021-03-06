<?php
/**
 * Custom function for What's New Page
 *
 * @package Promo_Box_Club
 */

function promo_box_club_whats_new_section() {
	if ( function_exists( 'get_field' ) ) {

    if( have_rows('whats_new_content') ):
      $whats_new_section_content_button = get_field( 'whats_new_section_content_button' ); ?>

    <section class="whats-new">
      <div class="wrapper">

        <?php while( have_rows('whats_new_content') ): the_row();
          $whats_new_video    = get_sub_field('whats_new_video'); ?>

        <div class="inner-wrapper">

          <?php if( $whats_new_video ) : ?>

            <?php echo wp_kses_post( $whats_new_video ); ?>

          <?php endif; ?>

        </div>
        <?php endwhile; ?>

        <?php if( $whats_new_section_content_button ) : ?>

          <div class="button-wrapper">
            <?php echo wp_kses_post( $whats_new_section_content_button ); ?>
          </div>

        <?php endif; ?>

      </div>
    </section>

    <?php endif;
	}
}
