<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penjualan</title>

    <!-- Logo -->
    <link rel="icon" href="img/logo.jpg" type="image/jpeg">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include ("1sidebar.php");
        ?>

        <!-- Content Wrapper Topbar-->
        <?php
        include ("2topbar.php");
        ?>        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

            <!-- Begin Page Content -->
                <div class="container-fluid">


<?PHP
	INCLUDE("koneksi.php");
	$id_penjualan=$_GET['id_penjualan'];
	$query=mysqli_query($koneksi,"select * from tb_penjualan where id_penjualan='$id_penjualan'");
	$row=mysqli_fetch_array($query);
?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Data Penjualan</h1>
                    <p class="mb-4">Berikut mengubah data</p>
                                          
            <!-- ISI FORM -->
            <form class="user" METHOD="POST">
            <table border=0 align=center HEIGHT="360">
            <tr>
                <td>id_penjualan</td>
                <td>:</td>
                <td><INPUT TYPE="text" NAME="id_penjualan" class="card form-control" disabled value="<?PHP echo $row["id_penjualan"]; ?>">
            </tr>
            <tr>
                <td>tanggalpenjualan</td>
                <td>:</td>
                <td><INPUT TYPE="text" NAME="tanggalpenjualan" class="card form-control" value="<?PHP echo $row["tanggalpenjualan"]; ?>"></td>
            </tr>
          <tr>
                <td>totalharga</td>
                <td>:</td>
                <td><INPUT TYPE="text" NAME="totalharga" class="card form-control" value="<?PHP echo $row["totalharga"]; ?>">
            </tr>
            <tr>
            <tr>
                <td>pelanggan</td>
                <td>:</td>
                <td><INPUT TYPE="text" NAME="pelanggan" class="card form-control" value="<?PHP echo $row["pelanggan"]; ?>">
            <tr>
            </tr>
            <tr>
                <td colspan=3><CENTER><BR>
                    <input type="submit" name="submit" value="Simpan" class="btn btn-google btn-user btn-block">
                    <input type="reset" name="reset" value="Hapus" class="btn btn-facebook btn-user btn-block"></CENTER><BR>
                <A HREF="3"><CENTER>Batal Edit Data</CENTER><BR><BR><BR></A>
                </td>
            </tr>
            </table>
            </form>

<?PHP
IF (isset($_POST['submit']))
{
INCLUDE("koneksi.php");

$tanggalpenjualan=$_POST['tanggalpenjualan'];
$totalharga=$_POST['totalharga'];
$pelanggan=$_POST['pelanggan'];

mysqli_query($koneksi,"update tb_penjualan set tanggalpenjualan='$tanggalpenjualan',totalharga='$totalharga',pelanggan='$pelanggan' where id_penjualan='$id_penjualan'") or die (mysqli_error());
	
echo "<script>alert('User $id_penjualan Berhasil di Edit');";
echo "document.location='lappenjualan.php';</script>";
}
?>



</div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
                include ("3footer.php");
            ?>
            </div>


        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>
</html>