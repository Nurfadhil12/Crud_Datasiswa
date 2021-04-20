<?php
    include_once("koneksi.php");
    $id=$_GET['id'];
    $query="DELETE FROM tbdatasiswa WHERE nis=".$id;
     
    $hasil=mysqli_query($conn, $query);

    if($hasil){
        header('Location:index.php');
    }else{
        echo "Hapus";
    }

?>