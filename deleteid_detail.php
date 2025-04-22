<?PHP
	INCLUDE("koneksi.php");
	$id_detail=$_GET['id_detail'];
	mysqli_query($koneksi,"delete from tb_detailpenjualan where id_detail='$id_detail'") or die (mysqli_error());
	echo "<script>alert('User $id_detail Berhasil di Hapus');";
	echo "document.location='lappdetailpenjualan.php';</script>";
?>