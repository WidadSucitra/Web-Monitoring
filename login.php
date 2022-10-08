<?php
include "navbar.php";
include "config.php";

// if($_SESSION['role'] = 'superadmin' && isset($_SESSION['username'])){
//     header("Location: superadmin");
// }


if(isset($_POST['login'])) {
    $email = $_POST['email'];
    // $md5_password = $_POST['pass'];
    // $password =$_POST['pass'];

    $password = md5($_POST['pass']);

    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    // $count =  mysqli_num_rows($result);

	if ($result->num_rows > 0) {
        $row = mysqli_fetch_array($result);
        $role = $row['role'];

        // if ($row['email'] == $email && $password == $md5_password ){
            if ($role == 'superadmin'){
                $_SESSION['log'] =  'Logged';
                $_SESSION['role'] = 'superadmin';
                $_SESSION['username'] = $username;
                header("Location: superadmin/dashboard");
            } else if ($role == 'admin'){
                $_SESSION['log'] =  'Logged';
                $_SESSION['role'] = 'admin';
                $_SESSION['username'] = $username;
                header("Location: admin/dashboard");
            }else{
                // $_SESSION['log'] =  'Logged';
                // $_SESSION['role'] = 'admin';
                // header("Location: admin");
                echo "<script>alert('Anda siapa?')</script>";

            }
        // }
		// $_SESSION['username'] = $row['username'];
		// header("Location: dashboard/index.php");
	} else {
		echo "<script>alert('Woops! Email Atau Password anda Salah.')</script>";
	}
}


?>
    <section class="login-admin">
        <div class="container">
            <div class="row">
                <div class="col-md-6 bagian-kiri">
                    <h2 class="greeting">
                        Hello, <br> <span>Welcome,</span> Back!
                    </h2>
        
                    <form action="" method="post">
                        <div class="form-login-admin">
                            <label for="email">Email</label>
                            <input placeholder="Enter email" type="email" name="email" id="email" required>
                
                            <label for="pass">Password</label>
                            <input placeholder="Enter password" type="password" name="pass" id="pass" required>

                            <button class="tombol-login" type="submit" name="login" >Login</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-5 bagian-kanan">
                    <img src="img/illustration2.png" alt="">
                </div>

            </div>

        </div>
        
    </section>

    <!-- Optional JavaScript --> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>