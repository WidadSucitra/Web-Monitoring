<?php


include "../includes/navbar.php";
include "../../config.php";

if(isset($_POST['submit_delete'])){
    $dashboard_id = $_POST['submit_delete'];
  
    $query = "DELETE FROM report WHERE id='$dashboard_id' LIMIT 1";
    $query_run = mysqli_query($conn,$query);
  
    if($query_run)
      {
        $_SESSION['message'] = "Something went wrong";
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
                            <form class="container" action="" method="post">
                                <div class="form-group col-md-6 mt-3">
                                    <label for="desa">Desa</label>
                                    <select name="desa" id="" class="form-control">
                                            <option value="">--select desa--</option>
                                            <?php
                                                $query = "SELECT DISTINCT desa FROM report";
                                                $result = mysqli_query($conn, $query);
    
                                                if(!$result) {
                                                    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_errno($conn));
                                                }
    
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <option value="<?php echo $row['desa']; ?>"> <?php echo $row['desa']; ?> </option>
                                            <?php
                                            }
                                            ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="" required>
                                </div>
                                <button class="ml-3 btn btn-primary" type="submit" name="filter" >Filter</button>
                            </form>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="align-middle text-center " >Nama Petugas PPL</th>
                                                <th class="align-middle text-center " >Kode Petugas</th>
                                                <th class="align-middle text-center " >Nama PML</th>
                                                <th class="align-middle text-center " >Kecamatan</th>
                                                <th class="align-middle text-center " >Desa/Kelurahan</th>
                                                <th class="align-middle text-center " >Kode Wilkerstat</th>
                                                <th class="align-middle text-center " >Nama RT</th>
                                                <th class="align-middle text-center " >Jumlah Keluarga Sebelum Verifikasi</th>
                                                <th class="align-middle text-center " >Jumlah Keluarga Hassil Verifikasi</th>
                                                <th class="align-middle text-center " >Total K yang telah didata</th>
                                                <th class="align-middle text-center " >Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th class="align-middle text-center " >Nama Petugas PPL</th>
                                                <th class="align-middle text-center " >Kode Petugas</th>
                                                <th class="align-middle text-center " >Nama PML</th>
                                                <th class="align-middle text-center " >Kecamatan</th>
                                                <th class="align-middle text-center " >Desa/Kelurahan</th>
                                                <th class="align-middle text-center " >Kode Wilkerstat</th>
                                                <th class="align-middle text-center " >Nama RT</th>
                                                <th class="align-middle text-center " >Jumlah Keluarga Sebelum Verifikasi</th>
                                                <th class="align-middle text-center " >Jumlah Keluarga Hasil Verifikasi</th>
                                                <th class="align-middle text-center " >Totall K yang telah didata</th>
                                                <th class="align-middle text-center " >Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
    
                                            <?php
                                            if(isset($_POST['filter'])){
                                                $desa = $_POST['desa'];
                                                $tanggal = $_POST['tanggal'];

                                                // echo ($tanggal);

                                                // $date= "'".date('Y-m-d', strtotime(str_replace('-', '/', $tanggal)));

                                                // $date= date_format($tanggal,"Y/m/d");

                                                // echo ($date);
                                            

                                                $sql = "SELECT * FROM report WHERE desa='$desa' AND tanggal='$tanggal' ";
                                                $result = mysqli_query($conn,$sql);

    
                                                // $query = "SELECT * FROM report ORDER BY id ASC";
                                                // $result = mysqli_query($conn, $query);
    
                                                if(!$result) {
                                                    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_errno($conn));
                                                }
    
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                                        
                                            <tr>
                                                <td><?php echo $row['nama_petugas']; ?></td>
                                                <td><?php echo $row['kode_petugas']; ?></td>
                                                <td><?php echo $row['nama_pml']; ?></td>
                                                <td><?php echo $row['kecamatan']; ?></td>
                                                <td><?php echo $row['desa']; ?></td>
                                                <td><?php echo $row['wilkerstat']; ?></td>
                                                <td><?php echo $row['nama_rt']; ?></td>
                                                <td><?php echo $row['before_verif']; ?></td>
                                                <td><?php echo $row['after_verif']; ?></td>
                                                <td><?php echo $row['total_k'];?></td>
                                                <td class="text-center align-middle">
                                                    <!-- <a href="edit.php?id=<?= $row['id'] ?>">
                                                        <button  class="ikon_edit">
                                                            <i class="fas fa-fw fa-solid fa-pen"></i>
                                                        </button>
                                                    </a> -->
                                                    <form method="POST">
                                                    <button class="ikon_delete" type="submit" name="submit_delete" value="<?= $row['id'] ?>" onclick="return confirm('Anda yakin ingin hapus data ini?')">
                                                        <i class="fas fa-fw fa-solid fa-trash "></i>
                                                    </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            
                                            <?php
                                            }
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