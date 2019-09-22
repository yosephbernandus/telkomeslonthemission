<?php
include 'header-public.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $kueri = "SELECT * FROM user WHERE email='$email'";
    $hasil = mysqli_query($koneksi, $kueri);

    if ($hasil) {
        
        $data = mysqli_fetch_array($hasil);
        $verifikasi = password_verify($password, $data['password']);

        if ($verifikasi) {

            $_SESSION['user_id'] = $data['id'];
            $_SESSION['user_nama'] = $data['username'];

            header('Location: index.php?'); // loncat ke index.php bila berhasil. Ubah index.php sesuai kebutuhan Anda
        } else {
            $error = 'Error. email atau password salah';
        }
    } else {
        $error = 'Error. email atau password salah';
    }
}
?>

  <div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <?php if (isset($error)) { ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php 
                } ?>
                    <form class="form-signin" method="POST">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputEmail">Email address</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <label for="inputPassword">Password</label>
                    </div>


                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                    <hr class="my-4">
                    <a class="btn btn-lg btn-success btn-block text-uppercase" href="signup.php">Sign Up</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>



<?php 
include 'footer-public.php';
?>
