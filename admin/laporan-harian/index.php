<?php
include "../includes/navbar.php";
include "../../config.php";

$sql = "SELECT * FROM laporan_harian";
$result = mysqli_query($conn, $sql);
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
                            </div>
                            
                        <?php foreach($result as $key=>$value){ ?>
                            <div class="card-body mx-3">
                                <div class="alert alert-success row" role="alert">
                                    <p href="#" class="alert-link col-md-10 nama_csv">
                                        Laporan Harian <?php echo $value['tanggal']; ?>
                                    </p>
                                    <td><a href="download.php?file=<?php echo $value['berkas']; ?>">Download File</a></td>
                                    <!-- <Td><A Href="DownloadFile.csv?Url=<?//Php Echo $value['berkas']; ?>">Download</A></Td> -->
                                </div> 
                            </div>
                        <?php } ?>
                        </div>
                        
                    </div>
                </section>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php
    include "../includes/footer.php";
?>

    

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html> 