<script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.js"></script>
    <link rel="stylesheet" href="build/css/intlTelInput.css">
    <link rel="stylesheet" href="build/css/demo.css">
    <style>
        .hide {
            display: none;
        }
        .customer_portal{
        background: url(./layouts/default/skins/images/b2.webp);
        background-size:cover;
        height: 100%;
        }
       
        .form-horizontal .control-label {
             text-align: Left;
        }
        .navbar {
            display : none !important;
        }
        nav.navbar {
        min-height:0px !important
        }
        body{
            background:#def3f3;
            margin-top:-20px;
            
        }
        .iti { width: 100%; }
       
    .mainlogo
    {
        max-width:25%;
         height:auto;
         margin:0px auto;
          }
    .customer_portal_logo
    {
        text-align:center;
        padding-top:20px;
    }
        
    </style>
<div class="container-fluid" ng-controller="SignUp_IndexView_Component">
    <div class="row customer_portal">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">&nbsp;</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="login-form">
                        <form class="form-horizontal" id="signupform" novalidate="novalidate" ng-submit="makeAutoComplete();doSignUp(signupform)" name="signupform">

                          <div class="customer_portal_logo">
                            <img class="mainlogo" src="layouts\default\skins\images\BEML_Limited_Logo.png" class="img-responsive user-logo">
                            </div>

                            <h3 style="text-align:center;" translate="Please Provide Your Following Information For Sign Up">Please Provide Your Following Information For Sign Up</h3>
                            
                            {foreach from=$CONTACTBLOCKS item=blockitem key=blockkey}
                                <h3 style="text-align: center; text-decoration: underline; background: linear-gradient(to right, #f32170, #ff6b08, #cf23cf, #eedd44);
                                    -webkit-text-fill-color: transparent;
                                    -webkit-background-clip: text;">{{$blockitem['label']}}</h3>
                                {foreach from=$blockitem['fields'] item=item key=key}
                                <div class="form-group">
                                    {if  $item['name'] == 'assigned_user_id'}
                                    {elseif $item['type']['name'] == 'picklist'}
                                        <label for="{{$item['name']}}" class="col-sm-4 control-label">{{$item['label']}} <span ng-if="{{$item['mandatory']}}" class="text-danger">*</span> </label>
                                        <div class="col-sm-8">
                                        <select id="{{$item['name']}}" data-field="{$item|@json_encode}" onchange="handleDependency(event)" class="form-control" data-fieldtype="picklist" ng-required="{{$item['mandatory']}}" name="{{$item['name']}}" ng-model="{{$item['name']}}"  portal-select>
                                            {foreach from=$item.type.picklistValues item=itemopt}
                                                <option value="{{$itemopt.value}}">
                                                    {{$itemopt.label}}
                                                </option>
                                            {/foreach}
                                        </select>
                                        {literal}<span class="text-danger" ng-if="signupform.{/literal}{{$item['name']}} {literal}.$error.required && submit">Please enter a valid {/literal} {{$item['label']}} {literal}.</span>{/literal}
                                        </div>
                                    {elseif $item['type']['name'] == 'phone'}
                                        <h3 style="text-align: center;background: linear-gradient(to right, #f32170, #ff6b08, #cf23cf, #eedd44);
                                         -webkit-text-fill-color: transparent;
                                         -webkit-background-clip: text;">Enter Your Mobile Number</h3>
                                        <h4 style="text-align: center;margin-top: 1px;margin-bottom: 5px;">(OTP Will Be Sent To Verify your Mobile Number)</h4>
                                        <label for="{{$item['name']}}" class="col-sm-4 control-label">{{$item['label']}} <span ng-if="{{$item['mandatory']}}" class="text-danger">*</span> </label>
                                        <div class="col-sm-8">
                                            <input  id="phone" type="tel" {literal} placeholder="" ng-model-options="{updateOn:'blur'}" {/literal} class="form-control"  ng-model="{{$item['name']}}" name="{{$item['name']}}" ng-required="{{$item['mandatory']}}" autofill="autofill">
                                            {literal}<span class="text-danger" ng-if="signupform.{/literal}{{$item['name']}} {literal}.$error.required && submit">Please enter a valid {/literal} {{$item['label']}} {literal}.</span>{/literal}
                                            <span id="valid-msg" class="hide text-success">Phone Number is valid</span>
                                            <span id="error-msg" class="hide text-danger">Invalid number</span>
                                        </div>
                                    {elseif $item['type']['name'] == 'password'}
                                        {if  $item['name'] == 'user_password'}
                                        <span id="{{$item['name']}}" {if $item['initialDisplay'] == 'no'}style="display: none" {/if}>
                                            <label for="{{$item['name']}}" class="col-sm-4 control-label">{{$item['label']}} <span ng-if="{{$item['mandatory']}}" class="text-danger">*</span> </label>
                                            <div class="col-sm-8">
                                                <input type="password" id="password_1"  {literal} ng-model-options="{updateOn:'blur'}" {/literal} class="form-control"  ng-model="{{$item['name']}}" name="{{$item['name']}}" ng-required="{{$item['mandatory']}}" autofill="autofill">
                                                  <span id="togglePassword1" style="margin-top: -25px ;margin-right:10px;float: right;cursor: pointer;" class="glyphicon glyphicon-eye-open"></span> 
                                                {literal}<span class="text-danger" ng-if="signupform.{/literal}{{$item['name']}} {literal}.$error.required && submit">Please enter a valid {/literal} {{$item['label']}} {literal}.</span>{/literal}
                                            </div>
                                               <label class="col-sm-4 text-muted"><p class="PassStrength"></p></label>
                                        </span>
                                        {elseif $item['name'] == 'confirm_password'}
                                            <span id="{{$item['name']}}" {if $item['initialDisplay'] == 'no'}style="display: none" {/if}>
                                                <label for="{{$item['name']}}" class="col-sm-4 control-label">{{$item['label']}} <span ng-if="{{$item['mandatory']}}" class="text-danger">*</span> </label>
                                                <div class="col-sm-8">
                                                    <input type="password" id="password_2"  {literal} ng-model-options="{updateOn:'blur'}" {/literal} class="form-control"  ng-model="{{$item['name']}}" name="{{$item['name']}}" ng-required="{{$item['mandatory']}}" autofill="autofill">
                                                    <span id="togglePassword2" style="margin-top: -25px ;margin-right:10px;float: right;cursor: pointer;" class="glyphicon glyphicon-eye-open"></span> 
                                                    {literal}<span class="text-danger" ng-if="signupform.{/literal}{{$item['name']}} {literal}.$error.required && submit">Please enter a valid {/literal} {{$item['label']}} {literal}.</span>{/literal}
                                                </div>
                                                <label class="col-sm-4 text-muted"><p class="PassMatch"></p></label> 
                                            </span>
                                        {/if}
                                    {elseif $item['name'] == 'email'}   
                                          <span id="{{$item['name']}}" {if $item['initialDisplay'] == 'no'}style="display: none" {/if}>
                                            <label for="{{$item['name']}}" class="col-sm-4 control-label">{{$item['label']}} <span ng-if="{{$item['mandatory']}}" class="text-danger">*</span> </label>
                                            <div class="col-sm-8">
                                                <input type="email" {literal} ng-model-options="{updateOn:'blur'}" {/literal} class="form-control"  ng-model="{{$item['name']}}" name="{{$item['name']}}" ng-required="{{$item['mandatory']}}" autofill="autofill">
                                                <span id="email-error-msg" class="hide text-danger"> Email is not valid</span>
                                                {literal}<span class="text-danger" ng-if="signupform.{/literal}{{$item['name']}} {literal}.$error.required && submit">Please enter a valid {/literal} {{$item['label']}} {literal}.</span>{/literal}
                                            </div>
                                        </span>
                                    {else}
                                        <span id="{{$item['name']}}" {if $item['initialDisplay'] == 'no'}style="display: none" {/if}>
                                            <label for="{{$item['name']}}" class="col-sm-4 control-label">{{$item['label']}} <span ng-if="{{$item['mandatory']}}" class="text-danger">*</span> </label>
                                            <div class="col-sm-8">
                                                <input type="text" {literal} ng-model-options="{updateOn:'blur'}" {/literal} class="form-control"  ng-model="{{$item['name']}}" name="{{$item['name']}}" ng-required="{{$item['mandatory']}}" autofill="autofill">
                                                {literal}<span class="text-danger" ng-if="signupform.{/literal}{{$item['name']}} {literal}.$error.required && submit">Please enter a valid {/literal} {{$item['label']}} {literal}.</span>{/literal}
                                            </div>
                                        </span>
                                    {/if}
                                </div>
                                {/foreach}
                            {/foreach}
                           
                            <div class="form-group" ng-if="loginFailed && !loginForm.username.$error.pattern">
                                <label for="  " class="col-sm-4">
                                </label>
                                {literal}<div class="col-sm-8 text-danger">{{loginMessage}}</div>{/literal}
                            </div>
                              <div class="form-group" ng-if="noUserName">
                                <label ng-hide="loginForm.username.$dirty && loginForm.username.$viewValue!==''" for="  " class="col-sm-4">
                                </label>
                                <div class="col-sm-8 text-danger" ng-hide="loginForm.username.$dirty && loginForm.username.$viewValue!==''">Enter your email address.</div>
                            </div>

                              <div class="form-group" ng-if="noPassword">
                                <label ng-hide="loginForm.username.$invalid && loginForm.username.$viewValue!==''" for="  " class="col-sm-4">
                                </label>
                                <div class="col-sm-8 text-danger" ng-hide="loginForm.username.$invalid && loginForm.username.$viewValue!==''">Enter your password.</div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" translate="Sign Up" class="btn btn-success" style="width: 300px; margin-left: 50px; font-weight: bold;">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <div>
                            <a href="index.php?module=Portal&view=Login" class="btn btn-info" style="font-weight: bold;">
                                <span class="glyphicon glyphicon-chevron-left"></span> Back to Login
                            </a>
                        </div>
                    </div>
                </div>
                <input id="uidsaver" type="text" hidden>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">&nbsp;</div>
            </div>
        </div>
    </div>
  <script src="build/js/intlTelInput.js"></script>
     <script type="text/javascript" src="layouts/{portal_layout()}/resources/components/signup.js"></script>
</div>
{literal}
    <script type="text/ng-template" id="askotp.template">
        <div class="modal-header">
            <button type="button" class="close" ng-click="cancel()" title="Close">×</button>
            <h3 class="modal-title">{{'Enter OTP'|translate}}</h3>
        </div>
        <form name="forgotPassword"  class="form-horizontal" role="form">
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{'OTP'|translate}}</label>
                    <div class="col-sm-5">
                        <input ng-model="data.email" name="email" class="form-control" required></input>
                        <span class="text-danger"  ng-show="data.email===undefined">Enter a valid email address</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button ng-if="data.email" ng-click="doRealSignUp()" class="btn btn-success" type="submit">{{'Submit'|translate}}</button>
            </div>
        </form>
        <form class="form-horizontal" role="form">
            <div class="modal-body">
                <div id="time">
                    <span>Resend OTP In </span><div id="output">00:00</div>
                </div>
                <div id="resendOtpDiv" style="display:none">
                    <button id="resendOtp" ng-click="handleResendOTP()" class="button buttonBlue crm_btn btn btn-primary">Resend OTP</button><br>
                </div>
            </div>
        </form>
    </script>
{/literal}