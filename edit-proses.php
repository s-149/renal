
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
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$IdCalon=$_POST['IdCalon'];
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
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysqli_query($koneksi,"UPDATE `calon_karyawan` SET `nama`='$nama',`pendidikan_terakhir`='$pendidikan',`keahlian`='$keahlian',`usia`='$usia',`pengalaman_kerja`='$pengalaman' WHERE `calon_karyawan`.`IdCalon`='$IdCalon'");

	$update1 = mysqli_query($koneksi,"UPDATE `bobot_calon_karyawan` SET `nama`='$nama',`pendidikan_terakhir`='$pendidikan1',`keahlian`='$keahlian1',`usia`='$usia1',`pengalaman_kerja`='$pengalaman1' WHERE `bobot_calon_karyawan`.`IdCalon`='$IdCalon'");
	
	//jika query update sukses
	if($update && $update1){
		
		echo "<script> 
                     	alert('Proses Berhasil Dijalankan'); 
                        window:location='view.php'; 
              </script>";	
		
	}else{
		
		echo "<script> 
                     	alert('Proses Gagal, Silahkan Ulangi Kembali'); 
                        window:location='view.php'; 
              </script>";	
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>