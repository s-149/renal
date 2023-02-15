<!DOCTYPE html>
<html>
<?php include "meta.php"; ?>
	<title>Edit Data  Calon Karyawan Baru</title>
<style type="text/css">
<!--
.style3 {color: #0033FF}

-->
</style>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/menu.css" type="text/css" media="screen"> 
<?php include "icon.php"; ?>
</head>
<body>
<div id="content" align="center">
  <div class="body">
    <div id="content" align="center">
      <div class="header">
        <h1>SISTEM PENDUKUNG KEPUTUSAN</h1>
        <h1>PEREKRUTAN DAN PENERIMAAN KARYAWAN BARU</h1>
        <h1>PT.PROSWEAL INDOMAX</h1>
      </div>

      <div class="menu">
        <ul id="nav">
		      <li><a href="view.php">Kembali</a></li>
        </ul></div>
	
	<h3>Edit Data Calon Karyawan Baru</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$IdCalon = $_GET['IdCalon'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$query = mysqli_query($koneksi, "SELECT * FROM `calon_karyawan` WHERE `IdCalon`='$IdCalon'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysqli_num_rows($query) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysqli_fetch_assoc($query);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<table width="948" height="557" border="0">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?= $data['nama']; ?>" required readonly></td>	<!-- value diambil dari hasil query -->
			</tr>
  <tr>
    <td>Kriteria :</td>
  </tr>
  <tr>
    <td>Pendidikan Terakhir</td>
    <td>:</td>
    <td>
    	<select name="pendidikan" required>
			<option value="">Pilih Tingkat</option>
			<option>Sma</option>
			<option>D3</option>
			<option>S1</option>
		</select>
	</td>
  </tr>
  <tr>
    <td>Keahlian</td>
    <td>:</td>
    <td>
    	<select name="keahlian" required>
			<option value="">Pilih Keahlian</option>
			<option value="Netral">Netral (apa saja diluar yang perusahaan tidak dibutuhkan)</option>
			<option>Administrasi</option>
			<option>Teknologi Mesin</option>
		</select>
	</td>
  </tr>
  <tr>
    <td>Usia</td>
    <td>:</td>
    <td>
    	<select name="usia" required>
			<option value="">Pilih Usia</option>
			<option>20-27 Tahun</option>
			<option>28-32 Tahun</option>
			<option>33-40 Tahun</option>
		</select>
	</td>
  </tr>
  <tr>
    <td>Pengalaman Kerja</td>
    <td>:</td>
    <td>
    	<select name="pengalaman" required>
			<option value="">Pilih Pengalaman Kerja</option>
			<option><1 Tahun</option>
			<option>>1 Tahun</option>
			<option>>2 Tahun</option>
		</select>
	</td>
  </tr>

  <tr>
    <td>Masukkan Kembali Kriteria (samakan isinya) :</td>
  </tr>
  <tr>
    <td>Pendidikan Terakhir</td>
    <td>:</td>
    <td>
      <select name="pendidikan1" required>
      <option value="">Pilih Tingkat</option>
      <option value="50">Sma</option>
      <option value="70">D3</option>
      <option value="90">S1</option>
    </select>
  </td>
  </tr>
  <tr>
    <td>Keahlian</td>
    <td>:</td>
    <td>
      <select name="keahlian1" required>
      <option value="">Pilih Keahlian</option>
      <option value="50">Netral (apa saja diluar yang perusahaan tidak dibutuhkan)</option>
      <option value="70">Administrasi</option>
      <option value="90">Teknologi Mesin</option>
    </select>
  </td>
  </tr>
  <tr>
    <td>Usia</td>
    <td>:</td>
    <td>
      <select name="usia1" required>
      <option value="">Pilih Usia</option>
      <option value="90">20-27 Tahun</option>
      <option value="70">28-32 Tahun</option>
      <option value="50">33-40 Tahun</option>
    </select>
  </td>
  </tr>
  <tr>
    <td>Pengalaman Kerja</td>
    <td>:</td>
    <td>
      <select name="pengalaman1" required>
      <option value="">Pilih Pengalaman Kerja</option>
      <option value="50"><1 Tahun</option>
      <option value="70">>1 Tahun</option>
      <option value="90">>2 Tahun</option>
    </select>
  </td>
  </tr>
				<td>&nbsp;</td>
				<td><input type="hidden" name="IdCalon" value="<?= $data['IdCalon']; ?>"></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
      </div>
    </div>
  </div>
</div>
</body>
</html>