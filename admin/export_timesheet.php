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
  <h3><p class="text-center mt-4">Data Timesheet</p></h3>

    <center><table class=" mt-4" width="1000px" border="1">
                     <tr>
                
                       <th scope="col">Tanggal</th>
                       <th scope="col">Kode Unit</th>
                       <th scope="col">Operator</th>
                       <th scope="col">Dari Jam</th>
                       <th scope="col">Sampai Jam</th>
                       <th scope="col">Jam (Konversi)</th>
                       <th scope="col">Aktivitas</th>
                       <th scope="col">Lokasi Pekerjaan</th>
                       <th scope="col">H/m Awal</th>
                       <th scope="col">H/m Akhir</th>
                       <th scope="col">Hm/Km</th>
                   
                     </tr>

         <?php
            $query = mysqli_query($conn, "SELECT * FROM timesheet");
            while($row = mysqli_fetch_array($query)){
            ?>
            <tr>
            
            <td><center><?php echo $row['tanggal'] ?></td>
            <td><center><?php echo $row['kode_unit'] ?></td>
            <td><center><?php echo $row['operator'] ?></td>
            <td><center><?php echo $row['dari_jam'] ?></td>
            <td><center><?php echo $row['sampai_jam'] ?></td>
            <td><center><?php echo $row['jam_konversi'] ?></td>
            <td><center><?php echo $row['aktivitas'] ?></td>
            <td><center><?php echo $row['lokasi_pekerjaan'] ?></td>
            <td><center><?php echo $row['hm_awal'] ?></td>
            <td><center><?php echo $row['hm_akhir'] ?></td>
            <td><center><?php echo $row['hm_km'] ?></td>
      
            
             </tr>
  <?php
  }
    ?>




    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename= Data_Timesheet.xls");
    ?>




    <!--ini akhir content bosq-->

        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      </body>
    </html>
