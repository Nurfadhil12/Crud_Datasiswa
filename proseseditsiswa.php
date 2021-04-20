<?php
    include_once("koneksi.php");

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jkelamin = $_POST['jkelamin'];
    $jurusan = $_POST['jurusan'];
    $photo = $_POST['foto'];

    $query="UPDATE tbdatasiswa SET nis='$nis', nama='$nama', jkelamin='$jkelamin', jurusan='$jurusan', foto='$photo' WHERE nis=$nis";

    $hasil=mysqli_query($conn, $query);

    if($hasil){
        header('Location:index.php');
    }else{
        echo "update data gagal";
    }
?>