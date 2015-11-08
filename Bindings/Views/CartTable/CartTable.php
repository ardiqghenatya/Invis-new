<div ng-controller="ShoppingCartPenjualanCtrl">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <!--Brand Dihapus-->
                <td>No.</td>
                <td>Kode</td>
                <td>Nama</td>
                <td>Ukuran</td>
                <td>Harga</td>
                <td>Jumlah</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="item in items">
                <td>{{$index+1}}</td>
                <td>{{item.Code}}</td>
                <td>{{item.Name}}</td>
                <td>{{item.Size}}</td>
                <td>{{item.Price}}</td>
                <td>{{item.Quantity}}</td>
                <td>
                    <button class="btn btn-default btn-xs btn-danger" ng-controller="ModalCtrl" ng-click="removeItem($index)">
                         <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
    <br />
    <div>Total Price: {{totalPrice()}}</div>
</div>