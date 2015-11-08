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

$sql = "INSERT INTO pelanggan (nama_pelanggan, alamat, no_telp)
VALUES ('baban', 'garut', '123')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
