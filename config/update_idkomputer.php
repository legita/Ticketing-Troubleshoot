<?php
error_reporting();
	include 'koneksi.php';
	
	$id_kom			 = $_POST['id_kom'];
	$id_komputer 	 = $_POST['id_komputer'];
	$idkkonfirm		 = $_POST['idkkonfirm'];
	$tgl_beli		 = $_POST['tgl_beli'];

		$update = "UPDATE database_komputer SET	id_komputer 	= '$idkkonfirm',
												tgl_beli 	  	= '$tgl_beli'
									            WHERE id_kom 	= '$id_kom'";

		$updateidkom	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updateidkom)
    	{
    		echo "<br><br><br><strong><center><i>ID Komputer Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../staff/index.php?halaman=management-idkomputer">';
    	}
	else {
    		print"
    			<script>
    				alert(\"ID Komputerer Gagal Diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>