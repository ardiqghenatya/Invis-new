angular.module('arcApp',[])
.controller('arcCtrl', function($scope,$http){
  $http.get('db/select/select-pelanggan.php')
    .success(function(arcResp) {
        $scope.arcTableBarang = arcResp;
    });
})