<?php
$koneksi = mysqli_connect("localhost","root","","test-arkademy");
 
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
mysqli_select_db($koneksi,"test-arkademy");
?>
