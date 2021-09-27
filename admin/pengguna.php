<?php
session_start();

if ($_SESSION['role'] != 'admin') {
    header("location: login.php");
}
include '../config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" a href="img/pws_logo.png" type="image/gif" sizes="16x16">
    <title>PT PWS</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>



<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <input type="image" src="img/pws_logo.png" alt="Submit" width="48" height="48">
                <div class="sidebar-brand-text mx-3">PT PWS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-diagnoses"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Master Data</h6>
                        <a class="collapse-item" href="unit.php">Unit: </a>
                        <a class="collapse-item" href="operator.php">Operator: </a>
                        <!-- <a class="collapse-item" href="helper.php">Helper: </a> -->
                        <a class="collapse-item" href="kegiatan.php">Kegiatan: </a>
                        <!-- <a class="collapse-item" href="timesheet.php">Timesheet: </a> -->
                        <a class="collapse-item" href="pengguna.php">Pengguna: </a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <!--       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-list"></i>
          <span>Rekam Operator</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tambah Akun:</h6>
            <a class="collapse-item" href="register.php">Tambah Akun Operator</a>
          </div>
        </div>
      </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Table Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Table</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="tab_unit.php">Table Unit</a>
                        <a class="collapse-item" href="tab_operator.php">Tabel Operator</a>
                        <a class="collapse-item" href="tab_kegiatan.php">Table Kegiatan</a>
                        <!-- <a class="collapse-item" href="tab_timesheet.php">Table Timesheet</a> -->
                        <a class="collapse-item" href="tab_laporan_perbulan.php">Table Laporan Akhir</a>
                        <!-- <a class="collapse-item" href="tab_timesheet.php">Table Timesheet</a> -->
                        <a class="collapse-item" href="tab_pengguna.php">Table Pengguna</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <?php
                        $rrr = user();
                        ?>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $rrr['nama']; ?></span>
                                <img class="img-profile rounded-circle" src=" img/<?php echo $rrr['foto'] ?>" alt="profile">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="setting.php?id=<?php echo $rrr['id']; ?>">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="change.php?id=<?php echo $rrr['id']; ?>">
                                    <i class="fas fa-eraser fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ganti Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">



                    <div class="row mt-5">
                        <div class="col-xl-1">
                        </div>

                        <div class="col-xl-12 col-lg-8">
                            <div class="card shadow mb-4">

                                <!-- Card Body -->
                                <div class="card-body">
                                    <center>
                                        <h5 class="mb-5"><b>Input Data Pengguna</b></h5>
                                    </center>

                                    <form action='' name='submit' method='post'>


                                        <div class="row mt-3">
                                            <div class="col-sm-12">
                                                <label>Nama:</label>
                                                <input class="form-control form-control-sm" type="text" placeholder="Nama" aria-label=".form-control-sm example" id="nama" name='nama' required>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-sm-12">
                                                <label>Username:</label>
                                                <input class="form-control form-control-sm" type="text" placeholder="Username" aria-label=".form-control-sm example" id="username" name='username' required>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-sm-12">
                                                <label>Password:</label>
                                                <input class="form-control form-control-sm" type="text" placeholder="Password" aria-label=".form-control-sm example" id="password" name='password' required>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-sm-12" name="operator">
                                                <label>Role:</label><br>
                                                <select name="role">
                                                    <option value="">Role</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="pimpinan">Pimpinan</option>
                                                    <option value="pekerja1">Pekerja1</option>
                                                    <option value="pekerja2">Pekerja2</option>
                                                    <option value="pekerja3">Pekerja3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-info btn-lg btn-block mt-4" name='submit'>Submit</button>

                                    </form>
                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $nama = htmlspecialchars($_POST['nama']);
                                        $username = htmlspecialchars($_POST['username']);
                                        $password = md5(htmlspecialchars($_POST['password']));
                                        $role = htmlspecialchars($_POST['role']);
                                        $foto = "default.png";



                                        $insert = mysqli_query($conn, "INSERT INTO users VALUES (
                                            '',
                                            '$username',
                                            '$password',
                                            '$nama',
                                            '$foto',
                                            '$role'
                                                )");

                                        if ($insert) {
                                            echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
                                            echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
                                            echo "<p><center>Data Sudah Masuk</center></p>";
                                            echo   "</div>";
                                            echo "</div>";
                                        } else {
                                            echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
                                            echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                                            echo "<p><center>Data Gagal Masuk</center></p>";
                                            echo   "</div>";
                                            echo "</div>";
                                        }
                                    }



                                    ?>



                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <a href="https://www.instagram.com/niningmr/" style="text-decoration: none;"><b>Nining Meyressa</b></a></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Mau Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih Logout Jika Anda Ingin Keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>