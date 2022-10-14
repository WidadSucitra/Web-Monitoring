<?Php 

Function KoneksiDB() {
    
$server = "localhost";
$user = "root";
$pass = "";
$database = "monitoring";
$Db = "Crud";

$conn = mysqli_connect($server, $user, $pass, $database, $Db);

    $Host = "Localhost";
    $Username = "Root";
    $Password = "";
    $Db = "Crud";

    $Conn = Mysqli_connect($Host, $Username, $Password, $Db);
    
    if(!$Conn) {
        die("Koneksi Database Gagal : " .Mysqli_connect_error());
    } else {
        return $Conn;
    }
}

function SelectAllData() {
    $query = "SELECT * FROM laporan_harian";
    $result = Mysqli_query(KoneksiDB(), $query);
    return $result;
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