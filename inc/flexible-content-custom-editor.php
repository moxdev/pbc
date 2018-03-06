<?php
/**
 * Custom function for Flexible Content: Custom Editor Section
 *
 * @package Promo_Box_Club
 */

function promo_box_club_flexible_content_custom_editor_section() {
	if ( function_exists( 'get_field' ) ) {

    if( have_rows('custom_editor') ):

      $count = 1; ?>

    <section class="custom-editor">
      <div class="wrapper">

        <?php while( have_rows('custom_editor') ): the_row();
          $custom_editor_icon    = get_sub_field('custom_editor_icon');
          $custom_editor_content = get_sub_field('custom_editor_content'); ?>

        <div class="inner-wrapper col-<?php echo $count++; ?>">

          <?php if( $custom_editor_icon ) : ?>

            <div class="flex-wrapper-img">
              <img src="<?php echo esc_url( $custom_editor_icon['url'] ); ?>" alt="<?php echo esc_attr( $custom_editor_icon['alt'] ); ?>" description="<?php echo esc_attr( $custom_editor_icon['description'] ); ?>">
            </div>

          <?php endif; ?>

          <?php if( $custom_editor_content ) : ?>

            <div class="flex-wrapper-content">

              <?php echo wp_kses_post( $custom_editor_content ); ?>

            </div>

          <?php endif; ?>

        </div>
        <?php endwhile; ?>

      </div>
    </section>

    <?php endif;
	}
}
