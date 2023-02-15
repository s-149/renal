
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
	include 'koneksi.php';
	$IdCalon = $_GET['IdCalon'];
	$sql="DELETE FROM `calon_karyawan` WHERE `calon_karyawan`.`IdCalon` = '$IdCalon' ";
 	$query=mysqli_query($koneksi,$sql);

	$sql1="DELETE FROM `bobot_calon_karyawan` WHERE `bobot_calon_karyawan`.`IdCalon` = '$IdCalon' ";
 	$query1=mysqli_query($koneksi,$sql1);

 	$query2 = mysqli_query($koneksi, "SELECT * FROM `ranking` WHERE `IdCalon` = '$IdCalon'");
                    if(mysqli_num_rows($query2) == 1)
                        {
                            $sql3="DELETE FROM `ranking` WHERE `ranking`.`IdCalon` = '$IdCalon' ";
 							$query3=mysqli_query($koneksi,$sql3);
                        }
                    else
                        {
                            echo '';
                        }

	header("location:view.php");
?>
