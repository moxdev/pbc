# Allowed html tags = wp_kses_post

`<?php wp_kses_post( $data ); ?>`

# ebed youtube
[embed width="123" height="456"]http://www.youtube.com/watch?v=dQw4w9WgXcQ[/embed]

# wp css class on  jon now link in header

# MM4
```html
<div id="mail-signup">
  <div class="mail-signup-wrapper">
    <?php $mailHeadline = get_field('email_signup_headline');
    $mailIntro = get_field('email_signup_text');
    if($mailHeadline): ?><h3><?php echo $mailHeadline; ?></h3><?php endif;
    if($mailIntro): ?><span class="mail-intro"><?php echo $mailIntro; ?></span><?php endif; ?>
    <!-- Begin Constant Contact Signup Form -->
    <div id="mc_embed_signup">
      <form data-id="embedded_signup:form" id="mc-embedded-subscribe-form" class="ctct-custom-form Form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">

        <!-- The following code must be included to ensure your sign-up form works properly. -->
        <input data-id="ca:input" type="hidden" name="ca" value="6afaf325-c070-444f-9f8e-62c65f981d36">
        <input data-id="list:input" type="hidden" name="list" value="1266784617">
        <input data-id="source:input" type="hidden" name="source" value="EFD">
        <input data-id="required:input" type="hidden" name="required" value="list,email,first_name,last_name,company">
        <input data-id="url:input" type="hidden" name="url" value="">

        <div id="mc_embed_signup_scroll">

          <div class="mc-field-group">
            <label class="ctct-form-required" data-id="First Name:label" data-name="first_name"><input data-id="First Name:input" name="first_name" value="" maxlength="50" type="text" placeholder="* First Name"></label>
          </div>

          <div class="mc-field-group">
            <label class="ctct-form-required" data-id="Last Name:label" data-name="last_name"><input data-id="Last Name:input" name="last_name" value="" maxlength="50" type="text" placeholder="* Last Name"></label>
          </div>

          <div class="mc-field-group">
            <label class="ctct-form-required" data-id="Company:label" data-name="company"><input data-id="Company:input" name="company" value="" maxlength="50" type="text" placeholder="* Company"></label>
          </div>

          <div class="mc-field-group">
            <label data-id="Email Address:label" data-name="email" class="ctct-form-required"><input data-id="Email Address:input" name="email" value="" maxlength="80" type="email" placeholder="* Email"></label>
          </div>

          <button type="submit" class="Button ctct-button Button--block Button-secondary" data-enabled="enabled">Register Now</button>

          <span id="success_message" style="display:none;">
            <div>Thank you for signing up!</div>
          </span>

        </div><!-- mc_embed_signup_scroll -->
      </form>
    </div><!-- mc_embed_signup -->
  </div>
</div>
```