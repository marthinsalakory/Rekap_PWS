<?php
include '../config/koneksi.php';
$delete = mysqli_query($conn, "DELETE FROM timesheet WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: tab_timesheet.php?hapus=sukses');
}
else{
		header('location: tab_timesheet.php?hapus=gagal');
}

?>
