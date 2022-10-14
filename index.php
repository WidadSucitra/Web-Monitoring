<?php
include "navbar.php";
include "config.php";

if(isset($_POST['proses'])){
    mysqli_query($conn, "insert into report set  
    nama_petugas = '$_POST[nama_petugas]',
    kode_petugas = '$_POST[kode_petugas]',
    kecamatan = '$_POST[kecamatan]',
    kode_kecamatan = '$_POST[kode_kecamatan]',
    desa = '$_POST[desa]',
    kode_desa = '$_POST[kode_desa]',
    wilkerstat = '$_POST[wilkerstat]',
    before_verif = '$_POST[before_verif]',
    after_verif = '$_POST[after_verif]'");
    
    echo "<script> alert('Laporan progress anda telah tersimpan')</script>";
    
    }
?>



<section class="laporan-progres-pendataan">
    <div class="container">
        <div class="container row mb-5">
            <h2 class="judul"> <br> <span>Laporan Progress Pendataan</span></h2>
        </div>

        <form action="" method="post" class="container form-isian-user">
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="nama_petugas">Nama Petugas:</label>
                <input type="teks" class="form-control col-md-7" name="nama_petugas" id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="kode_petugas">Kode Petugas:</label>
                <input type="teks" class="form-control col-md-7" name="kode_petugas" id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="kecamatan">Kecamatan:</label>
                <input type="teks" class="form-control col-md-7" name="kecamatan" id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="kode_kecamatan">Kode Kecamatan:</label>
                <input type="teks" class="form-control col-md-7" name="kode_kecamatan" id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="desa">Desa:</label>
                <input type="teks" class="form-control col-md-7" name="desa" id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="kode_desa">Kode Desa:</label>
                <input type="teks" class="form-control col-md-7" name="kode_desa" id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="wilkerstat">Kode Wilkerstat:</label>
                <input type="teks" class="form-control col-md-7" name="wilkerstat" id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="before_verif">Jumlah keluarga sebelum verifikasi:</label>
                <input type="teks" class="form-control col-md-7" name="before_verif" id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="after_verif">Jumlah keluarga setelah verifikasi:</label>
                <input type="teks" class="form-control col-md-7" name="after_verif" id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="tanggal">Tanggal:</label>
                <input type="teks" readonly class="form-control-plaintext col-md-7 text-lefts" value="<?php echo date('l, d-m-Y');?>">
            </div>
            
            <input type="submit" name="proses" class="btn btn-primary" value="Simpan">
        </form>
    </div>
</section>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html> 