<!DOCTYPE html>
<html>
<head>
        <title>Invisible Store - App</title>
        <link rel="stylesheet" href="content/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="content/angular/angular-material.min.css">
        <script src="content/angular/angular.min.js"></script>
        <script src="content/angular/angular-animate.min.js"></script>
        <script src="content/angular/angular-aria.min.js"></script>
        <script src="content/angular/angular-material.min.js"></script>
        <script src="content/jquery/jquery-1.11.3.min.js"></script>
        
</head>
<body ng-app="arcApp" ng-controller="arcCtrl">
<div class="container">
  <h3>Users</h3>

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
<script>
angular.module('arcApp',['ngMaterial'])
.controller('arcCtrl', function($scope,$http){
  $http.get('db/select/select-pelanggan.php')
    .success(function(arcResp) {
        $scope.arcTableBarang = arcResp;
    });
})
</script>

</div>
</body>