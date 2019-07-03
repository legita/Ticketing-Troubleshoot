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

<?php  
   $query = mysqli_query($konek, "SELECT * FROM  `$tbl_datauji` order by `id_datauji` ")or die(mysqli_error());
   $no = 1;        
   while($data = mysqli_fetch_array($query)){
       $id_datauji=$data["id_datauji"];
       echo '<tr>';
       echo '<td>'.$no.'</td>';
       echo '<td>'.$data['tanggal'].'</td>';
       echo '<td><p align="justify">'.$data['keluhan'].'</p></td>';
       echo "<td><center>
             <a href='index.php?halaman=data-keluhan&id=$id_datauji'><button type='button' class='btn btn-warning btn-sm'>
             <i class='fa fa-eye'></i></button></a></center></td>";
            $no++;  
        }
   ?>

     <hr>
  <hr style="background-color: #cdd51f;"><br>

  <div class="col-md-10 offset-md-1" style="color:darkslategray;">
    <p><b><i class="fa fa-angle-double-right" aria-hidden="true" style="color: #cdd51f;"></i> 3 Rekomendasi Penanganan Teratas <i class="fa fa-angle-double-left" aria-hidden="true" style="color: #cdd51f;"></i></b></p>
    <button class="collapsible">Open Section 1</button>
    <div class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <button class="collapsible">Open Section 2</button>
    <div class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <button class="collapsible">Open Section 3</button>
    <div class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div><hr>
    <button type="submit" value="SEND" id="submit" class="button button1 btnn" title="Lapor">Berhasil Ditangani</button>
    <label class="col-sm-10">Pilih Button <font style="color: red;"><b>Lapor ke IT</b></font> , jika masalah tidak terselesaikan</label>
    <button type="submit" value="SEND" id="submit" class="button button1 btnn" title="Lapor">Lapor ke IT</button>
  </div><hr style="background-color: #cdd51f;"><br>

<?php include 'footer.php'; ?>


<!-- Coding Collapsible -->
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>