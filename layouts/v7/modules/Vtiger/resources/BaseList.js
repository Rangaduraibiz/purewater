
var Vtiger_BaseList_Js = {
	/**
	 * Function to get the parameters for paging of records
	 * @return : string - module name
	 */
	getPageRecords : function(params){
		var aDeferred = jQuery.Deferred();
		
		if(typeof params == 'undefined') {
			params = {};
		}

		if(typeof params.module == 'undefined') {
			params.module = app.getModuleName();
		}

		if(typeof params.view == 'undefined') {
			//Default we will take list ajax
			params.view = 'ListAjax';
		}

		if(typeof params.page == 'undefined') {
			params.page = Vtiger_BaseList_Js.getCurrentPageNum();
		}

		app.request.post({data:params}).then(
			function(err,data){
                if(err === null){
            		aDeferred.resolve(data);
                }
			}
		);
		return aDeferred.promise();
	},
	
	getCurrentPageNum : function() {
		return jQuery('#pageNumber').val();
	}
}
