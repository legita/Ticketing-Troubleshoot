<?php

session_start();
//error_reporting(0);

$id1 = $_SESSION['id'];
$id2 = session_id();



if($id1!=$id2) //jika belum ke login
{
header("location: index.php");
}

$username   = $_SESSION['username'];
$level      = $_SESSION['level'];

if(isset($_GET['halaman'])) $halaman = $_GET['halaman']; else $halaman="home";

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PT. Sebastian Jaya Metal</title>

  <!-- Site Icons -->
  <link rel="shortcut icon" href="../images/logos/logo.jpg" type="image/x-icon" />

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>


<!-- Notif Laporan -->
<?php
include '../config/koneksi.php';

    $queryNotif  = "SELECT * FROM tbl_laporan WHERE status = '1' OR status = '0'";
    $sqlNotif    = mysqli_query($konek,$queryNotif) or die (mysqli_error($konek));
    $countNotif  = mysqli_num_rows($sqlNotif);

?>


<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark static-top" style="background-color: #3300FF;">

    <a class="navbar-brand mr-1" href="index.html"><?php echo $level ?> IT</a>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        
        <div class="input-group-append">
         
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
       <?php include 'notif.php'; ?>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <br>
      <li class="text-center">
          <img src="../images/find_user.png" class="user-image img-responsive"/>
      </li><br>
      <li class="nav-item active">
        <a href="index.php" class="nav-link"><i class="fas fa-fw fa-home"></i> Home</a>
      </li>

      <?php
          if($level=="Admin")
             {
                  include ('halaman-admin.php');  
             }
          elseif($level=="Staff")
              {
                  include ('halaman-staff.php');
              }
          ?>
    </ul>

    <div id="content-wrapper">

      <?php

      if($halaman=="home")                             include "home.php"; 
            else if($halaman=="management-user")       include "management-user.php"; 
            else if($halaman=="edit-user")             include "edit-user.php";

            else if($halaman=="management-idperangkat") include "management-idperangkat.php";
            else if($halaman=="edit-idperangkat")       include "edit-idperangkat.php";
            
            else if($halaman=="management-komputer")   include "management-komputer.php";
            else if($halaman=="edit-komputer")         include "edit-komputer.php";
            else if($halaman=="tambah-komputer")       include "tambah-komputer.php";

            else if($halaman=="data-trouble")          include "data-trouble.php";
            else if($halaman=="edit-trouble")          include "edit-trouble.php";
            else if($halaman=="tambah-trouble")        include "tambah-trouble.php";

            else if($halaman=="keluhan")               include "keluhan.php";
            else if($halaman=="laporan")               include "laporan.php";
            else if($halaman=="laporan-masuk")         include "laporan-masuk.php";
            else if($halaman=="laporan-selesai")       include "laporan-selesai.php";
            else if($halaman=="histori-keluhan")       include "histori-keluhan.php";

            else if($halaman=="komentarmenu")          include "komentarmenu.php";
            else if($halaman=="komentarweb")           include "komentarweb.php";
            else if($halaman=="edit-komen")            include "edit-komen.php";
            else if($halaman=="edit-komentar")         include "edit-komentar.php";
                  
            else if($halaman=="rekap")                 include "rekap.php";
            else if($halaman=="chart")                 include "chart.php";
        

      ?>

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>© PT. Sebastian Jaya Metal | Gita Apriyani</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Keluar ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih Tombol "Keluar" di bawah ini jika Anda ingin keluar.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="../config/logout.php">Keluar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

  <script>
  var last = 0;
  function check(){
      var url = 'cek.php?last='+last;
      $.get(url, {}, function(resp){
          if(resp.result != false){
              $("#notif").html(resp.result);
              last = resp.last;
          }
          setTimeout("check()", 1000);
      }, 'json');
  }
  $(document).ready(function(){
      check();
  });
  </script>


<!-- ================================================================================================== -->

  <!-- HITUNGAN -->
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
              'yang', 'untuk', 'laptop', 'pada', 'ke', 'para', 'namun', 'menurut', 'antara', 'dia', 'dua', 'ia', 
              'seperti', 'jika', 'sehingga', 'kembali', 'dan', 'tidak', 'ini', 'karena', 'kepada', 'oleh', 'saat',
              'saat', 'harus', 'sementara', 'setelah', 'belum', 'kami', 'sekitar', 'bagi', 'serta', 'di', 'dari', 
              'telah', 'sebagai', 'masih', 'hal', 'ketika', 'adalah', 'itu', 'dalam', 'bisa', 'bahwa', 'atau', 
              'hanya', 'kita', 'dengan', 'akan', 'juga', 'ada', 'mereka', 'sudah', 'saya', 'terhadap', 'secara', 
              'agar', 'lain', 'anda', 'begitu', 'mengapa', 'kenapa', 'yaitu', 'yakni', 'daripada', 'itulah', 'lagi', 
              'maka', 'tentang', 'demi', 'dimana', 'kemana', 'pula', 'sambil', 'sebelum', 'sesudah', 'supaya', 'guna', 
              'kah', 'pun', 'sampai', 'sedangkan', 'selagi', 'sementara', 'tetapi', 'tapi', 'apakah', 'kecuali', 
              'sebab', 'selain', 'seolah', 'seraya', 'seterusnya', 'tanpa', 'agak', 'boleh', 'dapat', 'dsb', 'dst', 
              'dll', 'dahulu', 'dulunya', 'anu', 'demikian', 'tapi', 'ingin', 'juga', 'nggak', 'mari', 'nanti', 
              'melainkan', 'oh', 'ok', 'seharusnya', 'sebetulnya', 'setiap', 'setidaknya', 'sesuatu', 'pasti', 'saja', 
              'toh', 'ya', 'walau', 'tolong', 'tentu', 'amat', 'apalagi', 'bagaimanapun', 'aku', 'sering', 'suka', 
              'tiba', 'selalu', 'slalu', 'padahal', 'mau', 'kalian', 'komputer', 'computer', 'sendiri', 'terlalu', 
              'laptop'
            );
      }


  function getStopNumber()
      {
          return array(
              '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '!', '@', '#', '$', '%','-'
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
