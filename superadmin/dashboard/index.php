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
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar Admin</h6>
                                </div>
                                <div class="col-md judul">
                                    <a href="create.php"><h6 class="m-0 font-weight-bold text-primary text-right">+ Tambah Admin</h6></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
    
                                            <?php
                                                $query = "SELECT * FROM user ORDER BY id ASC";
                                                $result = mysqli_query($conn, $query);
    
                                                if(!$result) {
                                                    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_errno($conn));
                                                }
    
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                                        
                                            <tr>
                                                <td><?php echo $row['username']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['role']; ?></td>
                                                <td class="btn-index">
                                                    <form method="POST">
                                                    <button class="ikon_delete" type="submit" name="submit_delete" value="<?= $row['id'] ?>" onclick="return confirm('Anda yakin ingin hapus data ini?')">
                                                        <i class="fas fa-fw fa-solid fa-trash"></i>
                                                    </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            
                                            <?php
                                            }
                                            ?>
                                           
                                        </tbody>
                                    </table>
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