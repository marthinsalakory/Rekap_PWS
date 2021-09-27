<?php
ob_start();
include '../config/koneksi.php';
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">





  </head>


  <!--ini awal content-->
  <h1><p class="text-center mt-4"><center>LAPORAN PEMAKAIAN ALAT BERAT RENTAL</center></p></h1>
    <h4><p class="text-center mt-4"><center>SIPIL/RAM FIELD PENDOPO, PERIODE 2021</center></p></h4>
  <h2><p class="text-center mt-4"><center>PT. PELITA WIRA SEJAHTERA</center></p></h2>
  <h4><p class="text-center mt-4">No. Kontrak: 4660009883</p></h4>
  <h4><p class="text-center mt-4">COO No.    : 341/EP3624/2021-S0 </p></h4>
  




    <center><table class=" mt-4" width="1000px" border="1">
                     <tr>
                       <th scope="col">Tanggal </th>
                       <th scope="col">Operator</th>
                       <th scope="col">Jenis Aktivitas</th>
                       <th scope="col">Jenis Unit</th>
                       <th scope="col">Dari Jam</th>
                       <th scope="col">Sampai Jam</th>
                       <th scope="col">Total</th>
                       <th scope="col">Helper</th>
                       <th scope="col">Lokasi</th>
                       <th scope="col">Aktivitas</th>
                    
                       
                     </tr>

         <?php

            $query = mysqli_query($conn, "SELECT * FROM kegiatan");
            while($row = mysqli_fetch_array($query)){
            ?>
            <tr>
            <td><center><?php echo $row['tanggal'] ?></td>
            <td><center><?php echo $row['operator'] ?></td>
            <td><center><?php echo $row['jenis_aktivitas'] ?></td>
            <td><center><?php echo $row['jenis_unit'] ?></td>
            <td><center><?php echo $row['dari_jam'] ?></td>
            <td><center><?php echo $row['sampai_jam'] ?></td>
            <td><center><?php echo $row['total'] ?></td>
            <td><center><?php echo $row['helper'] ?></td>
            <td><center><?php echo $row['lokasi'] ?></td>
            <td><center><?php echo $row['aktivitas'] ?></td>
    
      
            
             </tr>
  <?php
  }
    ?>




    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename= Data_Laporan_Perbulan.xls");
    ?>




    <!--ini akhir content bosq-->

        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      </body>
    </html>
