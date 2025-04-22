<?PHP
INCLUDE("koneksi.php");
$key=$_POST['key']??'';
$sql="select * from tb_user where nama like '%$key%' or username like '%$key%' or password like '%$key%' or status like '%$key%' order by nama asc";
$ambildata=mysqli_query($koneksi,$sql);
if(! $ambildata)
{
    die('Gagal ambil data : '.mysqli_error());
}
    ECHO "<div class='table-responsive'>";
    ECHO "<TABLE class='table table-bordered table-striped table-hover'><TR>";
    ECHO "<TD><B>NAMA</B></TD>";
    ECHO "<TD><B>USERNAME</B></TD>";
    ECHO "<TD><B>PASSWORD</B></TD>";
    ECHO "<TD><B>STATUS<B></TD>";
	ECHO "<TD><B>PILIHAN</B></TD>";
while ($row=mysqli_fetch_array($ambildata,MYSQLI_ASSOC))
{
    ECHO "<TR><TD>".$row['nama'];
    ECHO "</TD><TD>".$row['username'];
    ECHO "</TD><TD>".$row['password'];
	ECHO "</TD><TD>".$row['status'];
    ECHO "</TD><TD><a href='edituser.php?nama=$row[nama]'>Edit</a>&nbsp;|&nbsp;";
    ECHO "<a href='deleteuser.php?nama=$row[nama]' onClick=\"return confirm('Yakin Data di Hapus?')\">Hapus</a></TD></TR>";

}
ECHO "</TABLE></font></div>";
