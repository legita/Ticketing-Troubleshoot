<?php

include 'koneksi.php';

$id 	 = $_GET['id'];
$tgl 	 = date('d-m-Y');

$updateConfirm = "UPDATE tbl_laporan SET tgl_selesai	= '$tgl',
										 status 		= '2' 
										 WHERE id_laporan = '$id'";

$query = mysqli_query($konek,$updateConfirm);

	echo "<strong><center>Konfirmasi Berhasil";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../staff/index.php?halaman=laporan-masuk">'; 


?>
