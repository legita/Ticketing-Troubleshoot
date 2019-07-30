

<div class="container-fluid">

        <!-- Breadcrumbs--><span id="countdown" class="timer"></span>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Laporan Masuk</li>
        </ol> 
        <?php
        $no = 1;
        include '../config/koneksi.php';
        $query = mysqli_query($konek, "SELECT * FROM tbl_laporan ORDER BY ting_laporan = '1' DESC") or die(mysqli_error());
          if(mysqli_num_rows($query) == 0){
            echo '<font colspan="14" align="center">Tidak ada data!</font>';
          }
          else{
            while ($data = mysqli_fetch_array($query)) {
              ?>

            <?php
               // echo '<b>'.$data['waktu'].'</b>';
              $date = strtotime($data['waktu']);
              $remaining = $date - time();
              $days_remaining = floor($remaining / 86400);
              $hours_remaining = floor(($remaining % 86400) / 3600);
              $minutes_remaining = floor(($remaining % 3600) / 60);
              $seconds_remaining = ($remaining % 60);

               if (($days_remaining < 1) && $data['status']=='0' OR $data['status']=='1'){ ?>
                   
<!--                     <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Pesan Alert Peringatan!<br>
                        <b>Ada 
                          <?php
                          include '../config/koneksi.php';

                          $edit    = "SELECT count(id_laporan) AS con FROM tbl_laporan WHERE status='1' OR status='0'";
                          $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                          $data    = mysqli_fetch_array($hasil);

                          echo $data['con'];
                          ?>
                        laporan yang telah melewati batas waktu !</b>
                    </div> -->
                    <?php

               }
                else{
               }
             }
           } ?>

            <!-- <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Pesan Alert Peringatan
            </div> -->
            
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
                          <th><center>Nomer Ticketing</center></th>
                          <th><center>Laporan</center></th>
                          <th><center>Alasan</center></th>
                          <th><center>Kesulitan Laporan</center></th>
                          <th><center>Tanggal Laporan</center></th>
                          <th><center>Waktu Pengerjaan</center></th>
                          <!-- <th><center>Pelapor</center></th> -->
                          <th><center>ID Perangkat</center></th>
                          <!-- <th><center>Jenis Perangkat</center></th> -->
                          <th><center>User</center></th>
                          <th><center>Lokasi Perangkat</center></th>
                          
                          
                          
                          <th><center>Aksi</center></th>
                      </tr>
                  </thead>
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
                            <td><?php echo $data['no_lap']; ?></td>
                            <td><?php echo $data['laporan']; ?></td>
                            <td><?php echo $data['alasan']; ?></td>
                            <td style="color:red;"><a href="../config/update_laporan.php?id=<?php echo $data['id_laporan'];?>&&ting_laporan=<?php echo $data['ting_laporan'];?>" title="Edit Data">
                              <?php
                                if ($data['ting_laporan']=='1'){
                                  echo '<font color="red"><b>Darurat</b></font>';
                                }
                                else {
                                 echo '<font color="blue"><b>Tidak Darurat</b></font>';
                                }
                              ?>
                            <sub><span class="fa fa-edit"></span></sub>
                            </a></td>
            
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

                              echo "<font color='green'><b>Selesai</b></font>";

                             } 

                             elseif(($days_remaining < 1) && $data['status']=='0' OR $data['status']=='1'){  
                                 /* $update = "UPDATE tbl_laporan SET waktu  = ''";
                                  $updateidjenis  = mysqli_query($konek, $update)or die(mysqli_error());*/
                                  echo "<font color='red'><b>Telah melebihi batas waktu</b></font>";
                                  
                             }
                              


                            
                            ?></td>
                            <!-- username -->
                            
                            <td><?php echo $data['id_perangkat']; ?></td>
                            <!-- jenis perangkat -->
                            <td><?php echo $data['user']; ?></td>
                            <td><?php echo $data['lokasi_perangkat']; ?></td>
                            
                            
                            <td style="color: white;"><center>
                              <?php 
                              if ($data['status']=='0'){ ?>
                                <a class="btn btn-danger" title="Tangani">Tangani</a>
                                  <?php }
                              elseif ($data['status']=='1') { ?>
                                 <a class="btn btn-success" title="Proses">Proses</a>
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
