{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*
********************************************************************************/
-->*}
{strip}
	<script type="text/javascript">var __pageCreationTime = (new Date()).getTime();</script>
		<script src="{vresource_url('layouts/v7/lib/jquery/jquery.min.js')}"></script>
		<script src="{vresource_url('layouts/v7/lib/jquery/jquery-migrate-1.0.0.js')}"></script>
		<script type="text/javascript">
			var _META = { 'module': "{$MODULE}", view: "{$VIEW}", 'parent': "{$PARENT_MODULE}", 'notifier':"{$NOTIFIER_URL}", 'app':"{$SELECTED_MENU_CATEGORY}" };
            {if $EXTENSION_MODULE}
                var _EXTENSIONMETA = { 'module': "{$EXTENSION_MODULE}", view: "{$EXTENSION_VIEW}"};
            {/if}
            var _USERMETA;
            {if $CURRENT_USER_MODEL}
               _USERMETA =  { 'id' : "{$CURRENT_USER_MODEL->get('id')}", 'menustatus' : "{$CURRENT_USER_MODEL->get('leftpanelhide')}", 
                              'currency' : "{$USER_CURRENCY_SYMBOL}", 'currencySymbolPlacement' : "{$CURRENT_USER_MODEL->get('currency_symbol_placement')}",
                          'currencyGroupingPattern' : "{$CURRENT_USER_MODEL->get('currency_grouping_pattern')}", 'truncateTrailingZeros' : "{$CURRENT_USER_MODEL->get('truncate_trailing_zeros')}"};
            {/if}
		</script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/purl.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/select2/select2.min.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/jquery.class.min.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/jquery-ui-1.11.3.custom/jquery-ui.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/todc/js/popper.min.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/todc/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="libraries/jquery/jstorage.min.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="libraries/jquery/jquery.ba-outside-events.min.js"></script>
	<script type="text/javascript" src="libraries/jquery/defunkt-jquery-pjax/jquery.pjax.js"></script>
    <script type="text/javascript" src="libraries/jquery/multiplefileupload/jquery_MultiFile.js"></script>
    <script type="text/javascript" src="resources/jquery.additions.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/websockets/reconnecting-websocket.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/jquery-play-sound/jquery.playSound.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/malihu-custom-scrollbar/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/malihu-custom-scrollbar/jquery.mCustomScrollbar.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/autoComplete/jquery.textcomplete.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/jquery.qtip.custom/jquery.qtip.js"></script>
    <script type="text/javascript" src="libraries/jquery/jquery-visibility.min.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/momentjs/moment.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/daterangepicker/jquery.daterangepicker.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/jquery.timeago.js"></script>
    <script type="text/javascript" src="libraries/jquery/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="libraries/jquery/ckeditor/adapters/jquery.js"></script>
	<script type='text/javascript' src='layouts/v7/lib/anchorme_js/anchorme.min.js'></script>
    <script type="text/javascript" src="{vresource_url('layouts/v7/modules/Vtiger/resources/Class.js')}"></script>
    <script type='text/javascript' src="{vresource_url('layouts/v7/resources/helper.js')}"></script>
    <script type="text/javascript" src="{vresource_url('layouts/v7/resources/application.js')}"></script>
    <script type="text/javascript" src="{vresource_url('layouts/v7/modules/Vtiger/resources/Utils.js')}"></script>
    <script type='text/javascript' src="{vresource_url('layouts/v7/modules/Vtiger/resources/validation.js')}"></script>
    <script type="text/javascript" src="{vresource_url('layouts/v7/lib/bootbox/bootbox.js')}"></script>
    <script type="text/javascript" src="{vresource_url('layouts/v7/modules/Vtiger/resources/Base.js')}"></script>
    <script type="text/javascript" src="{vresource_url('layouts/v7/modules/Vtiger/resources/Vtiger.js')}"></script>
    <script type="text/javascript" src="{vresource_url('layouts/v7/modules/Calendar/resources/TaskManagement.js')}"></script>
    <script type="text/javascript" src="{vresource_url('layouts/v7/modules/Import/resources/Import.js')}"></script>
    <script type="text/javascript" src="{vresource_url('layouts/v7/modules/Emails/resources/EmailPreview.js')}"></script>
    <script type="text/javascript" src="{vresource_url('layouts/v7/modules/Vtiger/resources/Base.js')}"></script>
    <script type="text/javascript" src="{vresource_url('layouts/v7/modules/Google/resources/Settings.js')}"></script>
    <script type="text/javascript" src="{vresource_url('layouts/v7/modules/Vtiger/resources/CkEditor.js')}"></script>
    <script type="text/javascript" src="{vresource_url('layouts/v7/modules/Documents/resources/Documents.js')}"></script>
   
    {foreach key=index item=jsModel from=$SCRIPTS}
        <script type="{$jsModel->getType()}" src="{vresource_url($jsModel->getSrc())}"></script>
    {/foreach}

    <script type="text/javascript" src="{vresource_url('layouts/v7/resources/v7_client_compat.js')}"></script>
    <!-- Added in the end since it should be after less file loaded -->
    <script type="text/javascript" src="{vresource_url('libraries/bootstrap/js/less.min.js')}"></script>

    <!-- Enable tracking pageload time -->
	<script type="text/javascript">
		var _REQSTARTTIME = "{$smarty.server.REQUEST_TIME}";
		{literal}jQuery(document).ready(function() { window._PAGEREADYAT = new Date(); });
		jQuery(window).load(function() {
			window._PAGELOADAT = new Date();
			window._PAGELOADREQSENT = false;
			// Transmit the information to server about page render time now.
			if (typeof _REQSTARTTIME != 'undefined') {
				// Work with time converting it to GMT (assuming _REQSTARTTIME set by server is also in GMT)
				var _PAGEREADYTIME = _PAGEREADYAT.getTime() / 1000.0; // seconds
				var _PAGELOADTIME = _PAGELOADAT.getTime() / 1000.0;    // seconds
				var data = { page_request: _REQSTARTTIME, page_ready: _PAGEREADYTIME, page_load: _PAGELOADTIME };
				data['page_xfer'] = (_PAGELOADTIME - _REQSTARTTIME).toFixed(3);
				data['client_tzoffset']= -1*_PAGELOADAT.getTimezoneOffset()*60;
				data['client_now'] = JSON.parse(JSON.stringify(new Date()));
				if (!window._PAGELOADREQSENT) {
					// To overcome duplicate firing on Chrome
					window._PAGELOADREQSENT = true;
				}
			}
		});{/literal}
	</script>
{/strip}