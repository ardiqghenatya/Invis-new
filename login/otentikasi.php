
<?php
include('../config/config.php');
session_start();


$username = $_POST['username'];
$password = $_POST['password'];


//$username = mysql_real_escape_string($username);
//password = mysql_real_escape_string($password);


if (empty($username) && empty($password)) {
	
	header('location:login.php?error=1');
	break;
} else if (empty($username)) {
	
	header('location:login.php?error=2');
	break;
} else if (empty($password)) {
	
	header('location:login.php?error=3');
	break;
}

$servername = "localhost";
$username = "invisible-app";
$password = "invisible";
$dbname = "invisible-app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, password, id FROM user";
$result = $conn->query($sql);

if ($result->num_rows == 1) {

	$_SESSION['username'] = $username;
	header('location:../index.php');
} 
else {
//if ($username ='admin' );	
header('location:login.php?error=4');
}
mysql_close($conn)
?>  
 
