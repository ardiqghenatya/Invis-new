/**
 * AngularJS Tutorial 1
 * @author Nick Kaye <nick.c.kaye@gmail.com>
 */

/**
 * Main AngularJS Web Application
 */
var app = angular.module('WebApp', ['ngRoute', 'globalModule', 'ui.bootstrap', 'modalPopUp', 'pembelian', 'penjualan', 'warehouse']);

/**
 * Configure the Routes
 */
app.config(function ($routeProvider, $locationProvider) {
  $routeProvider
    // Home
    .when("/", {templateUrl: "pages/home.html", controller: "PageCtrl"})
    // Pages
    .when("/about", {templateUrl: "pages/about.html", controller: "PageCtrl"})
    .when("/faq", {templateUrl: "pages/faq.html", controller: "PageCtrl"})
    .when("/pricing", {templateUrl: "pages/pricing.html", controller: "PageCtrl"})
    .when("/services", {templateUrl: "pages/services.html", controller: "PageCtrl"})
    .when("/contact", {templateUrl: "pages/contact.html", controller: "PageCtrl"})
    .when("/logout", {templateUrl: "login/logout.php", controller: "PageCtrl"})
    .when("/input", {templateUrl: "/pages/input.php", controller: "PageCtrl"})
    .when("/test", {templateUrl: "/pages/tespage.php", controller: "PageCtrl"})
    .when("/modal", {templateUrl: "/pages/modal.php", controller: "PageCtrl"})
    // Blog
    .when("/blog", {templateUrl: "pages/blog.html", controller: "BlogCtrl"})
    .when("/blog/post", {templateUrl: "pages/blog_item.html", controller: "BlogCtrl"})
    // else 404
    .otherwise("/404", {templateUrl: "pages/404.html", controller: "PageCtrl"})

    //$locationProvider.html5Mode(true);
});

/**
 * Controls the Blog
 */
app.controller('BlogCtrl', function (/* $scope, $location, $http */) {
  console.log("Blog Controller reporting for duty.");
});

app.controller('arcCtrl', function($scope,$http,productService){
  var allItem = [
        {
            "code": "GS00140",
            "brand": "Giant Shoes",
            "name": "Giant 1",
            "model": "001",
            "size": "40",
            "stock": "10",
            "price": "200000"
        },
            {
            "code": "GS00241",
            "brand": "Giant Shoes",
            "name": "Giant 2",
            "model": "002",
            "size": "41",
            "stock": "8",
            "price": "210000"
        },
            {
            "code": "GS00342",
            "brand": "Giant Shoes",
            "name": "Giant 3",
            "model": "003",
            "size": "42",
            "stock": "12",
            "price": "220000"
        },
            {
            "code": "GS00439",
            "brand": "Giant Shoes",
            "name": "Giant 4",
            "model": "004",
            "size": "39",
            "stock": "5",
            "price": "300000"
        },
            {
            "code": "GS00543",
            "brand": "Giant Shoes",
            "name": "Giant 5",
            "model": "005",
            "size": "43",
            "stock": "1",
            "price": "320000"
        }];
  productService.setProduct(allItem)

  $http.get('db/select/select-pelanggan.php')
    .success(function(arcResp) {
        $scope.arcTableBarang = arcResp;
    })

});
/**
 * Controls all other Pages
 */
app.controller('PageCtrl', function (/* $scope, $location, $http */) {
  console.log("Page Controller reporting for duty.");

  // Activates the Carousel
  $('.carousel').carousel({
    interval: 5000
  });

  // Activates Tooltips for Social Links
  $('.tooltip-social').tooltip({
    selector: "a[data-toggle=tooltip]"
  })
});