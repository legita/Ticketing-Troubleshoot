

<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Laporan Masuk</li>
        </ol> 
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-desktop"></i>
            Laporan Masalah</div>
          <div class="card-body">
            <div class="table-responsive">              
              <table class="table table-striped table-bordered table-hover" id="dataTable">
                  <thead>
                      <tr>
                          <th><center>No.</center></th>
                          <th><center>Tanggal Laporan</center></th>
                          <th><center>Waktu Pengerjaan</center></th>
                          <th><center>Tanggal selesai</center></th>
                          <th><center>Pelapor</center></th>
                          <th><center>No. Ticket</center></th>
                          <th><center>ID Perangkat</center></th>
                          <th><center>Jenis Perangkat</center></th>
                          <th><center>User</center></th>
                          <th><center>Lokasi Perangkat</center></th>
                          <th><center>Laporan</center></th>
                          <th><center>Kesulitan Laporan</center></th>
                          <th><center>Alasan</center></th>
                          <th><center>Aksi</center></th>
                      </tr>
                  </thead><!-- 
                  <tfoot>
                      <tr>
                          <th><center>No.</center></th>
                          <th><center>ID User</center></th>
                          <th><center>Tanggal Laporan</center></th>
                          <th><center>Pelapor</center></th>
                          <th><center>Nomer Laporan</center></th>
                          <th><center>ID Perangkat</center></th>
                          <th><center>Jenis Perangkat</center></th>
                          <th><center>User</center></th>
                          <th><center>Lokasi Perangkat</center></th>
                          <th><center>Laporan</center></th>
                          <th><center>Status</center></th>
                          <th><center>Darurat</center></th>
                          <th><center>Alasan</center></th>
                          <th><center>Aksi</center></th>
                      </tr>
                  </tfoot> -->
                  <tbody>
                      <?php
                      $no = 1;
                      include '../config/koneksi.php';
                      $query = mysqli_query($konek, "SELECT * FROM tbl_laporan ORDER BY ting_laporan = '1' DESC") or die(mysqli_error());
                        if(mysqli_num_rows($query) == 0){
                          echo '<tr><td colspan="14" align="center">Tidak ada data!</td></tr>';
                        }
                        else{
                          while ($data = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td><center><?php echo $no++; ?></center></td>
                            <td><?php echo $data['tgl_laporan']; ?></td>
                            <td>
                             <div id="getting-started"></div>
                               <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
                               <script type="text/javascript" src="../jquery.countdown/jquery.countdown.min.js"></script>-->
                                 <?php
                                    include '../config/koneksi.php';

                                   $tgl1    = $data['tgl_laporan']; // menentukan tanggal awal
                                   $tgl3    = date('Y-m-d', strtotime('+2 days', strtotime($tgl1))); // penjumlahan tanggal sebanyak 2 hari
                                   $tgl2    = date('Y-m-d', strtotime('+1 days', strtotime($tgl1))); // penjumlahan tanggal sebanyak 1 hari
                                   // echo '<b> if() </b>';
                                   if($data['ting_laporan']=='1')
                                   {
                                      echo "<p id='demo-1'></p><br><b><span id='countdown-1'>".$tgl2."</span></b>";
                                   }
                                   else {
                                      echo "<p id='demo-2'></p><br><b><span id='countdown-2'>".$tgl3."</span></b>";
                                   }
                                 ?>
                                <!-- <script type="text/javascript">
                                 $('#getting-started').countdown(<?php echo json_encode($tgl2); ?>, function(event) {
                                   $(this).html(event.strftime('%d hari %H:%M:%S'));
                                 });
                                </script> -->
                            </td>
                            <td><?php echo $data['tgl_selesai']; ?></td>
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
                            &nbsp;&nbsp;<a href="../config/update_laporan.php?id=<?php echo $data['id_laporan'];?>&&ting_laporan=<?php echo $data['ting_laporan'];?>" title="Edit Data"><span class="fa fa-edit"></span></a></td>
                            <td><?php echo $data['alasan']; ?></td>
                            
                            <td><center>
                              <?php 
                              if ($data['status']=='0'){ ?>
                                <a href="../config/proses_konfirmasi.php?id=<?php echo $data['id_laporan']; ?>" class="btn btn-danger" title="Tangani">Tangani</a>
                                  <?php }
                              elseif ($data['status']=='1') { ?>
                                 <a href="../config/proses_konfirmasi1.php?id=<?php echo $data['id_laporan']; ?>" class="btn btn-success" title="Proses">Proses</a>
                                  <?php } 
                              elseif ($data['status']=='2') { ?>
                                 <a class="btn btn-primary" title="Selesai">Selesai</a>
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
      <!-- /.container-fluid -->

      <!-- <p id="demo"></p> -->

      <script>
        var tgl2 = <?php echo json_encode($tgl2); ?>;
        // Set the date we're counting down to
        var countDownDate = new Date(tgl2).getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("demo-1").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo-1").innerHTML = "EXPIRED";
          }
        }, 1000);


        var tgl3 = <?php echo json_encode($tgl3); ?>
        // Set the date we're counting down to
        var countDownDate = new Date(tgl3).getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("demo-2").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo-2").innerHTML = "EXPIRED";
          }
        }, 1000);
      </script>