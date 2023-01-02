<?php
include "server.php";

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $jenisbuku = $_POST['jenisbuku'];
  $penerbit = $_POST['penerbit'];
  $hal = $_POST['hal'];

  $query = "INSERT INTO buku (nama, jenisbuku, penerbit, hal) VALUES ('$nama', '$jenisbuku', '$penerbit', '$hal')";
  mysqli_query($conn, $query);
  
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>List Buku di Perpus</title>
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <style>
      .container-fluid {
        width: 1450px;
        background-color: #e0eeee;
        margin: 40px auto;
        padding: 15px;
        border: 4px solid #000000;
        border-radius: 20px;
        box-sizing: border-box;
        position: relative;
      }
      table thead {
        background-color: #F5F5F5;
      }
      .btn {
        margin: 2px;
      }
    </style>
</head>
<br>
<div class="container-fluid">
	<div class="row">
      <div class="card-header bg-primary text-white mb-1 text-center">
        <b>Tambah Buku</b>
      </div>
		<div class="col-md-6"></div>
	</div>
	<br>
    <form action="" method="post">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
	            <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama">
	            </div>
	    </div>
        <br>
        <div class="form-group row">
            <label for="jenisbuku" class="col-sm-2 col-form-label">Jenis</label>
	            <div class="col-sm-10">
                    <select class="form-control" id="jenisbuku" name="jenisbuku">
				        <option value="Novel">Novel</option>
				        <option value="Ensiklopedia">Ensiklopedia</option>
                        <option value="Komik">Komik</option>
		            </select>
	            </div>
	    </div>
        <br>
        <div class="form-group row">
            <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
	            <div class="col-sm-10">
                    <input type="text" class="form-control" id="penerbit" name="penerbit">
	            </div>
	    </div>
        <br>
        <div class="form-group row">
            <label for="hal" class="col-sm-2 col-form-label">Jumlah Halaman</label>
	            <div class="col-sm-10">
                    <input type="text" class="form-control" id="hal" name="hal">
	            </div>
	    </div>
        <br>
        <div class="form-group row">
	        <div class="col-sm-10">
	            <button type="submit" name="submit" class="btn btn-success mb-4 text-right" style="float: left;">Simpan</button>
                <a href="index.php" type="button" class="btn btn-danger btn-sm">Batal</a>
            </div>
        </div>
    </form>
<footer><h2><i><marquee> By : Muh. Ammarul Ramadhan Jatmiko </marquee><i></h2></footer>
</div>
