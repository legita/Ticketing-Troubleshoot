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