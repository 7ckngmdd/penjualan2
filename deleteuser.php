<?PHP
	INCLUDE("koneksi.php");
	$nama=$_GET['nama'];
	mysqli_query($koneksi,"delete from tb_user where nama='$nama'") or die (mysqli_error());
	echo "<script>alert('User $nama Berhasil di Hapus');";
	echo "document.location='lapuser.php';</script>";
?>