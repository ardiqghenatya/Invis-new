warehouse.service('productService', function() {
  var productList;

  var setProduct = function(newObj) {
      productList = newObj
  };

  var getProducts = function(){
      return productList;
  };

  return {
    setProduct: setProduct,
    getProducts: getProducts
  };

})