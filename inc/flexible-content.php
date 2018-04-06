<?php
/**
 * Custom function for the flexible content sections
 *
 * @package Promo_Box_Club
 */

function promo_box_club_flexble_content_section() {
  if( function_exists('get_field') ) {

    if( have_rows('flexible_content') ):

      while ( have_rows('flexible_content') ) : the_row();

        if( get_row_layout() == 'orange_section' ):

          $orange_section_content = get_sub_field('flex_orange_section_content'); ?>
            <section class="orange-section">
              <div class="wrapper">
                <?php echo wp_kses_post( $orange_section_content ); ?>
              </div>
            </section>
          <?php

        elseif( get_row_layout() == 'how_it_works_section' ):

          if( function_exists( 'promo_box_club_flexible_content_how_it_works_section' ) ) :
            promo_box_club_flexible_content_how_it_works_section();
          endif;

        elseif( get_row_layout() == 'custom_editor_section' ):

          if( function_exists( 'promo_box_club_flexible_content_custom_editor_section' ) ) :
            promo_box_club_flexible_content_custom_editor_section();
          endif;

        elseif( get_row_layout() == 'email_subscription_section' ):
          $add_the_email_subscription_section = get_sub_field( 'add_the_email_subscription_section' );

          if( $add_the_email_subscription_section ) {

            if( function_exists( 'promo_box_club_email_subscription_section' ) ) :
              promo_box_club_email_subscription_section();
            endif;
          }

        endif;

      endwhile;

    endif;
  }
}