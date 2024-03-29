Vtiger_Detail_Js("Documents_Detail_Js", {
	
	//It stores the CheckFileIntegrity response data
	checkFileIntegrityResponseCache : {},
	
	/*
	 * function to trigger CheckFileIntegrity action
	 * @param: CheckFileIntegrity url.
	 */
	checkFileIntegrity : function(checkFileIntegrityUrl) {
		Documents_Detail_Js.getFileIntegrityResponse(checkFileIntegrityUrl).then(
			function(data){
				Documents_Detail_Js.displayCheckFileIntegrityResponse(data);
			}
		);
	},
	
	/*
	 * function to get the CheckFileIntegrity response data
	 */
	getFileIntegrityResponse : function(params){
		var aDeferred = jQuery.Deferred();
		
		//Check in the cache 
		if(!(jQuery.isEmptyObject(Documents_Detail_Js.checkFileIntegrityResponseCache))) {
			aDeferred.resolve(Documents_Detail_Js.checkFileIntegrityResponseCache);
		}
		else{
			AppConnector.request(params).then(
				function(data) {
					//store it in the cache, so that we dont do multiple request
					Documents_Detail_Js.checkFileIntegrityResponseCache = data;
					aDeferred.resolve(Documents_Detail_Js.checkFileIntegrityResponseCache);
				}
			);
		}
		return aDeferred.promise();
	},
	
	/*
	 * function to display the CheckFileIntegrity message
	 */
	displayCheckFileIntegrityResponse : function(data) {
		var result = data['result'];
		var success = result['success'];
		var message = result['message'];
		var params = {};
		if(success) {
			params = {
				text: message,
				type: 'success'
			}
		} else {
			params = {
				text: message,
				type: 'error'
			}
		}
		Documents_Detail_Js.showNotify(params);
	},
	
	//This will show the messages of CheckFileIntegrity using pnotify
	showNotify : function(customParams) {
		var params = {
			title: app.vtranslate('JS_CHECK_FILE_INTEGRITY'),
			text: customParams.text,
			type: customParams.type,
			width: '30%',
			delay: '2000'
		};
		Vtiger_Helper_Js.showPnotify(params);
	},

	triggerSendEmail : function(recordIds) {
		var params = {
			"module" : "Documents",
			"view" : "ComposeEmail",
			"documentIds" : recordIds
		};
		var emailEditInstance = new Emails_MassEdit_Js();
		emailEditInstance.showComposeEmailForm(params);
	}
	
},{});