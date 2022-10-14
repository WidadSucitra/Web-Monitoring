<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "monitoring";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
} 

    function insertData($data){
        $query = "INSERT INTO laporan_harian VALUES('".$data['id']. "','" . $data['nama_folder'] . 
        "','" . $data['tanggal'] . "','" . $data['size'] . "','" .$data['ekstensi']. "','" .
        $data['berkas'] . "')";
        
        $result = mysqli_query(KoneksiDB(), $query);
        if (!$result) {
            return 0;
        } else {
            return 1;
        }
    }

?>