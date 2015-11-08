penjualan.controller('penjualanController', function($scope, productService){
    var getVal = productService.getProducts();

    $scope.check = function (itemJual) {
        $scope.tarray = "";
        var utils = {};
        // Could create a utility function to do this
        utils.inArray = function (searchFor, property) {
            var retVal = -1;
            var self = this;
            for (var index = 0; index < self.length; index++) {
                var item = self[index];
                if (item.hasOwnProperty(property)) {
                    if (item[property].toLowerCase() === searchFor.toLowerCase()) {
                        retVal = index;
                        return retVal;
                    }
                }
            };
            return retVal;
        };

        // or we could create a function on the Array prototype indirectly
        Array.prototype.inArray = utils.inArray;

        // let's use the prototype for now
        var i = getVal.inArray(itemJual, "code");
        $scope.code = getVal[i].code;
        $scope.brand = getVal[i].brand;
        $scope.name = getVal[i].name;
        $scope.model = getVal[i].model;
        $scope.size = getVal[i].size;
        $scope.stock = getVal[i].stock;
        $scope.price = getVal[i].price;
        $scope.picture = "/Images/"+getVal[i].picture;
    };

    $scope.selectedRow = null;  // initialize our variable to null
    $scope.setClickedRow = function (index) {  //function that sets the value of selectedRow to current index
        $scope.selectedRow = index;
        $scope.itemcode = getVal[index].code;
        $scope.itembrand = getVal[index].brand;
        $scope.itemname = getVal[index].name;
        $scope.itemmodel = getVal[index].model;
        $scope.itemsize = getVal[index].size;
        $scope.itemstock = getVal[index].stock;
        $scope.itemprice = getVal[index].price;
        $scope.itempicture = "/Images/" + getVal[index].picture;
    }
})
.directive('ngEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if (event.which === 13) {
                scope.$apply(function () {
                    scope.$eval(attrs.ngEnter);
                });

                event.preventDefault();
            }
        });
    };
})

.controller('datapelangganCtrl', function ($scope) {
    
    $scope.selected = "";
    $scope.users = [
        { Nama: "Jhonny Depp", alamat: "Bandung" },
        { Nama: "Sally Johanson", alamat: "Jakarta" },
        { Nama: "Taylor Swift", alamat: "Jawa Tengah" },
        { Nama: "Max Payne", alamat: "Sukabumi" },
        { Nama: "Jessica Hutton", alamat: "Baleendah" },
        { Nama: "Nicholas Cage", alamat: "Lembang" },
        { Nama: "Lisa Simpson", alamat: "Garut" },
        { Nama: "Adam Lambert", alamat: "Sumedang" }
    ];    
})
.controller('arcPenjualan', function ($scope, $http) {
    $scope.itemJual = "";
    
    $scope.jual = function () {
        $scope.itemJual = ""
    };

    //shopping cart
    $scope.items = [];

    $scope.addItem = function (code, name, brand, size, price) {

        $scope.item = { Name: name, Code: code, Brand: brand, Size: size, Price: price, Quantity: '1' };
        $scope.items.push($scope.item);
        $scope.item = {};
    }

    $scope.totalPrice = function () {
        var total = 0;
        for (count = 0; count < $scope.items.length; count++) {
            //total += $scope.items[count].Price * $scope.items[count].Quantity;
            total += $scope.items[count].Price * $scope.items[count].Quantity;
        }
        return total;
    }

    $scope.removeItem = function (index) {
        $scope.items.splice(index, 1);
    }
})
.controller('ShoppingCartPenjualanCtrl', function ($scope) {

})