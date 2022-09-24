<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "2141007_fadliinsani";

$koneksi = mysqli_connect($host, $user, $password, $database);

if($koneksi){
    echo "Berhasil terhubung";
}else{
    echo "Gagal terhubung";
}
?>