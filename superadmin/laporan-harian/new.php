<?php


include "../includes/navbar.php";
include "../../config.php";

?>

                <!-- Begin Page Content -->
                <section class="upload_file">
                    <div class="container-fluid">
    
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="col-md judul">
                                    <h6 class="m-0 font-weight-bold text-primary">Laporan Harian</h6>
                                </div>
                                <div class="col-md judul">
                                    <a href="create.php"><h6 class="m-0 font-weight-bold text-primary text-right">+ Tambah Laporan Harian</h6></a>
                                </div>
                            </div>
                            <div class="card-body mx-3">
                                <div class="alert alert-success row" role="alert">
                                    <a href="#" class="alert-link col-md-10 nama_csv">
                                        Data Laporan 15/10/2022
                                    </a>.
                                    <button class="btn btn-light col-md-1">Unduh</button>
                                </div> 
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php
    include "../includes/footer.php";
?>