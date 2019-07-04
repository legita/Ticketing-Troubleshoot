<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Rekap Ticketing Troubleshooting</li>
        </ol> 
        

                      <form action="" method="POST">
                      <table class="table table-striped table-bordered table-hover">
                        <thead>
                          <tbody>

                            <tr>
                            <td>
                              <select type="text" name="bln" class="form-control">
                                              <option>--Pilih--</option>
                                              <option value="01">Januari</option>
                                              <option value="02">Februari</option>
                                              <option value="03">Maret</option>
                                              <option value="04">April</option>
                                              <option value="05">Mei</option>
                                              <option value="06">Juni</option>
                                              <option value="07">Juli</option>
                                              <option value="08">Agustus</option>
                                              <option value="09">September</option>
                                              <option value="10">Oktober</option>
                                              <option value="11">November</option>
                                              <option value="12">Desember</option>
                                            </select>
                            </td>
                            <td>
                            <select name="thn" class="form-control">
                            <?php
                            $mulai= date('Y') - 50;
                            for($i = $mulai;$i<$mulai + 100;$i++){
                                $sel = $i == date('Y') ? ' selected="selected"' : '';
                                echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                            }
                            ?>
                            </select>
                            </td>

                            <td align="center"><button type="submit" class="btn btn-info btn-block" name="cari">Pilih</button></td>
                            </tr>
                            </table>


                            <?php

                              if(isset($_POST['cari'])){

                                $bln = $_POST['bln'];
                                $thn = $_POST['thn'];
                              
                            ?>


                              <script>

                              window.location = 'index.php?halaman=rekap&&bln=<?php echo $bln; ?>&&thn=<?php echo $thn; ?>';

                              </script>


                              <?php
                              }
                              
                              ?>

                            <?php
                              if(isset($_GET['bln'])&& isset($_GET['thn'])){
                             
                              ?>
                               </form>

                      <a href="cetak-report.php?print=1&bln=<?php echo $_GET['bln'];?>&thn=<?php echo $_GET['thn']; ?>" target ="_blank" role="button" class="btn btn-primary pull-right" style="margin-right:16px;margin-bottom:10px;width:150px"><span class="fa fa-print"></span> Cetak Report</a>

                    <!-- DataTables Example -->
                    <div class="card mb-3">
                      <div class="card-header">
                        <i class="fas fa-fw fa-table"></i> Data Rekap</div>
                      <div class="card-body">
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTable">
                        <thead>
                          <tbody>
                        <tr>
                            <th class="bg-info"><center>No</center></th>
                            <th class="bg-info"><center>Tanggal Laporan</center></th>
                            <th class="bg-info"><center>Tanggal Dikerjakan</center></th>
                            <th class="bg-info"><center>Tanggal Selesai</center></th>
                            <th class="bg-info"><center>No Ticketing</center></th>
                            <th class="bg-info"><center>Username</center></th>
                            <th class="bg-info"><center>id_perangkat</center></th>
                            <th class="bg-info"><center>jenis_perangkat</center></th>
                            <th class="bg-info"><center>Penganggung Jawab</center></th>
                            <th class="bg-info"><center>Lokasi Perangkat</center></th>
                            <th class="bg-info"><center>Laporan Masalah</center></th>
                            <th class="bg-info"><center>Catatan</center></th>
                            <th class="bg-info"><center>Status</center></th>
                        </tr>

                    <?php

                    $bln = $_GET['bln'];
                    $thn = $_GET['thn'];
                    
                    include '../config/koneksi.php'; 

                    $no = 1;
                    $query1 = "SELECT * FROM tbl_laporan where month(tgl_laporan) = '$bln' and year(tgl_laporan) = '$thn'";

                    $tampil1 = mysqli_query($konek, $query1);


                    ?>


                    <?php
                    if(!mysqli_num_rows($tampil1)) {
                      echo "No posts yet";

                    } else {
                    while($row = mysqli_fetch_array($tampil1)) { ?>
                        <tr>
                            <td><center><?php echo $no++; ?></center></td>
                            <td><center><?php echo $row['tgl_laporan']; ?></center></td>
                            <td><center><?php echo $row['tgl_kerjakan']; ?></center></td>
                            <td><center><?php echo $row['tgl_selesai']; ?></center></td>
                            <td><center><?php echo $row['no_lap']; ?></center></td>   
                            <td><center><?php echo $row['username']; ?></center></td>   
                            <td><center><?php echo $row['id_perangkat']; ?></center></td>   
                            <td><center><?php echo $row['jenis_perangkat']; ?></center></td>   
                            <td><center><?php echo $row['user']; ?></center></td>   
                            <td><center><?php echo $row['lokasi_perangkat']; ?></center></td>   
                            <td><center><?php echo $row['laporan']; ?></center></td>      
                            <td><center><?php echo $row['alasan']; ?></center></td>
         
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


                    <?php }

                    ?>
                  

                    <?php }
                    ?>


                    <?php }
                    ?>

                  </tbody>
                  
                </thead>
              </table>
                </div>
              </div>
        </div>

      <!-- /.container-fluid -->