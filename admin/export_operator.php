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
  <h2><p class="text-center mt-4">DATA OPERATOR/DRIVER DAN HELPER ALAT BERAT</p></h2>
   <h3><p class="text-center mt-4">PT_PWS_AREA KERJA PERTAMINA PENDOPO</p></h3>

    <center><table class=" mt-4" width="1000px" border="1">
                     <tr>
                     <th scope="col">Tanggal</th>
                       <th scope="col">Kode Operator</th>
                       <th scope="col">Nama</th>
                       <th scope="col">Jenis Unit</th>
                       <th scope="col">Hour/Meter Akhir</th>
                          
                     </tr>

         <?php
            $query = mysqli_query($conn, "SELECT * FROM operator");
            while($row = mysqli_fetch_array($query)){
            ?>
            <tr>
            <td><center><?php echo $row['tanggal'] ?></td>
            <td><center><?php echo $row['kode_operator'] ?></td>
            <td><center><?php echo $row['nama'] ?></td>
            <td><center><?php echo $row['jenis_unit'] ?></td>
             <td><center><?php echo $row['hm'] ?></td>
            </tr>
  <?php
  }
    ?>




    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename= Data_Operator.xls");
    ?>




    <!--ini akhir content bosq-->

        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      </body>
    </html>
