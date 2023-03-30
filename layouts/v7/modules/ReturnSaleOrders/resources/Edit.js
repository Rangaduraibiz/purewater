Inventory_Edit_Js("ReturnSaleOrders_Edit_Js", {}, {

	lineItemDetectingClass: 'lineItemRow',

	dependencyStatusAndEvent: function () {
		let self = this;
		self.lineItemsHolder.find('tr.' + self.lineItemDetectingClass).each(function (index, domElement) {
			var lineItemRow = jQuery(domElement);
			let val = lineItemRow.find('select[data-extraname="action_taken_by_sm"]').val();
			if (val == 'Scrapped at Region') {
				$(this).closest('tr').find('.rso_part_status .select2-chosen').html('Scrapped at Region-Closed');
				$(this).closest('tr').find('.sto_no').addClass('hide');
				$(this).closest('tr').find('.div_or_ser_center').addClass('hide');
			} else if (val == 'Repaired at Region') {
				$(this).closest('tr').find('.rso_part_status .select2-chosen').html('Repaired at Region-Closed');
				$(this).closest('tr').find('.sto_no').addClass('hide');
				$(this).closest('tr').find('.div_or_ser_center').addClass('hide');
				$(this).closest('tr').find('#goods_consignment_noDivCla').removeClass('hide');
				$(this).closest('tr').find('#goods_rcived_dteDivCla').removeClass('hide');
			} else if ($(this).val() == 'Sent to division to Repair' || $(this).val() == 'Sent to division to Analysis' || $(this).val() == 'Sent to Service Centre for Repair') {
				$(this).closest('tr').find('.sto_no').removeClass('hide');
				$(this).closest('tr').find('.div_or_ser_center').removeClass('hide');
				$(this).closest('tr').find('#goods_consignment_noDivCla').removeClass('hide');
				$(this).closest('tr').find('#goods_rcived_dterDivCla').removeClass('hide');
			}


			let received_qty = lineItemRow.find('input[data-extraname="receivedvd_qty"]').val();
			let rowNum = lineItemRow.closest('tr').data('row-num');
			r_qty = parseInt(received_qty);

			//a
			let at_under_rep_atdiv = lineItemRow.find('input[data-extraname="at_under_rep_atdiv"]').val();
			let at_rep_a_sent_reg = lineItemRow.find('input[data-extraname="at_rep_a_sent_reg"]').val();
			let at_rep_a_kept_float = lineItemRow.find('input[data-extraname="at_rep_a_kept_float"]').val();
			let at_scraped_at_dev = lineItemRow.find('input[data-extraname="at_scraped_at_dev"]').val();

			at_under_rep_atdiv = parseInt(at_under_rep_atdiv);
			at_rep_a_sent_reg = parseInt(at_rep_a_sent_reg);
			at_rep_a_kept_float = parseInt(at_rep_a_kept_float);
			at_scraped_at_dev = parseInt(at_scraped_at_dev);

			let allsum = at_under_rep_atdiv+at_rep_a_sent_reg+at_rep_a_kept_float+at_scraped_at_dev;
			let a_all_sum = parseInt(allsum);

			jQuery.validator.addMethod("positive", function(){
				if( r_qty < a_all_sum ){
					return false;
				}
				else
				{
					$("#at_under_rep_atdiv" + rowNum).removeClass('input-error');
					$("#at_rep_a_sent_reg" + rowNum).removeClass('input-error');
					$("#at_rep_a_kept_float" + rowNum).removeClass('input-error');
					$("#at_scraped_at_dev" + rowNum).removeClass('input-error');
					return true;
				}
				
			}, jQuery.validator.format(app.vtranslate('DSM total qty should not be gather than received qty')));

			
            //b
			let ana_done_div_qty = lineItemRow.find('input[data-extraname="ana_done_div_qty"]').val();
			let und_fail_ana_div_qty = lineItemRow.find('input[data-extraname="und_fail_ana_div_qty"]').val();
			let asent_to_ven_qty = lineItemRow.find('input[data-extraname="asent_to_ven_qty"]').val();
			let scm_dismant_unprogre = lineItemRow.find('input[data-extraname="scm_dismant_unprogre"]').val();
			let scm_repaired_qty = lineItemRow.find('input[data-extraname="scm_repaired_qty"]').val();
			let scm_beyond_eco_rep_qty = lineItemRow.find('input[data-extraname="scm_beyond_eco_rep_qty"]').val();
			let scm_item_aw_for_rep = lineItemRow.find('input[data-extraname="scm_item_aw_for_rep"]').val();
			let scm_senttoreg_worep = lineItemRow.find('input[data-extraname="scm_senttoreg_worep"]').val();
			let scm_rep_and_sent_back_qty = lineItemRow.find('input[data-extraname="scm_rep_and_sent_back_qty"]').val();

			let ballsum = ana_done_div_qty+und_fail_ana_div_qty+asent_to_ven_qty+scm_dismant_unprogre+scm_repaired_qty+scm_beyond_eco_rep_qty+scm_beyond_eco_rep_qty+scm_senttoreg_worep+scm_rep_and_sent_back_qty;
		    let b_all_sum = parseInt(ballsum);

		     jQuery.validator.addMethod("positive", function(){
				if( r_qty < b_all_sum ){
					return false;
				}
				else
				{
					$("#ana_done_div_qty" + rowNum).removeClass('input-error');
					$("#und_fail_ana_div_qty" + rowNum).removeClass('input-error');
					$("#asent_to_ven_qty" + rowNum).removeClass('input-error');
					$("#scm_dismant_unprogre" + rowNum).removeClass('input-error');
					$("#scm_repaired_qty" + rowNum).removeClass('input-error');
					$("#scm_beyond_eco_rep_qty" + rowNum).removeClass('input-error');
					$("#scm_item_aw_for_rep" + rowNum).removeClass('input-error');
					$("#scm_senttoreg_worep" + rowNum).removeClass('input-error');
					$("#scm_rep_and_sent_back_qty" + rowNum).removeClass('input-error');
					return true;
				}
				
			}, jQuery.validator.format(app.vtranslate('Present total qty should not be gather than received qty')));
		});
	},
	updateRowNumberForRow: function (lineItemRow, expectedSequenceNumber, currentSequenceNumber) {
		if (typeof currentSequenceNumber == 'undefined') {
			//by default there will zero current sequence number
			currentSequenceNumber = 0;
		}

		let fildNamesOfCustFields = jQuery('#fildNamesOfCustFields').val();
		if (fildNamesOfCustFields == null || fildNamesOfCustFields == undefined) {
			fildNamesOfCustFields = '[]';
		}
		let fildNamesOfCustFieldsOther = jQuery('#fildNamesOfCustFieldsOther').val();
		if (fildNamesOfCustFieldsOther == null || fildNamesOfCustFieldsOther == undefined) {
			fildNamesOfCustFieldsOther = '[]';
		}

		let fildNamesOfCustFieldsOther1 = jQuery('#fildNamesOfCustFieldsSub1').val();
		if (fildNamesOfCustFieldsOther1 == null || fildNamesOfCustFieldsOther1 == undefined) {
			fildNamesOfCustFieldsOther1 = '[]';
		}

		let fildNamesOfCustFieldsOther2 = jQuery('#fildNamesOfCustFieldsSub2').val();
		if (fildNamesOfCustFieldsOther2 == null || fildNamesOfCustFieldsOther2 == undefined) {
			fildNamesOfCustFieldsOther2 = '[]';
		}

		fildNamesOfCustFields = JSON.parse(fildNamesOfCustFields);
		fildNamesOfCustFieldsOther = JSON.parse(fildNamesOfCustFieldsOther);

		fildNamesOfCustFieldsOther1 = JSON.parse(fildNamesOfCustFieldsOther1);
		fildNamesOfCustFieldsOther2 = JSON.parse(fildNamesOfCustFieldsOther2);

		var idFields = new Array('productName', 'subproduct_ids', 'hdnProductId', 'purchaseCost', 'margin', 'productName_other', 'qty_other',
			'comment', 'qty', 'listPrice', 'discount_div', 'discount_type', 'hdnProductId_other',
			'discount_amount', 'lineItemType', 'searchIcon', 'netPrice', 'subprod_names',
			'productTotal', 'discountTotal', 'totalAfterDiscount', 'taxTotal', 'sr_action_one', 'sr_action_two', 'sr_replace_action');
		if (fildNamesOfCustFields.length > 0) {
			idFields = idFields.concat(fildNamesOfCustFields);
		}
		if (fildNamesOfCustFieldsOther && fildNamesOfCustFieldsOther.length > 0) {
			idFields = idFields.concat(fildNamesOfCustFieldsOther);
		}

		if (fildNamesOfCustFieldsOther1 && fildNamesOfCustFieldsOther1.length > 0) {
			idFields = idFields.concat(fildNamesOfCustFieldsOther1);
		}
		if (fildNamesOfCustFieldsOther2 && fildNamesOfCustFieldsOther2.length > 0) {
			idFields = idFields.concat(fildNamesOfCustFieldsOther2);
		}

		var classFields = new Array('taxPercentage');
		//To handle variable tax ids
		for (var classIndex in classFields) {
			var className = classFields[classIndex];
			jQuery('.' + className, lineItemRow).each(function (index, domElement) {
				var idString = domElement.id
				//remove last character which will be the row number
				idFields.push(idString.slice(0, (idString.length - 1)));
			});
		}

		var expectedRowId = 'row' + expectedSequenceNumber;
		for (var idIndex in idFields) {
			var elementId = idFields[idIndex];
			var actualElementId = elementId + currentSequenceNumber;
			var expectedElementId = elementId + expectedSequenceNumber;
			lineItemRow.find('#' + actualElementId).attr('id', expectedElementId)
			.filter('[name="' + actualElementId + '"]').attr('name', expectedElementId);
		}

		var nameFields = new Array('discount', 'purchaseCost', 'margin');
		for (var nameIndex in nameFields) {
			var elementName = nameFields[nameIndex];
			var actualElementName = elementName + currentSequenceNumber;
			var expectedElementName = elementName + expectedSequenceNumber;
			lineItemRow.find('[name="' + actualElementName + '"]').attr('name', expectedElementName);
		}

		lineItemRow.attr('id', expectedRowId).attr('data-row-num', expectedSequenceNumber);
		lineItemRow.find('input.rowNumber').val(expectedSequenceNumber);

		return lineItemRow;
	},

	initializeLineItemRowCustomFields: function (lineItemRow, rowNum) {
		var lineItemType = lineItemRow.find('input.lineItemType').val();
		let fildNamesOfCustFields = jQuery('#fildNamesOfCustPickFieldsInfo').val();
		if (fildNamesOfCustFields == null || fildNamesOfCustFields == undefined) {
			fildNamesOfCustFields = '[]';
		}
		fildNamesOfCustFields = JSON.parse(fildNamesOfCustFields);
		let pickLength = fildNamesOfCustFields.length;
		for (let i = 0; i < pickLength; i++) {
			this.customLineItemFields[fildNamesOfCustFields[i]] = 'picklist';
		}
		for (var cfName in this.customLineItemFields) {
			var elementName = cfName + rowNum;
			var element = lineItemRow.find('[name="' + elementName + '"]');

			var cfDataType = this.customLineItemFields[cfName];
			if (cfDataType == 'picklist' || cfDataType == 'multipicklist') {

				(cfDataType == 'multipicklist') && (element = lineItemRow.find('[name="' + elementName + '[]"]'));

				var picklistValues = element.data('productPicklistValues');
				(lineItemType == 'Services') && (picklistValues = element.data('servicePicklistValues'));
				var options = '';
				(cfDataType == 'picklist') && (options = '<option value="">' + app.vtranslate('JS_SELECT_OPTION') + '</option>');

				for (var picklistName in picklistValues) {
					var pickListValue = picklistValues[picklistName];
					options += '<option value="' + picklistName + '">' + pickListValue + '</option>';
				}
				$("#" + cfName + "0 option").each(function () {
					if ($(this).val() != "") {
						options += '<option value="' + $(this).val() + '">' + $(this).val() + '</option>';
					}
				})
				element.html(options);
				element.addClass('select2');
			}

			var defaultValueInfo = this.customFieldsDefaultValues[cfName];
			if (defaultValueInfo) {
				var defaultValue = defaultValueInfo;
				if (typeof defaultValueInfo == 'object') {
					defaultValue = defaultValueInfo['productFieldDefaultValue'];
					(lineItemType == 'Services') && (defaultValue = defaultValueInfo['serviceFieldDefaultValue'])
				}

				if (cfDataType === 'multipicklist') {
					if (defaultValue.length > 0) {
						defaultValue = defaultValue.split(" |##| ");
						var setDefaultValue = function (picklistElement, values) {
							for (var index in values) {
								var picklistVal = values[index];
								picklistElement.find('option[value="' + picklistVal + '"]').prop('selected', true);
							}
						}(element, defaultValue)
					}
				} else {
					element.val(defaultValue);
				}
			} else {
				defaultValue = '';
				element.val(defaultValue);
			}
		}

		return lineItemRow;
	},
	dependencyWarrantyApplicable: function () {
		$('select[data-extraname="action_taken_by_sm"]').change(function () {
			let val = $(this).val();
			if (val == 'Sent to Vendor') {
				$(this).closest('tr').find('#vendor_responseDivCla').removeClass('hide');
				$(this).closest('tr').find('#vendor_nameDivCla').removeClass('hide');
			} else {
				$(this).closest('tr').find('#vendor_responseDivCla').addClass('hide');
				$(this).closest('tr').find('#vendor_nameDivCla').addClass('hide');
			}

			if ($(this).val() == 'Scrapped at Region') {
				$(this).closest('tr').find('.rso_part_status .select2-chosen').html('Scrapped at Region-Closed');
				$(this).closest('tr').find('#div_or_ser_centerDivCla').addClass('hide');
				$(this).closest('tr').find('#sto_noDivCla').addClass('hide');
			} else if ($(this).val() == 'Repaired at Region') {
				$(this).closest('tr').find('.rso_part_status .select2-chosen').html('Repaired at Region-Closed');
				$(this).closest('tr').find('#sto_noDivCla').addClass('hide');
				$(this).closest('tr').find('#div_or_ser_centerDivCla').addClass('hide');
				$(this).closest('tr').find('#goods_consignment_noDivCla').removeClass('hide');
				$(this).closest('tr').find('#goods_rcived_dteDivCla').removeClass('hide');
			} else if ($(this).val() == 'Sent to division to Repair' || $(this).val() == 'Sent to division to Analysis' || $(this).val() == 'Sent to Service Centre for Repair') {
				$(this).closest('tr').find('#sto_noDivCla').removeClass('hide');
				$(this).closest('tr').find('#div_or_ser_centerDivCla').removeClass('hide');
				$(this).closest('tr').find('#goods_consignment_noDivCla').removeClass('hide');
				$(this).closest('tr').find('#goods_rcived_dterDivCla').removeClass('hide');
			}

		});


		$('td .a_qty').click(function () {
			let element = $(this);
			let parent = element.closest('table').closest('tr');
			let rowNum = parent.find('input.rowNumber').val();
			let received_qty = $("#receivedvd_qty" + rowNum).val();

			let r_qty = parseInt(received_qty);

			//a
			let at_under_rep_atdiv = $("#at_under_rep_atdiv" + rowNum).val();
			let at_rep_a_sent_reg = $("#at_rep_a_sent_reg" + rowNum).val();
			let at_rep_a_kept_float = $("#at_rep_a_kept_float" + rowNum).val();
			let at_scraped_at_dev = $("#at_scraped_at_dev" + rowNum).val();

			at_under_rep_atdiv = parseInt(at_under_rep_atdiv);
			at_rep_a_sent_reg = parseInt(at_rep_a_sent_reg);
			at_rep_a_kept_float = parseInt(at_rep_a_kept_float);
			at_scraped_at_dev = parseInt(at_scraped_at_dev);

			let allsum = at_under_rep_atdiv+at_rep_a_sent_reg+at_rep_a_kept_float+at_scraped_at_dev;
			let a_all_sum = parseInt(allsum);
			
			jQuery.validator.addMethod("positive", function(){
				if( r_qty < a_all_sum ){
					return false;
				}
				else
				{
					$("#at_under_rep_atdiv" + rowNum).removeClass('input-error');
					$("#at_rep_a_sent_reg" + rowNum).removeClass('input-error');
					$("#at_rep_a_kept_float" + rowNum).removeClass('input-error');
					$("#at_scraped_at_dev" + rowNum).removeClass('input-error');
					return true;
				}
				
			}, jQuery.validator.format(app.vtranslate('DSM total qty should not be gather than received qty')));
		});

          
          $('td .b_qty').click(function () {
			let element = $(this);
			let parent = element.closest('table').closest('tr');
			let rowNum = parent.find('input.rowNumber').val();
			let received_qty = $("#receivedvd_qty" + rowNum).val();

			let r_qty = parseInt(received_qty);

            //b
			let ana_done_div_qty = $("#ana_done_div_qty" + rowNum).val();
			let und_fail_ana_div_qty = $("#und_fail_ana_div_qty" + rowNum).val();
			let asent_to_ven_qty = $("#asent_to_ven_qty" + rowNum).val();
			let scm_dismant_unprogre = $("#scm_dismant_unprogre" + rowNum).val();
			let scm_repaired_qty = $("#scm_repaired_qty" + rowNum).val();
			let scm_beyond_eco_rep_qty = $("#scm_beyond_eco_rep_qty" + rowNum).val();
			let scm_item_aw_for_rep = $("#scm_item_aw_for_rep" + rowNum).val();
			let scm_senttoreg_worep = $("#scm_senttoreg_worep" + rowNum).val();
			let scm_rep_and_sent_back_qty = $("#scm_rep_and_sent_back_qty" + rowNum).val();

			ana_done_div_qty = parseInt(ana_done_div_qty);
			und_fail_ana_div_qty = parseInt(und_fail_ana_div_qty);
			asent_to_ven_qty = parseInt(asent_to_ven_qty);
			scm_dismant_unprogre = parseInt(scm_dismant_unprogre);
			scm_repaired_qty = parseInt(scm_repaired_qty);
			scm_beyond_eco_rep_qty = parseInt(scm_beyond_eco_rep_qty);
			scm_item_aw_for_rep = parseInt(scm_item_aw_for_rep);
			scm_senttoreg_worep = parseInt(scm_senttoreg_worep);
			scm_rep_and_sent_back_qty = parseInt(scm_rep_and_sent_back_qty);

			let ballsum = ana_done_div_qty+und_fail_ana_div_qty+asent_to_ven_qty+scm_dismant_unprogre+scm_repaired_qty+scm_beyond_eco_rep_qty+scm_item_aw_for_rep+scm_senttoreg_worep+scm_rep_and_sent_back_qty;
			let b_all_sum = parseInt(ballsum);
			
			jQuery.validator.addMethod("positive", function(){
				if( r_qty < b_all_sum ){
					return false;
				}
				else
				{
					$("#ana_done_div_qty" + rowNum).removeClass('input-error');
					$("#und_fail_ana_div_qty" + rowNum).removeClass('input-error');
					$("#asent_to_ven_qty" + rowNum).removeClass('input-error');
					$("#scm_dismant_unprogre" + rowNum).removeClass('input-error');
					$("#scm_repaired_qty" + rowNum).removeClass('input-error');
					$("#scm_beyond_eco_rep_qty" + rowNum).removeClass('input-error');
					$("#scm_item_aw_for_rep" + rowNum).removeClass('input-error');
					$("#scm_senttoreg_worep" + rowNum).removeClass('input-error');
					$("#scm_rep_and_sent_back_qty" + rowNum).removeClass('input-error');
					return true;
				}
				
			}, jQuery.validator.format(app.vtranslate('Present total qty should not be gather than received qty')));	
		});	
	},

	registerBasicEvents: function (container) {
		this._super(container);
		this.dependencyStatusAndEvent();
		this.dependencyWarrantyApplicable();
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
						data['0'][objKeys['0']]['qty'] = $("#qty_other" + rowNum).val();
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
});