<?php
include "../includes/navbar.php";
include "../../config.php";




if(isset($_POST['proses'])){
    $nama_folder= "file/";
    $target_file = $nama_folder . basename($_FILES["berkas"]["name"]);
    $size_berkas= $_FILES["berkas"]["size"];
    $nama_berkas= $_FILES["berkas"]["name"];
    $ekstensi_berkas=  pathinfo($_FILES["berkas"]["name"])['extension'];
    if (file_exists($target_file)) {
        echo "<script> alert('File telah ada')</script>";
        $uploadOk = 0;
    }else{
        move_uploaded_file($_FILES["berkas"]["tmp_name"], $target_file);
        mysqli_query($conn, "insert into laporan_harian set  
        nama_folder = '$nama_folder',
        tanggal = '$_POST[tanggal]',
        size = '$size_berkas',
        ekstensi = '$ekstensi_berkas',
        berkas = '$nama_berkas'");
        
        echo "<script> alert('File telah tersimpan')</script>";
    }
    }
?>

<!-- Begin Page Content -->
<section class="upload_file">
                    <div class="container-fluid">
    
                        <!-- DataTales Example -->
                        <Body Style="Margin: Auto; Padding: 10px;">
    <H2 Style="Text-Align: Center;">Form Upload File</H2>
    <Hr>
    <Form Action="create.php" Method="Post" Enctype="Multipart/Form-Data">
        <!-- <B>Id :</B> -->
        <!-- <Input Type="Text" Name="id" Value="" Placeholder="Masukkan Id"><Br /><Br /> -->
        <!-- <B>Nama Folder :</B>
        <Input Type="Text" Name="nama_folder" Value="" Placeholder="Masukkan Nama Folder"><Br /><Br /> -->
        <B>Tanggal :</B>
        <Input Type="Date" Name="tanggal" Value="" Placeholder="Masukkan Tanggal"><Br /><Br />
        <B>Pilih File :</B>
        <Input Type="File" Name="berkas" Accept="Application/csv">
        <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Upload File"> </td>
    </tr>
        
    </Form>
    <Hr>
                </section>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php
    include "../includes/footer.php";
?>

    
