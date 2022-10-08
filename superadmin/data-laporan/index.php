<?php


include "../includes/navbar.php";
include "../../config.php";

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
    
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="col-md judul">
                                    <h6 class="m-0 font-weight-bold text-primary">Laporan Progress</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="align-middle text-center " >Nama Petugas</th>
                                                <th class="align-middle text-center " >Kode Petugas</th>
                                                <th class="align-middle text-center " >Kecamatan</th>
                                                <th class="align-middle text-center " >Desa/Kelurahan</th>
                                                <th class="align-middle text-center " >Kode Wilkerstat</th>
                                                <th class="align-middle text-center " >Jumlah Keluarga Sebelum Verifikasi</th>
                                                <th class="align-middle text-center " >Jumlah Keluarga Hassil Verifikasi</th>
                                                <th class="align-middle text-center " >Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th class="align-middle text-center " >Nama Petugas</th>
                                                <th class="align-middle text-center " >Kode Petugas</th>
                                                <th class="align-middle text-center " >Kecamatan</th>
                                                <th class="align-middle text-center " >Desa/Kelurahan</th>
                                                <th class="align-middle text-center " >Kode Wilkerstat</th>
                                                <th class="align-middle text-center " >Jumlah Keluarga Sebelum Verifikasi</th>
                                                <th class="align-middle text-center " >Jumlah Keluarga Hassil Verifikasi</th>
                                                <th class="align-middle text-center " >Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
    
                                            <?php
                                                $query = "SELECT * FROM report ORDER BY id ASC";
                                                $result = mysqli_query($conn, $query);
    
                                                if(!$result) {
                                                    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_errno($conn));
                                                }
    
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                                        
                                            <tr>
                                                <td><?php echo $row['nama_petugas']; ?></td>
                                                <td><?php echo $row['kode_petugas']; ?></td>
                                                <td><?php echo $row['kecamatan']; ?></td>
                                                <td><?php echo $row['desa']; ?></td>
                                                <td><?php echo $row['wilkerstat']; ?></td>
                                                <td><?php echo $row['before_verif']; ?></td>
                                                <td><?php echo $row['after_verif']; ?></td>
                                                <td class="text-center align-middle">
                                                    <a href="edit.php?id=<?= $row['id'] ?>">
                                                        <button  class="ikon_edit">
                                                            <i class="fas fa-fw fa-solid fa-pen"></i>
                                                        </button>
                                                    </a>
                                                    <form method="POST">
                                                    <button class="ikon_delete" type="submit" name="submit_delete" value="<?= $row['id'] ?>" onclick="return confirm('Anda yakin ingin hapus data ini?')">
                                                        <i class="fas fa-fw fa-solid fa-trash "></i>
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