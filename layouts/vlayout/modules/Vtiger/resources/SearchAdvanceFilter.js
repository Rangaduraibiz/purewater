

//Search Advance Filter useful for adavance search 

Vtiger_AdvanceFilter_Js('Vtiger_SearchAdvanceFilter_Js',{},{

	/**
	 * Function to get the advance filter values
	 * This will call the base to get the values and dont send group condition if there is not condition
	 * exists in the next condition group
	 *
	 * @params cleanGroupConditions <Boolean> - states whether to clean group conditions or not -- default true
	 *   this will remove group condition if next condition group dont have any conditions
	 */
	getValues : function (cleanGroupConditions) {

		if(typeof cleanGroupConditions == 'undefined'){
			cleanGroupConditions = true;
		}

		var values = this._super();

		if(!cleanGroupConditions) {
			return values;
		}

		for(var key in values){
			var conditionGroupInfo = values[key];
			var nextConditionGroupInfo = values[parseInt(key)+1]
			
			//there is not next condition group so no need to perform the caliculation
			if(typeof nextConditionGroupInfo == 'undefined'){
				continue;
			}
			var nextConditionColumns = nextConditionGroupInfo['columns'];
			
			// if you dont have conditions in next group we should not send group condition in current condition group
			if(jQuery.isEmptyObject(nextConditionColumns)){
				delete conditionGroupInfo['condition']
			}
		}
		return values;
	}
});

