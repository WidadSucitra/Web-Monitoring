<?php
ob_start();

include "../includes/navbar.php";
include "../../config.php";



if (isset($_POST['regis'])) {
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = ($_POST['pass']);
    $_cppassword = md5($_POST["cppassword"]);
  
    if($password == $_cppassword){
      $sql="SELECT * FROM user WHERE email='$email'";
      $result = mysqli_query($conn, $sql);
      if (!$result->num_rows > 0) {
          $sql = "INSERT INTO users (username, email, password)
                  VALUES ('$username', '$email', '$password')";
          $result = mysqli_query($conn, $sql);
          if ($result) {
              echo "<script>alert('Wow! User Registration Completed.')</script>";
              $username = "";
              $email = "";
              $_POST['password'] = "";
              $_POST['cpassword'] = "";
          } else {
              echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
      } else {
          echo "<script>alert('Woops! Email Already Exists.')</script>";
        }
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
        }
  
}


?>

<!-- Begin Page Content -->
<section class="create-admin">
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="col-md judul">
                    <h6 class="m-0 font-weight-bold text-primary">Tambahkan Admin</h6>
                </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <form action="" method="post">
                    <div class="form-daftar-admin">
                        <div class="form-group">
                            <label for="uname">Username</label>
                            <input type="text" name="uname" class="form-control" id="" placeholder="Masukkan username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="" placeholder="Masukkan email">
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" id="" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label for="uname">Role</label>
                            <input type="text" name="role" class="form-control" id="" placeholder="Masukkan role">
                            <small id="role-ket" class="form-text text-muted">gunakan huruf kecil</small>
                        </div>

                        <button class="tombol-login" type="submit" name="regis" >Submit</button>
                    </div>
                </form>
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