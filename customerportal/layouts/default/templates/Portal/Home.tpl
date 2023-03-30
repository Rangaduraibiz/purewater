{literal}
    <div ng-controller="Home_Component" class="container-fluid main-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" ng-if="profileFetched">
                        <h2 title="{{org}}" class="portal-welcome">{{'Welcome to' | translate}} {{org|limitTo:25}}{{org.length > 25? '...' : ''}} {{'Portal' | translate}}</h2>
                    </div>
                    <div ng-if="supportNotification" class="pull-right col-md-3 col-lg-3 col-sm-3 col-xs-3">
                        <div class="alert alert-danger alert-dismissible portal-alert" role="alert">
                            <button type="button" class="close support-notification-close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong class="support-notification">{{'Your support ends on' | translate}}&nbsp;{{notification}}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 recent_wrap" margin="10px">
                <div ng-if="announcementExists" class="alert alert-warning portal-announcement">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p ng-bind-html="announcement">  {{announcement}}</p>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                 <div class="col-sm-12 col-md-12 col-lg-12 tickets">
                    <div class="row">
                       <div class="col-sm-6 col-md-6 col-lg-6  text-center" >
                            <div id="chart1">
                            </div>
                        </div>
                         <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                            <div id="chart2">
                            </div>
                        </div>
                    </div>
                 </div>

                <div class="col-sm-12 col-md-12 col-lg-12  tickets ">
                    <div id="chart3">
                    </div>
                </div>
              
                <div class="col-sm-12 col-md-12 col-lg-12 tickets ">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 col-md-3 center-block"  ng-repeat="srCount in srCounts">
                            <div class="ticket">
                                <div class="ticket_count">
                                    <p class="ticket_count_value">{{ srCount[0]}}</p>
                                </div>
                                <br>
                                <a href={{'index.php?module=HelpDesk&sr_type='+srCount[1]}} target="_balnk" class="ticket_link">{{ srCount[1] }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row charts-container">
                    <div ng-repeat="(name,value) in enabledCharts" ng-if="name!='language' && name!='count'">
                        <ng-switch on="value.type">
                            <div ng-class="applyChartClass($index)">
                                <div ng-switch-when="spline"><div class="panel panel-default"><div class="panel-heading separator"> <div class="panel-title" translate="{{name}}">{{name}}</div></div>
                                        <cp-line items="value.data"></cp-line></div></div>
                                <div ng-switch-when="pie"><div class="panel panel-default"><div class="panel-heading separator"> <div class="panel-title" translate="{{name}}">{{name}}</div></div>
                                        <cp-pie items="value.data"></cp-pie></div></div>
                            </div>
                    </div>
                </div>
                <div class="row tickets-panel-container" ng-if="activateRecentTickets">
                    <div class="panel-heading separator"><div class="tickets panel-title"> Service Request Status </div></div>
                    <div ng-repeat="recentTicket in recentTickets" ng-if="recentTickets.length>0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default tickets-panel-content">
                                <div class="tickets-panel-heading separator">
                                    <div class="ticket-panel-title" ng-class='{"first-ticket-panel-title":$index==0}'><a ng-click="loadRecentRecord('HelpDesk',recentTicket.id)">{{recentTicket.label}}</a>


                                          <strong class="text-primary pull-right"><span class="label" ng-class="determineStatus(recentTicket.status)">{{recentTicket.statuslabel}}</span></strong>

                                    </div>
                                </div>
                                <div class="panel-body tickets-panel-body" ng-if="recentTicket.description">
                                    <p style="white-space: pre-line;">{{recentTicket.description}}</p>
                                </div>
                                <hr ng-show="!$last">
                            </div>
                        </div>
                        </div>
                        </div>

        </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 shortcut-container">
                <div class="panel panel-default" ng-if="showShortcuts">
                    <div class="panel-heading separator">
                        <div class="panel-title">{{'What would you like to do ?' | translate}}

                        </div>
                    </div>
                    <div class="support panel-body">
                        <div class="row">
                            <div ng-repeat="(module,actions) in shortcuts" class="col-lg-12 shortcut-done">
                                <h5>{{module}}</h5>
                                <div class="col-lg-12 shortcut-button"   ng-class-even="'even-button'" ng-repeat="action in actions" >
                                    <button  translate="{{action}}" ng-click="openShortcut(module,action)" class="btn btn-soft-secondary">{{action}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" ng-repeat="(module,values) in recentRecords" ng-if="ifNotTickets(module) && isObj(values)">
                    <div class="panel-heading separator">
                        <div class="panel-title" >{{'Recent'|translate}} {{module|translate}}
                        </div>
                    </div>
                    <div class="shortcut panel-body" >
                        <div class="row" >
                            <div class="col-lg-12 recent-list">

                                <ul class="nav">
                                    <li ng-repeat="value in values"><a ng-if="module!=='Faq'" ng-click="loadRecentRecord(module,value.id)">{{value.label}}</a></li>
                                    <li ng-repeat="value in values"><a ng-if="module==='Faq'" ng-click="loadRecentRecord(module,value.id)">{{value.label}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/literal}
    <script type="text/javascript" src="{portal_componentjs_file('HelpDesk')}"></script>
    {include file=portal_template_resolve('HelpDesk', "partials/IndexContentAfter.tpl")}
    <script type="text/javascript" src="{portal_componentjs_file('Documents')}"></script>
    {include file=portal_template_resolve('Documents', "partials/IndexContentAfter.tpl")}
</div>
