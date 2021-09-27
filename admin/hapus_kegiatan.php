<?php
include '../config/koneksi.php';
$delete = mysqli_query($conn, "DELETE FROM kegiatan WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: tab_kegiatan.php?hapus=sukses');
}
else{
		header('location: tab_kegiatan.php?hapus=gagal');
}
