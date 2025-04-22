<?PHP
INCLUDE("koneksi.php");
$key=$_POST['key']??"";
$sql="select * from tb_penjualan where id_penjualan like '%$key%' or tanggalpenjualan like '%$key%' or totalharga like '%$key%' or pelanggan like '%$key%'order by id_penjualan asc";
$ambildata=mysqli_query($koneksi,$sql);
if(! $ambildata)
{
    die('Gagal ambil data : '.mysqli_error());
}
    ECHO "<div class='table-responsive'>";
    ECHO "<TABLE class='table table-bordered table-striped table-hover'><TR>";
    ECHO "<TD><B>ID_PENJUALAN</B></TD>";
    ECHO "<TD><B>TANGGALPENJUALAN</B></TD>";
	ECHO "<TD><B>TOTALHARGA</B></TD>";
	ECHO "<TD><B>PELANGGAN</B></TD>";
	ECHO "<TD><B>PILIHAN</B></TD>";
while ($row=mysqli_fetch_array($ambildata,MYSQLI_ASSOC))
{
    ECHO "<TR><TD>".$row['id_penjualan'];
    ECHO "</TD><TD>".$row['tanggalpenjualan'];
    ECHO "</TD><TD>".$row['totalharga'];
    ECHO "</TD><TD>".$row['pelanggan'];
    ECHO "</TD><TD><a href='editid_penjualan.php?id_penjualan=$row[id_penjualan]'>Edit</a>&nbsp;|&nbsp;";
    ECHO "<a href='deleteid_penjualan.php?id_penjualan=$row[id_penjualan]' onClick=\"return confirm('Yakin Data di Hapus?')\">Hapus</a></TD></TR>";

}
ECHO "</TABLE></font></div>";
?>
