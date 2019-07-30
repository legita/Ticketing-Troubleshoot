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
						<h1 style="color: black; font-size: 48px;">Histori Penanganan Ticketing Troubleshooting</h1>
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
            <i class="fa fa-desktop"></i>
            &nbsp;Laporan Masalah</div>
          <div class="card-body">
            <div class="table-responsive" style="color: black;">
              <div class="col-sm-4">
                <div class="input-group">
                  <button type='button' class='btn btn-warning'><i class="fa fa-search"></i></button>
                  <input class="form-control" id="myInput" type="text" placeholder="Search..">
                </div>
              </div><br>
              <form class="form-horizontal" method="POST">
              <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th><center>No.</center></th>
                          <th><center>Tanggal Laporan</center></th>
                          <th><center>Pengerjaan</center></th>
                          <th><center>Nomer Ticketing</center></th>
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
                  <tbody id="myTable">
                  <?php

                    include 'config/koneksi.php';
                         // error_reporting(0);

                         $batas  = 20;
                         $hal    = @$_GET['hal'];
                         if (empty($hal)) {
                           $posisi = 0;
                           $hal    = 1;
                         } else {
                           $posisi = ($hal - 1) * $batas;
                         }
                        if($_SERVER['REQUEST_METHOD'] == "POST") {
                          $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
                          if ($pencarian != '') {
                            $sql = "SELECT * FROM tbl_laporan WHERE username =  '$username' LIKE '%$pencarian%' ORDER BY ting_laporan = '1' DESC";
                            $query = $sql;
                            $queryJml = $sql;
                          } else {
                            $query = "SELECT * FROM tbl_laporan WHERE username =  '$username' ORDER BY ting_laporan = '1' DESC LIMIT $posisi, $batas ";
                            $queryJml = "SELECT * FROM tbl_layanan ORDER BY id_layanan DESC";
                            $no = $posisi + 1;
                          }
                         } else {
                          $username = $_SESSION['username'];
                           $query = "SELECT * FROM tbl_laporan WHERE username =  '$username' ORDER BY ting_laporan = '1' DESC LIMIT $posisi, $batas ";
                           $queryJml = "SELECT * FROM tbl_laporan WHERE username =  '$username' ORDER BY ting_laporan = '1' DESC";
                           $no = $posisi + 1;
                         }

                      $querydata = mysqli_query($konek, $query)or die(mysqli_error());
                      if(mysqli_num_rows($querydata) == 0){ 
                        echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                      }
                        else
                      { 
                        // $no = 1;        
                        while($data = mysqli_fetch_array($querydata)){  
                          echo '<tr>';
                          echo '<td>'.$no.'</td>';
                          ?>
                           <td><?php echo $data['tgl_laporan']; ?></td>
                           <td><?php
                            // echo '<b>'.$data['waktu'].'</b>';
                           $date = strtotime($data['waktu']);
                           $remaining = $date - time();
                           $days_remaining = floor($remaining / 86400);
                           $hours_remaining = floor(($remaining % 86400) / 3600);
                           $minutes_remaining = floor(($remaining % 3600) / 60);
                           $seconds_remaining = ($remaining % 60);

                            if ($data['status']=='0' && $days_remaining >= 1){ 
                              echo '<b>'.$data['waktu'].'</b>';
                           echo "<p>$days_remaining <span'>hari</span> $hours_remaining <span style='font-size:;'>jam</span> $minutes_remaining <span style='font-size:;'>menit</span> $seconds_remaining <span style='font-size:;'>detik</span></p>";}

                            elseif ($data['status']=='1' && $days_remaining >= 1){ 
                              echo '<b>'.$data['waktu'].'</b>';
                           echo "<p>$days_remaining <span'>hari</span> $hours_remaining <span style='font-size:;'>jam</span> $minutes_remaining <span style='font-size:;'>menit</span> $seconds_remaining <span style='font-size:;'>detik</span></p>";}

                            

                            elseif ($data['status']=='2'){

                             echo "<font color='blue'>Selesai Dong!</font>";

                            } 

                            elseif(($days_remaining < 1) && $data['status']=='0'){

                                 echo "<font color='red'>Menunggu Pengerjaan</font>";

                            }
                             elseif(($days_remaining < 1) && $data['status']=='1'){

                                 echo "<font color='red'>Menunggu Pengerjaan</font>";

                            }


                           
                           ?></td>
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
                          <?php
                          echo '</tr>';
                          $no++;  
                        }
                      }
                
                  ?>
                  </tbody>
              </table> 
              </form>
              <?php
               if($_SERVER['REQUEST_METHOD'] == "POST") {
                      $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
                  echo "<div style=\"float:left;\">";
                  $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
                  echo "Data Hasil Pencarian : <b>$jml</b>";
                  echo "</div>";
                } else { ?>
                  <div style="float:left;">
                    <?php
                    $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
                    echo "Jumlah Data : <b>$jml</b>";
                    ?>
                  </div>
                  <div style="float:right;">
                    <ul class="pagination pagination-sm" style="margin: 0">
                      <?php
                      $jml_hal = ceil($jml / $batas);
                      for ($i=1; $i <= $jml_hal; $i++) {
                        if ($i != $hal) {
                          echo "<li><a href=\"index.php?halaman=history&hal=$i\">$i</a></li>";
                        } else {
                          echo "<li class=\"active\"><a>$i</a></li>";
                        }
                      }
                    }
                      ?>  
                    </ul>
                  </div> 
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
