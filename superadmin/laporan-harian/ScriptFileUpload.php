<?Php 
    include "../../config.php";
    
    $id = $_POST['id'];
    $nama_folder = $_POST['nama_folder'];
    $tanggal = $_POST['tanggal'];
    $namaFile = $_FILES['berkas']['name'];
    $X = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($X));
    $ukuranFile    = $_FILES['berkas']['size'];
    $file_tmp = $_FILES['berkas']['tmp_name'];

    // Lokasi Penempatan File
    $dirUpload = "file/";
    $linkBerkas = $dirUpload.$namaFile;

    // Menyimpan File
    $terupload = move_uploaded_file($file_tmp, $linkBerkas);

    $dataArr = array(
        'id' => $id, 
        'nama_buku' => $nama_folder,
        'tanggal' => $tanggal,
        'title' => $namaFile, 
        'size' => $ukuranFile, 
        'ekstensi' => $ekstensiFile, 
        'berkas' => $linkBerkas,
    );

    if ($terupload && (insertData($dataArr) == 1)) {
        echo "Upload Berhasil!";
        header("Location: index.Php", True, 301);
        exit();
    } else {
        echo "Upload Gagal!";
        header("Location: create.Php", True, 301);
        exit();
    }

 ?>