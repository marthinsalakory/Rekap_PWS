<?php
include '../config/koneksi.php';
$user=$_POST['username2'];
$lama=md5($_POST['pertama2']);
$baru=$_POST['kedua2'];
$ulang=$_POST['ketiga2'];

$cek=mysqli_query($conn, "select * from users where password2='$lama' and username2='$user'");
if(mysqli_num_rows($cek)==1){
	if($baru==$ulang){
		$b = md5($baru);
		mysqli_query($conn, "update users set password2='$b' where username2='$user'");
		header("location:change2.php?pesan=oke");
	}else{
		header("location:change2.php?pesan=tdksama");
	}
}else{
	header("location:change2.php?pesan=gagal");
}
