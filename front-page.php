<?php
/**
 * The template for displaying a static front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Promo_Box_Club
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="front-page-main">

			<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>

			</div><!-- front-page-main -->

		</main><!-- #main -->

  </div><!-- #primary -->

  <?php if( function_exists( 'promo_box_club_home_video_carousel_section' ) ) : promo_box_club_home_video_carousel_section(); endif; ?>
  <?php if( function_exists( 'promo_box_club_home_how_it_works_section' ) ) : promo_box_club_home_how_it_works_section(); endif; ?>
  <?php if( function_exists( 'promo_box_club_home_why_join_section' ) ) : promo_box_club_home_why_join_section(); endif; ?>
  <?php if( function_exists( 'promo_box_club_email_subscription_section' ) ) : promo_box_club_email_subscription_section(); endif; ?>

<?php
get_footer();
