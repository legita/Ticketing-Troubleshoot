<?php
error_reporting();

include'koneksi.php';

$id_user		= $_POST['id_user'];
$tgl_laporan	= $_POST['tgl'];
$jam_laporan	= $_POST['jam_laporan'];
$jam_dibutuhkan	= $_POST['jam_dibutuhkan'];
$username		= $_POST['username'];
$no_lap 		= $_POST['no_laporan'];
$id_perangkat 	= $_POST['id_lama'];
$jenis 			= $_POST['jenis'];
$user 			= $_POST['user'];
$lokasi 		= $_POST['lokasi'];
$laporan 		= $_POST['laporan'];
$ting_laporan	= $_POST['ting_laporan'];
$alasan 		= $_POST['alasan'];

// if ($ting_laporan == 1){

// 	$tgl2 = date('d-m-Y', strtotime('+2 days', strtotime($tgl_laporan))); 
	//echo $tgl2;

	// $input = "INSERT INTO tbl_laporan (id_laporan,id_user,tgl_laporan,username,no_lap,id_perangkat,jenis_perangkat,user,lokasi_perangkat,laporan,ting_laporan,status,alasan,jam_laporan,jam_dibutuhkan,waktu) 
	// values ('','$id_user','$tgl_laporan','$username','$no_lap','$id_perangkat','$jenis','$user','$lokasi','$laporan','$ting_laporan','0','$alasan','$jam_laporan','$jam_dibutuhkan','$tgl2')";
	// $data = mysqli_query($konek,$input) or die (mysqli_error($konek));

// }
// else if ($ting_laporan == 0){
// 	$tgl3 = date('d-m-Y', strtotime('+2 days', strtotime($tgl_laporan))); 
	//echo $tgl3;

	$input = "INSERT INTO tbl_laporan (id_laporan,id_user,tgl_laporan,username,no_lap,id_perangkat,jenis_perangkat,user,lokasi_perangkat,laporan,ting_laporan,status,alasan,jam_laporan,jam_dibutuhkan) 
	values ('','$id_user','$tgl_laporan','$username','$no_lap','$id_perangkat','$jenis','$user','$lokasi','$laporan','$ting_laporan','0','$alasan','$jam_laporan','$jam_dibutuhkan')";
	$data = mysqli_query($konek,$input) or die (mysqli_error($konek));
// }


if($data){
 	echo "<br><br><br><strong><center>Laporan Berhasil di Kirimkan</strong></center>";
 	echo '<META HTTP-EQUIV = "REFRESH" CONTENT = "1;URL=../index.php?halaman=Trouble">';
}

	else {
    		print"
    			<script>
    				alert(\"Laporan Gagal Dikirim!\");
    				history.back(-1);
    			</script>";
    	}

?>