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



            } else{
           
                                                    

            $sqlInsert = "INSERT INTO tbl_keluhan(keluhan,penanganan,perangkat,normalisasi)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','".$stemming."')";
            $result = mysqli_query($konek, $sqlInsert);
            
            if ($result) {
                $type = "success";
                // $message = "Data CSV Diimpor ke dalam Database";
                echo "<font color='red'>SUCCESS!! Data CSV Diimpor ke dalam Database</font>";

                
               
            } else {
                $type = "error";
                // $message = "Masalah dalam Mengimpor Data CSV";
                echo "<font color='red'>ERROR!! Masalah dalam Mengimpor Data CSV</font>";

                
                
            }
        }
          
        }
    }
}

header("location:index.php?halaman=data-trouble");


// TEKS PROCESS

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



        function getStopWords()
    {
        return array(
            'yang', 'laptop', 'untuk', 'pada', 'ke', 'para', 'namun', 'menurut', 'antara', 'dia', 'dua', 'ia', 'seperti', 
            'jika', 'sehingga', 'kembali', 'dan', 'tidak', 'ini', 'karena', 'kepada', 'oleh', 'saat','saat', 'harus', 
            'sementara', 'setelah', 'belum', 'kami', 'sekitar', 'bagi', 'serta', 'di', 'dari', 'telah', 'sebagai', 
            'masih', 'hal', 'ketika', 'adalah', 'itu', 'dalam', 'bisa', 'bahwa', 'atau', 'hanya', 'kita', 'dengan', 
            'akan', 'juga', 'ada', 'mereka', 'sudah', 'saya', 'terhadap', 'secara', 'agar', 'lain', 'anda', 'begitu', 
            'mengapa', 'kenapa', 'yaitu', 'yakni', 'daripada', 'itulah', 'lagi', 'maka', 'tentang', 'demi', 'dimana', 
            'kemana', 'pula', 'sambil', 'sebelum', 'sesudah', 'supaya', 'guna', 'kah', 'pun', 'sampai', 'sedangkan', 
            'selagi', 'sementara', 'tetapi', 'tapi', 'apakah', 'kecuali', 'sebab', 'selain', 'seolah', 'seraya', 'seterusnya', 
            'tanpa', 'agak', 'boleh', 'dapat', 'dsb', 'dst', 'dll', 'dahulu', 'dulunya', 'anu', 'demikian', 'tapi', 
            'ingin', 'juga', 'nggak', 'mari', 'nanti', 'melainkan', 'oh', 'ok', 'seharusnya', 'sebetulnya', 'setiap', 
            'setidaknya', 'sesuatu', 'pasti', 'saja', 'toh', 'ya', 'walau', 'tolong', 'tentu', 'amat', 'apalagi', 
            'bagaimanapun', 'aku', 'sering', 'suka' , 'tiba', 'selalu', 'slalu', 'padahal', 'mau', 'kalian', 'komputer', 
            'computer', 'sendiri'
          );
    }


function getStopNumber()
    {
        return array(
            '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '!', '@', '#', '$', '%', '-'
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