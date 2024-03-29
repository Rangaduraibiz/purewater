
jQuery.Class('Vtiger.Class',{},{
    
    addComponent : function(componentName) {
        if(window[componentName]){
            if(typeof this._components == "undefined") {
                this._components = {};
            }
            this._components[componentName] = window[componentName];
        }
        
    },
    
    addModuleSpecificComponent : function(view,module,parent){
		var componentName = app.getModuleSpecificViewClass(view,module,parent);
		this.addComponent(componentName);
    },
    
    setParentInstance : function(instance){
        this._parent = instance;
    },
    
    getParentInstance : function() {
        return this._parent;
    },
    
    
    intializeComponents : function() {
        if(typeof this._componentInstances  == "undefined") {
            this._componentInstances = {};
        }
        for(var componentName in this._components) {
            if(componentName in this._componentInstances) {
                continue;
            }
            this._componentInstances[componentName] = new this._components[componentName]();
            
            var componentInstance = this._componentInstances[componentName]
            if(typeof componentInstance.intializeComponents == "function")
                componentInstance.intializeComponents();
            
            if(typeof componentInstance.setParentInstance == "function") {
                componentInstance.setParentInstance(this);
            }
            
            componentInstance.registerEvents();
            
        }
    },
    
    getComponentInstance : function(componentName) {
		if(typeof this._components != 'undefined' && typeof this._componentInstances != 'undefined'){
			if(componentName in this._components){
				if(componentName in this._componentInstances) {
					return this._componentInstances[componentName];
				}
			}
		}
        return false;
    },
	
	getModuleSpecificComponentInstance : function(view, module, parent) {
		var componentName = app.getModuleSpecificViewClass(view,module,parent);
		return this.getComponentInstance(componentName);
	},
    
    registerEvents : function() {
        
    }
});