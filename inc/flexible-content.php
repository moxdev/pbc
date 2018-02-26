<?php
/**
 * Custom function for the flexible content sections
 *
 * @package Promo_Box_Club
 */

function promo_box_club_flexble_content_section() {
  if( function_exists('get_field') ) {

    if( have_rows('flexible_content_areas') ):

      while ( have_rows('flexible_content_areas') ) : the_row();

        if( get_row_layout() == 'paragraph' ):

          $file = get_sub_field('file');

        elseif( get_row_layout() == 'download' ):

          $file = get_sub_field('file');

        endif;

      endwhile;

    endif;

  }
}
