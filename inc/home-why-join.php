<?php
/**
 * Custom function for homepage Why Join Section
 *
 * @package Promo_Box_Club
 */

function promo_box_club_home_why_join_section() {
	if ( function_exists( 'get_field' ) ) {
    if( have_rows( 'why_join_section_information' ) ): ?>

      <?php while( have_rows('why_join_section_information') ): the_row();
        $why_join_first_column     = get_sub_field( 'why_join_first_column' );
        $why_join_second_column    = get_sub_field( 'why_join_second_column' );
        $why_join_featured_image   = get_sub_field( 'why_join_featured_image' );
        $why_join_button_text      = get_sub_field( 'why_join_button_text' );
        $why_join_button_page_link = get_sub_field( 'why_join_button_page_link' );
        $why_join_sidebar_column   = get_sub_field( 'why_join_sidebar_column' ); ?>

        <section class="home-why-join">
          <div class="wrapper">
            <div class="container-flex-wrapper">

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
                    <img src="<?php echo esc_url( $why_join_featured_image['url'] ); ?>" alt="<?php echo esc_attr( $why_join_featured_image['alt'] ); ?>" description="<?php echo esc_attr( $why_join_featured_image['description'] ); ?>">
                  </div>
                <?php endif; ?>

                <?php if( $why_join_button_text ) : ?>
                  <div class="flex-column button-wrapper">
                    <a class="btn" href="<?php echo wp_kses_post( $why_join_button_page_link ); ?>"><?php echo wp_kses_post( $why_join_button_text ); ?></a>
                  </div>
                <?php endif; ?>

              </div><!-- inner-wrapper -->

              <?php if( $why_join_sidebar_column ) : ?>

                <?php if( have_rows('why_join_sidebar_column') ): ?>

                <aside class="why-join-sidebar">
                  <div class="sidebar-wrapper">


                  <?php while( have_rows('why_join_sidebar_column') ): the_row();
                    $quote = get_sub_field('quote_text');
                    $name = get_sub_field('quote_name'); ?>

                  <div class="quote-wrapper">

                    <?php if( $quote ) : ?>
                      <p class="quote"><?php echo wp_kses_post( $quote ); ?></p>
                    <?php endif; ?>

                    <?php if( $name ) : ?>
                      <p class="name"><span><?php echo wp_kses_post( $name ); ?></span></p>
                    <?php endif; ?>

                  </div>

                  <?php endwhile; ?>
                  </div><!-- sidebar-wrapper -->
                </aside>

                <?php endif; ?>

              <?php endif; ?>

            </div><!-- container-flex-wrapper -->
          </div><!-- wrapper -->
        </section>
      <?php endwhile; ?>

    <?php endif;
	}
}
