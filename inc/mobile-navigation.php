<?php if (! function_exists( 'promo_box_club_mobile_menu' ) ) :
	function promo_box_club_mobile_menu() { ?>
		<div id="mobile-menu">
			<nav>

			<?php
				wp_nav_menu( array(
					'theme_location' => 'mobile-menu',
					'menu_id' => 'mobile-main-menu',
					'container' => '',
				) );
			?>

			</nav>

      <div class="wrapper">
        <div class="flex-container">

          <?php if( function_exists( 'acf_add_options_page' ) ) :
            $fb   = get_field( 'facebook_url', 'social' );
            $pin  = get_field( 'pinterest_url', 'social' );
            $tw   = get_field( 'twitter_url', 'social' );
            $inst = get_field( 'instagram_url', 'social' );
            $yt   = get_field( 'youtube_url', 'social' );
            $goo  = get_field( 'google_plus_url', 'social' );
            $link = get_field( 'linkedin_url', 'social' );

            if( $fb || $pin || $tw || $insta || $yt || $goo || $link ) : ?>

            <div class="social flex-item">
              <div class="social-wrapper">
                <ul class="social-media">

                  <? if ( $fb ): ?>
                    <li class="fb">
                      <a href="<?php echo wp_kses_post( $fb ); ?>" target="_blank">Find Us On Facebook</a>
                    </li>
                  <?php endif; ?>

                  <? if ( $pin ): ?>
                    <li class="pin">
                      <a href="<?php echo wp_kses_post( $pin ); ?>" target="_blank">Find Us On Pinterest</a>
                    </li>
                  <?php endif; ?>

                  <? if ( $tw ): ?>
                    <li class="tw">
                      <a href="<?php echo wp_kses_post( $tw ); ?>" target="_blank">Follow Us On Twitter</a>
                    </li>
                  <?php endif; ?>

                  <? if ( $inst ): ?>
                    <li class="insta">
                      <a href="<?php echo wp_kses_post( $inst ); ?>" target="_blank">Find Us On Instagram</a>
                    </li>
                  <?php endif; ?>

                  <? if ( $yt ): ?>
                    <li class="yt">
                      <a href="<?php echo wp_kses_post( $yt ); ?>" target="_blank">Watch Us On YouTube</a>
                    </li>
                  <?php endif; ?>

                  <? if ( $goo ): ?>
                    <li class="goo">
                      <a href="<?php echo wp_kses_post( $goo ); ?>" target="_blank">Find Us On Google+</a>
                    </li>
                  <?php endif; ?>

                  <? if ( $link ): ?>
                    <li class="linked">
                      <a href="<?php echo wp_kses_post( $link ); ?>" target="_blank">Find Us On LinkedIn</a>
                    </li>
                  <?php endif; ?>

                </ul>

              </div>
            </div>

            <?php endif; ?>

          <?php endif; ?>

          <nav class="flex-item">

          <?php
            wp_nav_menu( array(
              'theme_location' => 'marcom-menu',
              'menu_id' => 'mobile-marcom-menu',
              'container' => '',
            ) );
          ?>

          </nav>

        </div><!-- flex-container -->

      </div><!-- wrapper -->

		</div><!-- mobile-menu -->
	<?php }
endif;