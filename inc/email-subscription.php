<?php
/**
 * Custom function for the email subscription section
 *
 * @package Promo_Box_Club
 */

function promo_box_club_email_subscription_section() {
  if( function_exists( 'get_field' ) ) :
    $email_subscription_headline = get_sub_field( 'email_subscription_headline' ); ?>

    <section class="email-subscription">
      <div class="wrapper">
        <div class="email-subscription-content">
          <?php echo wp_kses_post( $email_subscription_headline ); ?>
        </div>
        <div id="embed-signup-form">
          <form data-id="embedded_signup:form" id="mc-embedded-subscribe-form" class="ctct-custom-form Form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">

            <!-- The following code must be included to ensure your sign-up form works properly. -->
            <input data-id="ca:input" type="hidden" name="ca" value="6afaf325-c070-444f-9f8e-62c65f981d36">
            <input data-id="list:input" type="hidden" name="list" value="1266784617">
            <input data-id="source:input" type="hidden" name="source" value="EFD">
            <input data-id="required:input" type="hidden" name="required" value="email">
            <input data-id="url:input" type="hidden" name="url" value="">

            <div id="embed-signup-scroll">

              <div class="field-group">
                <label data-id="Email Address:label" data-name="email" class="ctct-form-required"><input data-id="Email Address:input" name="email" value="" maxlength="80" type="email" placeholder="* Enter your email address"></label>
              </div>

              <button type="submit" class="ctct-button" data-enabled="enabled">Sign Up</button>

              <span id="success_message" style="display:none;">
                <div>Thank you for signing up!</div>
              </span>

            </div><!-- embed-signup-scroll -->
          </form>

        </div><!-- embed-signup-form -->

      </div>
    </section>

  <?php endif;

  if( function_exists( 'promo_box_club_newsletter_signup_map' ) ) : promo_box_club_newsletter_signup_map(); endif;
}
