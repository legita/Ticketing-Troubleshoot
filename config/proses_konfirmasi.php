<?php

include 'koneksi.php';

$id 	 = $_GET['id'];
$tgl 	 = date('d-m-Y');

$updateConfirm = "UPDATE tbl_laporan SET tgl_kerjakan	= '$tgl',
										 status 		= '1' 
										 WHERE id_laporan = '$id'";

$query = mysqli_query($konek,$updateConfirm);

	echo "<strong><center>Konfirmasi Berhasil";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../staff/index.php?halaman=laporan-masuk">'; 


?>
