<?PHP
INCLUDE("koneksi.php");
$key=$_POST['key']??'';
$sql="select * from tb_produk where id_produk like '%$key%' or namaproduk like '%$key%' or harga like '%$key%' or stok like '%$key%'order by id_produk asc";
$ambildata=mysqli_query($koneksi,$sql);
if(! $ambildata)
{
    die('Gagal ambil data : '.mysqli_error());
}
    ECHO "<div class='table-responsive'>";
    ECHO "<TABLE class='table table-bordered table-striped table-hover'><TR>";
    ECHO "<TD><B>ID_PRODUK</B></TD>";
    ECHO "<TD><B>NAMA PRODUK</B></TD>";
	ECHO "<TD><B>HARGA</B></TD>";
	ECHO "<TD><B>STOK</B></TD>";
	ECHO "<TD><B>pilihan</B></TD>";
while ($row=mysqli_fetch_array($ambildata,MYSQLI_ASSOC))
{
    ECHO "<TR><TD>".$row['id_produk'];
    ECHO "</TD><TD>".$row['namaproduk'];
    ECHO "</TD><TD>".$row['harga'];
    ECHO "</TD><TD>".$row['stok'];
    ECHO "</TD><TD><a href='editproduk.php?id_produk=$row[id_produk]'>Edit</a>&nbsp;|&nbsp;";
    ECHO "<a href='deleteproduk.php?id_produk=$row[id_produk]' onClick=\"return confirm('Yakin Data di Hapus?')\">Hapus</a></TD></TR>";

}
ECHO "</TABLE></font></div>";
?>
