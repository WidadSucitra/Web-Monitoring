<?php
include "koneksi.php";
$status = $_POST['status'];
$tanggal = date("Y-m-d H:i:s");

$sql = "insert into POST (status,tanggal) values ('$status','$tanggal')";
if( $mysqli->query($sql) ) {
echo "Data tersimpan";
}else{
echo "Data tidak tersimpan";
}
$mysqli->close();
?>