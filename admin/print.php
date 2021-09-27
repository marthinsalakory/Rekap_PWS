<?php ob_start(); ?>
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
		$sss = mysqli_query($conn, "SELECT * FROM kegiatan WHERE YEAR(tanggal) = $tahun AND MONTH(tanggal) = $bulan AND operator = '$operator'  ORDER BY tanggal");
		$query = "SELECT * FROM kegiatan WHERE YEAR(tanggal) = $tahun AND MONTH(tanggal) = $bulan AND operator = '$operator'  ORDER BY tanggal";
		$rrr = mysqli_fetch_array($sss);

		echo '<b style="margin-left: 30%;">LAPORAN PEMAKAIAN ALAT BERAT RENTAL</b><br /><br />';
		echo '<b>Nama Operator: ' . $rrr['operator'] . '</b><br /><br />';
		echo '<b>Nama Helper: ' . $rrr['helper'] . '</b><br /><br />';
		echo '<b>Lokasi: ' . $rrr['lokasi'] . '</b><br /><br />';
		echo '<b>Kontraktor	: PT. PELITA WIRA SEJAHTERA</b><br /><br />';
		echo '<b>No. Kontrak: 4660009883</b><br /><br />';
		echo '<b>No. Jenis Unit: ' . $rrr["jenis_unit"] . '</b><br /><br />';
	} else { // Jika user tidak memilih filter


		$sss = mysqli_query($conn, "select * from kegiatan");
		$rrr = mysqli_fetch_array($sss);

		echo '<b style="margin-left: 30%;">LAPORAN PEMAKAIAN ALAT BERAT RENTAL</b><br /><br />';
		echo '<b>Nama Operator: ' . $rrr['operator'] . '</b><br /><br />';
		echo '<b>Nama Helper: ' . $rrr['helper'] . '</b><br /><br />';
		echo '<b>Lokasi: ' . $rrr['lokasi'] . '</b><br /><br />';
		echo '<b>Kontraktor	: PT. PELITA WIRA SEJAHTERA</b><br /><br />';
		echo '<b>No. Kontrak: 4660009883</b><br /><br />';
		echo '<b>No. Jenis Unit: ' . $rrr["jenis_unit"] . '</b><br /><br />';



		$query = "SELECT * FROM kegiatan ORDER BY tanggal"; // Tampilkan semua data transaksi diurutkan berdasarkan tanggal
	}
	?>

	<table border="1" cellpadding="9">
		<tr>
			<th>Tanggal</th>
			<th>Jenis Aktivitas</th>
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
				echo "<td style='width: 20%;'>" . $tanggal . "</td>";
				echo "<td style='width: 20%;'>" . $data['jenis_aktifitas'] . "</td>";
				echo "<td style='width: 15%;'>" . $data['dari_jam'] . "</td>";
				echo "<td style='width: 15%;'>" . $data['sampai_jam'] . "</td>";
				echo "<td style='width: 10%;'>" . $data['total'] . "</td>";
				echo "<td style='width: 40%;'>" . $data['aktivitas'] . "</td>";
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
		<div style='text-align:left;margin-left:1px;'>
		Di Laporkan Oleh,
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		RAM Field Pendopo</div>
		<div style='text-align:left;margin-left:1px;'>
		PT Pelita Wira Sejahtera
		nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Hoist & Equipment Senior Technician
		</div>
		<div style='text-align:left;margin-top:90px; margin-left:5px;'>
		Hedy Purwanto
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Evantino YS
		</div>
		<div style='text-align:left;margin-left:1px;'>
		Pimpinan PT PWS
		</div>
	</div>";
	?>
</body>

</html>
<?php
$html = ob_get_contents();
ob_end_clean();

require 'plugin/html2pdf/autoload.php';

$pdf = new Spipu\Html2Pdf\Html2Pdf;
$pdf->WriteHTML($html);
$pdf->Output('Data PWS.pdf', 'D');
?>