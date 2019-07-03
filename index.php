<?php 
 
 include 'config/koneksi.php';
 
error_reporting(0);
session_start();

if(isset($_GET['halaman'])) $halaman = $_GET['halaman'];
  else $halaman = "index";
  
  $id = session_id();
  $id = $_SESSION ['id'];

?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>PT. Sebastian Jaya Metal</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logos/logo.jpg" type="image/x-icon" />
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">


    <!-- Modernizer for Portfolio -->
    <script src="assets/js/modernizer.js"></script>

    <link href="staff/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">


<style>
body {
  margin: 0;
  font-family: Modeka;
  font-size: 17px;
}
</style>
</head>
<body>

<?php include 'loader.php'; ?>
    
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="right-top">
                        <div class="social-box">
                            <ul>
                                <li>
                                    <a href="https://id-id.facebook.com/PTSJM/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true" title="facebook"></i></a></li>
                                <li>
                                    <a href="https://www.instagram.com/ptsebastianjayametal/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" title="instagram"></i></a></li>
                                <li>
                                    <a href="https://id.linkedin.com/company/pt-sebastian-jaya-metal" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true" title="linedin"></i></a></li>
                                <li>
                                    <a href="https://twitter.com/sjm_jb" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true" title="twitter"></i></a></li>
                            <ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="left-top">
                        <div class="email-box">
                            <?php
                            if(!isset($_SESSION['id']))
                              { ?>
                            <a href="http://www.gmail.com" title="email" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@sebastianjayametal.com</a>
                            <?php }
                              else { ?>
                            <a href="http://www.gmail.com" title="email" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i> itjb.sjm@gmail.com</a>
                            <?php } ?>
                        </div>
                        <div class="phone-box">
                            <?php
                            if(!isset($_SESSION['id']))
                              { ?>
                            <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> (021) 8984 3516</a>
                            <?php }
                              else { ?>
                            <a href="#"><i class="fa fa-phone" aria-hidden="true"> IT</i> (085) 6711 5593 </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="images/logos/logo.png" alt="image"></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="index.php?halaman=index" style="font-size: 18px;">| Home |</a></li>
                        <?php
                        if(!isset($_SESSION['id']))
                          { ?>
                        <li><a href="index.php?halaman=About" style="font-size: 18px;">| Tentang |</a></li>
                        <?php }
                          else { ?>
                        <li><a href="index.php?halaman=Trouble" style="font-size: 18px;">| Masalah Troubleshooting |</a></li>
                        <li><a href="index.php?halaman=History" style="font-size: 18px;">| Histori Penanganan |</a></li>
                        <?php } ?>

                        <?php
                        
                          if(!isset($_SESSION['id']))
                          {
                            include 'login.php';
                          }
                          else {
                            include 'logout.php';
                          }
                        
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <?php

          if($halaman=='index'){
            include 'awal.php';
          } 

          elseif ($halaman=='About') {
            include 'about-us.php';
          }

          elseif ($halaman=='Trouble') {
            include 'trouble.php';
          }

          elseif ($halaman=='History') {
            include 'history.php';
          }

          elseif ($halaman=='Contact') {
            include 'kontak.php';
          }

          elseif ($halaman=='coba') {
            include 'coba.php';
          }

          elseif ($halaman=='DataKeluhan') {
            include 'data-keluhan.php';
          }

          elseif ($halaman=='hitungin') {
            include 'hitungin.php';
          }

        ?>

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name" style="color:#cdd51f;"> <a href="https://www.unsada.ac.id" title="Universitas Darma Persada" target="_blank">Universitas Darma Persada</a> | Gita Apriyani. &copy; 2019 | <a href="http://www.sebastianjayametal.com/" title="PT. Sebastian Jaya Metal" target="_blank">PT. Sebastian Jaya Metal</a>
                    </p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    
    <!-- ALL JS FILES -->
    <script src="assets/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/portfolio.js"></script>
    <script src="assets/js/hoverdir.js"></script>    
 

<?php
function process($konek,$sql){
$s=false;
$konek->autocommit(FALSE);
try {
  $rs = $konek->query($sql);
  if($rs){
      $konek->commit();
      $last_inserted_id = $konek->insert_id;
    $affected_rows = $konek->affected_rows;
      $s=true;
  }
} 
catch (Exception $e) {
  echo 'fail: ' . $e->getMessage();
    $konek->rollback();
}
$konek->autocommit(TRUE);
return $s;
}

function getJum($konek,$sql){
  $rs=$konek->query($sql);
  $jum= $rs->num_rows;
  $rs->free();
  return $jum;
}

function getField($konek,$sql){
  $rs=$konek->query($sql);
  $rs->data_seek(0);
  $d= $rs->fetch_assoc();
  $rs->free();
  return $d;
}

function getData($konek,$sql){
    //echo "##".$sql."##";
  $rs=$konek->query($sql);
  $rs->data_seek(0);
  $arr = $rs->fetch_all(MYSQLI_ASSOC);
  //foreach($arr as $row) {
  //  echo $row['nama_kelas'] . '*<br>';
  //}
  
  $rs->free();
  return $arr;
}


function getHit($kal,$kalimat){
$ada=0;
if(preg_match("/$kal/i", $kalimat)) {
    $ada=1;
    }
    return $ada;
}


 function getHit2($kal,$kalimat){
    //echo $kal."=".$kalimat."#<br>";
  $ar=explode(" ",$kalimat);
  $ada=0;
  for($i=0;$i<count($ar);$i++){
     if($kal==$ar[$i]){$ada++;}
   }//for
  return $ada;
  } 
 ?>
  
    <?php
function swap(&$arr, $a, $b) {
    $tmp = $arr[$a];
    $arr[$a] = $arr[$b];
    $arr[$b] = $tmp;
}
?>
    
<?php
function getStopWords()
    {
        return array(
            'yang', 'untuk', 'pada', 'ke', 'para', 'namun', 'menurut', 'antara', 'dia', 'dua', 'ia', 
            'seperti', 'jika', 'sehingga', 'kembali', 'dan', 'ini', 'karena', 'kepada', 'oleh', 'harus', 
            'sementara', 'setelah', 'belum', 'kami', 'sekitar', 'bagi', 'serta', 'dari', 'telah', 
            'sebagai', 'masih', 'hal','ketika', 'adalah', 'itu', 'dalam', 'bisa', 'bahwa', 'atau', 'hanya', 
            'kita', 'dengan', 'juga', 'ada', 'mereka', 'sudah', 'saya', 'terhadap', 'agar', 'lain', 'anda', 
            'begitu', 'mengapa', 'kenapa', 'yaitu','yakni', 'daripada', 'itulah', 'lagi', 'maka', 'tentang', 
            'demi', 'dimana', 'kemana', 'pula', 'sambil','sebelum', 'sesudah', 'supaya', 'kah', 'pun', 
            'sampai', 'sedangkan', 'selagi', 'sementara', 'tetapi', 'apakah', 'kecuali', 'sebab', 'selain',
            'seolah', 'seraya', 'seterusnya', 'tanpa', 'agak', 'boleh', 'dapat', 'dsb', 'dst', 'dll', 
            'dahulu', 'dulunya', 'anu', 'demikian', 'tapi', 'ingin', 'juga', 'nggak', 'mari', 'nanti', 
            'melainkan', 'oh', 'ok', 'seharusnya', 'sebetulnya', 'setidaknya', 'sesuatu', 'pasti', 'saja', 
            'toh', 'ya', 'walau', 'tolong', 'tentu', 'amat', 'apalagi', 'bagaimanapun', 'aku'
        );
    }


function getStopNumber()
    {
        return array(
            '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '!', '@', '#', '$', '%'
        );
    }
 
 
function Netral($bikinos,$keluhan,$ak,$ar){
    $keluhankal=strtolower($keluhan);
    $stemming=$bikinos->stem($keluhankal);
    $stemmingnew=strtolower($stemming);

$wordStop=$stemmingnew;
for($i=0;$i<count($ar);$i++){
 $wordStop =str_replace(" ".$ar[$i]." "," ", $wordStop); 
}

for($i=0;$i<count($ak);$i++){
 $wordStop =str_replace($ak[$i],"", $wordStop); 
}
$keluhanuji=str_replace("  "," ", $wordStop); 
return $keluhanuji;
}


function getUnix($array){
error_reporting(0);
$unique = array_flip(array_flip($array));
//print_r($unique);
$jd=count($array);
//echo $jd."#<br>";
$m=0;
for($i=0;$i<$jd;$i++){
 if(strlen($unique[$i])>0){
  //echo "$m =".$unique[$i]."<br>";
  $M[$m]=$unique[$i];
  $m++;
 }
}
 return $M;
}
?>
</body>
</html>

