<?php
/**
 * Template Name: Flexible Content
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Promo_Box_Club
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'flex-page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
      ?>

      <?php if( function_exists('get_field') ) {
        $add_the_millennium_contact_form = get_field('add_the_millennium_contact_form');

        if( $add_the_millennium_contact_form ) {
          if( function_exists( 'mm4_you_contact_form' ) ) :
            mm4_you_contact_form();
          endif;
        }
      } ?>

		</main><!-- #main -->
  </div><!-- #primary -->


  <?php if( function_exists( 'promo_box_club_flexble_content_section' ) ) : promo_box_club_flexble_content_section(); endif; ?>
  <?php if( function_exists( 'promo_box_club_whats_new_section' ) ) : promo_box_club_whats_new_section(); endif; ?>

<?php
get_footer();
