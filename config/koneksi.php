<?php

// Ini Adalah Code Menghubungkan Dengan Database

$conn = mysqli_connect('localhost', 'root', '', 'rekam_pws') or die($conn);

function user()
{
  global $conn;
  $sss = mysqli_query($conn, "select * from users where id = '" . $_SESSION['user'] . "'");
  return mysqli_fetch_array($sss);
}
