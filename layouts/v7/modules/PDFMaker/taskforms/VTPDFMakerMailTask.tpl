{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*************************************************************************************}

{strip}
    <div id="VtEmailTaskContainer">
        <div class="row">
            <div class="col-sm-10 col-xs-10">
                <div class="row form-group">
                    <div class="col-sm-6 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3 col-xs-3">{vtranslate('LBL_FROM', $QUALIFIED_MODULE)}</div>
                            <div class="col-sm-9 col-xs-9">
                                <input name="fromEmail" class=" fields inputElement" type="text" value="{$TASK_OBJECT->fromEmail}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-5">
                        <select id="fromEmailOption" style="min-width: 250px" class="select2" data-placeholder={vtranslate('LBL_SELECT_OPTIONS',$QUALIFIED_MODULE)}>
                            <option></option>
                            {$FROM_EMAIL_FIELD_OPTION}
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-6 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3 col-xs-3">{vtranslate('Reply To',$QUALIFIED_MODULE)}</div>
                            <div class="col-sm-9 col-xs-9">
                                <input name="replyTo" class="fields inputElement" type="text" value="{$TASK_OBJECT->replyTo}"/>
                            </div>
                        </div>
                    </div>
                    <span class="col-sm-5 col-xs-5">
						<select style="min-width: 250px" class="task-fields select2 overwriteSelection" data-placeholder={vtranslate('LBL_SELECT_OPTIONS',$QUALIFIED_MODULE)}>
							<option></option>
                            {$EMAIL_FIELD_OPTION}
						</select>
					</span>
                </div>
                <div class="row form-group">
                    <div class="col-sm-6 col-xs-6">
                        <div class="row">
                            <span class="col-sm-3 col-xs-3">{vtranslate('LBL_TO',$QUALIFIED_MODULE)}<span class="redColor">*</span></span>
                            <div class="col-sm-9 col-xs-9">
                                <input data-rule-required="true" name="recepient" class="fields inputElement" type="text" value="{$TASK_OBJECT->recepient}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-5">
                        <select style="min-width: 250px" class="task-fields select2" data-placeholder={vtranslate('LBL_SELECT_OPTIONS',$QUALIFIED_MODULE)}>
                            <option></option>
                            {$EMAIL_FIELD_OPTION}
                        </select>
                    </div>
                </div>
                <div class="row form-group {if empty($TASK_OBJECT->emailcc)}hide {/if}" id="ccContainer">
                    <div class="col-sm-6 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3 col-xs-3">{vtranslate('LBL_CC',$QUALIFIED_MODULE)}</div>
                            <div class="col-sm-9 col-xs-9">
                                <input class="fields inputElement" type="text" name="emailcc" value="{$TASK_OBJECT->emailcc}" />
                            </div>
                        </div>
                    </div>
                    <span class="col-sm-5 col-xs-5">
						<select class="task-fields select2" data-placeholder='{vtranslate('LBL_SELECT_OPTIONS',$QUALIFIED_MODULE)}' style="min-width: 250px">
							<option></option>
                            {$EMAIL_FIELD_OPTION}
						</select>
					</span>
                </div>
                <div class="row form-group {if empty($TASK_OBJECT->emailbcc)}hide {/if}" id="bccContainer">
                    <div class="col-sm-6 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3 col-xs-3">{vtranslate('LBL_BCC',$QUALIFIED_MODULE)}</div>
                            <div class="col-sm-9 col-xs-9">
                                <input class="fields inputElement" type="text" name="emailbcc" value="{$TASK_OBJECT->emailbcc}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-5">
                        <select class="task-fields select2" data-placeholder='{vtranslate('LBL_SELECT_OPTIONS',$QUALIFIED_MODULE)}' style="min-width: 250px">
                            <option></option>
                            {$EMAIL_FIELD_OPTION}
                        </select>
                    </div>
                </div>
                <div class="row form-group {if (!empty($TASK_OBJECT->emailcc)) and (!empty($TASK_OBJECT->emailbcc))} hide {/if}">
                    <div class="col-sm-8 col-xs-8">
                        <div class="row">
                            <div class="col-sm-3 col-xs-3">&nbsp;</div>
                            <div class="col-sm-9 col-xs-9">
                                <a class="cursorPointer {if (!empty($TASK_OBJECT->emailcc))}hide{/if}" id="ccLink">{vtranslate('LBL_ADD_CC',$QUALIFIED_MODULE)}</a>&nbsp;&nbsp;
                                <a class="cursorPointer {if (!empty($TASK_OBJECT->emailbcc))}hide{/if}" id="bccLink">{vtranslate('LBL_ADD_BCC',$QUALIFIED_MODULE)}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-2 col-xs-2">
                <div class="row form-group">
                    {vtranslate('LBL_PDF_TEMPLATE','PDFMaker')}
                </div>
                <div class="row form-group">
                    <select multiple id="template" data-rule-required="true" name="template" class="select2 task-fields col-sm-10 col-xs-10">
                        {html_options  options=$TASK_OBJECT->getTemplates($SOURCE_MODULE) selected=$TASK_OBJECT->template}
                    </select>
                </div>
                <div class="row form-group">
                    {vtranslate('LBL_PDF_LANGUAGE','PDFMaker')}
                </div>
                <div class="row form-group">
                    {assign var=LANGUAGES_ARRAY value=$TASK_OBJECT->getLanguages()}
                    <select id="template_language" name="template_language" class="select2 task-fields col-sm-10 col-xs-10">
                        {html_options  options=$LANGUAGES_ARRAY selected=$TASK_OBJECT->template_language}
                    </select>
                    <input type="hidden" id="template_language_value" value="{$TASK_OBJECT->template_language}">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="row form-group">
                    <div class="col-sm-6 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3 col-xs-3">{vtranslate('LBL_SUBJECT',$QUALIFIED_MODULE)}<span class="redColor">*</span></div>
                            <div class="col-sm-9 col-xs-9">
                                <input data-rule-required="true" name="subject" class="fields inputElement" type="text" name="subject" value="{$TASK_OBJECT->subject}" id="subject" spellcheck="true"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-5">
                        <select style="min-width: 250px" class="task-fields select2" data-placeholder={vtranslate('LBL_SELECT_OPTIONS',$QUALIFIED_MODULE)}>
                            <option></option>
                            {$ALL_FIELD_OPTIONS}
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-6 col-xs-6">
                        <div class="row">
                            <div style="margin-top: 7px" class="col-sm-3 col-xs-3">{vtranslate('LBL_ADD_FIELD',$QUALIFIED_MODULE)}</div>&nbsp;&nbsp;
                            <div class="col-sm-8 col-xs-8">
                                <select style="min-width: 250px" id="task-fieldnames" class="select2" data-placeholder={vtranslate('LBL_SELECT_OPTIONS',$QUALIFIED_MODULE)}>
                                    <option></option>
                                    {$ALL_FIELD_OPTIONS}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-5">
                        <div class="row">
                            <div style="margin-top: 7px" class="col-sm-3 col-xs-3">{vtranslate('LBL_GENERAL_FIELDS',$QUALIFIED_MODULE)}</div>&nbsp;&nbsp;
                            <div class="col-sm-8 col-xs-8">
                                <select style="width: 205px" id="task_timefields" class="select2" data-placeholder={vtranslate('LBL_SELECT_OPTIONS',$QUALIFIED_MODULE)}>
                                    <option></option>
                                    {foreach from=$META_VARIABLES item=META_VARIABLE_KEY key=META_VARIABLE_VALUE}
                                        <option value="{if strpos(strtolower($META_VARIABLE_VALUE), 'url') === false}${/if}{$META_VARIABLE_KEY}">{vtranslate($META_VARIABLE_VALUE,$QUALIFIED_MODULE)}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row from-group">
                    {if $EMAIL_TEMPLATES}
                        <div class="col-sm-6 col-xs-6">
                            <div class="row">
                                <div class="col-sm-3 col-xs-3">{vtranslate('LBL_EMAIL_TEMPLATES','EmailTemplates')}</div>
                                <div class="col-sm-9 col-xs-9">
                                    <select style="min-width: 250px" id="task-emailtemplates" class="select2" data-placeholder={vtranslate('LBL_SELECT_OPTIONS',$QUALIFIED_MODULE)}>
                                        <option></option>
                                        {foreach from=$EMAIL_TEMPLATES item=EMAIL_TEMPLATE}
                                            {if !$EMAIL_TEMPLATE->isDeleted()}
                                                <option value="{$EMAIL_TEMPLATE->get('body')}">{vtranslate($EMAIL_TEMPLATE->get('templatename'),$QUALIFIED_MODULE)}</option>
                                            {/if}
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                        </div>
                    {/if}
                </div>
                <div class="row from-group">
                    {assign var=EMAILMAKER_TEMPLATES value=$TASK_OBJECT->getEmailTemplates($SOURCE_MODULE)}
                    {if !empty($EMAILMAKER_TEMPLATES)}
                        <div class="col-sm-6 col-xs-6">
                            <div class="row">
                                <div class="col-sm-3 col-xs-3">{vtranslate('LBL_EMAILMAKER_TEMPLATES', 'PDFMaker')}</div>
                                <div class="col-sm-9 col-xs-9">
                                    <select style="min-width: 250px" id="task-emailtemplates" class="select2" data-placeholder={vtranslate('LBL_SELECT_OPTIONS',$QUALIFIED_MODULE)}>
                                        <option value="">{vtranslate('LBL_SELECT_OPTION', $QUALIFIED_MODULE)}</option>
                                        {foreach from=$EMAILMAKER_TEMPLATES item=EMAIL_TEMPLATE}
                                            <option value="{$EMAIL_TEMPLATE['body']}">{vtranslate($EMAIL_TEMPLATE['name'],$QUALIFIED_MODULE)}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                        </div>
                    {/if}
                </div>
                <br>
                <div class="row form-group">
                    <div class="col-sm-12 col-xs-12">
                        <textarea id="content" name="content">{$TASK_OBJECT->content}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="modules/PDFMaker/workflow/VTPDFMakerMailTask.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        Settings_Workflows_Edit_Js.prototype.registerVTPDFMakerMailTaskEvents = function () {
            var textAreaElement = jQuery('#content');
            var ckEditorInstance = this.getckEditorInstance();
            ckEditorInstance.loadCkEditor(textAreaElement);
            this.registerFillMailContentEvent();
            this.registerTooltipEventForSignatureField();
            this.registerFillTaskFromEmailFieldEvent();
            this.registerCcAndBccEvents();
        }
    </script>
{/strip}