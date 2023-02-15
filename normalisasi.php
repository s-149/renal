<html>
<head>
<?php include "meta.php"; ?>
<title>NORMALISASI</title>
<style type="text/css">
<!--
.style2 {font-size: 24px}
-->
</style>
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/menu.css" type="text/css" media="screen"> 
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<?php include "icon.php"; ?>
</head>
<script>
    $(document).ready(function() {
	   $('#example').DataTable();
	} );
</script>
<body>

  <?php include "header.php"; ?>
		 
		</div>
<div class="tengah">
<br> <br>

<?php
//Gunakan Koneksi
	include("koneksi.php");

//Lakukan Normalisasi dengan rumus pada langkah 2
	//Cari Max atau min dari tiap kolom Matrik
	$crMax = mysqli_query($koneksi, "SELECT max(pendidikan_terakhir) as maxK1, 
						max(keahlian) as maxK2,
						max(usia) as maxK3,
						max(pengalaman_kerja) as maxK4
						FROM `bobot_calon_karyawan`");
	$max = mysqli_fetch_array($crMax);


//Hitung Normalisasi tiap Elemen
	$sql2 = mysqli_query($koneksi,"SELECT * FROM `bobot_calon_karyawan`");
	//Buat tabel untuk menampilkan hasil
	echo "<H3>Matrik Normalisasi</H3>
	<table id='example' class='display' cellspacing='0' width='100%'>
		<thead>
		<tr align='center'>
			<td>No</td>
			<td>Nama</td>
			<td>Kriteria 1</td>
			<td>Kriteria 2</td>
			<td>Kriteria 3</td>
			<td>Kriteria 4</td>
		</tr>
		</thead>
		";
	$no = 1;
	while ($dt2 = mysqli_fetch_array($sql2)) {
		echo "<tr>
			<td align='center'>$no</td>
			<td>".$dt2['nama']."</td>
			<td align='center'>".round($dt2['pendidikan_terakhir']/$max['maxK1'],1)."</td>
			<td align='center'>".round($dt2['keahlian']/$max['maxK2'],1)."</td>
			<td align='center'>".round($dt2['usia']/$max['maxK3'],1)."</td>
			<td align='center'>".round($dt2['pengalaman_kerja']/$max['maxK4'],1)."</td>
		</tr>";
	$no++;
	}
	echo "</table>";
?>

      </div>
    </div>
  </div>
</div>
</body>
</html>