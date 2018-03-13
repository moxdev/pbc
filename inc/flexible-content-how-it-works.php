<?php
/**
 * Custom function for Flexible Content: How It Works Section
 *
 * @package Promo_Box_Club
 */

function promo_box_club_flexible_content_how_it_works_section() {
	if ( function_exists( 'get_field' ) ) {
    $flex_how_it_works_section_title            = get_sub_field('flex_how_it_works_section_title');
    $flex_how_it_works_section_button      = get_sub_field('flex_how_it_works_section_button');

    if( have_rows('how_it_works_section', 'how-it-works') ):

      $count = 1; ?>

    <section class="how-it-works">
      <div class="wrapper">
        <h2 class="section-title"><?php echo wp_kses_post( $flex_how_it_works_section_title ); ?></h2>

        <div class="column-wrapper">

          <?php while( have_rows('how_it_works_section', 'how-it-works') ): the_row();
            $icon_title = get_sub_field('how_it_works_title', 'how-it-works');
            $icon_desc  = get_sub_field('how_it_works_description', 'how-it-works'); ?>

          <div class="inner-wrapper col-<?php echo $count++; ?>">

            <div class="center-wrapper">

              <?php if( $icon_title ) : ?>
                <span class="title"><?php echo wp_kses_post( $icon_title ); ?></span>
              <?php endif; ?>

              <?php if( $icon_desc ) : ?>
                <?php echo $icon_desc; ?>
              <?php endif; ?>

            </div>

          </div>
          <?php endwhile; ?>

        </div><!-- column-wrapper -->

        <?php if( $flex_how_it_works_section_button ) : ?>
          <?php echo wp_kses_post( $flex_how_it_works_section_button ); ?>
        <?php endif; ?>

      </div>
    </section>

    <?php endif;
	}
}
