<?php
include '../config/koneksi.php';
$delete = mysqli_query($conn, "DELETE FROM users WHERE id = '" . $_GET['id'] . "'");

if ($delete) {
    header('location: tab_pengguna.php?hapus=sukses');
} else {
    header('location: tab_pengguna.php?hapus=gagal');
}
