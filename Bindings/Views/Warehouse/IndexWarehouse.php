<div class="container" ng-controller="warehouseController">
    <div class="col-xs-15 col-xs-offset-1 main">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Warehouse
                    <small>Ini adalah stock barang anda saat ini!</small>
                    <button class="btn btn-default" ng-click="muatulang()">Refresh</button>
                    <button class="btn btn-primary pull-right" ng-controller="ModalCtrl" ng-click="open('','Bindings/Views/Warehouse/PopUps/TambahBarang.php',$index)">
                        Tambah Barang
                    </button>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="../index.html">Home</a>
                    </li>
                    <li class="active">Warehouse</li>
                </ol>
            </div>

        </div>

        <div class="row">
           <div class="col-md-12">
                <div class="col-md-12">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Barang</th>
                                <th>Brand</th>
                                <th>Item Name</th>
                                <th>Size</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in stock">
                                <td style="padding-top: 16px;">{{ $index + 1 }}</td>
                                <td style="padding-top: 16px;">{{ item.code }}</td>
                                <td style="padding-top: 16px;">{{ item.brand }}</td>
                                <td style="padding-top: 16px;">{{ item.name }}</td>
                                <td style="padding-top: 16px;">{{ item.size }}</td>
                                <td style="padding-top: 16px;">{{ item.stock }}</td>
                                <td style="padding-top: 16px;">{{ item.price | currency:'Rp. ':0}}</td>
                                <td>
                                    <button class="btn btn-default" ng-controller="ModalCtrl" ng-click="open('','Bindings/Views/Warehouse/PopUps/EditBarang.php',$index)">
                                         <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
           </div>
        </div>

    </div>
<!-- /.container -->
</div>
