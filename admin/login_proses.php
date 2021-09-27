<?php
$username   = addslashes($_POST['username']);
$pass       = md5($_POST['password']);

include '../config/koneksi.php';

$user = mysqli_query($conn, "select * from users where username='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if ($chek > 0) {
    session_start();
    $row = mysqli_fetch_array($user);
    if ($row['role'] == 'admin') {
        $_SESSION['role'] = $row['role'];
        $_SESSION['user'] = $row['id'];
        header("location: index.php");
        exit;
    } elseif ($row['role'] == 'pimpinan') {
        $_SESSION['role'] = $row['role'];
        $_SESSION['user'] = $row['id'];
        header("location: index3.php");
        exit;
    } elseif ($row['role'] == 'pekerja1') {
        $_SESSION['role'] = $row['role'];
        $_SESSION['user'] = $row['id'];
        header("location: index2.php");
        exit;
    } elseif ($row['role'] == 'pekerja2') {
        $_SESSION['role'] = $row['role'];
        $_SESSION['user'] = $row['id'];
        header("location: index4.php");
        exit;
    } elseif ($row['role'] == 'pekerja3') {
        $_SESSION['role'] = $row['role'];
        $_SESSION['user'] = $row['id'];
        header("location: index5.php");
        exit;
    }
}

header("location: login.php?pesan=gagal");
exit;
