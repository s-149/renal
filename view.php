<html>
<head>
<?php include "meta.php"; ?>
<title>Melihat Data Calon Karyawan</title>
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
		
<h1> List Nama  Calon Karyawan Baru </h1>
	<table id='example' class='display' cellspacing='0' width='100%'>
		<thead>
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Bobot Pendidikan Terakhir</th>
			<th>Bobot Keahlian</th>
			<th>Bobot Usia</th>
			<th>Bobot Pengalaman Kerja</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysqli_query($koneksi, "SELECT * FROM `calon_karyawan` ");
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysqli_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="7">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysqli_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td align="center">'.$no.'</td>';	//menampilkan nomor urut
					echo '<td align="center">A'.$no.'</td>';	//menampilkan kode
					echo '<td>'.$data['nama'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td align="center">'.$data['pendidikan_terakhir'].'</td>';	
					echo '<td align="center">'.$data['keahlian'].'</td>';	
					echo '<td align="center">'.$data['usia'].'</td>';	
					echo '<td align="center">'.$data['pengalaman_kerja'].'</td>';
					echo '<td>
					<a href="edit.php?IdCalon='.$data['IdCalon'].'">Edit</a> | 
					<a href="hapus.php?IdCalon='.$data['IdCalon'].'">Hapus</a> 
					</td>';
				

					
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
</body>
</html>