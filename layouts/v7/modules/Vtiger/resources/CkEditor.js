
jQuery.Class("Vtiger_CkEditor_Js",{},{
	
	/*
	 *Function to set the textArea element 
	 */
	setElement : function(element){
		this.element = element;
		return this;
	},
	
	/*
	 *Function to get the textArea element
	 */
	getElement : function(){
		return this.element;
	},
	
	/*
	 * Function to return Element's id atrribute value
	 */
	getElementId :function(){
		var element = this.getElement();
		return element.attr('id');
	},
	/*
	 * Function to get the instance of ckeditor
	 */
	
	getCkEditorInstanceFromName :function(){
		var elementName = this.getElementId();
		return CKEDITOR.instances[elementName];
	},
    
    /***
     * Function to get the plain text
     */
    getPlainText : function() {
        var ckEditorInstnace = this.getCkEditorInstanceFromName();
        return ckEditorInstnace.document.getBody().getText();
    },
	/*
	 * Function to load CkEditor
	 * @params : element: element on which CkEditor has to be loaded, config: custom configurations for ckeditor
	 */
	loadCkEditor : function(element,customConfig){
		
		this.setElement(element);
		var instance = this.getCkEditorInstanceFromName();
		var elementName = this.getElementId();
		var config = {}
        
		if(typeof customConfig != 'undefined'){
			var config = jQuery.extend(config,customConfig);
		}
		if(instance)
		{
			CKEDITOR.remove(instance);
		}
		
		
    
		CKEDITOR.replace( elementName,config);
	},
	
	/*
	 * Function to load contents in ckeditor textarea
	 * @params : textArea Element,contents ;
	 */
	loadContentsInCkeditor : function(contents){
		var CkEditor = this.getCkEditorInstanceFromName();
		CkEditor.setData(contents);
	},

    /**
     * Function to remove ckeditor instance
     */
    removeCkEditor : function() {
        if(this.getElement()) {
            var instance = this.getCkEditorInstanceFromName();
            //first check if textarea element already exists in CKEditor, then destroy it
            if(instance) {
                instance.updateElement();
                instance.destroy();
            }
        }
    }
});
    