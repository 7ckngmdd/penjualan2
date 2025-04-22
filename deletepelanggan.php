<?PHP
	INCLUDE("koneksi.php");
	$id_pelanggan=$_GET['id_pelanggan'];
	mysqli_query($koneksi,"delete from tb_pelanggan where id_pelanggan='$id_pelanggan'") or die (mysqli_error());
	echo "<script>alert('User $id_pelanggan Berhasil di Hapus');";
	echo "document.location='lappelanggan.php';</script>";
?>