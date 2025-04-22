<?PHP 
$host      ='localhost';
$username  ='root';
$password  ='';
$database  ='db_penjualan2';

$koneksi= new mysqli($host,$username,$password,$database);
if (!$koneksi){
    echo "Koneksi Gagal";

}
?>