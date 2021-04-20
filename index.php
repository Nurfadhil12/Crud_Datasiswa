<?php
    error_reporting(0);

    include_once("koneksi.php");

    $query="SELECT*FROM tbdatasiswa";

    $hasil = mysqli_query($conn, $query);

?>
<html>
    <head>
        <title>Data siswa</title>
        <style type="text/css">
            * {
                font-family : "Trebuchet MS";
            }

            h1 {
                text-transform: uppercase;
                color: #606de6;
            }

            table {
                border: solid 1px #DDEEEE;
                border-collapse: collapse;
                border-spacing: 0;
                flex: 1;
                margin: 10px auto 10px auto;
            }

            table thead th {
                background-color: #DDEFEF;
                border: solid 1px #DDEEEE;
                color: #336B6B;
                padding: 10px;
                text-align: left;
                text-shadow: 1px 1px 1px #fff;
                text-decoration: none;
            }

            table tbody td {
                border: solid 1px #DDEEEE;
                color: #333;
                padding: 10px;
                text-shadow: 1px 1px 1px #fff;
            }

            a {
                background-color: #606de6;
                color: #fff;
                padding: 10px;
                text-decoration: none;
                font-size: 12px;
            }
        </style>

    </head>
    <body>
        <center>
            <h1>DAFTAR SISWA</h1>

            <form action="" method="POST">
                <input type="text" name="que" placeholder="cari data">
                <input type="submit" name="cari" value="search">
            </form>     

            <center><a href="tambahsiswa.php">Tambah Data Siswa</a></center>

            <br>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
                <?php
                $no = 1;

                $query1 = $_POST['que'];
                if($query1 != ''){
                    $select = mysqli_query($conn, "SELECT * FROM tbdatasiswa WHERE nis LIKE '%".$query1."%' OR nama LIKE '%".$query1."%' OR jurusan LIKE '%".$query1."%' OR jkelamin LIKE '%".$query1."%'");
                }else{
                    $select = mysqli_query($conn, "SELECT * FROM tbdatasiswa");
                }

                if(mysqli_num_rows($select)){
                while($baris = mysqli_fetch_array($select)){
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $baris ['nis']?></td>
                <td><?php echo $baris ['nama']?></td>
                <td><?php echo $baris ['jkelamin']?></td>
                <td><?php echo $baris ['jurusan']?></td>
                <td align="center">
                    <?php echo "<img src='fotosiswa/".$baris['foto']."'style='width:200px; height:100px;'>"?>
                </td>
                <td>
                        <a href="editsiswa.php?id=<?php echo $baris['nis']?>">Edit</a>
                        <a href="hapussiswa.php?id=<?php echo $baris['nis']?>" onclick="return confirm('Apakah anda yakin menghapus data <?php echo $baris['nama'];?> ?')">Hapus</a>                    
                </td>
            </tr>
            <?php }} else{
                echo '<tr><td colspan="6">Tidak ada data</td></tr>';
            } ?>
            </tbody>
            </table>
    </body>
</html>
