Inventory_Edit_Js("SalesOrder_Edit_Js", {}, {

	/**
	 * Function to get popup params
	 */
	getPopUpParams: function (container) {
		var params = this._super(container);
		var sourceFieldElement = jQuery('input[class="sourceField"]', container);
		if (!sourceFieldElement.length) {
			sourceFieldElement = jQuery('input.sourceField', container);
		}

		if (sourceFieldElement.attr('name') == 'contact_id' || sourceFieldElement.attr('name') == 'potential_id') {
			var form = this.getForm();
			var parentIdElement = form.find('[name="account_id"]');
			if (parentIdElement.length > 0 && parentIdElement.val().length > 0 && parentIdElement.val() != 0) {
				var closestContainer = parentIdElement.closest('td');
				params['related_parent_id'] = parentIdElement.val();
				params['related_parent_module'] = closestContainer.find('[name="popupReferenceModule"]').val();
			} else if (sourceFieldElement.attr('name') == 'potential_id') {
				parentIdElement = form.find('[name="contact_id"]');
				if (parentIdElement.length > 0 && parentIdElement.val().length > 0) {
					closestContainer = parentIdElement.closest('td');
					params['related_parent_id'] = parentIdElement.val();
					params['related_parent_module'] = closestContainer.find('[name="popupReferenceModule"]').val();
				}
			}
		}
		return params;
	},

	/**
	 * Function to register event for enabling recurrence
	 * When recurrence is enabled some of the fields need
	 * to be check for mandatory validation
	 */
	registerEventForEnablingRecurrence: function () {
		var thisInstance = this;
		var form = this.getForm();
		var enableRecurrenceField = form.find('[name="enable_recurring"]');
		var fieldNamesForValidation = new Array('recurring_frequency', 'start_period', 'end_period', 'payment_duration', 'invoicestatus');
		var selectors = new Array();
		for (var index in fieldNamesForValidation) {
			selectors.push('[name="' + fieldNamesForValidation[index] + '"]');
		}
		var selectorString = selectors.join(',');
		var validationToggleFields = form.find(selectorString);
		enableRecurrenceField.on('change', function (e) {
			var element = jQuery(e.currentTarget);
			var addValidation;
			if (element.is(':checked')) {
				addValidation = true;
			} else {
				addValidation = false;
			}

			//If validation need to be added for new elements,then we need to detach and attach validation
			//to form
			if (addValidation) {
				thisInstance.AddOrRemoveRequiredValidation(validationToggleFields, true);
			} else {
				thisInstance.AddOrRemoveRequiredValidation(validationToggleFields, false);
			}
		})
		if (!enableRecurrenceField.is(":checked")) {
			thisInstance.AddOrRemoveRequiredValidation(validationToggleFields, false);
		} else if (enableRecurrenceField.is(":checked")) {
			thisInstance.AddOrRemoveRequiredValidation(validationToggleFields, true);
		}
	},

	AddOrRemoveRequiredValidation: function (dependentFieldsForValidation, addValidation) {
		jQuery(dependentFieldsForValidation).each(function (key, value) {
			var relatedField = jQuery(value);
			if (addValidation) {
				relatedField.removeClass('ignore-validation').data('rule-required', true);
				if (relatedField.is("select")) {
					relatedField.attr('disabled', false);
				} else {
					relatedField.removeAttr('disabled');
				}
			} else if (!addValidation) {
				relatedField.addClass('ignore-validation').removeAttr('data-rule-required');
				if (relatedField.is("select")) {
					relatedField.attr('disabled', true).trigger("change");
					var select2Element = app.helper.getSelect2FromSelect(relatedField);
					select2Element.trigger('Vtiger.Validation.Hide.Messsage');
					select2Element.find('a').removeClass('input-error');
				} else {
					relatedField.attr('disabled', 'disabled').trigger('Vtiger.Validation.Hide.Messsage').removeClass('input-error');
				}
			}
		});
	},

	/**
	 * Function to search module names
	 */
	searchModuleNames: function (params) {
		var aDeferred = jQuery.Deferred();
		if (typeof params.module == 'undefined') {
			params.module = app.getModuleName();
		}
		if (typeof params.action == 'undefined') {
			params.action = 'BasicAjax';
		}

		if (typeof params.base_record == 'undefined') {
			var record = jQuery('[name="record"]');
			var recordId = app.getRecordId();
			if (record.length) {
				params.base_record = record.val();
			} else if (recordId) {
				params.base_record = recordId;
			} else if (app.view() == 'List') {
				var editRecordId = jQuery('#listview-table').find('tr.listViewEntries.edited').data('id');
				if (editRecordId) {
					params.base_record = editRecordId;
				}
			}
		}

		// Added for overlay edit as the module is different
		if (params.search_module == 'Products' || params.search_module == 'Services') {
			params.module = 'SalesOrder';
		}

		app.request.get({ 'data': params }).then(
			function (error, data) {
				if (error == null) {
					aDeferred.resolve(data);
				}
			},
			function (error) {
				aDeferred.reject();
			}
		)
		return aDeferred.promise();
	},

	/**
	 * Function which will register event for Reference Fields Selection
	 */
	registerReferenceSelectionEvent: function (container) {
		this._super(container);
		var self = this;

		jQuery('input[name="account_id"]', container).on(Vtiger_Edit_Js.referenceSelectionEvent, function (e, data) {
			self.referenceSelectionEventHandler(data, container);
		});
	},
	registerBasicEvents: function (container) {
		this._super(container);
		this.registerEventForEnablingRecurrence();
		this.registerForTogglingBillingandShippingAddress();
		this.registerEventForCopyAddress();
		this.registerFinalQuantityChangeEvent();
		this.registerFinalQuantityChangeEvent1();
		jQuery(".duplicate").on('click', function (event) {
			let element = $(this);
			let parent = element.closest('tr');
			let rowNum = parent.find('input.rowNumber').val();
			let recordId = $("#hdnProductId" + rowNum).val();
			let dataUrl = "index.php?module=Inventory&action=GetTaxes&record=" + recordId + "&currency_id=" + jQuery('#currency_id option:selected').val() + "&sourceModule=" + app.getModuleName();
			app.request.get({ 'url': dataUrl }).then(
				function (error, data) {
					if (error == null) {
						let objKeys = Object.keys(data['0']);
						data['0'][objKeys['0']]['qty'] = $("#qty" + rowNum).val();
						data['0'][objKeys['0']]['part_description'] = $("#part_description" + rowNum).val();
						data['0'][objKeys['0']]['failedpart_lineid'] = $("#failedpart_lineid" + rowNum).val();
						jQuery('#addProduct').trigger('click', data);
						app.helper.hideProgress();
					}
				},
				function (error, err) {
				}
			);
			event.preventDefault();
		});
	},
	mapResultsToFields: function (parentRow, responseData) {
        var lineItemNameElment = jQuery('input.productName', parentRow);
        var referenceModule = this.getLineItemSetype(parentRow);
        var lineItemRowNumber = parentRow.data('rowNum');
        for (var id in responseData) {
            var recordId = id;
            var recordData = responseData[id];
            var selectedName = recordData.name;
            var unitPrice = recordData.listprice;
            var listPriceValues = recordData.listpricevalues;
            var taxes = recordData.taxes;
            var purchaseCost = recordData.purchaseCost;
            this.setPurchaseCostValue(parentRow, purchaseCost);
            var imgSrc = recordData.imageSource;
            this.setImageTag(parentRow, imgSrc);
            if (referenceModule == 'Products') {
                parentRow.data('quantity-in-stock', recordData.quantityInStock);
            }
            var description = recordData.description;
            jQuery('input.selectedModuleId', parentRow).val(recordId);
            jQuery('input.lineItemType', parentRow).val(referenceModule);
            lineItemNameElment.val(selectedName);
            lineItemNameElment.attr('disabled', 'disabled');
            jQuery('input.listPrice', parentRow).val(unitPrice);
            var currencyId = this.currencyElement.val();
            var listPriceValuesJson = JSON.stringify(listPriceValues);
            if (listPriceValues && typeof listPriceValues[currencyId] != 'undefined') {
                this.formatListPrice(parentRow, listPriceValues[currencyId]);
                this.lineItemRowCalculations(parentRow);
            }
            jQuery('input.listPrice', parentRow).attr('list-info', listPriceValuesJson);
            jQuery('input.listPrice', parentRow).data('baseCurrencyId', recordData.baseCurrencyId);
            jQuery('textarea.lineItemCommentBox', parentRow).val(description);
            var taxUI = this.getTaxDiv(taxes, parentRow);
            jQuery('.taxDivContainer', parentRow).html(taxUI);

            //Take tax percentage according to tax-region, if region is selected.
            var selectedRegionId = this.regionElement.val();
            if (selectedRegionId != 0) {
                var taxPercentages = jQuery('.taxPercentage', parentRow);
                jQuery.each(taxPercentages, function (index1, taxDomElement) {
                    var taxPercentage = jQuery(taxDomElement);
                    var regionsList = taxPercentage.data('regionsList');
                    var value = regionsList['default'];
                    if (selectedRegionId && regionsList[selectedRegionId]) {
                        value = regionsList[selectedRegionId];
                    }
                    taxPercentage.val(parseFloat(value));
                });
            }

            if (this.isIndividualTaxMode()) {
                parentRow.find('.productTaxTotal').removeClass('hide')
            } else {
                parentRow.find('.productTaxTotal').addClass('hide')
            }
        }
        if (referenceModule == 'Products') {
            this.loadSubProducts(parentRow);
        }

        jQuery('.qty', parentRow).trigger('focusout');
        if (recordData.qty != undefined && recordData.qty != null) {
            jQuery('input.qty', parentRow).val(recordData.qty);
			jQuery('input[name=failedpart_lineid'+lineItemRowNumber+']',parentRow).val(recordData.failedpart_lineid);
			jQuery('textarea.part_description', parentRow).val(recordData.part_description);
            jQuery('textarea.lineItemCommentBox', parentRow).attr('readonly', 'readonly');
        } else {
        }
    },

    /**
	   Function which will register event for excluded qty 
	   on focus out it will make excluded qty remarks mandatory
	**/

	registerFinalQuantityChangeEvent1: function () {
		var self = this;
		this.lineItemsHolder.on('focusout', '.final_qty', function (e) {
			var element = jQuery(e.currentTarget);
			var lineItemRow = element.closest('tr.' + self.lineItemDetectingClass);
			let rowNum = lineItemRow.closest('tr').data('row-num');

			let valqty = lineItemRow.find('input[data-extraname="qty"]').val();
			valqty = parseInt(valqty);
			element.attr('max',valqty);
			console.log(valqty);
			let product = lineItemRow.find('#productName'+rowNum).val();
			console.log(product);
			var sum = 0;
				$('.'+product).each(function(){
				    sum += $(this).val(); 
				    console.log(sum); // Or this.innerHTML, this.innerText
				});
                 

			var finalqty = element.val();
			if (typeof finalqty != 'undefined') {
				if (parseFloat(finalqty) < parseFloat(sum)) {
					console.log(parseFloat(finalqty));
					console.log(parseFloat(sum));
					console.log("not allowrd this");
					return false;
				}
				else {
					return true;
				}
			}
		});
	},
	registerFinalQuantityChangeEvent: function () {
		let self = this;
		self.lineItemsHolder.find('tr.' + self.lineItemDetectingClass).each(function (index, domElement) {
			var lineItemRow = jQuery(domElement);
			let element = $(this);
			let rowNum = lineItemRow.closest('tr').data('row-num');
			let valqty = lineItemRow.find('input[data-extraname="qty"]').val();
			valqty = parseInt(valqty);
			console.log(valqty);
			
			let finalqty = lineItemRow.find('input[data-extraname="final_qty"]').val();
			finalqty = parseInt(finalqty);
			
			if (finalqty > valqty) {
				console.log("not allowed");
				//lineItemRow.find('#excluded_qty_remDivCla').removeClass('hide');
				//lineItemRow.find('#excluded_qty_rem'+rowNum).attr('required', true);
				alert("gather");
			} else {
				//lineItemRow.find('#excluded_qty_remDivCla').addClass('hide');
			}
		});
	},

});