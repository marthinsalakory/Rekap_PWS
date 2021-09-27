<?php
include '../config/koneksi.php';
$user = $_POST['username1'];
$lama = md5($_POST['pertama1']);
$baru = $_POST['kedua1'];
$ulang = $_POST['ketiga1'];

$cek = mysqli_query($conn, "select * from users where password1='$lama' and username='$user'");
if (mysqli_num_rows($cek) == 1) {
	if ($baru == $ulang) {
		$b = md5($baru);
		mysqli_query($conn, "update users set password1='$b' where username1='$user'");
		header("location:change1.php?pesan=oke");
	} else {
		header("location:change1.php?pesan=tdksama");
	}
} else {
	header("location:change1.php?pesan=gagal");
}
