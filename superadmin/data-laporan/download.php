<?php
include "../../config.php";


// $desa = $_POST['desa'];
$tanggal = $_POST['tanggal'];

$file_name = 'Progress Regsosek '.$tanggal.'.csv';

$sql = "SELECT * FROM report WHERE tanggal='$tanggal' ORDER BY id ASC";
$result = mysqli_query($conn,$sql);

if(!$result) {
    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_errno($conn));
}

$header=array();
// membuat file
$file=fopen($file_name, "w");
// untuk judul di file csv
$header= array("No.","Nama Petugas PPL","Kode Petugas","Nama PML","Kecamatan","Kode Kecamatan","Desa","Kode Desa","Kode Wilkerstat","Nama Wilayah RT/RW/Dusun","Jumlah keluarga sebelum verifikasi","Jumlah keluarga setelah serifikasi","Total K yang telah didata","Tanggal");

fputcsv($file,$header);
$no = 1;

while ($row = mysqli_fetch_assoc($result)) {
    $no;
    $nama_petugas = $row['nama_petugas'];
    $kode_petugas = $row['kode_petugas'];
    $nama_pml = $row['nama_pml'];
    $kecamatan = $row['kecamatan'];
    $kode_kecamatan = $row['kode_kecamatan'];
    $desa = $row['desa'];
    $kode_desa = $row['kode_desa'];
    $wilkerstat = $row['wilkerstat'];
    $nama_rt = $row['nama_rt'];
    $before_verif = $row['before_verif'];
    $after_verif = $row['after_verif'];
    $total_k = $row['total_k'];

    // memasukkan isi 
    $header=array($no,$nama_petugas,"'".$kode_petugas,$nama_pml,$kecamatan,"'".$kode_kecamatan,$desa," ".$kode_desa,$wilkerstat,$nama_rt,$before_verif,$after_verif,$total_k,$tanggal);

    fputcsv($file,$header); //untuk isi csv
    $no++;
} 
fclose($file);
// exit;

// Download
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=$file_name");
header("Content-Type: application/csv;");

readfile($file_name);

// Delete file
unlink($file_name);
exit(); 