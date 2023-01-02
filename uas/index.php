<?php
include "buku.php";
include "jenisbuku.php";
include "novel.php";
include "ensiklopedia.php";
include "komik.php";
include "server.php";
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
<body>
<br>
<div class="container-fluid">
	<div class="row">
      <div class="card-header bg-primary text-white mb-1 text-center">
        <b>Tabel Buku di Perpustakaan Jurusan Teknik Informatika</b>
      </div>
	</div>
	<br>
	<table id="tabeldata" width="100%" class="table table-striped table-bordered">
		<thead>
			<tr>
                <th>Nama</th>
                <th>Jenis Buku</th>
                <th>Penerbit</th>
                <th>Tema</th>
				<th>Jumlah Halaman</th>
                <th>Aksi</th>
			</tr>	
		</thead>
<tbody>
<?php
$query = "SELECT * FROM buku";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['jenisbuku'] == "Novel") {
        $buku = new Novel($row['nama'], $row['jenisbuku'], $row['penerbit'], $row['hal']);
    } elseif ($row['jenisbuku'] == "Ensiklopedia") {
        $buku = new Ensiklopedia($row['nama'], $row['jenisbuku'], $row['penerbit'], $row['hal']);
    } elseif ($row['jenisbuku'] == "Komik") {
        $buku = new Komik($row['nama'], $row['jenisbuku'], $row['penerbit'], $row['hal']);
    }
?>
            <tr>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $buku->jenis_buku() ?></td>
                <td><?php echo $row['penerbit'] ?></td>
				<td><?php echo $buku->tema() ?></td>
                <td><?php echo $buku->jumlah_halaman() ?></td>
                <td class="text-center">
					<a href="delbuku.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Apakah Yakin Menghapus Buku Tersebut?')" class="btn btn-danger">Hapus Buku</a>
			    </td>
            </tr>
<?php
}
?>
</table>
</body>
<div class="col-md-10">
			<button onclick="location.href='addbuku.php'" class="btn btn-success mb-4 text-right" style="float: right;">Tambah Buku</button>
		</div>
<footer><h2><i><marquee> By : Muh. Ammarul Ramadhan Jatmiko </marquee><i></h2></footer>
</html>