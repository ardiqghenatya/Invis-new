angular.module('arcApp',['ngMaterial'])
.controller('arcCtrl', function($scope,$http){
	$http.get('db/select/select-barang.php')
    .success(function(arcResp) {
        $scope.arcTableBarang = arcResp;
    });
})

