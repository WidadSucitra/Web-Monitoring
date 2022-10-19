<?php
include "navbar.php";
include "config.php";

if(isset($_POST['proses'])){
    mysqli_query($conn, "insert into report set  
    nama_petugas = '$_POST[nama_petugas]',
    kode_petugas = '$_POST[kode_petugas]',
    nama_pml = '$_POST[nama_pml]',
    kecamatan = '$_POST[kecamatan]',
    kode_kecamatan = '$_POST[kode_kecamatan]',
    desa = '$_POST[desa]',
    kode_desa = '$_POST[kode_desa]',
    wilkerstat = '$_POST[wilkerstat]',
    nama_rt = '$_POST[nama_rt]',
    before_verif = '$_POST[before_verif]',
    after_verif = '$_POST[after_verif]',
    total_k = '$_POST[total_k]'");
    
    echo "<script> alert('Laporan progress anda telah tersimpan')</script>";
    
    }
?>



<section class="laporan-progres-pendataan">
    <div class="container">
        <div class="container row mb-5">
            <h2 class="judul"> <br> <span>Laporan Progress Pendataan (Kuisioner K)</span></h2>
        </div>

        <form action="" method="post" class="container form-isian-user">
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="nama_petugas">Nama Petugas PPL:</label>
                <input type="teks" class="form-control col-md-7" name="nama_petugas" required id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="kode_petugas">Kode Petugas:</label>
                <input type="teks" class="form-control col-md-7" name="kode_petugas" required id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="nama_petugas">Nama PML:</label>
                <input type="teks" class="form-control col-md-7" name="nama_pml" required id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="kecamatan">Kecamatan:</label>
                <input type="teks" class="form-control col-md-7" name="kecamatan" required id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="kode_kecamatan">Kode Kecamatan:</label>
                <input type="teks" class="form-control col-md-7" name="kode_kecamatan" required id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="desa">Desa:</label>
                <input type="teks" class="form-control col-md-7" name="desa" required id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="kode_desa">Kode Desa:</label>
                <input type="teks" class="form-control col-md-7" name="kode_desa" required id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="wilkerstat">Kode Wilkerstat:</label>
                <input type="teks" class="form-control col-md-7" name="wilkerstat" required id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="nama_rt">Nama Wilayah RT/RW/Dusun <br> contoh: RT 01 Rw 01 Lingkungan Tombolo</label>
                <input type="teks" class="form-control col-md-7" name="nama_rt" required id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="before_verif">Jumlah keluarga sebelum verifikasi:</label>
                <input type="teks" class="form-control col-md-7" name="before_verif" required id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="after_verif">Jumlah keluarga setelah verifikasi:</label>
                <input type="teks" class="form-control col-md-7" name="after_verif" required id="">
            </div>
            <div class="box form-group row">
                <label class="col-md-3 col-form-label" for="total_k">Total K yang telah data:</label>
                <input type="teks" class="form-control col-md-7" name="total_k" required id="">
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