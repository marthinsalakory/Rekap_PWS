<?php
include '../config/koneksi.php';
$user = $_POST['username'];
$lama = md5($_POST['pertama']);
$baru = $_POST['kedua'];
$ulang = $_POST['ketiga'];

$cek = mysqli_query($conn, "select * from users where password4='$lama' and username4='$user'");
if (mysqli_num_rows($cek) == 1) {
	if ($baru == $ulang) {
		$b = md5($baru);
		mysqli_query($conn, "update users set password4='$b' where username4='$user'");
		header("location:change5.php?pesan=oke");
	} else {
		header("location:change5.php?pesan=tdksama");
	}
} else {
	header("location:change5.php?pesan=gagal");
}
