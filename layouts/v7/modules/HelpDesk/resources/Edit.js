Vtiger_Edit_Js("HelpDesk_Edit_Js", {}, {
	allFieldsRaw: [],
	fieldDependency: [],
	picklistDependency: [],
	// registerValidation : function () {
	//     var editViewForm = this.getForm();
	//     this.formValidatorInstance = editViewForm.vtValidate({
	//         submitHandler : function() {
	//             var e = jQuery.Event(Vtiger_Edit_Js.recordPresaveEvent);
	//             app.event.trigger(e);
	//             if(e.isDefaultPrevented()) {
	//                 return false;
	//             }
	// 			window.onbeforeunload = null;
	//             editViewForm.find('.saveButton').attr('disabled',false);
	//             return true;
	//         }
	//     });
	// },
	formSubmitEventHandler: function () {
		$("#EditView").submit(function (event) {
			alert("Handler for .submit() called.");
			// $("#EditView" ).submit();
			// var form = jQuery('form#EditView');
			// jQuery(form).find("button[name='saveButton']").removeAttr('disabled');
			// event.preventDefault();
		});
	},
	registerBasicEvents: function (container) {
		// this.formSubmitEventHandler();
		this._super(container);
		this.registerPicklistFieldChangeEvent();
		this.fetchAllFields();
		this.phoneCountryCode();
		this.registerReferenceSelectionEvent(container);
		this.registerClearReferenceSelectionEvent(container);
		this.registerBlockAnimationEvent();
		this.autofill();
		// this.required();
		this.convertToUpperCase();
		this.addHMRInput();
		this.registerFileElementChangeEvent(this.getForm());
		this.hideservice();
		this.optionSystemAffected();
		$('[data-fieldname="func_loc_id"]').attr("readonly", 'readonly').css('background-color', '#eeeeee !important');
		$('[data-fieldname="parent_id"]').attr("readonly", 'readonly').css('background-color', '#eeeeee !important');
		$('[data-fieldname="equip_location"]').attr("readonly", 'readonly').css('background-color', '#eeeeee !important');
	},
	optionSystemAffected: function () {
		$("#HelpDesk_Edit_fieldName_system_affected").removeClass("select2 select2-offscreen");

		$("#HelpDesk_Edit_fieldName_system_affected").addClass("hide");
		var option = $("#HelpDesk_Edit_fieldName_system_affected option");
		var data = [], temp = [];
		for (let i = 0; i < option.length; i++) {
			const myArray = option[i].value.split("_._");
			if (temp.length == 0) {
				temp = myArray;
				data.push(myArray[0]);
				data[myArray[0]] = [];
				data[myArray[0]].push(myArray[1]);
			}
			else if (myArray[0] == temp[0]) {
				data[myArray[0]].push(myArray[1]);
			} else {
				temp = myArray;
				data.push(myArray[0]);
				data[myArray[0]] = [];
				data[myArray[0]].push(myArray[1]);
			}
		}
		var damagedata = [];
		for (let i = 0; i < data.length; i++) {
			var child = [];
			if( data[data[i]].length==1 && data[data[i]]==undefined){
				child=[{
					id:data[i],
					text:data[i]
				}]
				damdata = {
					id: "",
					text: data[i],
					children:child
				}
				damagedata.push(damdata);
				continue;
			}
			for (let j = 0; j < data[data[i]].length; j++) {
				let tempdata = {
					id: data[i] + "_._" + data[data[i]][j],
					text: ""+data[data[i]][j]
				};
				child.push(tempdata);
			}
			damdata = {
				id: "",
				text: data[i],
				children: child
			};
			damagedata.push(damdata);
		};
		$('input[name="system_affected"]').select2({
			multiple: true,
			placeholder: "Select System Affected",
			data: damagedata,
			width: '60%',
		}).on('select2-selecting', function (e) {
			var $select = $(this);
			if (e.val == '') {
				e.preventDefault();
			}
		}).on('change', function (e) {
			var select2Value = $(e.target).val();
			const myArray = select2Value.split(",");
			$('#HelpDesk_Edit_fieldName_system_affected option:selected').removeAttr('selected');
			for (let i = 0; i < myArray.length; i++) {
				$("#HelpDesk_Edit_fieldName_system_affected option[value='" + myArray[i] + "']").attr("selected", "selected").trigger('change');;
			}
		});
		var optionsSelected = $('#HelpDesk_Edit_fieldName_system_affected').val();
		if (optionsSelected != null) {
			var damagedSelectedData = [];
			for (let i = 0; i < optionsSelected.length; i++) {
				const showText = optionsSelected[i].split('_._');
				damdata = {
					id: optionsSelected[i],
					text: showText[1],
				};
				damagedSelectedData.push(damdata);
			};
			$('input[name="system_affected"]').data().select2.updateSelection(damagedSelectedData);
		}
	},
	hideservice: function () {
		$('[data-fieldname="ticket_type"]').click(function () {
			let ticketTypeVal = $(this).val();
			if (ticketTypeVal == "DESIGN MODIFICATION") {
				if (ticketTypeVal == "DESIGN MODIFICATION") {
					$('[data-block="Contact Person details"]').addClass("hide");
				} else {
					$('[data-block="Contact Person details"]').removeClass("hide");
				}
			} else if (ticketTypeVal == "INSTALLATION OF SUB ASSEMBLY FITMENT") {
				if (ticketTypeVal == "INSTALLATION OF SUB ASSEMBLY FITMENT") {
					$('[data-block="DETAILS OF EQUIPMENT LOCATION"]').addClass("hide");
				} else {
					$('[data-block="DETAILS OF EQUIPMENT LOCATION"]').removeClass("hide");
				}
			} else {
				$('[data-block="DETAILS OF EQUIPMENT LOCATION"]').removeClass("hide");
				$('[data-block="Contact Person details"]').removeClass("hide");
			}
		});
	},
	detailViewContentHolder: false,
	getContentHolder: function () {
		if (this.detailViewContentHolder == false) {
			this.detailViewContentHolder = jQuery('div.details');
		}
		return this.detailViewContentHolder;
	},
	registerReferenceSelectionEvent: function (container) {
		var self = this;
		jQuery('input[name="equipment_id"]', container).on(Vtiger_Edit_Js.referenceSelectionEvent, function (e, data) {
			self.setFirstContactOfAccount();
		});
		jQuery('input[name="equip_id_da"]', container).on(Vtiger_Edit_Js.referenceSelectionEvent, function (e, data) {
			self.handleDispatchAdviceSrlection();
			self.setLocationOFDA();
		});
		jQuery('#HelpDesk_editView_fieldName_hmr').on('input', function (event) {
			let value = event.target.value;
			if (value.length > 0) {
				$("#HelpDesk_editView_fieldName_kilometer_reading").val('');
				$("#HelpDesk_editView_fieldName_kilometer_reading").prop("disabled", true);
			} else {
				let hmrPlaceHolderValue = parseInt($("#HelpDesk_editView_fieldName_hmrPlacleHolder").val());
				if (hmrPlaceHolderValue != undefined && hmrPlaceHolderValue != '' && hmrPlaceHolderValue != null && hmrPlaceHolderValue > 0) {
				} else {
					$("#HelpDesk_editView_fieldName_kilometer_reading").val('');
					$("#HelpDesk_editView_fieldName_kilometer_reading").prop("disabled", false);
				}
			}
		})
		jQuery('#HelpDesk_editView_fieldName_kilometer_reading').on('input', function (event) {
			let value = event.target.value;
			if (value.length > 0) {
				$("#HelpDesk_editView_fieldName_hmr").val('');
				$("#HelpDesk_editView_fieldName_hmr").prop("disabled", true);
			} else {
				let kmPlaceHolderValue = parseInt($("#HelpDesk_editView_fieldName_kmPlacleHolder").val());
				if (kmPlaceHolderValue != undefined && kmPlaceHolderValue != '' && kmPlaceHolderValue != null && kmPlaceHolderValue > 0) {
				} else {
					$("#HelpDesk_editView_fieldName_hmr").val('');
					$("#HelpDesk_editView_fieldName_hmr").prop("disabled", false);
				}
			}
		})
		container.on('change', 'select[name="system_affected[]"]', function (e) {
			self.setRecomendedUser();
		});
	},
	handleDispatchAdviceSrlection: function () {
		$("#" + 'manual_equ_ser' + 'hideOrShowId').addClass("hide");
		$("#" + 'manual_equ_ser' + 'hideOrShowInputId').addClass("hide");
		$("#HelpDesk_editView_fieldName_manual_equ_ser").val("");
		$("#" + 'chg_func_loc' + 'hideOrShowId').removeClass("hide");
		$("#" + 'chg_func_loc' + 'hideOrShowInputId').removeClass("hide");
		$("#" + 'equip_location' + 'hideOrShowId').removeClass("hide");
		$("#" + 'equip_location' + 'hideOrShowInputId').removeClass("hide");
		this.handlePincodeLevelDependency('chg_func_loc', false);
		$('#manualEqInputerDA').addClass('hide');
		$('#manualEqInputer').addClass('hide');
		$("#HelpDesk_editView_fieldName_kilometer_reading").val('');
		$("#HelpDesk_editView_fieldName_kilometer_reading").prop("disabled", false);
		$("#HelpDesk_editView_fieldName_hmr").prop("disabled", false);
		$("#HelpDesk_editView_fieldName_hmr").val('');
		$('#idofSpanhmrEle').addClass('hide');
		$('#idofSpanhmrEleKm').addClass('hide');
		$("#HelpDesk_editView_fieldName_hmrPlacleHolder").val('');
		$("#HelpDesk_editView_fieldName_kmPlacleHolder").val('');
		$('.sr_equip_model  option[value=""]').attr("selected", "selected").trigger('change');
	},
	setLocationOFDA: function () {
		var self = this;
		let dataOf = {};
		dataOf['record'] = $("input[name=equip_id_da]").val();
		dataOf['source_module'] = 'DeliveryNotes';
		dataOf['module'] = 'HelpDesk';
		dataOf['action'] = 'GetAllInfoDA';
		app.helper.showProgress();
		app.request.get({ data: dataOf }).then(function (err, response) {
			if (err == null) {
				let referenceFields = { 'account_id': 'parent_id' };
				for (var key in referenceFields) {
					let value = referenceFields[key];
					self.seletctTheMarkVendor(response['data'][key], response['data'][key + '_label'], value);
				}
				var cityNme = response.data.cityOfEquipment;
				$('#HelpDesk_editView_fieldName_equip_location').val(cityNme);
				let manual_equ_ser = response.data.manual_equ_ser;
				let eqArr = manual_equ_ser.split("-");
				let model = eqArr[0];
				if(model && model != null && model != undefined && model != ''){
					$('.sr_equip_model  option[value="' + model + '"]').attr("selected", "selected").trigger('change');
				}
			}
			app.helper.hideProgress();
		});
	},
	required: function () {
		$(document).ready(function () {
			$('#HelpDesk_editView_fieldName_date_of_failure').attr('required', true);
			$('#equipment_id_display').attr('required', true);
		});
	},
	getMaxiumFileUploadingSize: function (container) {
		//TODO : get it from the server
		return (1024) * (1024) * 40;
	},
	registerFileElementChangeEvent: function (container) {
		var thisInstance = this;
		container.on('change', 'input[name="imagename[]"]', function (e) {
			console.log($(this)[0].MultiFile.total_size);
			if ($(this)[0].MultiFile.total_size < thisInstance.getMaxiumFileUploadingSize(container)) {
				if (e.target.type == "text") return false;
				var moduleName = jQuery('[name="module"]').val();
				if (moduleName == "Products") return false;
				Vtiger_Edit_Js.file = e.target.files[0];
				var element = container.find('[name="imagename[]"]');
				//ignore all other types than file 
				if (element.attr('type') != 'file') {
					return;
				}
				var uploadFileSizeHolder = element.closest('.fileUploadContainer').find('.uploadedFileSize');
				var fileSize = e.target.files[0].size;
				var fileName = e.target.files[0].name;
				var maxFileSize = thisInstance.getMaxiumFileUploadingSize(container);
				if (fileSize > maxFileSize) {
					app.helper.showAlertNotification({
						'message': app.vtranslate('JS_EXCEEDS_MAX_UPLOAD_SIZE')
					});
					var removeFileLinks = jQuery('.MultiFile-remove');
					jQuery(removeFileLinks[removeFileLinks.length - 1]).click();
					element.val('');
					uploadFileSizeHolder.text('');
				} else {
					if (container.length > 1) {
						jQuery('div.fieldsContainer').find('form#I_form').find('input[name="filename"]').css('width', '80px');
						jQuery('div.fieldsContainer').find('form#W_form').find('input[name="filename"]').css('width', '80px');
					} else {
						container.find('input[name="filename"]').css('width', '80px');
					}
					uploadFileSizeHolder.text(fileName + ' ' + thisInstance.convertFileSizeInToDisplayFormat(fileSize));
				}
				jQuery(e.currentTarget).addClass('ignore-validation');
			} else {
				console.log($(this).length);
				var totalSize = $(this)[0].MultiFile.total_size;
				totalSize = totalSize / 1024;
				totalSize = totalSize / 1024;
				totalSize = Math.round(totalSize)
				app.helper.showAlertNotification({
					'message': app.vtranslate(totalSize + 'mb total size more 40mb')
				});
				var removeFileLinks = jQuery('.MultiFile-remove');
				jQuery(removeFileLinks[removeFileLinks.length - 1]).click();
			}

		});
	},
	registerBlockAnimationEvent: function () {
		return;
		var detailContentsHolder = this.getContentHolder();
		detailContentsHolder.on('click', '.blockToggle', function (e) {
			var currentTarget = jQuery(e.currentTarget);
			var blockId = currentTarget.data('id');
			var closestBlock = currentTarget.parents('.block');
			var bodyContents = closestBlock.find('.blockData');
			var data = currentTarget.data();
			var module = app.getModuleName();
			var hideHandler = function () {
				bodyContents.hide('slow');
				bodyContents.addClass('hide').show();
				app.storage.set(module + '.' + blockId, 0);
			}
			var showHandler = function () {
				bodyContents.removeClass('hide').show();
				app.storage.set(module + '.' + blockId, 1);
			}
			if (data.mode == 'show') {
				hideHandler();
				currentTarget.hide();
				closestBlock.find("[data-mode='hide']").removeClass('hide').show();
			} else {
				showHandler();
				currentTarget.hide();
				closestBlock.find("[data-mode='show']").removeClass('hide').show();
			}
		});

	},
	setFirstContactOfAccount: function () {
		var self = this;
		let dataOf = {};
		dataOf['record'] = $("input[name=equipment_id]").val();
		dataOf['source_module'] = 'Equipment';
		dataOf['module'] = 'HelpDesk';
		dataOf['action'] = 'GetAllInfo';
		app.helper.showProgress();
		app.request.get({ data: dataOf }).then(function (err, response) {
			if (err == null) {
				let referenceFields = { 'account_id': 'parent_id', 'functional_loc': 'func_loc_id' };
				for (var key in referenceFields) {
					let value = referenceFields[key];
					self.seletctTheMarkVendor(response['data'][key], response['data'][key + '_label'], value);
				}
				var modalName = response.data.equip_model;
				$('.sr_equip_model  option[value="' + modalName + '"]').attr("selected", "selected").trigger('change');
				$('[data-fieldname="sr_equip_model"]').attr("readonly", 'readonly');
				self.handleHMROrKM(response.data.eq_last_hmr, response.data.eq_last_km_run);
				app.helper.hideProgress();
				self.setRecomendedUser();
			}
		});
	},
	setRecomendedUser : function () {
		let dataOf = {};
		dataOf['source_module'] = 'Equipment';
		dataOf['module'] = 'HelpDesk';
		dataOf['action'] = 'AutosetAssignUser';
		dataOf['func_loc_id'] = $("input[name=func_loc_id]").val();
		dataOf['model'] = $("select[name=sr_equip_model]").val();
		let systemEffected = $("select[name='system_affected[]']").val();
		if (systemEffected != '' && systemEffected != null && systemEffected != undefined) {
			let firstVal = systemEffected[0];
			let vals = firstVal.split("_._");
			dataOf['aggregate'] = vals[1];
		}
        app.request.get({ data: dataOf }).then(function (err, response) {
			if (err == null && response && response[0] && response[0].length != 0) {
                $('select[data-name="assigned_user_id"]').val(response[0]["id"]);
				let changeText = $('select[data-name="assigned_user_id"] option[value='+response[0]["id"]+']').text();
				$('select[data-name="assigned_user_id"]').parent().find('.select2-selection__rendered').text(changeText);
				$('select[data-name="assigned_user_id"]').trigger('change');
				app.helper.showAlertNotification({
					'message': app.vtranslate('Recommended User - '+ changeText +' Is Assigned For Selcted Equipment , Model and Aggregate, If you Wish to Change , You Can Change manualy')
				});
			} else if(response.length == 0){
				app.helper.showAlertNotification({
					'message': app.vtranslate('No Recommended User For Selcted Equipment , Model and Aggregate')
				});
			}
		});
	},
	seletctTheMarkVendor: function (id, label, field) {
		let selectedNameOfAsset = label;
		let sourceField = field;
		var fieldElement = jQuery("#" + app.getModuleName() + "_editView_fieldName_" + field + "_select");
		var sourceFieldDisplay = field + "_display";
		var fieldDisplayElement = jQuery('input[name="' + sourceFieldDisplay + '"]');
		var popupReferenceModuleElement = jQuery('input[name="popupReferenceModule"]').length ? jQuery('input[name="popupReferenceModule"]') : jQuery('input.popupReferenceModule');
		var popupReferenceModule = popupReferenceModuleElement.val();
		var selectedName = selectedNameOfAsset;
		jQuery('input[name="' + sourceField + '"]').val(id);
		if (id && selectedName) {
			if (!fieldDisplayElement.length) {
				fieldElement.attr('value', id);
				fieldElement.data('value', id);
				fieldElement.val(selectedName);
			} else {
				fieldElement.val(id);
				fieldElement.data('value', id);
				fieldDisplayElement.val(selectedName);
				if (selectedName) {
					fieldDisplayElement.attr('readonly', 'readonly');
				} else {
					fieldDisplayElement.removeAttr("readonly");
				}
			}
			if (selectedName) {
				fieldElement.parent().parent().find('#' + sourceFieldDisplay).attr('disabled', 'disabled');
				fieldElement.parent().parent().find('.clearReferenceSelection').removeClass('hide');
				fieldElement.parent().parent().find('.referencefield-wrapper').addClass('selected');
			} else {
				fieldElement.parent().parent().find('.clearReferenceSelection').addClass('hide');
				fieldElement.parent().parent().find('.referencefield-wrapper').removeClass('selected');
			}
			fieldElement.trigger(Vtiger_Edit_Js.referenceSelectionEvent, { 'source_module': popupReferenceModule, 'record': id, 'selectedName': selectedName });
		}
	},
	getParentElement: function (element) {
		var parent = element.closest('.parentTRDiv');
		return parent;
	},
	registerPicklistFieldChangeEvent: function () {
		let self = this;
		jQuery('.picklistfield').on('change', function (event) {
			let value = event.target.value;
			let name = event.target.name;
			if (value == "") {
				self.handledependencyOne(name, value);
			} else {
				self.handledependency(name, value, '');
			}
		})
		jQuery('#HelpDesk_editView_fieldName_pincode').on('input', function (event) {
			let value = event.target.value;
			if (value.length > 5) {
				app.helper.showProgress();
				self.getPincodeDetails(value).then(
					function (data) {
						let pincodeData = data.result.data;
						let selectopenCity = ' <select name="City" id="City" class="inputElement">';
						let selectopenState = '<select name="State" id="State" class="inputElement">';
						let selectopenDistrict = '<select name="District" id="District"  class="inputElement">';
						let selectclose = '</select>';

						let city = "";
						let state = "";
						let District = "";

						let districtArr = [];
						let stateArr = [];
						let cityArr = [];
						let index = 1;
						let FirstState = '';
						let FirstDistrit = '';
						let FirstCity = '';
						$.each(pincodeData, function (key, value) {
							if (!stateArr.includes(value['pincode_state'])) {
								if (index == 1) {
									FirstState = value['pincode_state'];
									state += '<option value=""></option>';
									state += '<option seleted value="' + value['pincode_state'] + '">' + value['pincode_state'] + '</option>';
								} else {
									state += '<option value="' + value['pincode_state'] + '">' + value['pincode_state'] + '</option>';
								}
								stateArr.push(value['pincode_state']);
							}
							if (!districtArr.includes(value['pincode_district'])) {
								if (index == 1) {
									FirstDistrit = value['pincode_district'];
									District += '<option value=""></option>';
									District += '<option selected value="' + value['pincode_district'] + '">' + value['pincode_district'] + '</option>';
								} else {
									District += '<option value="' + value['pincode_district'] + '">' + value['pincode_district'] + '</option>';
									districtArr.push(value['pincode_district']);
								}
							}
							if (index == 1) {
								FirstCity = value['pincode_city'];
								city += '<option value=""></option>';
								city += '<option selected value="' + value['pincode_city'] + '">' + value['pincode_city'] + '</option>';
							} else {
								city += '<option value="' + value['pincode_city'] + '">' + value['pincode_city'] + '</option>';
							}
							cityArr.push(value['pincode_city']);
							index = index + 1;
						});
						state = selectopenState + state + selectclose + '<input id="HelpDesk_editView_fieldName_state" type="hidden" data-fieldname="state" data-fieldtype="string" class="inputElement " name="state" value="' + FirstState + '">';
						city = selectopenCity + city + selectclose + '<input id="HelpDesk_editView_fieldName_city" type="hidden" data-fieldname="city" data-fieldtype="string" class="inputElement " name="city" value="' + FirstCity + '" >';
						District = selectopenDistrict + District + selectclose + '<input id="HelpDesk_editView_fieldName_district" type="hidden" data-fieldname="district" data-fieldtype="string" class="inputElement " name="district" value="' + FirstDistrit + '">';

						if (cityArr.length > 0) {
							$("#cityhideOrShowInputId").html(city);
							$('select#City option[value="' + FirstCity + '"]').attr("selected", "selected").trigger('change');
						}
						if (stateArr.length > 0) {
							$("#statehideOrShowInputId").html(state);
							$('select#State option[value="' + FirstState + '"]').attr("selected", "selected").trigger('change');
						}
						if (districtArr.length > 0) {
							$("#districthideOrShowInputId").html(District);
							$('select#District option[value="' + FirstDistrit + '"]').attr("selected", "selected").trigger('change');
						}

						$('select#City').on('change', function () {
							$("#HelpDesk_editView_fieldName_city").val(this.value);
						});

						$('select#State').on('change', function () {
							$("#HelpDesk_editView_fieldName_state").val(this.value);
						});
						$('select#District').on('change', function () {
							$("#HelpDesk_editView_fieldName_district").val(this.value);
						});

						app.helper.hideProgress();
					},
					function (error, err) {
						app.helper.hideProgress();
					}
				);
			}
		})
		jQuery('#HelpDesk_editView_fieldName_chg_func_loc').on('change', function (event) {
			self.handleSecondLevelDependency(event.target.name, event.target.value);
		})
	},
	registerClearReferenceSelectionEvent: function (container) {
		container.find('.clearReferenceSelection').on('click', function (e) {
			var element = jQuery(e.currentTarget);
			var parentTdElement = element.closest('.parentTRDiv');
			var fieldNameElement = parentTdElement.find('.sourceField');
			var fieldName = fieldNameElement.attr('name');
			if (fieldName == 'equipment_id') {
				$("#HelpDesk_editView_fieldName_kilometer_reading").prop("disabled", false);
				$("#HelpDesk_editView_fieldName_hmr").prop("disabled", false);
				$('#idofSpanhmrEle').addClass('hide');
				$('#idofSpanhmrEleKm').addClass('hide');
				$('[data-fieldname="sr_equip_model"]').attr("readonly", false);
			}
			fieldNameElement.val('');
			parentTdElement.find('#' + fieldName + '_display').removeAttr('readonly').val('');
			parentTdElement.find('#' + fieldName + '_display').removeAttr('disabled').val('');
			element.trigger(Vtiger_Edit_Js.referenceDeSelectionEvent);
			e.preventDefault();
		})
	},
	handleSecondLevelDependency: function (targetName, targetvalue) {
		// let DependentFields = this.getSencondlevelDependentFields();
		let dependentFields = this.getDependentField(targetName);
		if (dependentFields) {
			let allFieldsRawLength = dependentFields.length;
			let jquerVal = $("#HelpDesk_editView_fieldName_" + targetName).attr("checked") ? 1 : 0;
			if (jquerVal == 1) {
				targetvalue = true;
			} else {
				targetvalue = false;
			}
			for (let i = 0; i < allFieldsRawLength; i++) {
				if (targetvalue == dependentFields[i]['dependentOnOption']) {
					$("#" + dependentFields[i]['name'] + 'hideOrShowId').removeClass("hide");
					$("#" + dependentFields[i]['name'] + 'hideOrShowInputId').removeClass("hide");
					$("#currentEqLocationHolder").removeClass("hide");
				} else {
					$("#" + dependentFields[i]['name'] + 'hideOrShowId').addClass("hide");
					$("#" + dependentFields[i]['name'] + 'hideOrShowInputId').addClass("hide");
					$("#currentEqLocationHolder").addClass("hide");
				}
			}
		}
	},
	getSencondlevelDependentFields: function () {
		let allFieldsRawLength = Object.keys($scope.allFieldsRaw).length;
		for (let i = 0; i < allFieldsRawLength; i++) {
			if ($scope.allFieldsRaw[i]['dependentOnField'] == $fieldName) {
				return $scope.allFieldsRaw[i];
			}
		}
	},
	registerImageChangeEvent: function () {
	},
	getPincodeDetails: function (pincode) {
		var aDeferred = jQuery.Deferred();
		var url = "module=Vtiger&action=GetPincodeInfo&pincode=" + pincode;
		AppConnector.request(url).then(
			function (data) {
				if (data['success']) {
					aDeferred.resolve(data);
				} else {
					aDeferred.reject(data['message']);
				}
			},
			function (error) {
				aDeferred.reject();
			}
		)
		return aDeferred.promise();
	},
	phoneCountryCode: function () {
		var input = document.querySelector("#HelpDesk_editView_fieldName_phone"),
			errorMsg = document.querySelector("#phone_error-msg"),
			validMsg = document.querySelector("#phone_valid-msg");
			// Error messages based on the code returned from getValidationError
		var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

		$(document).ready(function () {
			$('#HelpDesk_editView_fieldName_phone').attr('type', 'tel');
		});

		// Initialise plugin
		window.igiti = window.intlTelInput(input, {
			autoPlaceholder: "off",
			initialCountry: "",
			preferredCountries: ['in'],
			hiddenInput: "phone",
			separateDialCode: true,
			utilsScript: "layouts/v7/modules/Users/build/js/utils.js",
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
			let num = window.igiti.getNumber(intlTelInputUtils.numberFormat.E164);
			const mobile_number_length={"+3":10,"+20":10,"+27":9,"+30":10,"+31":8,"+32":9,"+33":9,"+34":9,"+36":9,"+39":10,"+40":10,"+41":9,"+43":11,"+45":8,"+46":7,"+47":8,"+48":9,"+49":10,"+51":9,"+54":10,"+55":11,"+56":9,"+57":10,"+58":7,"+60":7,"+61":9,"+62":11,"+63":10,"+64":9,"+65":8,"+66":9,"+81":10,"+82":9,"+84":9,"+86":11,"+90":10,"+91":10,"+92":10,"+93":9,"+94":7,"+95":10,"+98":10,"+213":9,"+216":8,"+218":10,"+223":8,"+226":8,"+227":8,"+228":8,"+230":8,"+231":8,"+233":9,"+234":8,"+235":8,"+237":9,"+241":7,"+246":7,"+252":8,"+254":10,"+255":6,"+258":12,"+260":9,"+262":9,"+263":9,"+268":8,"+297":7,"+298":5,"+299":6,"+351":9,"+352":9,"+353":9,"+355":10,"+356":8,"+357":8,"+358":11,"+359":9,"+370":8,"+371":8,"+372":7,"+373":8,"+374":8,"+375":9,"+377":8,"+380":9,"+381":8,"+382":8,"+383":8,"+385":9,"+387":66,"+389":8,"+420":9,"+421":951,"+500":5,"+501":7,"+502":8,"+503":8,"+504":8,"+505":8,"+506":8,"+507":8,"+590":10,"+593":9,"+594":9,"+595":9,"+596":9,"+598":8,"+670":8,"+672":6,"+675":8,"+677":7,"+680":7,"+682":5,"+683":4,"+685":5,"+686":8,"+687":6,"+689":6,"+691":7,"+692":7,"+787":10,"+809":10,"+829":10,"+849":10,"+852":8,"+855":9,"+876":10,"+880":10,"+886":9,"+939":10,"+960":7,"+961":8,"+962":9,"+963":9,"+964":10,"+965":8,"+966":9,"+967":9,"+968":8,"+970":59,"+971":9,"+973":8,"+974":8,"+976":8,"+977":10,"+994":9,"+995":9,"+996":9};
			const value = $(".iti__selected-dial-code").text();
			var digit = value.length;
			var mobileno = num.slice(digit);
			$(input).attr("maxlength",mobile_number_length[value]);
			if (input.value.trim()) {
				if (window.igiti.isValidNumber()) {
					isVaildMobilenumber = true;
					$('#HelpDesk_editView_fieldName_phone').val(mobileno);
					validMsg.classList.remove("hide");
				} else {
					input.classList.add("error");
					var errorCode = igiti.getValidationError();
					errorMsg.innerHTML = errorMap[errorCode];
					errorMsg.classList.remove("hide");
					isVaildMobilenumber = false;
				}
			}
		});
	},
	fetchAllFields: function () {
		app.helper.showProgress();
		let self = this;
		this.callAPI().then(
			function (data) {
				self.allFieldsRaw = data.result.fields;
				self.fieldDependency = data.result.FieldDependency;
				self.picklistDependency = data.result.picklistDependency;
				let selectedValue = $('[name="ticket_type"]').find('option:selected').val();
				if (selectedValue != '' && selectedValue != null) {
					self.handledependency('ticket_type', selectedValue, 'InitialChange');
				}
				if (selectedValue == 'GENERAL INSPECTION' || selectedValue == 'SERVICE FOR SPARES PURCHASED') {
					self.handledependency('purpose', $('[name="purpose"]').find('option:selected').val(), 'InitialChange');
				}
				app.helper.hideProgress();
			},
			function (error, err) {
				app.helper.hideProgress();
			}
		);
	},
	callAPI: function () {
		var aDeferred = jQuery.Deferred();
		var url = "module=HelpDesk&action=DescribeModuleForSR";
		AppConnector.request(url).then(
			function (data) {
				if (data['success']) {
					aDeferred.resolve(data);
				} else {
					aDeferred.reject(data['message']);
				}
			},
			function (error) {
				aDeferred.reject();
			}
		)
		return aDeferred.promise();
	},
	myFunc: function ($a, $b, $value) {
		let fieldName = 'equipment_id';
		let dependentField = this.getDependentField(fieldName);
		if (dependentField) {
			if ($value == dependentField['dependentOnOption']) {
				$("#" + dependentField['name']).removeClass("hide");
			} else {
				$("#" + dependentField['name']).addClass("hide");
			}
		}
	},
	handledependency: function (e, value, IntialChange) {
		let fieldName = e;
		let dependentField = this.getDependentField(fieldName);
		if (dependentField) {
			if (value == dependentField['dependentOnOption']) {
				$("#" + dependentField['name'] + 'hideOrShowId').removeClass("hide");
				$("#" + dependentField['name'] + 'hideOrShowInputId').removeClass("hide");
			} else {
				$("#" + dependentField['name'] + 'hideOrShowId').addClass("hide");
				$("#" + dependentField['name'] + 'hideOrShowInputId').addClass("hide");
			}
		}
		if (fieldName == 'ticket_type' || fieldName == 'purpose') {
			let dependentFields = this.getDependentFieldsOfType(fieldName, value);
			let allFieldsRawLength = Object.keys(this.allFieldsRaw).length;
			for (let i = 0; i < allFieldsRawLength; i++) {
				if (dependentFields && dependentFields.indexOf(this.allFieldsRaw[i]['name']) == -1 || (this.allFieldsRaw[i]['dependentField'] == true && ($.inArray(value, this.allFieldsRaw[i]['dependentOnMasterValue']) != -1) && this.allFieldsRaw[i]['name'] != 'purpose')) {
					$("#" + this.allFieldsRaw[i]['name'] + 'hideOrShowId').addClass("hide");
					$("#" + this.allFieldsRaw[i]['name'] + 'hideOrShowInputId').addClass("hide");
				} else {
					$("#" + this.allFieldsRaw[i]['name'] + 'hideOrShowId').removeClass("hide");
					$("#" + this.allFieldsRaw[i]['name'] + 'hideOrShowInputId').removeClass("hide");
				}
			}
			if (value == '' || value == undefined) {
				this.handledependencyOne(fieldName, value);
			}
			$('#manualEqInputerDA').addClass('hide');
			$('#manualEqInputer').addClass('hide');
		}
		if (fieldName == 'ticket_type' && IntialChange != 'InitialChange') {
			$("#HelpDesk_editView_fieldName_kilometer_reading").val('');
			$("#HelpDesk_editView_fieldName_kilometer_reading").prop("disabled", false);
			$("#HelpDesk_editView_fieldName_hmr").prop("disabled", false);
			$("#HelpDesk_editView_fieldName_hmr").val('');
			$('#idofSpanhmrEle').addClass('hide');
			$('#idofSpanhmrEleKm').addClass('hide');
			$("#HelpDesk_editView_fieldName_hmrPlacleHolder").val('');
			$("#HelpDesk_editView_fieldName_kmPlacleHolder").val('');
			// $('.sr_equip_model  option[value=""]').attr("selected", "selected").trigger('change');
		}
		this.handleMandatoryDependency(value);
	},
	handleMandatoryDependency: function (value) {
		let mandatoryKeys = $("input[name='MANDATORYFIELDS']").data('value');
		let allFieldsRawLength = mandatoryKeys['valuemapping'].length;
		let manKeys = [];
		let dependentSourceValArr = mandatoryKeys['valuemapping'];
		for (let i = 0; i < allFieldsRawLength; i++) {
			if (dependentSourceValArr[i]['sourcevalue'] == value) {
				manKeys = dependentSourceValArr[i]['targetvalues'];
				break;
			}
		}
		manKeys.forEach(element => {
			if (element != "") {
				$('#HelpDesk_editView_fieldName_' + element).attr('required', true);
				$('select[name="' + element + '"]').data('rule-required', true);
				$('#' + element + '_display').attr('required', true);
			}
		});
	},
	handleResetMandatoryDependency: function (value) {
		let mandatoryKeys = $("input[name='MANDATORYFIELDS']").data('value');
		let allFieldsRawLength = mandatoryKeys['valuemapping'].length;
		let manKeys = [];
		let dependentSourceValArr = mandatoryKeys['valuemapping'];
		for (let i = 0; i < allFieldsRawLength; i++) {
			if (dependentSourceValArr[i]['sourcevalue'] == value) {
				manKeys = dependentSourceValArr[i]['targetvalues'];
				break;
			}
		}
		manKeys.forEach(element => {
			if (element != "") {
				$('#HelpDesk_editView_fieldName_' + element).attr('required', false);
				$('select[name="' + element + '"]').data('rule-required', false);
				$('#' + element + '_display').attr('required', false);
			}
		});
	},
	handledependencyOne: function (name, value) {
		if (name == 'ticket_type') {
			let allFieldsRawLength = Object.keys(this.allFieldsRaw).length;
			for (let i = 0; i < allFieldsRawLength; i++) {
				$("#" + this.allFieldsRaw[i]['name'] + 'hideOrShowId').addClass("hide");
				$("#" + this.allFieldsRaw[i]['name'] + 'hideOrShowInputId').addClass("hide");
			}
			$("#ticket_typehideOrShowId").removeClass("hide");
			$("#ticket_typehideOrShowInputId").removeClass("hide");
		} else if (name == 'purpose' && value == '') {
			let allFieldsRawLength = Object.keys(this.allFieldsRaw).length;
			for (let i = 0; i < allFieldsRawLength; i++) {
				$("#" + this.allFieldsRaw[i]['name'] + 'hideOrShowId').addClass("hide");
				$("#" + this.allFieldsRaw[i]['name'] + 'hideOrShowInputId').addClass("hide");
			}
			$("#ticket_typehideOrShowId").removeClass("hide");
			$("#ticket_typehideOrShowInputId").removeClass("hide");
			$("#purposehideOrShowId").removeClass("hide");
			$("#purposehideOrShowInputId").removeClass("hide");
		}
	},
	getDependentFieldsOfType: function ($fieldName, $value) {
		let allFieldsRawLength = this.fieldDependency[$fieldName]['valuemapping'].length;
		let picklistDependencySourceValArr = this.fieldDependency[$fieldName]['valuemapping'];
		for (let i = 0; i < allFieldsRawLength; i++) {
			if (picklistDependencySourceValArr[i]['sourcevalue'] == $value) {
				return picklistDependencySourceValArr[i]['targetvalues'];
			}
		}
		return [];
	},
	getDependentOptions: function ($fieldName, $value) {
		let allFieldsRawLength = this.picklistDependency[$fieldName]['valuemapping'].length;
		let dependentSourceValArr = this.picklistDependency[$fieldName]['valuemapping'];
		for (let i = 0; i < allFieldsRawLength; i++) {
			if (dependentSourceValArr[i]['sourcevalue'] == $value) {
				return dependentSourceValArr[i]['targetvalues'];
			}
		}
	},
	getDependentField: function (fieldName) {
		let allFieldsRawLength = this.allFieldsRaw.length;
		let DependentFields = [];
		for (let i = 0; i < allFieldsRawLength; i++) {
			if (this.allFieldsRaw[i]['dependentOnField'] == fieldName) {
				DependentFields.push(this.allFieldsRaw[i]);
			}
		}
		return DependentFields;
	},
	autofill: function () {
		var self = this;
		$("#equipment_id_display").blur(function () {
			var value = $("#equipment_id_display").val();
			self.EquipmentModelAPI(value).then(
				function (data) {
					let referenceFields = { 'id': 'equipment_id', 'account_id': 'parent_id', 'functional_loc': 'func_loc_id' };
					for (var key in referenceFields) {
						let value = referenceFields[key];
						self.seletctTheMarkVendor(data.result['data'][key], data.result['data'][key + '_label'], value);
					}
					var modalName = data.result.data.equip_model;;
					$('.sr_equip_model  option[value="' + modalName + '"]').attr("selected", "selected").trigger('change');
					$('[data-fieldname="sr_equip_model"]').attr("readonly", 'readonly');
					self.handleHMROrKM(data.result.data.eq_last_hmr);
					$('.clearReferenceSelection').removeClass('hide');
				}
			);

		});
	},
	addHMRInput: function () {
		// $("#hmrhideOrShowInputId").prepend('<input id="HelpDesk_editView_fieldName_hmrPlacleHolder" type="hidden" class="inputElement" name="old_hmr" value="0">');
	},
	handleHMROrKM: function (lastHMR, lastKM) {
		lastHMR = parseInt(lastHMR);
		if (isNaN(lastHMR) || lastHMR == '') {
			if ($('#idofSpanhmrEle').length) {
				$("#idofSpanhmrEle").text(" Last HMR Value : " + lastHMR);
				$('#idofSpanhmrEle').addClass('hide');
			}
		} else if (lastHMR > 0) {
			if ($('#idofSpanhmrEle').length) {
				$("#idofSpanhmrEle").text(" Last HMR Value : " + lastHMR);
				$('#idofSpanhmrEle').removeClass('hide');
				// $("#hmrhideOrShowInputId").prepend('<input id="HelpDesk_editView_fieldName_hmr" type="hidden" class="inputElement" name="old_hmr" value="' + lastHMR + '">');
				$("#HelpDesk_editView_fieldName_hmrPlacleHolder").val(lastHMR);
			} else {
				$("#hmrhideOrShowInputId").prepend("<span id='idofSpanhmrEle'> Last HMR Value : " + lastHMR + "</span>");
				$("#hmrhideOrShowInputId").prepend('<input id="HelpDesk_editView_fieldName_hmrPlacleHolder" type="hidden" class="inputElement" name="old_hmr" value="' + lastHMR + '">');
			}
			$("#HelpDesk_editView_fieldName_kilometer_reading").val('');
			$("#HelpDesk_editView_fieldName_kilometer_reading").prop("disabled", true);
			$("#HelpDesk_editView_fieldName_hmr").prop("disabled", false);
		}
		lastKM = parseInt(lastKM);
		if (isNaN(lastKM) || lastKM == '') {
			if ($('#idofSpanhmrEleKm').length) {
				$("#idofSpanhmrEleKm").text(" Last Kilo Meter Reading Value : " + lastKM);
				$('#idofSpanhmrEleKm').addClass('hide');
			}
		} else if (lastKM > 0) {
			if ($('#idofSpanhmrEleKm').length) {
				$("#idofSpanhmrEleKm").text(" Last Kilo Meter Reading Value : " + lastKM);
				$('#idofSpanhmrEleKm').removeClass('hide');
				$("#HelpDesk_editView_fieldName_kmPlacleHolder").val(lastKM);
			} else {
				$("#kilometer_readinghideOrShowInputId").prepend("<span id='idofSpanhmrEleKm'> Last Kilo Meter Value : " + lastKM + "</span>");
				$("#kilometer_readinghideOrShowInputId").prepend('<input id="HelpDesk_editView_fieldName_kmPlacleHolder" type="hidden" class="inputElement" name="old_km" value="' + lastKM + '">');
			}
			$("#HelpDesk_editView_fieldName_hmr").prop("disabled", true);
			$("#HelpDesk_editView_fieldName_kilometer_reading").prop("disabled", false);
		}
		$("#" + 'manual_equ_ser' + 'hideOrShowId').addClass("hide");
		$("#" + 'manual_equ_ser' + 'hideOrShowInputId').addClass("hide");
		$("#HelpDesk_editView_fieldName_manual_equ_ser").val("");
		$("#" + 'func_loc_id' + 'hideOrShowId').removeClass("hide");
		$("#" + 'func_loc_id' + 'hideOrShowInputId').removeClass("hide");
		$("#" + 'chg_func_loc' + 'hideOrShowId').removeClass("hide");
		$("#" + 'chg_func_loc' + 'hideOrShowInputId').removeClass("hide");
		this.handlePincodeLevelDependency('chg_func_loc', false);
		$('#manualEqInputerDA').addClass('hide');
		$('#manualEqInputer').addClass('hide');
	},
	convertToUpperCase: function () {
		$(".inputElement ").keyup(function () {
			this.value = this.value.toLocaleUpperCase();
		});
	},
	registerForManualEquipment: function () {
		let thisInstance = this;
		$('#manualEqInputerDA').on('click', function (e) {
			$("#" + 'manual_equ_ser' + 'hideOrShowId').removeClass("hide");
			$("#" + 'manual_equ_ser' + 'hideOrShowInputId').removeClass("hide");
			$('#HelpDesk_editView_fieldName_manual_equ_ser').attr("data-rule-required", "true");
			$("#" + 'func_loc_id' + 'hideOrShowId').addClass("hide");
			$("#" + 'func_loc_id' + 'hideOrShowInputId').addClass("hide");
			$("#" + 'chg_func_loc' + 'hideOrShowId').addClass("hide");
			$("#" + 'chg_func_loc' + 'hideOrShowInputId').addClass("hide");
			$("#" + 'equip_location' + 'hideOrShowId').addClass("hide");
			$("#" + 'equip_location' + 'hideOrShowInputId').addClass("hide");
			thisInstance.handlePincodeLevelDependency('chg_func_loc', true);
			e.stopPropagation();
			e.preventDefault();
		});
		$('#manualEqInputer').on('click', function (e) {
			$("#" + 'manual_equ_ser' + 'hideOrShowId').removeClass("hide");
			$("#" + 'manual_equ_ser' + 'hideOrShowInputId').removeClass("hide");
			$('#HelpDesk_editView_fieldName_manual_equ_ser').attr("data-rule-required", "true");
			$("#" + 'func_loc_id' + 'hideOrShowId').addClass("hide");
			$("#" + 'func_loc_id' + 'hideOrShowInputId').addClass("hide");
			$("#" + 'chg_func_loc' + 'hideOrShowId').addClass("hide");
			$("#" + 'chg_func_loc' + 'hideOrShowInputId').addClass("hide");
			thisInstance.handlePincodeLevelDependency('chg_func_loc', true);
			e.stopPropagation();
			e.preventDefault();
		});
	},
	handlePincodeLevelDependency: function (targetName, targetvalue) {
		let dependentFields = this.getDependentField(targetName);
		if (dependentFields) {
			let allFieldsRawLength = dependentFields.length;
			for (let i = 0; i < allFieldsRawLength; i++) {
				if (targetvalue == dependentFields[i]['dependentOnOption']) {
					$("#" + dependentFields[i]['name'] + 'hideOrShowId').removeClass("hide");
					$("#" + dependentFields[i]['name'] + 'hideOrShowInputId').removeClass("hide");
					$("#currentEqLocationHolder").removeClass("hide");
				} else {
					$("#" + dependentFields[i]['name'] + 'hideOrShowId').addClass("hide");
					$('[data-fieldname="' + dependentFields[i]['name'] + '"]').val("");
					$("#" + dependentFields[i]['name'] + 'hideOrShowInputId').addClass("hide");
					$("#currentEqLocationHolder").addClass("hide");
				}
			}
			$('select#State option[value=""]').attr("selected", "selected").trigger('change');
			$('select#City option[value=""]').attr("selected", "selected").trigger('change');
			$('select#District option[value=""]').attr("selected", "selected").trigger('change');
		}
	},
	registerAutoCompleteFields: function (container) {
		var thisInstance = this;
		container.find('input.autoComplete').autocomplete({
			'minLength': '3',
			'source': function (request, response) {
				//element will be array of dom elements
				//here this refers to auto complete instance
				var inputElement = jQuery(this.element[0]);
				var searchValue = request.term;
				var params = thisInstance.getReferenceSearchParams(inputElement);
				params.module = app.getModuleName();
				if (jQuery('#QuickCreate').length > 0) {
					params.module = container.find('[name="module"]').val();
				}
				params.search_value = searchValue;
				params.sr_equip_model =  $("select[name='sr_equip_model']").val();;
				if (params.search_module && params.search_module != 'undefined') {
					thisInstance.searchModuleNames(params).then(function (data) {
						var reponseDataList = new Array();
						var serverDataFormat = data;
						let sapTicketVal = $("select[name='ticket_type']").val();
						if (serverDataFormat.length <= 0) {
							jQuery(inputElement).val('');
							serverDataFormat = new Array({
								'label': 'No Results Found',
								'type': 'no results'
							});
							if (sapTicketVal == 'PRE-DELIVERY' || sapTicketVal == 'SERVICE FOR SPARES PURCHASED' ||
								sapTicketVal == 'ERECTION AND COMMISSIONING' || sapTicketVal == 'GENERAL INSPECTION') {
								if ($('#manualEqInputerDA').length) {
									$('#manualEqInputerDA').removeClass('hide');
								} else {
									$("<button id='manualEqInputerDA' style='margin-top: 30px'> Enter Manual Equipment Serial Number</button>").insertAfter("#equip_id_dahideOrShowInputId");
									thisInstance.registerForManualEquipment();
								}
								if ($('#manualEqInputer').length) {
									$('#manualEqInputer').removeClass('hide');
								} else {
									$("<button id='manualEqInputer' style='margin-top: 30px'> Enter Manual Equipment Serial Number</button>").insertAfter("#equipment_idhideOrShowInputId");
									thisInstance.registerForManualEquipment();
								}
							}
						} else {
							if (sapTicketVal == 'PRE-DELIVERY' || sapTicketVal == 'SERVICE FOR SPARES PURCHASED' ||
								sapTicketVal == 'ERECTION AND COMMISSIONING' || sapTicketVal == 'GENERAL INSPECTION') {
								$('#manualEqInputerDA').addClass('hide');
								$('#manualEqInputer').addClass('hide');
								$("#" + 'manual_equ_ser' + 'hideOrShowId').addClass("hide");
								$("#" + 'manual_equ_ser' + 'hideOrShowInputId').addClass("hide");
							}
						}
						for (var id in serverDataFormat) {
							var responseData = serverDataFormat[id];
							reponseDataList.push(responseData);
						}
						response(reponseDataList);
					});
				} else {
					jQuery(inputElement).val('');
					serverDataFormat = new Array({
						'label': 'No Results Found',
						'type': 'no results'
					});
					response(serverDataFormat);
				}
			},
			'select': function (event, ui) {
				var selectedItemData = ui.item;
				//To stop selection if no results is selected
				if (typeof selectedItemData.type != 'undefined' && selectedItemData.type == "no results") {
					return false;
				}
				var element = jQuery(this);
				var parent = element.closest('td');
				if (parent.length == 0) {
					parent = element.closest('.fieldValue');
				}
				var sourceField = parent.find('.sourceField');
				selectedItemData.record = selectedItemData.id;
				selectedItemData.source_module = parent.find('input[name="popupReferenceModule"]').val();
				selectedItemData.selectedName = selectedItemData.label;
				var fieldName = sourceField.attr("name");
				parent.find('input[name="' + fieldName + '"]').val(selectedItemData.id);
				element.attr("value", selectedItemData.id);
				element.data("value", selectedItemData.id);
				parent.find('.clearReferenceSelection').removeClass('hide');
				parent.find('.referencefield-wrapper').addClass('selected');
				element.attr("disabled", "disabled");
				//trigger reference field selection event
				sourceField.trigger(Vtiger_Edit_Js.referenceSelectionEvent, selectedItemData);
				//trigger post reference selection
				sourceField.trigger(Vtiger_Edit_Js.postReferenceSelectionEvent, { 'data': selectedItemData });
			}
		});
	},
	EquipmentModelAPI: function (val) {
		var aDeferred = jQuery.Deferred();
		var url = "record=" + val + "&source_module=Equipment&module=HelpDesk&action=GetAllInfo";
		AppConnector.request(url).then(
			function (data) {
				if (data['success']) {
					aDeferred.resolve(data);
				} else {
					aDeferred.reject(data['message']);
				}
			},
			function (error) {
				aDeferred.reject();
			}
		)
		return aDeferred.promise();
	}
});