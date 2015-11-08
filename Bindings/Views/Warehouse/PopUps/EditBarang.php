<div ng-controller="editbarangController">
    <div class="modal-header">
        <h3 class="modal-title">Edit Barang</h3>
    </div>
    <form name="FormEditBarang">
        <div class="modal-body" style="height: 250px;">
            <div class="col-sm-12" style="margin-bottom:10px">
                <div class="col-sm-3" style="padding=0px">Kode</div>
                <div class="col-sm-1" style="padding=0px">:</div>
                <div class="col-sm-8" style="padding=0px">
                    <input type="text" required ng-model="editCode" />
                </div>
            </div>
            <div class="col-sm-12" style="margin-bottom:10px">
                <div class="col-sm-3" style="padding=0px">Nama</div>
                <div class="col-sm-1" style="padding=0px">:</div>
                <div class="col-sm-8" style="padding=0px">
                    <input type="text" required ng-model="editName" />
                </div>
            </div>
            <div class="col-sm-12" style="margin-bottom:10px">
                <div class="col-sm-3" style="padding=0px">Brand</div>
                <div class="col-sm-1" style="padding=0px">:</div>
                <div class="col-sm-8" style="padding=0px">
                    <input type="text" required ng-model="editBrand" />
                </div>
            </div>
            <div class="col-sm-12" style="margin-bottom:10px">
                <div class="col-sm-3" style="padding=0px">Size</div>
                <div class="col-sm-1" style="padding=0px">:</div>
                <div class="col-sm-8" style="padding=0px">
                    <input type="number" required string-to-number ng-model="editSize" />
                </div>
            </div>
            <div class="col-sm-12" style="margin-bottom:10px">
                <div class="col-sm-3" style="padding=0px">Stock</div>
                <div class="col-sm-1" style="padding=0px">:</div>
                <div class="col-sm-8" style="padding=0px">
                    <input type="number" required string-to-number ng-model="editStock" />
                </div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-3" style="padding=0px">Harga(Rp)</div>
                <div class="col-sm-1" style="padding=0px">:</div>
                <div class="col-sm-8" style="padding=0px">
                    <input type="number" required string-to-number ng-model="editPrice" />
                </div>
            </div>      
        </div>
        <div class="modal-footer">
            <button ng-click="save()" ng-disabled="FormEditBarang.$invalid" class="btn btn-success btn-md">Save</button>
            <button ng-click="close()" class="btn btn-danger btn-md pull-right">Close</button>
        </div>
    </form>
</div>