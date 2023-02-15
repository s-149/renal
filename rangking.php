<html>
<head>
<?php include "meta.php"; ?>
<title>RANGKING</title>
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
<br>
<h1> PERANGKINGAN </h1>
<form method="post" action="input-ranking.php">
<?php
	//Gunakan Koneksi
	include("koneksi.php");
	//Buat array bobot { C1 = 40%; C2 = 25%; C3 = 30%;}
	$bobot = array(25, 30, 15, 30);

	//Lakukan Normalisasi dengan rumus pada langkah 2
	//Cari Max atau min dari tiap kolom Matrik
	$crMax = mysqli_query($koneksi, "SELECT max(pendidikan_terakhir) as maxK1, 
						max(keahlian) as maxK2,
						max(usia) as maxK3,
						max(pengalaman_kerja) as maxK4
						FROM `bobot_calon_karyawan`");
	$max = mysqli_fetch_array($crMax);
	


//Proses perangkingan dengan rumus langkah 3
	$sql3 = mysqli_query($koneksi,"SELECT * FROM `bobot_calon_karyawan` ");

	while ($dt3 = mysqli_fetch_array($sql3)) {
		$rangking = round((($dt3['pendidikan_terakhir']/$max['maxK1'])*$bobot[0])+
			(($dt3['keahlian']/$max['maxK2'])*$bobot[1])+
			(($dt3['usia']/$max['maxK2'])*$bobot[2])+
			(($dt3['pengalaman_kerja']/$max['maxK3'])*$bobot[3]),0);
			
		echo "<input name='IdCalon[]' type='hidden' required autocomplete='off' value='".$dt3['IdCalon']."'>";
		echo "<input name='nama[]' type='hidden' required autocomplete='off' value='".$dt3['nama']."'>";
		echo "<input name='ranking[]' type='hidden' required autocomplete='off' value='".$rangking."'>";
	}

		echo "<input type='submit' name='tambah' value='Tambah'>";
	//Buat tabel untuk menampilkan hasil
		$sql4 = mysqli_query($koneksi,"SELECT * FROM `ranking`");

	while ($data = mysqli_fetch_array($sql4)) {
			
		echo "<input name='IdCalon1[]' type='hidden' required autocomplete='off' value='".$data['IdCalon']."'>";
		echo "<input name='nama1[]' type='hidden' required autocomplete='off' value='".$data['nama']."'>";
		echo "<input name='ranking1[]' type='hidden' required autocomplete='off' value='".$data['ranking']."'>";
	}
		echo "<input type='submit' name='perbarui' value='Perbarui'>";
	echo "
	<table id='example' class='display' cellspacing='0' width='100%'>
		<thead>
		<tr align='center'>
			<td>No</td>
			<td>Nama</td>
			<td>Nilai Total</td>
			<td>Ranking</td>
		</tr>
		</thead>
		";
	$no = 1;
	$sql5 = mysqli_query($koneksi,"SELECT * FROM `ranking` ORDER BY `ranking`.`ranking` DESC ");
	//Kita gunakan rumus (Normalisasi x bobot)
	while ($data = mysqli_fetch_array($sql5)) {
			
		echo "<tr>
			<td align='center'>$no</td>
			<td >".$data['nama']."</td>
			<td align='center'>".$data['ranking']."</td>
			<td align='center'>$no</td>
		</tr>";
	$no++;
	}

	echo "</table>";

?>
</form>
      </div>
    </div>
  </div>
</div>
</body>
</html>

