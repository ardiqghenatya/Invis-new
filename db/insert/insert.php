<?php
$servername = "localhost";
$username = "invisible-app";
$password = "invisible";
$dbname = "invisible-app";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$sql = "INSERT INTO pelanggan VALUES ('$nama_pelanggan', '$alamat', '$no_telp')";

if (mysqli_query($conn, $sql)) {
    header('location:http://tes.app/#/modal');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
