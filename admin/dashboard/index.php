<?php
ob_start();

include "../../config.php";
include "../includes/navbar.php";

if(isset($_POST['submit_delete'])){
    $dashboard_id = $_POST['submit_delete'];
  
    $query = "DELETE FROM user WHERE id='$dashboard_id' LIMIT 1";
    $query_run = mysqli_query($conn,$query);
  
    if($query_run)
      {
        header('Location: index.php');
        exit(0);
    }
    else
    {
      $_SESSION['message'] = "Something went wrong";
      header('Location: index.php');
        exit(0);
      }
  }

?>

                <!-- Begin Page Content -->
                <section class="tabel-admin">
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <!-- <h1 class="h3 mb-2 text-gray-800">Laporan Progress Peserta</h1> -->
                        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                            For more information about DataTables, please visit the <a target="_blank"
                                href="https://datatables.net">official DataTables documentation</a>.</p> -->
    
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="col-md judul">
                                    <h6 class="m-0 font-weight-bold text-primary">Selamat Datang</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <h1 class="font-weight-bold text-primary">Registrasi Sosial Ekonomi 2022 <br> Kabupaten Gowa </h1>
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