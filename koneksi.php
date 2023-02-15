<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "prosweal";

$koneksi = mysqli_connect($host, $user, $password, $database);

if($koneksi){
   /*  echo"database terhubung";*/
}
else {
    echo"database terputus";
}

?>