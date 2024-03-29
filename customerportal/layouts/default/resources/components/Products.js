function Products_IndexView_Component($scope, $api, $webapp,$translatePartialLoader) {
  if ($translatePartialLoader !== undefined) {
      $translatePartialLoader.addPart('home');
      $translatePartialLoader.addPart('Products');
  }
    angular.extend(this, new Portal_IndexView_Component($scope, $api, $webapp));
    var url = purl();
    $scope.module = url.param('module');
    $scope.pageInitialized = false;

    $scope.searchQ = {
        onlymine: true
    }

    $scope.headers = null;
    $scope.records = null;
    $scope.extheaders = null;
    $scope.extrecords = null;
    $scope.currentPage = 1;
    $scope.pageSize = 10;
    $scope.isCreateable = false;
    $scope.isEditable = false;
}
