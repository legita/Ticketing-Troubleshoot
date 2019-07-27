  <?php 
  if(isset($_GET['berhasil'])){
    echo "<p>".$_GET['berhasil']." Data berhasil di unggah.</p>";
  }
  ?>

<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Data Troubleshooting</li>
        </ol>
        <a href="index.php?halaman=tambah-trouble" class="btn btn-danger"><span class="fa fa-plus"></span> Tambah</a>

        <!-- <a href="coba_export.php"><button type="submit" id="submit" name="import" class="btn btn-info float-right">Unduh</button></a> -->
        <a href="csv_export.php" type="submit" name="import" class="btn btn-primary float-right"><span class="fa fa-download"></span> Unduh</a><hr>

        <div class="col-lg-5">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <!-- Upload data csv -->
            <form method="post" enctype="multipart/form-data" action="csv_import.php">
              <input type="file" name="file" id="file" accept=".csv" required="required">
              <button type="submit" id="submit" name="import" class="btn btn-info float-right">Unggah</button>
              <!-- <input name="filekeluhan" type="file" required="required"> -->
              <!-- <input name="upload" type="submit" value="Unggah" class="btn btn-info float-right"><span class="fa fa-upload"></span>Unggah</a> -->
            </form><br>
            
            <!-- Upload data excel -->
            <form method="post" enctype="multipart/form-data" action="import_excel.php">
              <div class="form-group">
                <label for="keluhan">Import Tweet:</label>
                <input type="file" class="form-control" name="excelfile">
            </div>
            <input type="submit" class="btn btn-success" id="form_simpan" name="form_simpan" value="Upload Data">
            </form>
          </li>
        </ol>
        </div>
        <hr>

        <hr>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-cog fa-spin"></i>
            Data Penanganan Troubleshooting</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" id="dataTable">
                  <thead>
                      <tr>
                          <th><center>No.</center></th>
                          <th><center>Masalah</center></th>
                          <th><center>Penanganan</center></th>
                          <th><center>Perangkat</center></th>
                          <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th><center>No.</center></th>
                          <th><center>Masalah</center></th>
                          <th><center>Penanganan</center></th>
                          <th><center>Perangkat</center></th>
                          <th><center>Aksi</center></th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <?php
                      $no = 1;
                      include '../config/koneksi.php';
                      $query = mysqli_query($konek, "SELECT * FROM tbl_keluhan") or die(mysqli_error());
                        if(mysqli_num_rows($query) == 0){
                          echo '<tr><td align="center">Tidak ada data!</td></tr>';
                        }
                        else{
                          while ($data = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td><center><?php echo $no++; ?></center></td>
                            <td><?php echo $data['keluhan']; ?></td>
                            <td><?php echo $data['penanganan']; ?></td>
                            <td><center><?php echo $data['perangkat']; ?></center></td>
                            <td><center>
                              <a href="index.php?halaman=edit-trouble&id=<?php echo $data['id_keluhan'];?>" title="Edit Data"><span class="fa fa-edit"></span></a>&nbsp;&nbsp;
                              <a href="../config/delete_trouble.php?id=<?php echo $data['id_keluhan'];?>" title="Hapus Data" onclick="return confirm('Hapus Data ini?');"><span class="fas fa-trash"></span></a></center>
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

<!-- ============================================================================================================ -->

<!-- PROSES TAMBAH CSV -->

<?php

include '../config/koneksi.php';

if (isset($_POST["import"])) {

    require_once __DIR__ . '/../vendor/autoload.php';

    //error_reporting(0);
                
    $initos = new \Sastrawi\Stemmer\StemmerFactory();
    $bikinos = $initos->createStemmer();
        $ak=getStopNumber();
        $ar=getStopWords();

    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");

       
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {

            $kalimat = $column[0];

            $kalimat=strtolower($kalimat); 
            $stemming=$bikinos->stem($kalimat);
            $stemmingnew=strtolower($stemming);


            $ak=getStopNumber();
            $ar=getStopWords();
            $wordStop=$stemmingnew;
            for($i=0;$i<count($ar);$i++){
             $wordStop =str_replace($ar[$i]." ","", $wordStop); 
            }

            for($i=0;$i<count($ak);$i++){
             $wordStop =str_replace($ak[$i],"", $wordStop); 
            }
            $stopword=str_replace("  "," ", $wordStop); 
            $stemming=trim($stopword);


            $cek = mysqli_num_rows(mysqli_query($konek,"SELECT * FROM tbl_keluhan WHERE keluhan='$kalimat'"));
            if ($cek > 0){

              echo "<script>alert('Terdapat Data yang Sama');</script>";

            } else{
           
                                                    

            $sqlInsert = "INSERT INTO tbl_keluhan(keluhan,penanganan,perangkat,normalisasi)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','".$stemming."')";
            $result = mysqli_query($konek, $sqlInsert);
            
            if ($result) {
                echo "<script>alert('Success! Data CSV Berhasil di Upload');</script>";
                echo "<script>location='index.php?halaman=data-trouble';</script>";
                
               
            } else {
                echo "<script>alert('Warning! Data Gagal di Upload');</script>";
                echo "<script>location='index.php?halaman=data-trouble';</script>";

                
                
            }
        }
          
        }
    }
}



?>