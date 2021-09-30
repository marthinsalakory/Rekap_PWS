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
  <center>
  <h2><p class="text-center mt-4">DATA LAPORAN KEGIATAN </p></h2>
  <h4><p class="text-center mt-4">PT.PELITA WIRA SEJAHTERA </p></h4>
  </center>

    <center><table class=" mt-4" width="2000px" border="1">
                     <tr>
                       <th scope="col">Tanggal </th>
                       <th scope="col">Operator</th>
                       <th scope="col">Jenis Aktivitas</th>
                       <th scope="col">Jenis Unit</th>
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
            <td><center><?php echo $row['jenis_aktifitas'] ?></td>
            <td><center><?php echo $row['jenis_unit'] ?></td>
            <td><center><?php echo $row['lokasi'] ?></td>
            <td><center><?php echo $row['aktivitas'] ?></td>
    
      
            
             </tr>
  <?php
  }
    ?>




    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename= Data_kegiatan.xls");
    ?>




    <!--ini akhir content bosq-->

        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      </body>
    </html>
