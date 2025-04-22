<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $nama   = $_POST['nama'];
    $username = $_POST['username'];
    $password  = $_POST['password'];
    $status   = 'User'; // Daftar dari sini otomatis jadi 'User'

    // Cek apakah username sudah ada
    $cek = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Username sudah terdaftar! Silakan gunakan username lain.');</script>";
    } else {
       mysqli_query($koneksi,"INSERT INTO tb_user VALUE('$nama','$username','$password','$status')") or die (mysqli_error());

        echo "<script>alert('Pendaftaran berhasil! Silakan login.');
              window.location='login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun</title>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-success">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-6 col-lg-7 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Form Pendaftaran</h1>
                        </div>
                        <form class="user" method="POST">
                            <div class="form-group">
                                <input type="text" name="id_user" class="form-control form-control-user" placeholder="ID User" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control form-control-user" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success btn-user btn-block">
                                Daftar Akun
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="login.php">Sudah punya akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap & JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
