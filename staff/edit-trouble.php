<?php

  error_reporting();

  include '../config/koneksi.php';

  $id_keluhan = $_GET['id'];

  $edit    = "SELECT * FROM tbl_keluhan WHERE id_keluhan = '$id_keluhan'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="index.php?halaman=data-trouble">Data Troubleshooting</a>
          </li>
          <li class="breadcrumb-item active">Edit Data Trouble</li>
        </ol>

        <!-- Edit Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-edit"></i>
            Ubah Data Trouble</div>
          <div class="card-body">
          <form action=" " method="POST" class="form-horizontal" enctype="multipart/form-data">
            <input type="hidden" name="id_keluhan" value="<?php echo $data['id_keluhan']; ?>">
            <div class="form-group input-group">
            <div class="col-md-1"></div>
              <label class="col-md-3">Keluhan</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">          
                <textarea type="text" name="keluhan" class="form-control" id="keluhan" required><?php echo $data['keluhan'];?></textarea>
              </div>
            </div>
            <div class="form-group input-group">
            <div class="col-md-1"></div>
              <label class="col-md-3">Penanganan</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
                <textarea type="text" class="form-control" id="penanganan" name="penanganan" required><?php echo $data['penanganan'];?></textarea>
              </div>
            </div>
            <div class="form-group input-group">
              <label class="col-md-1"></label>
                <label class="col-md-3" for="perangkat">Perangkat</label>
                <label class="col-md-1">:</label>
                <div class="col-md-6">
                <select class="form-control" id="perangkat" name="perangkat">
                  <option><?php echo $data['perangkat'];?>"</option>
                  <option>Jaringan</option>
                  <option>Software</option>
                  <option>Hardware</option>
                </select>
                </div>
            </div>

            <hr>
              <div style="float: right;">
                <button type="submit" name="simpan" id="simpan" class="btn btn-primary">Ubah</button>
                <a href="?halaman=data-trouble" class="btn btn-danger">Batal</a>&nbsp;&nbsp; 
              </div><br>
          </form>
        </div>
</div>

<!-- =========================================================================================================== -->

<!-- PROSES UPDATE -->
<?php
if (isset($_POST['simpan'])) 
{

    include'../config/koneksi.php';
   
    $id_keluhan    = $_POST['id_keluhan'];
    $keluhan       = $_POST['keluhan'];
    $penanganan    = $_POST['penanganan'];
    $perangkat     = $_POST['perangkat'];
  
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

  // $cek = mysqli_num_rows(mysqli_query($konek,"SELECT * FROM tbl_keluhan WHERE keluhan='$keluhan'"));
  
  // if ($cek > 0){
    
  //   echo "<script>alert('Terdapat Data yang Sama');</script>";

  // } else{

    $update = "UPDATE tbl_keluhan SET keluhan      = '$keluhan',
                                  normalisasi      = '$stemming',
                                  penanganan       = '$penanganan',
                                  perangkat        = '$perangkat'
                                  WHERE id_keluhan = '$id_keluhan'";

    $updateidkom  = mysqli_query($konek, $update)or die(mysqli_error());

  if ($updateidkom)
      {
        echo "<script>alert('Success! Data Berhasil di Ubah');</script>";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=index.php?halaman=data-trouble">';
      }
  else {
        print"
          <script>
            alert(\"Warning! Data Gagal di ubah!\");
            history.back(-1);
          </script>";
      }

  }
// }
    

?>