<?php
/**
 * Custom function for Home Page See What's Inside Section
 *
 * @package Promo_Box_Club
 */

function promo_box_club_old_see_whats_inside_section() {
	if ( function_exists( 'get_field' ) ) {
    $home_see_whats_inside_section_content = get_field( 'home_see_whats_inside_section_content' );

    if( $home_see_whats_inside_section_content ): ?>

    <section class="home-see-whats-inside">
      <div class="wrapper">
        <div class="inner-wrapper">

          <?php echo $home_see_whats_inside_section_content ?>

        </div>

      </div>
    </section>

    <?php endif;
	}
}
