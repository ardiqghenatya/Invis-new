<div class="container" ng-controller="pembelianController">
    <div class="col-xs-15 col-xs-offset-1 main">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Pembelian
                    <!--<small>It's Nice to Meet You!</small>-->
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="../index.html">Home</a>
                    </li>
                    <li class="active">Pembelian</li>
                </ol>
            </div>

        </div>

        <div class="row">
           <div class="col-md-12">
                <div class="row" ng-controller="arcPenjualan">
                   <div class="col-sm-12">
                        <div class="col-sm-3 col-nopadding">
                            <div class="col-sm-12 col-nopadding">
                                <input type="text" ng-enter="check(itemJual)" ng-model="itemJual" />
                                <!--<input type="text" ng-change="change()" ng-model="itemJual" />-->
                                <button class="btn btn-success" ng-disabled="code == undefined" ng-controller="ModalCtrl" ng-click="addItem(code,name,brand,size,price)">
                                     <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">Add</span>
                                </button>
                            </div>
                            <div class="col-sm-12 col-nopadding">
                                <div ng-include="'Bindings/Views/BarcodeItemDetail/BarcodeItemDetail.php'"></div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-nopadding">
                            <div class="col-md-12 col-nopadding">
                                <div ng-include="'Bindings/Views/CustomerData/CustomerData.php'"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-nopadding">
                            <div ng-include="'Bindings/Views/CartTable/CartTable.php'"></div>
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <button class="btn btn-primary btn-lg" ng-click="beli()">BELI</button>
                            </div>
                        </div>
                   </div>
                </div>
           </div>
        </div>

    </div>
<!-- /.container -->
</div>
