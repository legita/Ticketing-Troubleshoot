<script src="assets/js/jquery.min.js"></script>

<?php

include'config/koneksi.php';
$id      = $_GET['id'];
$id_user = $_GET['id_user'];

?>

<style>
.animasi-teks {
  font-size: 48px;
  width: 100%;
  white-space:nowrap;
  overflow:hidden;
  -webkit-animation: typing 5s steps(70, end);
  animation: animasi-ketik 5s steps(70, end);
}

@keyframes animasi-ketik{
  from { width: 0; }
}

@-webkit-keyframes animasi-ketik{
  from { width: 0; }
}
</style>

   	<div class="jumbotron jumbotron-fluid" style="background-color:#cdd51f;">
		
			<div class="row">
				<div class="col-12">
					<center>
            <div class="animasi-teks">
						<h1 style="color: black; font-size: 48px;">Data Keluhan Ticketing Troubleshooting</h1>
            </div>
					</center>
				</div>
			</div>
	 </div>

  <div class="message-box" align="center">
    <a href="keluhan.php" class="btn11"><span>Input Keluhan Lagi ?</span><div class="transition"></div></a>
  </div>

    <div id="about" class="section wb">
        <div class="container">

                <!-- Page Header -->
                <div class="section-title text-center">
                    <h3>Data Troubleshooting</h3>
                    <p><font color="gray">Data Keluhan Anda </font></p><br><hr style="background-color: #cdd51f;">
                </div><!-- end title -->
                <!--End Page Header -->

                    <!-- Advanced Tables -->
                     <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header" style="color:black;">
            <i class="fa fa-desktop"></i>
            &nbsp;&nbsp;Laporan Masalah</div>
          <div class="card-body">
<!--             <a href="?halaman=DataKeluhan&gen=ok" class="btn btn-danger btn-sm" name="gen">
              <i class="fa fa-gear"></i>&nbsp;Proses Mendapat Penanganan</button>
            </a> -->
            <div class="table-responsive" style="color:black;">
              <div class="table-responsive" style="color: black;">
                <div class="col-sm-4">
                  <div class="input-group">
                    <button type='button' class='btn btn-warning'><i class="fa fa-search"></i></button>
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                  </div>
                </div><br>
                <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><center>No.</center></th>
                            <th><center>Tanggal</center></th>
                            <th><center>Keluhan</center></th>
                            <th><center>Analisa Data</center></th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                      <?php
                      $no = 1;
                      include 'config/koneksi.php';
                      $username = $_SESSION['username'];
                      $query = mysqli_query($konek, "SELECT * FROM tbl_datauji WHERE berhasil = '0' AND flag='0' ORDER BY id_datauji DESC") or die(mysqli_error());
                        if(mysqli_num_rows($query) == 0){
                          echo '<tr><td colspan="14" align="center">Tidak ada data!</td></tr>';
                        }
                        else{
                          while ($data = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td><center><?php echo $no++; ?></center></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td><?php echo $data['keluhan']; ?></td>
                            <td><center>
                              <a href='?halaman=hitungin&gen=ok' title="Lihat Penanganan"><button type='button' class='btn btn-warning'><span class='fa fa-hourglass-half'></span></button></a>&nbsp;&nbsp;
                              <a href="config/delete_keluhan.php?id=<?php echo $data['id_datauji'];?>" title="Hapus Data" onclick="return confirm('Hapus Data ini?');"><span class="fa fa-trash" style="color:red;"></span></a></center>
                            </td>
                        </tr>
                          <?php
                          
                        }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Diubah pada <?php echo date("d-M-Y | H:i:s"); ?></div>



        </div>
      </div>
   
    </div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


