<?php 

$koneksi = mysqli_connect("10.0.0.79","admin","Admin.123","evote");

if (mysqli_connect_error()){
	echo "koneksi database gagal" .mysqli_connect_error();
}

?>
