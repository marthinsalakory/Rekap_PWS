<?php
include '../config/koneksi.php';
$delete = mysqli_query($conn, "DELETE FROM unit WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: tab_unit.php?hapus=sukses');
}
else{
	echo "Gagal";
}

?>
