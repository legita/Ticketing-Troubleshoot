

<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Keluhan Masuk</li>
        </ol> 
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-desktop"></i>
            Keluhan Troubleshooting</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" id="dataTable">
                  <thead>
                      <tr>
                          <th><center>No.</center></th>
                          <th><center>Pelapor</center></th>
                          <th><center>Keluhan</center></th>
                          <th><center>Penanganan</center></th>
                          <th><center>Perangkat</center></th>
                          <th><center>Tanggal</center></th>
                          <th><center>Status Berhasil</center></th>
                      </tr>
                  </thead> 
                  <tbody>
                      <?php
                      $no = 1;
                      include '../config/koneksi.php';
                       $query = mysqli_query($konek, "SELECT * FROM tbl_datauji where flag = '1'") or die(mysqli_error());
                        if(mysqli_num_rows($query) == 0){
                          echo '<tr><td colspan="14" align="center">Tidak ada data!</td></tr>';
                        }
                        else{
                          while ($data = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td><center><?php echo $no++; ?></center></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['keluhan']; ?></td>
                            <td><?php echo $data['penanganan']; ?></td>
                            <td><?php echo $data['perangkat']; ?></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td style="color:red;">
                              <?php
                                if ($data['berhasil']=='1'){
                                  echo '<font color="blue"><b>Berhasil di Tangani</b></font>';
                                }
                                else {
                                 echo '<font color="green"><b>Tidak Dapat Ditangani</b></font>';
                                }
                              ?>
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