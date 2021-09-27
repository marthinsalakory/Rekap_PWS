<?php
include '../config/koneksi.php';
$delete = mysqli_query($conn, "DELETE FROM operator WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: tab_operator.php?hapus=sukses');
}
else{
		header('location: tab_operator.php?hapus=gagal');
}

?>
