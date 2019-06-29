<?php
error_reporting();
	include 'koneksi.php';
	
	$id_laporan		 = $_POST['id_laporan'];
	$ting_laporanbar = $_POST['ting_laporanbar'];

		$update = "UPDATE tbl_laporan SET	ting_laporan = '$ting_laporanbar'
									  WHERE id_laporan 	 = '$id_laporan'";

		$updateidjenis	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updateidjenis)
    	{
    		echo "<br><br><br><strong><center><i>Kesulitan Laporan Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../staff/index.php?halaman=laporan-masuk">';
    	}
	else {
    		print"
    			<script>
    				alert(\"ID Perangkat Gagal Diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>