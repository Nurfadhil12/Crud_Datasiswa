<html>
    <head>
        <title>Tambah Siswa</title>
        <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: #606de6;
      }
    button {
          background-color: #606de6;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: #606de6;
    }
    /* Customize the label (the container) */
    .container {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 15px;
      font-color: salmon;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    /* Hide the browser's default radio button */
    .container input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }

    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>

    </head>
    <body>
	<center><h1>Tambah Data Siswa</h1></center>
            <form method="post" action="prosestambahsiswa.php">
            <section class="base">
				<div>
					<table>NIS</table>
					<input type="number" name="nis" placeholder="Masukkan NIS Siswa">
				</div>
				<br>
				<div>
					<table>Nama Siswa</table>
					<input type="text" name="nama" placeholder="Masukkan Nama Siswa">
				</div>
				<br>
				<div>
					<table>Jenis Kelamin</table>
                    <input type="text" name="jkelamin" placeholder="Masukkan jenis kelamin ">
				</div>
				<br>
				<div>
					<table>Jurusan</table>
                    <input type="text" name="jurusan" placeholder="Masukkan jurusan">
				</div>
				<br>
				<div>
					<td>Foto</td>
					<input type="file"  name="foto">
				</div>	
				<div>
					<button type="submit">Simpan</button>
				</div>
			</section>            
            </form>
    </body>
</html>