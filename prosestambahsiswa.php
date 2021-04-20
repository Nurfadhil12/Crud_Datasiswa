<?php
    include_once("koneksi.php");

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jkelamin = $_POST['jkelamin'];
    $jurusan = $_POST['jurusan'];
    $photo = $_POST['foto'];

    $query="INSERT INTO tbdatasiswa (nis, nama, jkelamin, jurusan, foto) VALUE ('$nis', '$nama', '$jkelamin', '$jurusan', '$photo')";

    $hasil=mysqli_query($conn, $query);

    if($hasil){
        header('Location:index.php');
    }else{
        echo "input data salah";
    }
?>