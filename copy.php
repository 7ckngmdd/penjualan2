<?php
// date_default_timezone_set('Asia/Jakarta');
include("koneksi.php");

$query = mysqli_query($koneksi, "SELECT id_penjualan AS maxDkt FROM tb_penjualan ORDER BY id_penjualan DESC LIMIT 1");
$row = mysqli_fetch_array($query);
$kdMax = $row['maxDkt'];
$noUrut = (int) substr($kdMax, 2, 3) + 1;
$newID = "T" . sprintf("%03d", $noUrut);
?>

<h1 class="h3 mb-2 text-gray-800">
    <center>.::TRANSAKSI <?php echo $newID ?> ::.</center>
</h1>
<hr>

<form class="user" enctype="multipart/form-data" method="POST">
    <table border=0 align=center>
        <tr>
            <td>
                <input type="text" name="key" placeholder="cari id/ nama/ alamat / notlp pelanggan" class="card form-control" size="70">
            </td>
            <br>
            <input type="submit" name="cari" value="search" class="btn btn-google btn-user btn-block">
        </tr>
</table>
</form>

<?php
include("koneksi.php");
if (isset($_POST['key'])) {
    $key = mysqli_real_escape_string($koneksi, $_POST['key']);
} else {
    $key = '';
}

$sql = "SELECT * FROM tb_pelanggan WHERE id_pelanggan LIKE '%$key%' OR namapelanggan LIKE '%$key%' OR alamat LIKE '%$key%' OR notlp LIKE '%$key%' ORDER BY id_pelanggan ASC";
$ambildata = mysqli_query($koneksi, $sql);
?>