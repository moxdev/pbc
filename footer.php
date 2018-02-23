<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Promo_Box_Club
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="site-info">

      <nav id="footer-navigation" class="footer-navigation">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'menu_id'        => 'footer-menu',
          ) );
        ?>
      </nav><!-- #site-navigation -->

      <?php if( function_exists( 'get_field' ) ) :
        $fb   = get_field( 'facebook_url', 'social' );
        $pin  = get_field( 'pinterest_url', 'social' );
        $tw   = get_field( 'twitter_url', 'social' );
        $inst = get_field( 'instagram_url', 'social' );
        $yt   = get_field( 'youtube_url', 'social' );
        $goo  = get_field( 'google_plus_url', 'social' );
        $link = get_field( 'linkedin_url', 'social' );

        if( $fb || $pin || $tw || $insta || $yt || $goo || $link ) : ?>

        <div class="social">
          <h3 class="social-title">Want More? Follow Us</h3>
          <ul class="social-media">

            <? if ( $fb ): ?>
              <li class="fb">
                <a href="" target="_blank">Find Us On Facebook</a>
              </li>
            <?php endif; ?>

            <? if ( $pin ): ?>
              <li class="pin">
                <a href="" target="_blank">Find Us On Pinterest</a>
              </li>
            <?php endif; ?>

            <? if ( $tw ): ?>
              <li class="tw">
                <a href="" target="_blank">Follow Us On Twitter</a>
              </li>
            <?php endif; ?>

            <? if ( $inst ): ?>
              <li class="insta">
                <a href="" target="_blank">Find Us On Instagram</a>
              </li>
            <?php endif; ?>

            <? if ( $yt ): ?>
              <li class="yt">
                <a href="" target="_blank">Watch Us On YouTube</a>
              </li>
            <?php endif; ?>

            <? if ( $goo ): ?>
              <li class="goo">
                <a href="" target="_blank">Find Us On Google+</a>
              </li>
            <?php endif; ?>

            <? if ( $link ): ?>
              <li class="linked">
                <a href="" target="_blank">Find Us On LinkedIn</a>
              </li>
            <?php endif; ?>

          </ul>
        </div>

        <?php endif; ?>

      <?php endif; ?>

    </div><!-- .site-info -->
    <div class="copyright-section">
      <a class="mm4" href="#">Powered by:<span>Millennium Marketing Solutions</span></a>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
