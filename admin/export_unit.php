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
  <h2><center><p class="text-center mt-4">DAFTAR UNIT PERTAMINA PENDOPO KONTRAK </p></center></h2>
  <h3><center><p class="text-center mt-4">PT. PELITA WIRA SEJAHTERA</p></center></h3>

    <center><table class=" mt-4" width="1000px" border="1">
        <tr>
       
       <td><center>Kode Unit</td>
       <td><center>Jenis Unit</td>
       <td><center>Merek</td>
       <td><center>Seri</td>
      
       <td><center>Tanggal Pembuatan</td>
        <td><center>Keterangan</td>
         </tr>

         <?php
            $query = mysqli_query($conn, "SELECT * FROM unit");
            while($row = mysqli_fetch_array($query)){
            ?>
            <tr>
           
            <td><center><?php echo $row['kode_unit'] ?></td>
            <td><center><?php echo $row['jenis_unit'] ?></td>
            <td><center><?php echo $row['merek'] ?></td>
            <td><center><?php echo $row['seri'] ?></td>
           
            <td><center><?php echo $row['tanggal_pembuatan'] ?></td>
            <td><center><?php echo $row['keterangan'] ?></td>
             </tr>
  <?php
  
  }
    ?>




    <?php
   
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename= Data_unit.xls");
    ?>




    <!--ini akhir content bosq-->

        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      </body>
    </html>