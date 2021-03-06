<?php
session_start();

if ($_SESSION['role'] != 'admin') {
    header("location: login.php");
}
include '../config/koneksi.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" a href="img/pws_logo.png" type="image/gif" sizes="16x16">
    <title>PT PWS</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<script>
    $(document).ready(function() {
        $(".klik").click(function() {
            const id = $(this).data('id');
            const nama = $(this).data('nama');
            $("#vid").val(id);

            $("#reset_password").click(function() {
                const kembalian = confirm("Yakin ingin mereset password " + nama + "?");
                if (kembalian == true) {
                    window.location.href = "reset_password?id=" + id;
                }
            });

        });

    });
</script>


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
                        <h6 class="collapse-header">Master Data:</h6>
                        <a class="collapse-item" href="unit.php">Unit: </a>
                        <a class="collapse-item" href="operator.php">Operator: </a>
                        <!-- <a class="collapse-item" href="helper.php">Helper: </a> -->
                        <a class="collapse-item" href="kegiatan.php">Kegiatan: </a>
                        <!-- <a class="collapse-item" href="timesheet.php">Timesheet: </a> -->
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


            <!-- Divider -->
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


                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Data Operator:</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <?php

                            $jumlah_cos = mysqli_query($conn, "SELECT COUNT(*) as id from operator");
                            $row = mysqli_fetch_array($jumlah_cos);
                            $jum = $row['id'];


                            $hmm = $jum;
                            $hal = 30;
                            $item = 10;
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $hal;
                            $kap = $hal * $hal;

                            ?>
                            <div class="row mt-3">


                                <div class="col-md-8  mt-4">
                                </div>

                                <div class="col-md-4 mt-5 ">
                                    <form class="form-inline my-2 my-lg-0" action="cari_user.php" method="get" name='cari'>
                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name='cari' required>
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>

                            </div>
                            <?php
                            if (isset($_GET['hapus'])) {
                                $pesan = addslashes($_GET['hapus']);

                                if ($pesan == "sukses") {

                                    echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                                    echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                                    echo "<p><center>Sukses Menghapus</center></p>";
                                    echo   "</div>";
                                    echo "</div>";
                                } else {

                                    echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                                    echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                                    echo "<p><center>Gagal Menghapus</center></p>";
                                    echo   "</div>";
                                    echo "</div>";
                                }
                            }
                            ?>
                            <div class="table-responsive service">
                                <table class="table table-bordered table-hover  mt-3 text-nowrap css-serial">
                                    <thead>
                                        <tr>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Aksi</th>
                                        </tr>

                                    </thead>
                                    <?php
                                    if (isset($_GET['cari'])) {
                                        $cari = mysqli_real_escape_string($conn, $_GET['cari']);
                                        $brg = mysqli_query($conn, "SELECT * FROM users WHERE username LIKE '%$cari%' OR nama LIKE '%$cari%' OR foto LIKE '%$cari%' OR role LIKE '%$cari%'");

                                        if (mysqli_num_rows($brg) > 0) {
                                            echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                                            echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
                                            echo "<p><center>Data Yang Anda Cari  Ditemukan</center></p>";
                                            echo   "</div>";
                                            echo "</div>";
                                        } else {

                                            echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                                            echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                                            echo "<p><center>$cari Yang Anda Cari Tidak Ditemukan</center></p>";
                                            echo   "</div>";
                                            echo "</div>";
                                        }
                                    } else {
                                        $brg = mysqli_query($conn, "SELECT * FROM users");
                                    }




                                    if (mysqli_num_rows($brg)) {

                                        while ($row = mysqli_fetch_array($brg)) {


                                    ?>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><img width="60px" height="60px" src="img/<?php echo $row['foto'] ?>" alt="<?php echo $row['foto'] ?>"></th>
                                                    <td><?php echo $row['nama'] ?></td>
                                                    <td><?php echo $row['username'] ?></td>
                                                    <td><?php echo $row['role'] ?></td>
                                                    <?php if (user()['id'] != $row['id']) { ?>
                                                        <td>
                                                            &nbsp;
                                                            <button type="button" class="btn btn-success klik" data-bs-toggle="modal" data-bs-target="#edit" data-id="<?= $row['id']; ?>" data-nama="<?= $row['nama']; ?>">Edit</button>
                                                            &nbsp;
                                                            <a href="hapus_user.php?id=<?php echo $row['id']; ?>">
                                                                <button type="button" class="btn btn-danger">Hapus</button>
                                                            </a> &nbsp;
                                                            <a href="detail_user.php?id=<?php echo $row['id']; ?>">
                                                                <button type="button" class="btn btn-info">Detail</button>
                                                            </a>
                                                        </td>
                                                    <?php } else { ?>
                                                        <td>
                                                            &nbsp;
                                                            <button type="button" class="btn btn-success klik" data-bs-toggle="modal" data-bs-target="#edit" data-id="<?= $row['id']; ?>" data-nama="<?= $row['nama']; ?>">Edit</button>
                                                            &nbsp;
                                                            <button onclick="alert('Tidak dapat menghapus akun milik anda');" type="button" class="btn btn-danger">Hapus</button> &nbsp;
                                                            <a href="detail_user.php?id=<?php echo $row['id']; ?>">
                                                                <button type="button" class="btn btn-info">Detail</button>
                                                            </a>
                                                        </td>
                                                    <?php } ?>
                                                </tr>

                                            </tbody>

                                    <?php }
                                    } elseif (mysqli_num_rows($brg) <= 0 and !$cari) {


                                        echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                                        echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                                        echo "<p><center>Data Anda Masih Kosong</center></p>";
                                        echo "</div>";
                                        echo "</div>";
                                    } ?>


                                </table>



                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <?php
                                        for ($x = 1; $x <= $item; $x++) {
                                        ?>
                                            <li class="page-item"><a class="page-link" href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
                                        <?php
                                        }

                                        ?>



                                    </ul>
                                </nav>
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
                        <span aria-hidden="true">??</span>
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

    <!-- Modal Edit-->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pilih Salah Satu Menu !!!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mr-3" data-bs-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-primary mr-3" data-bs-toggle="modal" data-bs-target="#ubahrole">Ubah Role</button>
                    <button id="reset_password" type="button" class="btn btn-danger mr-5">Reset Password</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Role -->
    <div class="modal fade" id="ubahrole" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Role</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <ul class="list-group list-group-flush text-center">
                            <input type="hidden" name="id" id="vid">
                            <li class="list-group-item"><input type="radio" name="role" value="admin"> Admin</li>
                            <li class="list-group-item"><input type="radio" name="role" value="pimpinan"> Pimpinan</li>
                            <li class="list-group-item"><input type="radio" name="role" value="pekerja1"> Pekerja1</li>
                            <li class="list-group-item"><input type="radio" name="role" value="Pekerja2"> Pekerja2</li>
                            <li class="list-group-item"><input type="radio" name="role" value="Pekerja3"> Pekerja3</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $role = $_POST['role'];

        $updater = mysqli_query($conn, "UPDATE users SET role = '$role' WHERE id = '$id'");

        if ($updater) {
            echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
            echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
            echo "<p><center>Data Berhasil Diubah</center></p>";
            echo   "</div>";
            echo "</div>";
        } else {
            echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
            echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
            echo "<p><center>Data Gagal Diubah</center></p>";
            echo   "</div>";
            echo "</div>";
        }
    }
    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


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