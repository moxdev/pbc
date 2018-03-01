<?php
/**
 * Custom function for How It Works Section
 *
 * @package Promo_Box_Club
 */

function promo_box_club_how_it_works_section() {
	if ( function_exists( 'get_field' ) ) {
    if( have_rows('how_it_works_section', 'how-it-works') ):
      $how_it_works_section_title = get_field('how_it_works_section_title');
      $how_it_works_section_button_text = get_field('how_it_works_section_button_text');
      $how_it_works_section_button_page_link = get_field('how_it_works_section_button_page_link');
      $count = 1; ?>

    <section class="how-it-works">
      <div class="wrapper">
        <h2 class="section-title"><?php echo wp_kses_post( $how_it_works_section_title ); ?></h2>

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

        </div>

        <a href="<?php echo wp_kses_post( $how_it_works_section_button_page_link ); ?>"><button><?php echo wp_kses_post( $how_it_works_section_button_text ); ?></button></a>

      </div>
    </section>

    <?php endif;
	}
}
