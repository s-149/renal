<html>
<?php include "meta.php"; ?>
<title>Memasukkan Data Calon Karyawan Baru</title>
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

  <?php include "header.php"; ?>
		 
		

<h1 class="style3"> Input Data Calon Karyawan Baru </h1>

<form method="post" action="input-proses.php">
<table width="948" height="557" border="0">
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input name="nama" type="text" required autocomplete="off"></td>
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
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name="Submit" type="submit" value="Tambah"></td>
  </tr>
</table>
</form>
      </div>
    </div>
  </div>
</div>
</body>
</html>