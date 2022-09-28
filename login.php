<?php
include "navbar.php";
include "config.php";


if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count =  mysqli_num_rows($result);

	if ($count > 0) {
		$row = mysqli_fetch_array($result);
        $role = $row['role'];

        if ($role == 'admin'){
            $_SESSION['log'] =  'Logged';
            $_SESSION['role'] = 'admin';
            header("Location: admin");
        }else{

        }


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
                            <input placeholder="Enter email" type="email" name="email" id="" required>
                
                            <label for="pass">Password</label>
                            <input placeholder="Enter password" type="password" name="pass" id="" required>

                            <button type="submit" name="login" >Login</button>
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