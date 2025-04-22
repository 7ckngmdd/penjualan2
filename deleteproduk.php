<?PHP
	INCLUDE("koneksi.php");
	$id_produk=$_GET['id_produk'];
	mysqli_query($koneksi,"delete from tb_produk where id_produk='$id_produk'") or die (mysqli_error());
	echo "<script>alert('User $id_produk Berhasil di Hapus');";
	echo "document.location='lapproduk.php';</script>";
?>