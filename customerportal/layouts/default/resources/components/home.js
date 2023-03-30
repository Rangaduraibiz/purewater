function Home_Component($scope, $api, $webapp, $modal, sharedModalService, $translatePartialLoader) {
	$translatePartialLoader.addPart('home');
	$scope.supportNotification = false;
	$scope.announcementExists = false;
	$scope.profileFetched = false;

	$scope.fetchAnnouncement = function () {
		$api.get('Portal/FetchAnnouncement').success(function (result) {
			if (result.announcement !== '') {
				$scope.announcementExists = true;
				$scope.announcement = result.announcement;
			} else if (result.announcement == '' && (result.message === 'Contacts module is disabled' || result.message === 'Login failed')) {
				alert(result.message);
				localStorage.clear();
				window.location.href = "index.php?view=Logout";
			}
		});
	}
	const srlables = [];
	const srcounts = [];
	$scope.fetchSRCounts = function () {
		// To do handle api error
		$api.get('Portal/GetSRTypeCounts').success(function (profile) {
			if (profile.result !== null) {
				$scope.srCounts = profile['data'];
				for(let i=0;i<$scope.srCounts.length;i++){
					srlables[i]=$scope.srCounts[i][1];
					srcounts[i]=parseInt($scope.srCounts[i][0]);
				}
			//chart1 pie
				var options = {
					series:srcounts,
					chart: {
					width: 600,
					type: 'pie',
					},
					labels:srlables,
					
					responsive: [{
					breakpoint:2000,
					options: {
						chart: {
						width: 390
						},
						legend: {
						position: 'bottom'
						}
					}
					}]
				};
					var chart1 = new ApexCharts(document.querySelector("#chart1"), options);
					chart1.render();

			//chart2 dount
				var options = {
					series:srcounts,
					chart: {
					width:600,
					type: 'donut',
					},
					labels:srlables,
					responsive: [{
					breakpoint: 2000,
					options: {
						chart: {
						width:390
						},
						legend: {
						position: 'bottom'
						}
					}
					}]
				};
				var chart2= new ApexCharts(document.querySelector("#chart2"), options);
				chart2.render();
            // chart 3 bar
				var options = {
					series: [{
					data: srcounts
				}],
					chart: {
					type: 'bar',
					height: 350
				},
				plotOptions: {
					bar: {
					borderRadius: 4,
					horizontal: true,
					}
				},
				dataLabels: {
					enabled: false
				},
				xaxis: {
					categories: srlables,
				}
				};
		
				var chart3 = new ApexCharts(document.querySelector("#chart3"), options);
				chart3.render();				
			}
		});
	}
	$scope.orgName = function () {
		if (localStorage.getItem('orgName') !== null) {
			$scope.org = localStorage.getItem('orgName');
			$scope.profileFetched = true;
		} else {
			$api.get('Portal' + '/FetchCompanyTitle').success(function (profile) {
				if (profile.result !== null) {
					$scope.accountDetails = profile.result;
					$scope.org = $scope.accountDetails;
					localStorage.setItem('orgName', $scope.org);
				}
				$scope.profileFetched = true;
			});
		}
	}

	$scope.fetchShortcuts = function () {
		$api.get('Portal/FetchShortcuts').success(function (result) {
			var availableModules = $scope.$parent.modules;

			if (result.shortcut) {
				$scope.showShortcuts = true;
				if (availableModules['HelpDesk'] !== undefined && result.shortcut.HelpDesk !== undefined) {
					var uiLabel = availableModules['HelpDesk'].uiLabel;
					result.shortcut[uiLabel] = result.shortcut.HelpDesk;
					if (uiLabel !== 'HelpDesk')
						delete result.shortcut['HelpDesk'];
				}
				if (availableModules['Documents'] !== undefined && result.shortcut.Documents !== undefined) {
					var uiLabel = availableModules['Documents'].uiLabel;
					result.shortcut[uiLabel] = result.shortcut.Documents;
					if (uiLabel !== 'Documents')
						delete result.shortcut['Documents'];
				}

				$scope.shortcuts = result.shortcut;
			} else {
				$scope.showShortcuts = false;
			}
		})
	}
	$scope.openShortcut = function (module, action) {
		var actionConfig = {
			'LBL_ADD_DOCUMENT': 'Documents',
			'LBL_CREATE_TICKET': 'HelpDesk',
		};
		var serviceConfig = {
			'LBL_OPEN_TICKETS': 'HelpDesk',
		};
		if (actionConfig.hasOwnProperty(action)) {
			sharedModalService.prepForModal(actionConfig[action]);
		}
		if (serviceConfig.hasOwnProperty(action)) {
			sharedModalService.loadService(serviceConfig[action]);
		}

	}
	$scope.fetchRecentRecords = function () {
		$scope.activateRecentTickets = false;
		var availableModules = JSON.parse(localStorage.getItem('modules'));
		$api.get('Portal/FetchRecentRecords').success(function (result) {
			if (result.records) {
				if (result.records.HelpDesk !== undefined && result.records.HelpDesk !== '') {
					var uiLabel = availableModules['HelpDesk'].label;
					result.records[uiLabel] = result.records.HelpDesk;
					if (uiLabel !== 'HelpDesk') {
						delete result.records['HelpDesk'];
					}
					$scope.recentTickets = result.records[uiLabel];
					$scope.ticketsUiLabel = uiLabel;
					$scope.activateRecentTickets = true;
				}
				if (result.records.Faq !== undefined && result.records.Faq !== '') {
					var uiLabel = availableModules['Faq'].uiLabel;
					result.records[uiLabel] = result.records.Faq;
					if (uiLabel !== 'Faq') {
						delete result.records['Faq'];
					}
				}
				if (result.records.Documents !== undefined && result.records.Documents !== '') {
					var uiLabel = availableModules['Documents'].uiLabel;
					result.records[uiLabel] = result.records.Documents;
					if (uiLabel !== 'Documents') {
						delete result.records['Documents'];
					}
				}
				$scope.recentRecords = result.records;
			}
		})
	}

	$scope.determineStatus = function (status) {
		if (status === 'Closed') {
			return 'label-success';
		} else if (status === 'Open') {
			return 'label-danger';
		} else if (status === 'In Progress') {
			return 'label-warning';
		} else if (status === 'Wait For Response') {
			return 'label-info';
		} else if (status === 'Closed') {
			return 'label-success';
		} else if (status === 'Wait') {
			return 'label-info';
		} else if (status === 'New') {
			return 'label-damnger';
		} else if (status === 'Assigned') {
			return 'label-info';
		} else if (status === 'Rsolved') {
			return 'label-success';
		} else {
			return 'label-primary';
		}
	}
	$scope.moduleCheck = function (module) {
		return false;
	}
	angular.extend(this, new HelpDesk_IndexView_Component($scope, $api, $webapp, $modal, sharedModalService, $translatePartialLoader));

	angular.extend(this, new Documents_IndexView_Component($scope, $api, $webapp, $modal));

	setTimeout(function () {
		loadContents();

	}, 3000);

	$scope.searchEnabled = false;

	function loadContents() {
		$webapp.busy();
		$scope.orgName();
		$scope.fetchAnnouncement();
		$scope.fetchShortcuts();
		$scope.fetchRecentRecords();
		$scope.fetchSRCounts();
		$webapp.busy(false);
		if (localStorage.getItem('currentStatus') !== undefined) {
			localStorage.removeItem('currentStatus');
		}
	}

	$scope.isObj = function (content) {
		if (angular.isObject(content))
			return true;
	}

	$scope.loadRecentRecord = function (module, id) {
		var availableModules = $scope.$parent.modules;
		if (availableModules['HelpDesk'] !== undefined && (availableModules['HelpDesk'].label === module) || availableModules['HelpDesk'].uiLabel === module) {
			window.location.href = "index.php?module=HelpDesk&view=Detail&id=" + id;
			return;
		}
		if (availableModules['Documents'] !== undefined && (availableModules['Documents'].label === module) || availableModules['Documents'].uiLabel === module) {
			window.location.href = "index.php?module=Documents&view=Detail&id=" + id;
		}
		if (availableModules['Faq'] !== undefined && (availableModules['Faq'].label === module) || availableModules['Faq'].uiLabel === module) {
			window.location.href = "index.php?module=Faq&record=" + id;
		}
	}

	$scope.ifNotTickets = function (module) {
		var availableModules = $scope.$parent.modules;
		if (availableModules['HelpDesk'] !== undefined && availableModules['HelpDesk'].label === module) {
			return false;
		}
		return true;
	}
}
