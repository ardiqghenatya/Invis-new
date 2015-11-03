<?php
include('../../config/config.php');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$sql = "SELECT nama_pelanggan, alamat, no_telp FROM pelanggan";
$result = $conn->query($sql);

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Nama":"'  . $rs["nama_pelanggan"] . '",';
    $outp .= '"Alamat":"'   . $rs["alamat"]        . '",';
    $outp .= '"No-Telp":"'. $rs["no_telp"]     . '"}'; 
}
$outp ='{"result":['.$outp.']}';
$conn->close();

echo($outp);
?>

