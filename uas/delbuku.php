<?php  
include "server.php";

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR : MISSING ID. ');
$delete = mysqli_query($conn,"DELETE FROM buku 
								WHERE id='$id'");
if ($delete) {
	echo "<script>location.href='index.php';</script>";
}else {
	echo "<script>alert('Tidak Berhasil Menghapus Data');location.href='index.php';</script>";
}
?>