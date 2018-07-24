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
      <div class="footer-logo-wrapper">

        <div class="footer-pbc-logo">
          <a href="<?php echo get_home_url(); ?>" rel="home">
            <svg xmlns="http://www.w3.org/2000/svg" width="72.25" height="60.26" viewBox="0 0 72.25 60.26"><defs><style>.a{fill:none;}.b{fill:#3a2a1d;}.c{clip-path:url(#a);}.d{fill:#f04923;}.e{fill:#eda920;}.f{fill:#2abbaf;}</style><clipPath id="a"><path d="M0 0h72.25v60.26H0z" class="a"/></clipPath></defs><title>pbc-logo</title><path d="M0 0v60.26h10.37V57.1h-6.8V3.16h6.8V0H0zM61.88 0v2.94h7v54.38h-7v2.94h10.37V0H61.88z" class="b"/><g class="c"><path d="M16.54 13h1.33c.7 0 1.4-.25 1.4-1.1s-.94-1.05-1.7-1.05h-1zm-2-3.83h3.36c1.88 0 3.44.6 3.44 2.74S19.9 14.7 18 14.7h-1.46v3.53h-2zM23.86 12.94H25c.72 0 1.67 0 1.67-1s-.82-1-1.55-1h-1.3zm-2-3.74h3.5c1.85 0 3.4.64 3.4 2.74a2.33 2.33 0 0 1-1.95 2.48l2.3 3.8h-2.37l-1.9-3.6h-1v3.6h-2zM33.26 16.62c1.52 0 2.52-1.22 2.52-2.9a2.55 2.55 0 1 0-5.05 0 2.6 2.6 0 0 0 2.53 2.9m0-7.65c2.53 0 4.38 1.85 4.38 4.74s-1.85 4.76-4.38 4.76-4.4-1.85-4.4-4.75S30.73 9 33.27 9" class="d"/></g><path d="M38.3 9.2h3l2.1 5.9 2.1-5.9h3v9.03h-2V11.3l-2.4 6.93h-1.5l-2.3-6.93v6.93h-2V9.2z" class="d"/><g class="c"><path d="M53.47 16.62a2.6 2.6 0 0 0 2.53-2.9 2.55 2.55 0 1 0-5.06 0 2.6 2.6 0 0 0 2.53 2.9m0-7.65c2.54 0 4.4 1.85 4.4 4.74s-1.87 4.76-4.4 4.76-4.4-1.85-4.4-4.75S50.94 9 53.48 9" class="d"/><path d="M17.87 33.93h2.9c1 0 2.16-.44 2.16-1.72s-1.55-1.6-2.6-1.6h-2.46zm0-6.08h2.35c1 0 2-.4 2-1.6s-1.16-1.53-2.18-1.53h-2.2zM14.64 22h5.47c2.58 0 5.38.54 5.38 3.73A3.3 3.3 0 0 1 23 29a3.52 3.52 0 0 1 3.22 3.6c0 3.06-2.9 4.07-5.52 4.07h-6zM35 34.05a4.43 4.43 0 0 0 4.56-4.73 4.56 4.56 0 1 0-9.12 0A4.43 4.43 0 0 0 35 34.05m0-12.44c4.58 0 7.92 3 7.92 7.72S39.54 37 35 37s-8-3-8-7.68 3.34-7.7 7.92-7.7" class="e"/></g><path d="M47.44 29l-4.85-7.02h4.05l3.13 5.15 3-5.15h3.93l-4.74 6.95 5.3 7.73h-4.05l-3.58-5.9-3.5 5.9H42.3L47.44 29z" class="e"/><path d="M22.9 43.2a2.85 2.85 0 0 0-2.27-1 3.58 3.58 0 0 0-3.48 3.87 3.57 3.57 0 0 0 3.4 3.93A2.86 2.86 0 0 0 23 48.67l2.2 1.65a5.24 5.24 0 0 1-4.34 2.1c-3.76 0-6.5-2.47-6.5-6.33s2.74-6.34 6.5-6.34A5.16 5.16 0 0 1 25 41.53zM26.8 40.06h2.64v9.6h4.92v2.45H26.8V40.07z" class="f"/><g class="c"><path d="M45.57 47.46c0 2.84-1.74 4.95-5.07 4.95s-5.08-2.1-5.08-4.94v-7.4h2.65v7.3a2.43 2.43 0 1 0 4.85 0v-7.3h2.65zM50.8 49.86h2.37c.84 0 1.77-.35 1.77-1.4s-1.27-1.34-2.14-1.34h-2zm0-5h1.9c.83 0 1.68-.34 1.68-1.3s-1-1.27-1.78-1.27h-1.8zm-2.66-4.8h4.5c2.1 0 4.4.43 4.4 3.05A2.7 2.7 0 0 1 55 45.8a2.9 2.9 0 0 1 2.64 2.95c0 2.5-2.38 3.35-4.53 3.35h-4.96z" class="f"/></g></svg>
          </a>
        </div>

        <nav id="footer-navigation" class="footer-navigation">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'footer-menu',
              'menu_id'        => 'footer-menu',
            ) );
          ?>
        </nav><!-- #site-navigation -->

      </div>

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
          <div class="social-wrapper">
            <h3 class="social-title">Want More? Follow Us</h3>
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

    </div><!-- .site-info -->
    <div class="copyright-section">
      <div class="wrapper">
        <a class="mm4" href="https://www.mm4solutions.com/" target="_blank" rel="noopener noreferrer">Powered by <span>Millennium Marketing Solutions</span></a>

        <a href="https://www.mm4solutions.com/" target="_blank" rel="noopener noreferrer"><span class="mm4-logo">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" height="48" viewBox="0 0 200 48"><title>logo-footer-mm4-1</title><image width="200" height="48" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAAAwCAYAAABUmTXqAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQwIDc5LjE2MDQ1MSwgMjAxNy8wNS8wNi0wMTowODoyMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjIwRjI2NTc5MTEwNzExRTg4NENFQzEzNzY0OEFBMjVEIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjIwRjI2NTdBMTEwNzExRTg4NENFQzEzNzY0OEFBMjVEIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjBGMjY1NzcxMTA3MTFFODg0Q0VDMTM3NjQ4QUEyNUQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjBGMjY1NzgxMTA3MTFFODg0Q0VDMTM3NjQ4QUEyNUQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4SDkGfAAAXOUlEQVR42uydB5iV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"/></svg>
        </span></a>

        <span class="wbenc-logo">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="44" viewBox="0 0 100 44"><title>logo-footer-wbenc-1</title><image width="100" height="44" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAsCAYAAACT6R1VAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQwIDc5LjE2MDQ1MSwgMjAxNy8wNS8wNi0wMTowODoyMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjIwRjI2NTdEMTEwNzExRTg4NENFQzEzNzY0OEFBMjVEIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjIwRjI2NTdFMTEwNzExRTg4NENFQzEzNzY0OEFBMjVEIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjBGMjY1N0IxMTA3MTFFODg0Q0VDMTM3NjQ4QUEyNUQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjBGMjY1N0MxMTA3MTFFODg0Q0VDMTM3NjQ4QUEyNUQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7mjVOnAAAN9klEQVR42uycCXhU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"/></svg>
        </span>

      </div>

    </div>
	</footer><!-- #colophon -->

  <?php promo_box_club_mobile_menu(); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
