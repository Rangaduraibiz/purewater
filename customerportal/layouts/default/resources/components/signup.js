var input = document.querySelector("#phone"),
	errorMsg = document.querySelector("#error-msg"),
	validMsg = document.querySelector("#valid-msg");
$(document).ready(function () {
	$("input[name='mobile']").css({ "padding-left": "82px" });
});
let isVaildMobilenumber = false;
// Error messages based on the code returned from getValidationError
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

// Initialise plugin
var intl = window.intlTelInput(input, {
	autoPlaceholder: "off",
	initialCountry: "",
	preferredCountries: ['in'],
	hiddenInput: "full",
	separateDialCode: true,
	utilsScript: "build/js/utils.js"
});

var reset = function () {
	input.classList.remove("error");
	errorMsg.innerHTML = "";
	errorMsg.classList.add("hide");
	validMsg.classList.add("hide");
};

// Validate on blur event
input.addEventListener('blur', function () {
	reset();
	let num=intl.getNumber(intlTelInputUtils.numberFormat.E164);
	if (input.value.trim()) {
		if (intl.isValidNumber()) {
			isVaildMobilenumber = true;
			$('#phone').val(num);
			validMsg.classList.remove("hide");
		} else {
			input.classList.add("error");
			var errorCode = intl.getValidationError();
			errorMsg.innerHTML = errorMap[errorCode];
			errorMsg.classList.remove("hide");
			isVaildMobilenumber = false;
		}
	}
});
function handleDependency(event) {
	let value = event.target.value;
	let name = event.target.name;
	if (value == 'Others') {
		let fieldName = 'other_' + name;
		$("#" + fieldName).css({ "display": "inline" });
		// $("input[name="+fieldName+"]").attr("ng-required", "1");
	} else {
		let fieldName = 'other_' + name;
		$("#" + fieldName).css({ "display": "none" });
	}
}



function AskOTP_Component($scope, $modalInstance, $api, $webapp, translatePartialLoader) {
	$scope.time = 600;
	$scope.increment = function () {
		let self = this;
		running = 1;
		if (running == 1) {
			setTimeout(function () {
				$("#resendOtp").prop("disabled", true);
				$("#SignUPSubmitButton").prop("disabled", true);
				if (self.time == 0) {
					$("#resendOtpDiv").css({ "display": "inline" });
					$("#resendOtp").prop("disabled", false);
					$("#SignUPSubmitButton").prop("disabled", false);
					return;
				}
				self.time--;
				var mins = Math.floor(self.time / 10 / 60);
				var secs = Math.floor(self.time / 10 % 60);
				var hours = Math.floor(self.time / 10 / 60 / 60);
				var tenths = self.time % 10;
				if (hours > 0) {
					mins = mins % 60;
				}
				if (mins < 10) {
					mins = "0" + mins;
				}
				if (secs < 10) {
					secs = "0" + secs;
				}
				document.getElementById("output").innerHTML = mins + ":" + secs;
				self.increment();
			}, 100)
		}
	}
	function lafloadContents() {
		$scope.increment();
	}
	lafloadContents();
	if (translatePartialLoader !== undefined) {
		translatePartialLoader.addPart('home');
	}
	$scope.data = { 'email': "" };
	$scope.doRealSignUp = function () {
		$webapp.busy(true);
		$.ajax({
			type: "POST",
			url: "index.php",
			cache: false,
			data: { api: 'CustomerSignUp', otp: $scope.data.email, uid: $('#uidsaver').val() },
			success: function (response) {
				console.log(response);
				if (response.success == true) {
					alert(response.result.message);
					window.location.href = 'index.php?module=Portal&view=Login';
				} else {
					alert(response.error.message);
				}
				$webapp.busy(false);
			}
		});
	};

	$scope.handleResendOTP = function () {
		let realParams = {};
		let params = $('#signupform').serializeArray();
		let paramLength = params.length;
		for (let i = 0; i < paramLength; i++) {
			realParams[params[i]['name']] = params[i]['value'];
		}

		$webapp.busy(true);
		$api.post('Portal/PreCustomerSignUp', realParams).success(function (result) {
			if (result.message === undefined) {
				alert(result.result);
			} else if (result.message !== undefined) {
				$('#uidsaver').val(result.uid);
				$scope.time = 600;
				$scope.increment();
			}
			$webapp.busy(false);
		});
		return false;
	}

	$scope.cancel = function () {
		$modalInstance.dismiss('cancel');
	}
}
function SignUp_IndexView_Component($scope, $api, $webapp, $translatePartialLoader, $modal) {
	jQuery('#time').on('click', function (e) {
		$("#resendOtpDiv").css({ "display": "none" });
		// this.time = 600;
		// this.increment();
	});
	$scope.time = 600;
	jQuery('[name="mailingzip"]').on('input', function (e) {
		let currentTarget = jQuery(e.currentTarget);
		let pincode = currentTarget.val();
		pincode = pincode.replace(/\s+/g, '');
		let dataOf = {};
		dataOf['pincode'] = pincode;
		if (pincode.length >= 6) {
			$webapp.busy(true);
			$api.post('Portal/GetPincodeInfo', dataOf).success(function (data) {
				if (data && data.State != null && data.Block != null) {
					jQuery('input[name="mailingcity"]').val(data.Block);
					jQuery('input[name="mailingstate"]').val(data.State);
				}
				$webapp.busy(false);
			});
		}
	});
	$scope.handleChangeEvent = function (validity) {
	}

	$scope.askForOTP = function () {
		var modalInstance = $modal.open({
			templateUrl: 'askotp.template',
			controller: AskOTP_Component,
			backdrop: 'static',
			keyboard: 'false',
			resolve: {
				api: function () {
					return $api;
				},
				webapp: function () {
					return $webapp;
				},
				translatePartialLoader: function () {
					return $translatePartialLoader;
				}
			}
		});
	};
	//Password Stregenth checker
	function scorePassword(pass) {
		var score = 0;
		if (!pass)
			return score;

		// award every unique letter until 5 repetitions
		var letters = new Object();
		for (var i = 0; i < pass.length; i++) {
			letters[pass[i]] = (letters[pass[i]] || 0) + 1;
			score += 5.0 / letters[pass[i]];
		}

		// bonus points for mixing it up

		var variations = {
			digits: /\d/.test(pass),
			lower: /[a-z]/.test(pass),
			upper: /[A-Z]/.test(pass),
			nonWords: /\W/.test(pass),
		}
		var variationCount = 0;
		for (var check in variations) {
			variationCount += (variations[check] == true) ? 1 : 0;

		}
		score += (variationCount - 1) * 10;

		return parseInt(score);
	}

	let isPasswordVaild = false;
	let isPasswordMatch = false;
	let pass = $("input[name='user_password']");
	let pass1 = $("input[name='confirm_password']");
	$("input[name='user_password']").blur(function () {
		if (80 < scorePassword(pass.val())) {
			isPasswordVaild = true;
			$("input[name='user_password']").css({ "border": "1px solid green" });
			$(".PassStrength").html("<i>Password strength: </i><span style='color:green'> Good</span>")
		}
		else if (60 < scorePassword(pass.val())) {
			isPasswordVaild = true;

			$("input[name='user_password']").css({ "border": "1px solid #FFA500" });
			$(".PassStrength").html("<i>Password strength: </i><span style='color:#FFA500'> Good</span>")
		}
		else if (60 > scorePassword(pass.val())) {
			$("input[name='user_password']").css({ "border": "1px solid red" });
			$(".PassStrength").html("<i>Password strength: </i><span style='color:red'> Week</span>")
		} else {
			$("input[name='user_password']").css({ "border": "1px solid red" })
			$(".PassStrength").html("<span style='color:grey'> Please Enter the Password </span>")
		}
	});
 
	$("input[name='confirm_password']").blur(function () {
		if (pass.val() != pass1.val()) {
			$("input[name='confirm_password']").css({ "border": "1px solid red" })
			$(".PassMatch").html("<span style='color:red'> Password Is Not Matchching </span>")
			isPasswordMatch = false;
		} else {
			$("input[name='confirm_password']").css({ "border": "1px solid green" })
			// $(".PassMatch").html("<span style='color:green'> Password is Match </span>")
			isPasswordMatch = true;
		}
	});
	//
	const togglePassword1 = document.querySelector('#togglePassword1');
	const togglePassword2 = document.querySelector('#togglePassword2');
	const password_1 = document.querySelector('#password_1');
	const password_2 = document.querySelector('#password_2');

	togglePassword1.addEventListener('click', function (e) {
		// toggle the type attribute
		const type = password_1.getAttribute('type') === 'password' ? 'text' : 'password';
		password_1.setAttribute('type', type);
		// toggle the eye slash icon
		this.classList.toggle('glyphicon-eye-close');
	});
	togglePassword2.addEventListener('click', function (e) {
		// toggle the type attribute
		const type = password_2.getAttribute('type') === 'password' ? 'text' : 'password';
		password_2.setAttribute('type', type);
		// toggle the eye slash icon
		this.classList.toggle('glyphicon-eye-close');
	});
	// email validation 
	$("input[name='email']").blur(function () {
		var email = $("input[name='email']");
		var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		if (filter.test(email.val())) {
			document.getElementById('email-error-msg').classList.add('hide');
			$("input[name='email']").css({ "border": "1px solid green" });
	   }else{
		    $("input[name='email']").css({ "border": "1px solid red" });
			document.getElementById('email-error-msg').classList.remove('hide');
			email.focus;
	   }
	});
	
	$scope.doSignUp = function (validity) {
		let paramsValidation = $('#signupform').serializeArray();
		let paramLengthVal = paramsValidation.length;
		if (isPasswordVaild != true || isPasswordMatch != true || isVaildMobilenumber != true) {
			$scope.submit = true;
			return false;
		}
		for (let i = 0; i < paramLengthVal; i++) {
			if (paramsValidation[i]['name'] == 'customer_type' && paramsValidation[i]['value'] == 'Others') {
				if (paramsValidation[i + 1]['value'] == '' || paramsValidation[i + 1]['value'] == null) {
					validity.other_customer_type.$error.required = true;
					$scope.submit = true;
					return false;
				} else {
					validity.other_customer_type.$error.required = false;
				}
				continue;
			}
			if (paramsValidation[i]['name'] == 'business_sector' && paramsValidation[i]['value'] == 'Others') {
				if (paramsValidation[i + 1]['value'] == '' || paramsValidation[i + 1]['value'] == null) {
					validity.other_business_sector.$error.required = true;
					$scope.submit = true;
					return false;
				} else {
					validity.other_business_sector.$error.required = false;
				}
				continue;
			}
			if (paramsValidation[i]['name'] == 'office_type' && paramsValidation[i]['value'] == 'Others') {
				if (paramsValidation[i + 1]['value'] == '' || paramsValidation[i + 1]['value'] == null) {
					validity.other_office_type.$error.required = true;
					$scope.submit = true;
					return false;
				} else {
					validity.other_office_type.$error.required = false;
				}
				continue;
			}
		}
		if (!validity.$valid) {
			$scope.submit = true;
			return false;
		}
		let realParams = {};
		let params = $('#signupform').serializeArray();
		let paramLength = params.length;
		for (let i = 0; i < paramLength; i++) {
			realParams[params[i]['name']] = params[i]['value'];
		}

		$webapp.busy(true);
		$api.post('Portal/PreCustomerSignUp', realParams).success(function (result) {
			if (result.message === undefined) {
				alert(result.result);
			} else if (result.message !== undefined) {
				$('#uidsaver').val(result.uid)
				$scope.askForOTP();
			}
			$webapp.busy(false);
		});

	}
}