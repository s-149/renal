
<!DOCTYPE html>
<html>
<head>
	<?php include "meta.php"; ?>
	<title>Proses</title>
	<?php include "icon.php"; ?>
</head>
<body>

</body>
</html>

<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['Submit'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nama=$_POST['nama'];
	// akan dimasukkan kedalam tabel calon_karyawan
	$pendidikan=$_POST['pendidikan'];
	$keahlian=$_POST['keahlian'];
	$usia=$_POST['usia'];
	$pengalaman=$_POST['pengalaman'];
	// akan dimasukkan pada tabel bobot_calon-karyawan
	$pendidikan1=$_POST['pendidikan1'];
	$keahlian1=$_POST['keahlian1'];
	$usia1=$_POST['usia1'];
	$pengalaman1=$_POST['pengalaman1'];
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$sql ="INSERT INTO `calon_karyawan`(`nama`, `pendidikan_terakhir`, `keahlian`, `usia`, `pengalaman_kerja`) VALUES ('$nama','$pendidikan','$keahlian','$usia','$pengalaman')";
	$query = mysqli_query($koneksi,$sql);
	//jika query input sukses
	if($query)
		{
			$sql1 ="INSERT INTO `bobot_calon_karyawan`(`nama`, `pendidikan_terakhir`, `keahlian`, `usia`, `pengalaman_kerja`) VALUES ('$nama','$pendidikan1','$keahlian1','$usia1','$pengalaman1')";
			$query1 = mysqli_query($koneksi,$sql1);
		
			echo "<script>alert('Data berhasil disimpan.'); window.location = 'input.php'</script>";
		
		}
	else
		{
		
			echo "<script>alert('Data gagal disimpan, Silahkan ulangi kembali.'); window.location = 'input.php'</script>";

		}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>