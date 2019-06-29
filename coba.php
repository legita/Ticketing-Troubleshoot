<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="jquery.countdown/jquery.countdown.min.js"></script>
</head>
<body>
<button type="button" onclick="myFunction()">Coba Klik</button>
<div id="getting-started"></div>
	
<script type="text/javascript">
	function myFunction() {
  <?php
	$tgl1    = date('Y-m-d'); // menentukan tanggal awal
	$tgl2    = date('Y-m-d', strtotime('+2 days', strtotime($tgl1))); // penjumlahan tanggal sebanyak 7 hari
	echo $tgl1; // cetak tanggal
	echo $tgl2; // cetak tanggal
	?>

	$('#getting-started').countdown('2019/06/30', function(event) {
    $(this).html(event.strftime('%w weeks %d days %H:%M:%S'));
  });
}
  
</script>
</body>
</html>
