warehouse.controller('warehouseController', function($scope, productService){
	

    var getVal = productService.getProducts();
	$scope.stock = angular.copy(getVal);

	$scope.muatulang = function(){
        $scope.stock = angular.copy(productService.getProducts());
	}

    productService.setProduct(getVal)

})
.controller('editbarangController', function($scope, productService, indexService){
    var barang = productService.getProducts();
    var index = indexService.getIndex();
    $scope.editCode = barang[index].code;
    $scope.editName = barang[index].name;
    $scope.editSize = barang[index].size;
    $scope.editBrand = barang[index].brand;
    $scope.editStock = barang[index].stock;
    $scope.editPrice = barang[index].price;

    $scope.save = function(){
        barang[index].code = $scope.editCode;
        barang[index].name = $scope.editName;
        barang[index].size = $scope.editSize;
        barang[index].brand = $scope.editBrand;
        barang[index].stock = $scope.editStock;
        barang[index].price = $scope.editPrice;
        productService.setProduct(barang);
        alert('saved')
    };
})
.controller('tambahbarangController', function($scope, productService){
    var barang = productService.getProducts();

    $scope.save = function(){

        barang.push({
            code: $scope.tambahCode,
            name: $scope.tambahName,
            size: $scope.tambahSize,
            brand: $scope.tambahBrand,
            stock: $scope.tambahStock,
            price: $scope.tambahPrice,
        });
        productService.setProduct(barang);
        alert('saved')
    };
})