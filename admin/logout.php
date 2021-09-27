<?php
session_start();
session_destroy();
unset($_SESSION['role']);
unset($_SESSION['user']);
header("location:landing_page.php");
