        <!-- /. NAV SIDE  -->
        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Tambah Trouble</li>
            </ol>
              <!-- Welcome -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h2 style="color: maroon;"> &nbsp;&nbsp;&nbsp; Form Tambah Trouble</h2>
                </div>
                <div class="panel-heading">        
                  <div class="panel-body">
                    <div class="card mb-3"><br>
                   <form action="" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id_keluhan" class="form-control" id="id_keluhan" required></label>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                        <label class="col-md-2">Keluhan</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">          
                          <textarea type="text" name="keluhan" class="form-control" placeholder="Isi Trouble" required></textarea>
                        </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                        <label class="col-md-2">Penanganan</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">          
                          <textarea type="text" name="penanganan" class="form-control" placeholder="Isi Penanganan Masalah" required></textarea>
                        </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                          <label class="col-md-2" for="perangkat">Perangkat</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-7">
                          <select class="form-control" id="perangkat" name="perangkat">
                            <option>-- Perangkat --</option>
                            <option>Hardware</option>
                            <option>Software</option>
                            <option>Jaringan</option>
                          </select>
                          </div>
                      </div>

                      <br>
                        <div style="float: right;">
                          <button type="submit" nama="input" class="btn btn-primary" id="simpan" name="simpan">Tambah</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                       
                          <a href="?halaman=data-trouble" class="btn btn-danger">Kembali</a>&nbsp;&nbsp;&nbsp;&nbsp; 
                        </div>
                    </form>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>

<!-- =========================================================================================================== -->

<!-- PROSES -->
<?php
if (isset($_POST['simpan'])) 
{

    include'../config/koneksi.php';
   
    $keluhan      = $_POST['keluhan'];
    $penanganan   = $_POST['penanganan'];
    $perangkat    = $_POST['perangkat'];
  
    require_once __DIR__ . '/../vendor/autoload.php';

    //error_reporting(0);
          
    $initos = new \Sastrawi\Stemmer\StemmerFactory();
    $bikinos = $initos->createStemmer();
      $ak=getStopNumber();
      $ar=getStopWords();



      $keluhan=strtolower($keluhan); 
      $stemming=$bikinos->stem($keluhan);
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

  $cek = mysqli_num_rows(mysqli_query($konek,"SELECT * FROM tbl_keluhan WHERE keluhan='$keluhan'"));
  if ($cek > 0){
    echo "<script>alert('Terdapat Data yang Sama');</script>";

  } else{

  $add = "INSERT INTO tbl_keluhan (id_keluhan, keluhan,normalisasi,penanganan,perangkat)
  VALUES ('','$keluhan','$stemming','$penanganan','$perangkat')";
  $query = mysqli_query($konek, $add) or die(mysqli_error($konek));


  if($query){
    echo "<script>alert('Success! Data Berhasil di Tambah');</script>";
    echo "<script>location='index.php?halaman=data-trouble';</script>";
    }
    else{
        echo "<script>alert('Warning! Data Gagal di Tambah');</script>";
        echo "<script>location='index.php?halaman=data-trouble';</script>"; 
    }
}
}

    
?>
