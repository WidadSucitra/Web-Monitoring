<?php
// session_start();
// if($_SESSION['role'] = 'superadmin' && !isset($_SESSION['username'])){
//     header("Location: ../login.php?action=login");
// }

include "includes/navbar.php";
include "../config.php";

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Laporan Progress Peserta</h1> -->
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Admin</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Username</th>
                                            <th>Email</th>
                                            <th>Role</th>
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php
    include "includes/footer.php";
?>