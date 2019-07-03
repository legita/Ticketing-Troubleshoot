<?php

include'../config/koneksi.php';
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
						<h1 style="color: black; font-size: 48px; font-family: Haunted Eyes;">Histori Penanganan Ticketing Troubleshooting</h1>
                    </div>
					</center>
				</div>
			</div>
	</div>

    <div id="about" class="section wb">
        <div class="container">

                <!-- Page Header -->
                <div class="section-title text-center">
                    <h3>Histori Penanganan</h3>
                    <p><font color="gray">Histori Rekomendasi Penanganan Ticketing Troubleshooting </font></p><br><hr style="background-color: #cdd51f;">
                </div><!-- end title -->
                <!--End Page Header -->


                    <!-- Advanced Tables -->
                     <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header" style="color:black;">
            <i class="fas fa-desktop"></i>
            Laporan Masalah</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" id="dataTable" style="color: black;">
                  <thead>
                      <tr>
                          <th><center>No.</center></th>
                          <th><center>ID User</center></th>
                          <th><center>Tanggal Laporan</center></th>
                          <th><center>Waktu Pengerjaan</center></th>
                          <th><center>Pelapor</center></th>
                          <th><center>Nomer Laporan</center></th>
                          <th><center>ID Perangkat</center></th>
                          <th><center>Jenis Perangkat</center></th>
                          <th><center>User</center></th>
                          <th><center>Lokasi Perangkat</center></th>
                          <th><center>Laporan</center></th>
                          <th><center>Kesulitan Laporan</center></th>
                          <th><center>Alasan</center></th>
                          <th><center>Status</center></th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      include '../config/koneksi.php';
                      $username = $_SESSION['username'];
                      $query = mysqli_query($konek, "SELECT * FROM tbl_laporan WHERE username =  '$username' ORDER BY ting_laporan = '1' DESC") or die(mysqli_error());
                        if(mysqli_num_rows($query) == 0){
                          echo '<tr><td colspan="14" align="center">Tidak ada data!</td></tr>';
                        }
                        else{
                          while ($data = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td><center><?php echo $no++; ?></center></td>
                            <td><?php echo $data['id_user']; ?></td>
                            <td><?php echo $data['tgl_laporan']; ?></td>
                            <td>
                             <div id="getting-started"></div>
                               <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
                               <script type="text/javascript" src="../jquery.countdown/jquery.countdown.min.js"></script>

                               
                                 <?php
                                 include '../config/koneksi.php';

                                 $tgl1    = $data['tgl_laporan']; // menentukan tanggal awal
                                 $tgl2    = date('Y-m-d', strtotime('+2 days', strtotime($tgl1))); // penjumlahan tanggal sebanyak 2 hari
                                 echo '<b>'.$tgl2.'</b>';
                                 ?>

                                 <script type="text/javascript">
                                 $('#getting-started').countdown(<?php echo json_encode($tgl2); ?>, function(event) {
                                   $(this).html(event.strftime('%d hari %H:%M:%S'));
                                 });
                                 
                               </script>

                            </td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['no_lap']; ?></td>
                            <td><?php echo $data['id_perangkat']; ?></td>
                            <td><?php echo $data['jenis_perangkat']; ?></td>
                            <td><?php echo $data['user']; ?></td>
                            <td><?php echo $data['lokasi_perangkat']; ?></td>
                            <td><?php echo $data['laporan']; ?></td>
                            <td style="color:red;">
                              <?php
                                if ($data['ting_laporan']=='1'){
                                  echo '<font color="red"><b>Darurat</b></font>';
                                }
                                else {
                                 echo '<font color="green"><b>Tidak Darurat</b></font>';
                                }
                              ?>
                           </td>
                            <td><?php echo $data['alasan']; ?></td>
                            
                            <td><center>
                              <?php 
                              if ($data['status']=='0'){ ?>
                                <button class="btn btn-danger">Akan ditangani</button>
                                  <?php }
                              elseif ($data['status']=='1') { ?>
                                 <button class="btn btn-success">Sedang diproses</button>
                                  <?php } 
                              elseif ($data['status']=='2') { ?>
                                  <button class="btn btn-primary">Selesai</button>
                                  <?php }
                                  ?>
                            </center>
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
              </div>
            </div>
        </div>
    </div>
</div>
</div>

