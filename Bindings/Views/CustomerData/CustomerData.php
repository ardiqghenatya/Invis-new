<div class='container-fluid' ng-controller="datapelangganCtrl">
    Enter a name: <input type="text" ng-model="selected" uib-typeahead="user as (user.Nama) for user in users | filter:$viewValue" />
    <p></p>
    <b>Selected User</b>
    <blockquote>
        <h5>Nama: {{selected.Nama}}</h5>
        <h5>Alamat: {{selected.alamat}}</h5>
    </blockquote>
</div>