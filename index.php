<?php
include "navbar.php";
include "config.php";

if(isset($_POST['proses'])){
    mysqli_query($conn, "insert into report set  
    nama_petugas = '$_POST[nama_petugas]',
    kode_petugas = '$_POST[kode_petugas]',
    kecamatan = '$_POST[kecamatan]',
    desa = '$_POST[desa]',
    wilkerstat = '$_POST[wilkerstat]',
    before_verif = '$_POST[before_verif]',
    after_verif = '$_POST[after_verif]'");
    
    echo "<script> alert('Data barang baru telah tersimpan')</script>";
    
    }
?>


<section class="login-admin">
        <div class="container">
            <div class="row">
                <div class="col-md-4 bagian-kiri">
<h2 class="judul">
        <br> <span>Laporan Progress Pendataan</span>
    </h2>

<form action="" method="post">
    <table>
    <section class="laporan-progres-pendataan">
        <div class="box">
            <label for="nama_petugas">Nama Petugas:</label>
            <input type="teks" name="nama_petugas" id="">
        </div>
        <div class="box">
            <label for="kode_petugas">Kode Petugas:</label>
            <input type="teks" name="kode_petugas" id="">
        </div>
        <div class="box">
            <label for="desa">Desa:</label>
            <input type="teks" name="desa" id="">
        </div>
        <div class="box">
            <label for="kecamatan">Kecamatan:</label>
            <input type="teks" name="kecamatan" id="">
        </div>
        <div class="box">
            <label for="progress">Progress (jumlah kartu keluarga yang telah di data):</label>
            <input type="teks" name="progress" id="">
        </div>
        
        <div class="box">
            <label for="wilkerstat">Kode Wilkerstat:</label>
            <input type="teks" name="wilkerstat" id="">
        </div>
        <div class="box">
            <label for="before_verif">Jumlah keluarga sebelum verifikasi:</label>
            <input type="teks" name="before_verif" id="">
        </div>
        <div class="box">
            <label for="after_verif">Jumlah keluarga setelah verifikasi:</label>
            <input type="teks" name="after_verif" id="">
        </div>
        <div class="bux">
            <label for="tanggal">Tanggal:</label>
            <html>
        <?php
        echo "<br/>";
        echo date('l, d-m-Y');
        ?>
    </section>

    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
</table>
</table>
</form>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html> 