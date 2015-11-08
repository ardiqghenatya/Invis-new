
<body ng-app="WebApp" ng-controller="arcCtrl">
<div class="container">
  <div class="col-xs-15 col-xs-offset-1 main">
  <h3>Pelanggan</h3>

<table class="table table-striped">
  <thead><tr>
    <th>Edit</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No-Telp</th>
  </tr></thead>
  <tbody>
    <tr ng-repeat="item in arcTableBarang.result">
    <td>
      <button class="btn" ng-click="editUser(user.id)">
      <span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit
      </button>
    </td>

    <td>{{ item.Nama }}</td>
    <td>{{ item.Alamat }}</td>
    <td>{{ item.No-Telp }}</td>
  </tr></tbody>
</button>
</table>
<hr>
<form class="form-horizontal" name="input_data" action="db/insert/insert.php" method="post">
<div class="form-group">
  <label class="col-sm-2 control-label">Nama:</label>
  <div class="col-sm-10">
    <input type="text" name="nama_pelanggan" maxlength="20" required="required">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Alamat:</label>
  <div class="col-sm-10">
    <input type="text" name="alamat" maxlength="100" required="required">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">No-Telp:</label>
  <div class="col-sm-10">
    <input type="text" name="no_telp" maxlength="20" required="required">
  </div>
</div>
<button class="btn btn-success" type="submit" value="insert" name="Input_data">
  <span class="glyphicon glyphicon-user"></span> Create New User
</button>


</form>
</div>
<script src="content/angular/main.js"></script>

</body>
</div>