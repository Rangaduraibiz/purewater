Vtiger_Detail_Js("HelpDesk_Detail_Js", {}, {
    
    /**
     * This function is used to transform href(GET) request of CovertFAQ
     * function to POST request because we are hitting action URL, So it should
     * be post request with valid token
     * */
    regiterEventForConvertFAQ: function () {
        var eleName = '#'+app.getModuleName()+'_detailView_moreAction_LBL_CONVERT_FAQ';
        var ele = jQuery(eleName).find('a');
        ele.on('click',function(e){
            var url = ele.attr('href');
            e.preventDefault();
            var form = jQuery("<form/>",{method:"post",action:url});
            form.append(jQuery("<input/>",{type:"hidden",name:csrfMagicName,value:csrfMagicToken}));
            form.appendTo('body').submit();
        });
    },
    
    registerEvents : function() {
        this._super();
        this.regiterEventForConvertFAQ();
    }
});