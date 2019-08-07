

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
                          <th><center>Nomer Ticketing</center></th>
                          <th><center>User</center></th>
                          <th><center>Laporan</center></th>
                          <th><center>Kesulitan Laporan</center></th>
                          <th><center>Alasan</center></th>
                          <th><center>Tanggal Laporan</center></th>
                          <th><center>Jam Laporan</center></th>
                          <th><center>Jam Selesai</center></th>
                          <th><center>ID Perangkat</center></th>
                          <th><center>Jenis Perangkat</center></th>
                          <th><center>Lokasi Perangkat</center></th>  
                          <th><center>Status</center></th>
                      </tr>
                  </thead> 
                  <tbody>
                      <?php
                      $no = 1;
                      include '../config/koneksi.php';
                      $query = mysqli_query($konek, "SELECT * FROM tbl_laporan WHERE status = '2' ORDER BY ting_laporan = '1' DESC") or die(mysqli_error());
                        if(mysqli_num_rows($query) == 0){
                          echo '<tr><td colspan="14" align="center">Tidak ada data!</td></tr>';
                        }
                        else{
                          while ($data = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td><center><?php echo $no++; ?></center></td>
                            <td><?php echo $data['no_lap']; ?></td>
                            <td><?php echo $data['user']; ?></td>
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
                            <td><?php echo $data['tanggal_laporan']; ?></td>
                            <td><?php echo $data['jam_laporan']; ?></td>
                            <td><?php echo $data['jam_selesai']; ?></td>
                            <td><?php echo $data['id_perangkat']; ?></td>
                            <td><?php echo $data['jenis_perangkat']; ?></td>
                            <td><?php echo $data['lokasi_perangkat']; ?></td>  
                            <td><center>

                                 <a style="color: blue;" title="Selesai" style="color: white;">Selesai</a>

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