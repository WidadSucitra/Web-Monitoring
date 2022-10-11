<?php


include "../includes/navbar.php";
include "../../config.php";

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
                                    <label for="wilkerstat">Wilkerstat</label>
                                    <select name="wilkerstat" id="" class="form-control">
                                            <option value="">--select wilkerstat--</option>
                                            <?php
                                                $query = "SELECT DISTINCT wilkerstat FROM report";
                                                $result = mysqli_query($conn, $query);
    
                                                if(!$result) {
                                                    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_errno($conn));
                                                }
    
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <option value="<?php echo $row['wilkerstat']; ?>"> <?php echo $row['wilkerstat']; ?> </option>
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