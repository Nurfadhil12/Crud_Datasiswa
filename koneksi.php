<?php
$conn = mysqli_connect("localhost", "root", "", "dbsiswa");

if(! $conn){
    echo "koneksi gagal";
    die();
}/*else{
    echo"koneksi berhasil";
}*/
?>