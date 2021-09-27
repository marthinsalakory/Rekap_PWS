<html>

<head>
	<title>Cetak PDF</title>
	<style>
		table {
			border-collapse: collapse;
			table-layout: fixed;
			width: 630px;
		}

		table td {
			word-wrap: normal;
			width: 20%;
		}
	</style>
</head>

<body>
	<?php
	// Load file koneksi.php
	include "../config/koneksi.php";

	if (!empty($_GET['tahun']) || !empty($_GET['bulan']) || !empty($_GET['operator'])) { // Cek apakah user telah memilih filter
		$tahun = $_GET['tahun'];
		$bulan = $_GET['bulan'];
		$operator = $_GET['operator'];
		echo $operator;
		$sss = mysqli_query($conn, "SELECT * FROM kegiatan WHERE YEAR(tanggal) = $tahun AND MONTH(tanggal) = $bulan AND operator = '$operator'  ORDER BY tanggal");
		$rrr = mysqli_fetch_array($sss);

		echo '<b>LAPORAN PEMAKAIAN ALAT BERAT RENTAL</b><br /><br />';
		echo '<b>SIPIL/RAM FIELD PENDOPO, PERIODE 2021</b><br /><br />';
		echo '<b>Nama Operator: ' . $rrr['operator'] . '</b><br /><br />';
		echo '<b>Nama Helper: ' . $rrr['helper'] . '</b><br /><br />';
		echo '<b>Lokasi: ' . $rrr['lokasi'] . '</b><br /><br />';
		echo '<b>Kontraktor	: PT. PELITA WIRA SEJAHTERA</b><br /><br />';
		echo '<b>No. Kontrak: 4660009883</b><br /><br />';
	} else { // Jika user tidak memilih filter


		$sss = mysqli_query($conn, "select * from kegiatan");
		$rrr = mysqli_fetch_array($sss);

		echo '<b style="margin-left: 30%;">LAPORAN PEMAKAIAN ALAT BERAT RENTAL</b><br /><br />';
		echo '<b>SIPIL/RAM FIELD PENDOPO, PERIODE 2021</b><br /><br />';
		echo '<b>Nama Operator: ' . $rrr['operator'] . '</b><br /><br />';
		echo '<b>Nama Helper: ' . $rrr['helper'] . '</b><br /><br />';
		echo '<b>Lokasi: ' . $rrr['lokasi'] . '</b><br /><br />';
		echo '<b>Kontraktor	: PT. PELITA WIRA SEJAHTERA</b><br /><br />';
		echo '<b>No. Kontrak: 4660009883</b><br /><br />';



		$query = "SELECT * FROM kegiatan ORDER BY tanggal"; // Tampilkan semua data transaksi diurutkan berdasarkan tanggal
	}
	?>

	<table border="1" cellpadding="9">
		<tr>
			<th>Tanggal</th>
			<th>Jenis Unit</th>
			<th>Dari Jam</th>
			<th>Sampai Jam</th>
			<th>Total</th>
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
				echo "<td>" . $data['jenis_unit'] . "</td>";
				echo "<td>" . $data['dari_jam'] . "</td>";
				echo "<td>" . $data['sampai_jam'] . "</td>";
				echo "<td>" . $data['total'] . "</td>";
				echo "<td>" . $data['aktivitas'] . "</td>";
				ini_set("display_errors", "Off");
				$total = $total + $data['total'];
				echo "</tr>";
			}
			echo "<tr>";
			echo "<td colspan='3'></td>";
			echo "<td>Total:</td>";
			echo "<td>" . $total . "</td>";
			echo "<td></td>";
			echo "</tr>";
		} else { // Jika data tidak ada
			echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
		}
		?>
	</table>
	<?php
	echo "<br>";
	echo
	"<div class='footer'>
		<div style='text-align:left;margin-left:1px;'>Palembang,"
		. date('d-m-Y') . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Palembang"
		. date('d-m-Y') .
		"</div>
		<div style='text-align:left;margin-top:90px; margin-left:5px;'>
		Yunil Azwan,.ST.MT
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Yunil Azwan,.ST.MT
		</div>
		<div style='text-align:left;margin-left:1px;'>
		NIP.196709291998031004
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		NIP.196709291998031004
		</div>
	</div>";
	?>
</body>

</html>