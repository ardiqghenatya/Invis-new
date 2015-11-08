
<!DOCTYPE html>

<html class="no-js"> 
<head>

    <!-- Meta-Information -->
    <title>Invisible-app</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Invisible App">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com -->
    <link rel="stylesheet" href="content/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="content/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="content/angular/angular.material.min.css">
    <link href="content/bootstrap/fonts/font-awesome.min.css" rel="stylesheet">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="content/bootstrap/css/main.css">
    <link rel="stylesheet" href="content/bootstrap/css/dashboard.css">
    <link rel="stylesheet" href="content/Custom/Custom.css">

</head>
    <body ng-app="WebApp" ng-controller="arcCtrl">

<div ng-include='"templates/header.html"'></div>
<div ng-view></div>
<div ng-include='"templates/footer.html"'></div>

<script src="content/jquery/jquery-1.11.3.min.js"></script>
<script src="content/bootstrap/js/bootstrap.min.js"></script>

<script src="content/angular/angular.min.js"></script>
<script src="content/angular/angular.material.min.js"></script>
<script src="content/angular/angular-route.min.js"></script>
        
<script src="Scripts/angular-ui/ui-bootstrap-tpls.min.js"></script>
<script src="Frameworks/PopUpFramework.js"></script>
<script src="Bindings/Everything/Modules/InvisibleModules.js"></script>

<script src="content/angular/main.js"></script>
<script src="content/angular/myUsers.js"></script>

<script src="Bindings/Everything/Directives/GlobalDirectives.js"></script>
<script src="Bindings/Models/Services/GlobalServices/AppServices.js"></script>
<script src="Bindings/Models/Services/Warehouse/WarehouseServices.js"></script>
<script src="Bindings/Everything/Routings/Warehouse/WarehouseRoutings.js"></script>
<script src="Bindings/Everything/Routings/Pembelian/PembelianRoutings.js"></script>
<script src="Bindings/Everything/Routings/Penjualan/PenjualanRoutings.js"></script>
<script src="Bindings/Everything/Controllers/Warehouse/WarehouseControllers.js"></script>
<script src="Bindings/Everything/Controllers/Pembelian/PembelianControllers.js"></script>
<script src="Bindings/Everything/Controllers/Penjualan/PenjualanControllers.js"></script>


</body>
</html>
