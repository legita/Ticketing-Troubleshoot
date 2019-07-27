

<div class="container-fluid">

        <!-- Breadcrumbs--><span id="countdown" class="timer"></span>
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
                            <td><?php echo $data['id_user']; ?></td>
                            <td><?php echo $data['tgl_laporan']; ?></td>
                            <td><?php
                             echo '<b>'.$data['waktu'].'</b>';
                            $date = strtotime($data['waktu']);
                            $remaining = $date - time();
                            $days_remaining = floor($remaining / 86400);
                            $hours_remaining = floor(($remaining % 86400) / 3600);
                            $minutes_remaining = floor(($remaining % 3600) / 60);
                            $seconds_remaining = ($remaining % 60);
                            echo "<p>$days_remaining <span'>hari</span> $hours_remaining <span style='font-size:;'>jam</span> $minutes_remaining <span style='font-size:;'>menit</span> $seconds_remaining <span style='font-size:;'>detik</span></p>";
                            ?></td>
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



