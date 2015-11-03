<?php
include('../../config/config.php');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$sql = "SELECT kode_barang, harga, qty FROM barang";
$result = $conn->query($sql);

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Kode":"'  . $rs["kode_barang"] . '",';
    $outp .= '"Harga":"'   . $rs["harga"]        . '",';
    $outp .= '"Qty":"'. $rs["qty"]     . '"}'; 
}
$outp ='{"result":['.$outp.']}';
$conn->close();

echo($outp);
?>
