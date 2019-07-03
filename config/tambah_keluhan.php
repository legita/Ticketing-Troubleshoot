<?php
error_reporting();

include'koneksi.php';

$tanggal	= date("d/m/Y");
$username	= $_POST['username'];
$keluhan 	= $_POST['keluhan'];

$input = "INSERT INTO tbl_datauji (id_datauji,username,keluhan,tanggal) values ('','$username','$keluhan','$tanggal')";
$data = mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
 	echo "<script>alert('Success! Data Added');</script>";
 	echo '<META HTTP-EQUIV = "REFRESH" CONTENT = "1;URL=../index.php?halaman=DataKeluhan">';
}

	else {
    		print"
    			<script>
    				alert(\"Keluhan Gagal Diinput!\");
    				history.back(-1);
    			</script>";
    	}

?>