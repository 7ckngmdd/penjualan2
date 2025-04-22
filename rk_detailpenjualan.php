<?PHP
INCLUDE("koneksi.php");
$key=$_POST['key']??'';
$sql="select * from tb_detailpenjualan where id_detail like '%$key%' or id_penjualan like '%$key%' or id_produk like '%$key%' or jumlahproduk like '%$key' or subtotal like '%$key%'order by id_detail asc";
$ambildata=mysqli_query($koneksi,$sql);
if(! $ambildata)
{
    die('Gagal ambil data : '.mysqli_error());
}
    ECHO "<div class='table-responsive'>";
    ECHO "<TABLE class='table table-bordered table-striped table-hover'><TR>";
    ECHO "<TD><B>ID_DETAIL</B></TD>";
    ECHO "<TD><B>ID_PENJUALAN</B></TD>";
	ECHO "<TD><B>ID_PRODUK</B></TD>";
	ECHO "<TD><B>JUMLAHPRODUK</B></TD>";
	ECHO "<TD><B>SUBTOTAL</B></TD>";
	ECHO "<TD><B>PILIHAN</B></TD>";
while ($row=mysqli_fetch_array($ambildata,MYSQLI_ASSOC))
{
    ECHO "<TR><TD>".$row['id_detail'];
    ECHO "</TD><TD>".$row['id_penjualan'];
    ECHO "</TD><TD>".$row['id_produk'];
    ECHO "</TD><TD>".$row['jumlahproduk'];
	ECHO "</TD><TD>".$row['subtotal'];
    ECHO "</TD><TD><a href='editid_detail.php?id_detail=$row[id_detail]'>Edit</a>&nbsp;|&nbsp;";
    ECHO "<a href='deleteid_detail.php?id_detail=$row[id_detail]' onClick=\"return confirm('Yakin Data di Hapus?')\">Hapus</a></TD></TR>";

}
ECHO "</TABLE></font></div>";
?>