<?php
// error_reporting();

include'koneksi.php';

$tanggal	= $_POST['tgl'];;
$username	= $_POST['username'];
// $keluhan 	= $_POST['keluhan'];

$keluhan = count($_POST["keluhan"]);
  
if($keluhan > 0)  
{  
     for($i=0; $i<$keluhan; $i++)  
     {  
          if(trim($_POST["keluhan"][$i] != ''))  
          {  
               $sql = "INSERT INTO tbl_datauji (id_datauji,username,keluhan,tanggal) VALUES('','$username','".mysqli_real_escape_string($konek, $_POST["keluhan"][$i])."','$tanggal')";  
               mysqli_query($konek, $sql);  
          }  
     }

 	echo "<script>alert('Success!');</script>";
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