function Quotes_DetailView_Component($scope, $api, $webapp, $translatePartialLoader, sharedModalService, $modal) {
    $scope.acceptQuote = function() {
        var params = {
            'quotestage': 'Accepted'
        }
        $api.post($scope.module + '/SaveRecord', {record: params,recordId:$scope.id}).success(function(savedRecord) {
            if(savedRecord.record!==undefined){
            $webapp.busy();
            // Update client data-structure to reflect Closed status.
            var recordStatus = savedRecord.record.quotestage;
            $scope.quoteStage = recordStatus;
            var stageField = $scope.edits['quotestage'];
            $scope.record[stageField] = $scope.quoteAcceptLabel;
            $scope.quoteAccepted = false;
            $webapp.busy(false)
          }
          else{
            alert("Mandatory fields are missing,"+savedRecord.message+'.');
          }
        });
      }
  angular.extend(this, new Portal_DetailView_Component($scope, $api, $webapp));
}
