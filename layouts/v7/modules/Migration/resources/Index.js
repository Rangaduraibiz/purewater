Vtiger.Class('Migration_Index_Js', {

	startMigrationEvent: function () {
		var migrateUrl = 'index.php?module=Migration&view=Index&mode=applyDBChanges';
		app.request.post({url:migrateUrl}).then(function (err, data) {
			jQuery('#running').addClass('hide').removeClass('show');
			jQuery('#success').addClass('show').removeClass('hide');
			jQuery('#nextButton').addClass('show').removeClass('hide');
			jQuery('#showDetails').addClass('show').removeClass('hide').html(data);
		});
	},

	registerEvents: function () {
		this.startMigrationEvent();
	}

});
