<?php
error_reporting();
	include 'koneksi.php';
	
	$id 	 	= $_GET['id'];

		$update = "UPDATE tbl_datauji SET	berhasil 	= '1' 
									  WHERE id_datauji 	= '$id'";

		$updateidjenis	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updateidjenis)
    	{
    		// echo "<br><br><br><strong><center><i>ID Perangkat Berhasil Diubah!";
    		echo "<script>alert('Berhasil Di Tangani !!');window.location='../index.php?halaman=DataKeluhan'</script>";
    	}
	else {
    		print"
    			<script>
    				alert(\"ID Perangkat Gagal Diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>
