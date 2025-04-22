<?PHP
INCLUDE("koneksi.php");
$key=$_POST['key']??'';
$sql="select * from tb_pelanggan where id_pelanggan like '%$key%' or namapelanggan like '%$key%' or alamat like '%$key%' or notlp like '%$key%'order by id_pelanggan asc";
$ambildata=mysqli_query($koneksi,$sql);
if(! $ambildata)
{
    die('Gagal ambil data : '.mysqli_error());
}
    ECHO "<div class='table-responsive'>";
    ECHO "<TABLE class='table table-bordered table-striped table-hover'><TR>";
    ECHO "<TD><B>ID_PELANGGAN</B></TD>";
    ECHO "<TD><B>NAMAPELANGGAN</B></TD>";
	ECHO "<TD><B>ALAMAT</B></TD>";
	ECHO "<TD><B>NO TLP</B></TD>";
	ECHO "<TD><B>PILIHAN</B></TD>";
while ($row=mysqli_fetch_array($ambildata,MYSQLI_ASSOC))
{
    ECHO "<TR><TD>".$row['id_pelanggan'];
    ECHO "</TD><TD>".$row['namapelanggan'];
    ECHO "</TD><TD>".$row['alamat'];
    ECHO "</TD><TD>".$row['notlp'];
    ECHO "</TD><TD><a href='editpelanggan.php?id_pelanggan=$row[id_pelanggan]'>Edit</a>&nbsp;|&nbsp;";
    ECHO "<a href='deletepelanggan.php?id_pelanggan=$row[id_pelanggan]' onClick=\"return confirm('Yakin Data di Hapus?')\">Hapus</a></TD></TR>";

}
ECHO "</TABLE></font></div>";
?>
