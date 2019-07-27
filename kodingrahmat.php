<?php

	$id_komplain=$_GET["id"];
	$sql="select * from `$tbkomplain` where `id_komplain`='$id_komplain'";
	$d=getField($conn,$sql);
				$id_komplain=$d["id_komplain"];
				$id_customer=getCustomer($conn,$d["id_customer"]);
				$id_auto=$d["id_auto"];
				$tgl=WKT($d["tgl"]);
				$jam=$d["jam"];
				$pesan=$d["pesan"];
				$keterangan=$d["keterangan"];
				$komentar=getNorm($pesan);
$komentar=$komentar;
?>


<div id="accordion">
  <h4>Info Data Perhitungan TFIDF</h4>
  <div>
<table width="100%">
        <tr>
          <td width="166" ><label for="id_komplain">Id Komplain</label>
          <td width="19">:
          <td width="397" colspan="2"><b><?php echo $id_komplain;?></b>
        </tr>
        <tr>
          <td ><label for="pesan">Komplain / Komentar</label>
          <td>:
          <td><?php echo $pesan;?></td>
        </tr>
		
		  <tr>
          <td ><label for="komentar">Stemming</label>
          <td>:
          <td><?php echo $komentar;?></td>
        </tr>
    <tr>
<td><label for="penilaian">Tanggal</label>
<td>:<td colspan="2"><?php echo "$tgl$jam WIB";?>
</td></tr>
         <tr>
          <td ><label for="komentar">Keterangan</label>
          <td>:
          <td><?php echo $keterangan;?></td>
        </tr>
</table>

</div>

<?php
require_once __DIR__ . '/vendor/autoload.php';

error_reporting(0);

$initos = new \Sastrawi\Stemmer\StemmerFactory();
$bikinos = $initos->createStemmer();

$pesan=strtolower($pesan);
$stemming=$bikinos->stem($pesan);
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
$stemming=str_replace("  "," ", $wordStop); 
//=====================================================	
			
 $sql="select * from `$tbauto`  order by `id_auto` asc ";		//					
	$arr=getData($conn,$sql);
	$i=0;
	$arStem[0]=$stemming;
	$gabungan=$stemming." ";
		foreach($arr as $d) {							
				$id_auto0=$d["id_auto"];
				$pertanyaan=$d["pertanyaan"];
				$jawaban=$d["jawaban"];
				$komentarfilter=$d["keterangan"];	//normalisasi			
				$gabungan.=$komentarfilter." ";
				
				$arKode[$i+1]=$id_auto0;
				$arTanya[$i+1]=$pertanyaan;
					$arStem[$i+1]=$komentarfilter;
					$arDoc[$i+1]=$komentarfilter;
					$arKe[$i+1]="Pertanyaan ke-".($i+1);
					$arJawab[$i+1]=$jawaban;
				
				$TOT[$i]=0;
			$i++;		
		}
		$jumk=$i;
 //====================================== 
 
 $arAsli=explode(" ",$gabungan);
 $arUnix0=array_unique($arAsli);
  
  $ii=0;
  for($i=0;$i<count($arUnix0);$i++){
	  if($arUnix0[$i]==""){}
	  else{
		  $arUnix[$ii]=$arUnix0[$i];
		  $ii++;
		}
	  }
	  
 $jumb=count($arUnix);
 
echo"<table width='300%' border='1'>";
echo"<tr><td>Kata";
echo"<td>Q";
 for($i=0;$i<$jumk;$i++){
  $u=$i+1;
  echo"<td>D".$u; 
 }
 echo"<td>df";
 echo"<td>IDF";
 echo"<td>QDF";
 for($i=0;$i<$jumk;$i++){
	  $u=$i+1;
	  echo"<td>QD".$u; 
 }

  for($i=0;$i<$jumk;$i++){
  	$u=$i+1;
  	echo"<td>QDFD".$u; 
 }

echo"<td>Q<sup>2</sup>";
  for($i=0;$i<$jumk;$i++){
  	$u=$i+1;
  	echo"<td>D<sup>2</sup>".$u; 
 }


echo"</tr>";
 
 $bar=count($arUnix);
 for($i=0;$i<$bar;$i++){
  $kata=$arUnix[$i];
  $hitung=0;
 echo"<tr><td>".$kata."</td>";
 $jumada=0;
 
   for($j=0;$j<$jumk+1;$j++){
    $ada=getHit($kata,$arStem[$j]);
    $M[$i][$j]=$ada;
    if($ada>0){
		$jumada++;
	}
	echo"<td>".$ada;
   }
 // $log=log($jumk+1,10)/$jumada; 
  $log=log(($jumk)/$jumada,10); 
 $log=abs($log);
 echo"<td>$jumada</td>";//idf
 echo"<td>log($jumk/$jumada)=$log";
 
   for($j=0;$j<$jumk+1;$j++){
		$N[$i][$j]=$M[$i][$j] * $log;
		$N2[$i][$j]=pow($N[$i][$j],2);
		
		$TOT[$j]=$TOT[$j]+$N[$i][$j];
		echo "<td>".$N[$i][$j];
   }
   
  for($j=1;$j<$jumk+1;$j++){
    $NN[$i][$j-1]=$N[$i][0] * $N[$i][$j];
    echo "<td>".$NN[$i][$j-1];
   }


  for($j=0;$j<$jumk+1;$j++){
    echo "<td>".$N2[$i][$j];
   }
   
 echo"</tr>"; 
 }//for i


   for($j=0;$j<$jumk;$j++){//kolom
	  $TOT1[$j]=0;
	  	for($k=0;$k<$bar;$k++){//baris
    		$TOT1[$j]+=$NN[$k][$j];
		}
   }

	  for($j=0;$j<$jumk+1;$j++){
			$TOT2[$j]=0;
			for($k=0;$k<$bar;$k++){//baris
					$TOT2[$j]+=$N2[$k][$j];
			}
	   }
   
//------------------------------------
echo"<tr><td>Kata";
echo"<td>Q";
 for($i=0;$i<$jumk;$i++){
  $u=$i+1;
  echo"<td>D".$u; 
 }
 echo"<td>df";
 echo"<td>IDF";
 echo"<td>QDF";
 for($i=0;$i<$jumk;$i++){
	  $u=$i+1;
	  echo"<td>QD".$u; 
 }

  for($i=0;$i<$jumk;$i++){
  	echo"<td>".$TOT1[$i]; 
 }

  for($i=0;$i<$jumk+1;$i++){
  	echo"<td>".$TOT2[$i]; 
 }



echo"</tr>";

echo"</table>"; 

$catatan="";
$reakpitulasi="";
$Q=pow($TOT2[0],0.5);



$gab="Qvalue=$TOT2[0]<sup>0.5</sup> =".$Q."<br><br>";
$gab.="Cosine Similarity Terhadap tiap-tiap dokumen:<br>";

$max=0;
$index=0;

 for($i=1;$i<$jumk;$i++){
	$E=pow($TOT2[$i],0.5);
	$ES=$TOT2[$i]."<sup>0.5</sup>";
	$QS=$TOT2[0]."<sup>0.5</sup>";
	
	$D=pow(($TOT1[$i]*$TOT2[0]),0.5);
	$DS="(".$TOT2[0]." x ".$TOT1[$i].")<sup>0.5</sup>";
	$H[$i]=$D/($Q * $E)+0;
	$PRO[$i]=round($H[$i]*100,2);
	$CS="CSvalue<sub>$i</sub> =$DS/($QS x ".$ES.")";
	
		$catatan.=$arTanya[$i]." (".$PRO[$i]." %),";
		$rekapitulasi.=$arDoc[$i]."->CS:".$CS.", ";
	
	$HS[$i]=$i.".".$arTanya[$i]."<br><b>Stemming:</b><i>".$arDoc[$i]."</i>
	<br>$CS";
	
	$gab.=$HS[$i]."<br>";
	$gab.="Doc-".$i."=>".$H[$i]." =>".$PRO[$i]." %<hr>";
	
	if($max<$PRO[$i]){
		$max=$PRO[$i];
		$index=$i;
	}
}
echo $gab;

echo"<b>Kesimpulan: <br>$arDoc[$index] (Doc-$index)
<br><i>Jawab:$arJawab[$index] # $PRO[$index] %</i></b>";

$keterangan="$arDoc[$index] (Doc-$index): $PRO[$index] %";
$jawaban=$arJawab[$index];

$sql="update `$tbkomplain` set  `keterangan`='$keterangan',`jawaban`='$jawaban' where `id_komplain`='$id_komplain'";
$ubah=process($conn,$sql);
	
	?>


</div>


</div>
cs.php
Menampilkan cs.php.