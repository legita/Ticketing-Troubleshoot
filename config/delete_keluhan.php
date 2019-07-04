<?php
error_reporting();
	include 'koneksi.php';

	$id_datauji = $_GET['id'];

	$hapus 	 = "DELETE FROM tbl_datauji WHERE id_datauji='$id_datauji'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center>Data Berhasil Dihapus</strong></center>";
	    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1;URL=../index.php?halaman=DataKeluhan">';
	    }
	else {
	    	echo "<br><br><br><strong><center>Data Gagal di Hapus</strong></center>";
	    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1;URL=../index.php?halaman=DataKeluhan">';
	    	
	    }
?>