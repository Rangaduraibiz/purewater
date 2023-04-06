Inventory_Edit_Js("servicerequest_Edit_Js",{},{
    
    accountRefrenceField : false,
    
    initializeVariables : function() {
        this._super();
        var form = this.getForm();
        this.accountReferenceField = form.find('[name="account_id"]');
    },
    
    /**
	 * Function which will register event for Reference Fields Selection
	 */
	registerReferenceSelectionEvent : function(container) {
		this._super(container);
		var self = this;
		
		this.accountReferenceField.on(Vtiger_Edit_Js.referenceSelectionEvent, function(e, data){
			self.referenceSelectionEventHandler(data, container);
		});
	},
    
    /**
	 * Function to get popup params
	 */
	getPopUpParams : function(container) {
		var params = this._super(container);
        var sourceFieldElement = jQuery('input[class="sourceField"]',container);
		if(!sourceFieldElement.length) {
			sourceFieldElement = jQuery('input.sourceField',container);
		}

		if(sourceFieldElement.attr('name') == 'contact_id') {
			var form = this.getForm();
			var parentIdElement  = form.find('[name="account_id"]');
			if(parentIdElement.length > 0 && parentIdElement.val().length > 0 && parentIdElement.val() != 0) {
				var closestContainer = parentIdElement.closest('td');
				params['related_parent_id'] = parentIdElement.val();
				params['related_parent_module'] = closestContainer.find('[name="popupReferenceModule"]').val();
			}
        }
        return params;
    },
    
    /**
	 * Function to search module names
	 */
	searchModuleNames : function(params) {
		var aDeferred = jQuery.Deferred();

		if(typeof params.module == 'undefined') {
			params.module = app.getModuleName();
		}
		if(typeof params.action == 'undefined') {
			params.action = 'BasicAjax';
		}
		
		if(typeof params.base_record == 'undefined') {
			var record = jQuery('[name="record"]');
			var recordId = app.getRecordId();
			if(record.length) {
				params.base_record = record.val();
			} else if(recordId) {
				params.base_record = recordId;
			} else if(app.view() == 'List') {
				var editRecordId = jQuery('#listview-table').find('tr.listViewEntries.edited').data('id');
				if(editRecordId) {
					params.base_record = editRecordId;
				}
			}
		}

		if (params.search_module == 'Contacts') {
			var form = this.getForm();
			if(this.accountReferenceField.length > 0 && this.accountReferenceField.val().length > 0) {
				var closestContainer = this.accountReferenceField.closest('td');
				params.parent_id = this.accountReferenceField.val();
				params.parent_module = closestContainer.find('[name="popupReferenceModule"]').val();
			}
		}
        
        // Added for overlay edit as the module is different
        if(params.search_module == 'Products' || params.search_module == 'Services') {
            params.module = 'servicerequest';
        }
        
		app.request.get({'data':params}).then(
			function(error, data) {
                if(error == null) {
                    aDeferred.resolve(data);
                }
			},
			function(error){
				aDeferred.reject();
			}
		)
		return aDeferred.promise();
	},
        
        registerBasicEvents: function(container){
            this._super(container);
            this.registerForTogglingBillingandShippingAddress();
            this.registerEventForCopyAddress(); 
			this.registerReferenceSelectionEvent(container); 
        },

	
		registerReferenceSelectionEvent: function (container) {
			var self = this;
			jQuery('input[name="customer_id"]', container).on(Vtiger_Edit_Js.referenceSelectionEvent, function (e, data) {
				self.autofill();
			});
	
		},
		autofill: function () {
			var self = this;
			let dataOf = {};
			dataOf['record'] =$("input[name=customer_id]").val();
			dataOf['source_module'] = 'JobCard';
			dataOf['module'] = 'JobCard';
			dataOf['action'] = 'GetAllInfo';
			app.helper.showProgress();
			app.request.get({ data: dataOf }).then(function (err, response) {
				console.log(response);
				if (err == null) {
					let referenceFields = { 'cf_3140':'customer_name' , 'phone': 'mobile','address':'address','serial_number':'product_modal' };
					for (var key in referenceFields) {
						let value = referenceFields[key];
						self.seletctTheMarkVendor(response['data'][key], response['data'][key + '_label'], value);
					}
					$("textarea[name='address']").val(response.data.address);
					var modalName = response.data.product_subcategory;
					$('.product_subategory  option[value="' + modalName + '"]').attr("selected", "selected").trigger('change');
					$('[data-fieldname="product_subategory"]').attr("readonly", 'readonly');
	
					modalName = response.data.productcategory;
					console.log(modalName)
					$('.product_category  option[value="' + modalName + '"]').attr("selected", "selected").trigger('change');
					$('[data-fieldname="product_category"]').attr("readonly", 'readonly');
					app.helper.hideProgress();
					dataOf['source_module'] = 'OnProucts';
					dataOf['record']=response.data.product_name;

					app.request.get({ data: dataOf }).then(function (err, response) {
						if (err == null) {
							console.log(response);
							let referenceFields = { 'productname':'product_name','warrenty_period':'warrenty_period' };
							for (var key in referenceFields) {
								let value = referenceFields[key];
								self.seletctTheMarkVendor(response['data'][key], response['data'][key + '_label'], value);
							}
							var modalName = response.data.product_subcategory;
							$('.product_subcategory  option[value="' + modalName + '"]').attr("selected", "selected").trigger('change');
							$('[data-fieldname="product_subcategory"]').attr("readonly", 'readonly');
			
							modalName = response.data.product_category;
							console.log(modalName)
							$('.product_category  option[value="' + modalName + '"]').attr("selected", "selected").trigger('change');
							$('[data-fieldname="product_category"]').attr("readonly", 'readonly');
							app.helper.hideProgress();
						}
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
});
    

