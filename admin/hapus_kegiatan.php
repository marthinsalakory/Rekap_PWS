<?php
include '../config/koneksi.php';
$delete = mysqli_query($conn, "DELETE FROM kegiatan WHERE id = '" . $_GET['id'] . "'");
session_start();
if ($delete) {
	if ($_SESSION['role'] == 'admin') {
		header('location: tab_kegiatan.php?hapus=sukses');
		exit;
	} elseif ($_SESSION['role'] == 'pekerja1') {
		header('location: tab_kegiatan1.php?hapus=sukses');
		exit;
	} elseif ($_SESSION['role'] == 'pekerja2') {
		header('location: tab_kegiatan2.php?hapus=sukses');
		exit;
	} elseif ($_SESSION['role'] == 'pekerja3') {
		header('location: tab_kegiatan3.php?hapus=sukses');
		exit;
	}
} else {
	if ($_SESSION['role'] == 'admin') {
		header('location: tab_kegiatan.php?hapus=gagal');
		exit;
	} elseif ($_SESSION['role'] == 'pekerja1') {
		header('location: tab_kegiatan1.php?hapus=gagal');
		exit;
	} elseif ($_SESSION['role'] == 'pekerja2') {
		header('location: tab_kegiatan2.php?hapus=gagal');
		exit;
	} elseif ($_SESSION['role'] == 'pekerja3') {
		header('location: tab_kegiatan3.php?hapus=gagal');
		exit;
	}
}
