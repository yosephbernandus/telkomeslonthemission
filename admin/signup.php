<?php
include 'header-public.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $k_password = mysqli_real_escape_string($koneksi, $_POST['k_password']);

    if ($password == $k_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $kueri = "INSERT INTO user(email, username,password) 
                    VALUES('$email', '$username','$hashed_password')";
        $hasil = mysqli_query($koneksi, $kueri);

        if ($hasil) {
            header('Location: login.php'); // loncat ke login.php bila berhasil
        }

    } else {
        $error = 'Kesalahan. Passoword tidak sama.';
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign Up</h5>
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
                        <input type="text" id="inputName" name="username" class="form-control" placeholder="Username" required autofocus>
                        <label for="inputName">Username</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <label for="inputPassword">Password</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" name="k_password" id="k_passowrd" class="form-control" placeholder="Retype Password" required>
                        <label for="k_passowrd">Retype Password</label>
                    </div>


                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign Up</button>
                    <hr class="my-4">
                    <a class="btn btn-lg btn-success btn-block text-uppercase" href="login.php">Sign In</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
include 'footer-public.php';
?>