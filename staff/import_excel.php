<?php
include '../config/koneksi.php';

 if(isset($_POST['form_simpan'])){
    $tanggal=date("Y-m-d");
        require_once 'Excel/reader.php';
        $data = new Spreadsheet_Excel_Reader();
        $data->setOutputEncoding('CP1251');
        $filename = $_FILES['excelfile']['tmp_name'];
        $data->read($filename);//'Book1.xls');
    $n=0;
        for ($x = 2; $x <= count($data->sheets[0]["cells"]); $x++) {
            // $id_datauji = $data->sheets[0]["cells"][$x][1];
      $keluhan = $data->sheets[0]["cells"][$x][1];
      //$normalisasi = $data->sheets[0]["cells"][$x][2];
      $penanganan = $data->sheets[0]["cells"][$x][2];
      $perangkat = $data->sheets[0]["cells"][$x][3];

            //NIDN Nama Dosen   JK  Status Pegawai  Pendidikan Terakhir Jabatan Akademik    ID Prodi    Jenj. Pend. Prodi   Nama Prodi
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



        } else{
        

    $n++;
    $sql="INSERT INTO tbl_keluhan (
        `id_keluhan`,
        `keluhan`, 
        `normalisasi`,
        `penanganan`,
        'perangkat'
        ) VALUES (
        `$id_keluhan`,
        `$keluhan`, 
        `$stemming`,
        `$penanganan`,
        '$perangkat'

        )";
    
$simpan=process($konek,$sql);
 
 }//for
 
 
 echo "<script>alert('Import Berhasil sebanyak $n data !');document.location.href='?halaman=data-trouble';</script>";
 // TEKS PROCESS
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
}}
?>