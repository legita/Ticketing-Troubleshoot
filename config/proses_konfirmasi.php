<?php

include 'koneksi.php';

$date = date('Y-m-d H:i:s');
$str  = strtotime($date);
$time = date('H:i:s', $str);


$id 	 = $_GET['id'];


$updateConfirm = "UPDATE tbl_laporan SET jam_kerjakan	= '$time',
										 status 		= '1' 
										 WHERE id_laporan = '$id'";

$query = mysqli_query($konek,$updateConfirm);

	echo "<strong><center>Konfirmasi Berhasil";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../staff/index.php?halaman=laporan-masuk">'; 


?>
