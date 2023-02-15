
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
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
if(isset($_POST['tambah']))
	{
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$IdCalon=$_POST['IdCalon'];
	$nama=$_POST['nama'];
	$ranking=$_POST['ranking'];
	
	$jumlah=count($IdCalon);
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	for ($s=0; $s<$jumlah; $s++) 
		{
	$sql ="INSERT INTO `ranking`(`IdCalon`, `nama`, `ranking`) VALUES ('$IdCalon[$s]','$nama[$s]','$ranking[$s]')";
	$query = mysqli_query($koneksi,$sql);
		}
	//jika query input sukses
	if($query)
		{
		
			echo "<script>alert('Data berhasil disimpan.'); window.location = 'rangking.php'</script>";
		
		}
	else
		{
		
			echo "<script>alert('Data gagal disimpan, Proses ini dijalankan ketika ada data baru, jika ingin memperbarui data, Silahkan gunakan Tombol Perbarui.'); window.location = 'rangking.php'</script>";

		}
}

if(isset($_POST['perbarui']))
	{
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$IdCalon1=$_POST['IdCalon1'];
	$nama1=$_POST['nama1'];
	$ranking1=$_POST['ranking1'];
	
	$jumlah=count($IdCalon1);
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	for ($p=0; $p<$jumlah; $p++) 
		{
	$sql ="UPDATE `ranking` SET `nama`='$nama1[$p]', `ranking`='$ranking1[$p]' WHERE `ranking`.`IdCalon`='$IdCalon1[$p]'";
	$query = mysqli_query($koneksi,$sql);
		}
	//jika query input sukses
	if($query)
		{
		
			echo "<script>alert('Data berhasil diperbarui.'); window.location = 'rangking.php'</script>";
		
		}
	else
		{
		
			echo "<script>alert('Data gagal diperbarui, Silahkan ulangi kembali.'); window.location = 'rangking.php'</script>";

		}
}

?>