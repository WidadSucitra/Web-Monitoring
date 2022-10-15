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
                                <div class="row justify-content-center">
                                    <div class="col-md-8 mt-5">
                                        <canvas id="myChart" width="250" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
            <?php

                if(isset($_POST['filter'])){
                    $desa = $_POST['desa'];
                    $tanggal = $_POST['tanggal'];

                    $sql = "SELECT * FROM report WHERE desa='$desa' AND tanggal='$tanggal' ";
                    $result = mysqli_query($conn,$sql);

                    if(!$result) {
                        die("Query Error : ".mysqli_errno($conn)." - ".mysqli_errno($conn));
                    }

                    // $array=array();
                    while ($data = mysqli_fetch_assoc($result)) {
                        // $array[]=$data;
                        $isi_labels[] = $data["nama_petugas"];
                        $isi_data1[] =$data["before_verif"];
                        $isi_data2[] =$data["after_verif"];
                    }

                    // echo json_encode($array);

                    // echo ($data);
                }
            ?>



            <script>
                const nama_petugas = <?php echo json_encode($isi_labels) ?>;
                const before_verif = <?php echo json_encode($isi_data1) ?>;
                const after_verif = <?php echo json_encode($isi_data2) ?>;
                // console.log(nama_petugas);
                // console.log(before_verif);
                // console.log(after_verif);

                
                    var canvasElement = document.getElementById("myChart");

                    var myChart = new Chart(canvasElement,{
                        type: "bar",
                        data: {
                            labels: nama_petugas,
                            datasets:[
                                {
                                    label: "Sebelum Verifikasi KK",
                                    data: before_verif,
                                    backgroundColor: ["#609773"]
                                },
                                {
                                    label: "Setelah Verifikasi KK",
                                    data: after_verif,
                                    backgroundColor: ["yellow"]
                                },
                            ],
                        },
                    });
            </script>
            

<?php
    include "../includes/footer.php";
?>