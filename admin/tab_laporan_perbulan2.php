<?php
session_start();

if ($_SESSION['role'] != 'pimpinan') {
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
  <link rel="icon" a href="img/pws_logo.png" type="image/gif" sizes="16x16">
  <title>PT PWS</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">

  <div id="wrapper">

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
        <a class="nav-link" href="index3.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <!--       <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <!--       <div class="sidebar-heading">
        Master Data
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <!--       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-diagnoses"></i>
          <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Master Data:</h6>

            <a class="collapse-item" href="kegiatan1.php">Kegiatan</a>
            
          </div>
        </div>
      </li> -->

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
            <!--            <a class="collapse-item" href="tab_unit2.php">Table Unit</a>
           <a class="collapse-item" href="tab_operator2.php">Tabel Operator</a>
           <a class="collapse-item" href="tab_kegiatan2.php">Table Kegiatan</a> -->
            <!-- <a class="collapse-item" href="tab_timesheet2.php">Table Timesheet</a> -->
            <a class="collapse-item" href="tab_laporan_perbulan2.php">Table Laporan Akhir</a>
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

    <div id="content-wrapper" class="d-flex flex-column">


      <div id="content">

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
                <a class="dropdown-item" href="profile2.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="setting2.php?id=<?php echo $rrr['id']; ?>">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="change2.php?id=<?php echo $rrr['id']; ?>">
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
                    <h5 class="mb-5"><b>LAPORAN PEMAKAIAN ALAT BERAT RENTAL</b></h5>
                  </center>



                  <form method="get" action="">




                    <br />


                    <div class="row mt-3">
                      <!--               <div class="col-sm-4">
            <div id="form-tanggal">
            <label>Pilih Tanggal</label><br>
            <input type="date" name="tanggal" class="input-tanggal" />
            </div>
           </div> -->


                      <div class="col-sm-4">
                        <label>Pilih Tahun:</label><br>
                        <select name="tahun" id="tahun">
                          <option value="">Tahun</option>
                          <?php $thn = date("Y");
                          for ($i = 0; $i < 100; $i++) :
                          ?>
                            <option value="<?= $thn; ?>"><?= $thn; ?></option>
                          <?php $thn = $thn - 1;
                          endfor; ?>
                        </select>
                        <br /><br />
                      </div>


                      <div class="col-sm-4">
                        <div id="form-bulan">
                          <label>Pilih Bulan</label><br>
                          <select name="bulan">
                            <option value="">Bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>

                          </select>
                          <br /><br />
                        </div>
                      </div>

                      <!-- <div class="">
        <div name="kode_supplier">
            <label>Pilih Kode Supplier</label><br>
            <select name="kode_supplier">
                <option value="">Kode Supplier</option>
                <?php
                $query = "SELECT supplier.kode_supplier GROUP BY kode_supplier";
                $sql = mysqli_query($conn, $query);

                while ($data = mysqli_fetch_array($sql)) {
                  echo '<option value="' . $data['kode_supplier'] . '">' . $data['kode_supplier'] . '</option>';
                }
                ?>
            </select>
        </div>
        </div> -->

                      <div class="col-sm-4">
                        <div id="form-operator">
                          <label>Pilih Operator</label><br>
                          <select name="operator">
                            <option value="">Operator</option>
                            <?php
                            $query = "SELECT operator AS operator FROM kegiatan GROUP BY operator"; // Tampilkan tahun sesuai di tabel transaksi
                            $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query

                            while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
                              echo '<option value="' . $data['operator'] . '">' . $data['operator'] . '</option>';
                            }
                            ?>
                          </select>
                          <br /><br />
                        </div>
                      </div>
                    </div>




                    <button type="submit">Tampilkan</button>
                    <a href="tab_laporan_perbulan.php">Reset Filter</a>
                  </form>
                  <hr />


                  <?php
                  if (!empty($_GET['tahun']) || !empty($_GET['bulan']) || !empty($_GET['operator'])) { // Cek apakah user telah memilih filter dan klik tombol tampilkan
                    $tahun = $_GET['tahun'];
                    $bulan = $_GET['bulan'];
                    $operator = $_GET['operator'];
                    echo '<a href="print.php?tahun=' . $tahun . '&bulan=' . $bulan . '&operator=' . $operator . '">Cetak PDF</a><br /><br />';
                    $query = "SELECT * FROM kegiatan WHERE YEAR(tanggal) = $tahun AND MONTH(tanggal) = $bulan AND operator = '$operator'  ORDER BY tanggal";
                  } else { // Jika user tidak mengklik tombol tampilkan
                    echo '<b>Semua Data Rekap</b><br /><br />';
                    echo '<a href="print.php">Cetak PDF</a><br /><br />';

                    $query = "SELECT * FROM kegiatan ORDER BY tanggal"; // Tampilkan semua data transaksi diurutkan berdasarkan tanggal
                  }
                  ?>



                  <div class="table-responsive service">
                    <table class="table table-bordered table-hover  mt-3 text-nowrap css-serial">
                      <tr>
                        <th>Tanggal</th>
                        <th>Operator</th>
                        <th>Helper</th>
                        <th>Jenis Unit</th>
                        <th>Dari Jam</th>
                        <th>Sampai Jam</th>
                        <th>Total</th>
                        <th>Lokasi</th>
                        <th>Aktivitas</th>
                      </tr>



                      <?php
                      $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
                      $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql


                      if ($row > 0) { // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
                          $tanggal = date('d-m-Y', strtotime($data['tanggal'])); // Ubah format tanggal jadi dd-mm-yyyy


                          echo "<tr>";
                          echo "<td>" . $tanggal . "</td>";
                          echo "<td>" . $data['operator'] . "</td>";
                          echo "<td>" . $data['helper'] . "</td>";
                          echo "<td>" . $data['jenis_unit'] . "</td>";
                          echo "<td>" . $data['dari_jam'] . "</td>";
                          echo "<td>" . $data['sampai_jam'] . "</td>";
                          echo "<td>" . $data['total'] . "</td>";
                          echo "<td>" . $data['lokasi'] . "</td>";
                          echo "<td>" . $data['aktivitas'] . "</td>";
                          echo "</tr>";

                          ini_set("display_errors", "Off");
                          $total = $total + $data['total'];
                        }
                      } else { // Jika data tidak ada
                        echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
                      }
                      ?>

                      <td colspan="7" style="text-align: left; font-size: 17px;">Total :</td>
                      <td style="font-size: 17px; text-align: left; ">
                        <font style="color: green;"><?php echo ($total); ?></font>
                      </td>
                      </tr>
                      <tr>



                        <script>
                          function sum() {

                            var txtFirstNumberValue = document.getElementById('dari_jam').value;
                            var txtSecondNumberValue = document.getElementById('sampai_jam').value;
                            var result = (txtSecondNumberValue) % (txtFirstNumberValue);
                            if (!isNaN(result)) {
                              angka = result.toFixed(1);
                              document.getElementById('total').value = angka;
                            }
                          }
                        </script>

                    </table>



                    <script>
                      $(document).ready(function() { // Ketika halaman selesai di load
                        $('.input-tanggal').datepicker({
                          dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
                        });

                        $('#form-tanggal, #form-bulan, #form-tahun, #form-operator').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

                        $('#filter').change(function() { // Ketika user memilih filter
                          if ($(this).val() == '1') { // Jika filter nya 1 (per tanggal)
                            $('#form-bulan, #form-tahun, #form-operator').hide(); // Sembunyikan form bulan dan tahun
                            $('#form-tanggal').show(); // Tampilkan form tanggal
                          } else if ($(this).val() == '2') { // Jika filter nya 2 (per bulan)
                            $('#form-tanggal').hide(); // Sembunyikan form tanggal
                            $('#form-bulan , #form-operator, #form-tahun').show(); // Tampilkan form bulan dan tahun
                          } else if ($(this).val() == '3') { // Jika filternya 3 (per tahun)
                            $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                            $('#form-tahun').show(); // Tampilkan form tahun
                          } else {
                            $('#form-tanggal').hide();
                            $('#form-operator, #form-bulan, #form-tahun').show();
                          }

                          $('#form-tanggal input, #form-bulan select, #form-tahun, #form-operator select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
                        })
                      })
                    </script>
                    <script src="plugin/jquery-ui/jquery-ui.min.js"></script> <!-- Load file plugin js jquery-ui -->



                  </div>
                </div>

              </div>

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




            <a class="scroll-to-top rounded" href="#page-top">
              <i class="fas fa-angle-up"></i>
            </a>


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