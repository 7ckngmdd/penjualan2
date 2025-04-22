<?PHP
	INCLUDE("koneksi.php");
	$id_penjualan=$_GET['id_penjualan'];
	mysqli_query($koneksi,"delete from tb_penjualan where id_penjualan='$id_penjualan'") or die (mysqli_error());
	echo "<script>alert('User $id_penjualan Berhasil di Hapus');";
	echo "document.location='lappenjualan.php';</script>";
?>