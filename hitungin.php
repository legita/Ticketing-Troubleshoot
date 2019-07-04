<style>
.animasi-teks {
  font-size: 48px;
  width: 100%;
  white-space:nowrap;
  overflow:hidden;
  -webkit-animation: typing 5s steps(70, end);
  animation: animasi-ketik 5s steps(70, end);


}

@keyframes animasi-ketik{
  from { width: 0; }
}

@-webkit-keyframes animasi-ketik{
  from { width: 0; }
}
</style>

<div class="jumbotron jumbotron-fluid" style="background-color:#cdd51f;">

	<div class="row">
		<div class="col-12">
			<center>
            <div class="animasi-teks">
				<h1 style="color: black; font-size: 48px; font-family: Haunted Eyes;">Histori Penanganan Ticketing Troubleshooting</h1>
            </div>
			</center>
		</div>
	</div>
</div>

<div id="about" class="section wb" style="color: black;">
	<div class="container">

    <?php

      include '../config/koneksi.php';
        $id_datauji=$_GET["id"];
        $sql="select * from tbl_datauji where `id_datauji`='$id_datauji'";
        $d=getField($konek,$sql);
                    $id_datauji=$d["id_datauji"];
                    $id_datauji0=$d["id_datauji"];
                    
                    $tanggal=$d["tanggal"];
                    $keluhan=$d["keluhan"];//keluhan
                    $normalisasi=$d["normalisasi"];
                    $kategori=$d["perangkat"];
                    $sentimen=$d["penanganan"];

    ?>

        <script>
        $( function() {
        $( "#accordion" ).accordion({
        collapsible: true
        });
        } );
        </script>
    <div id="accordion">
      <h4>Analisa TF IDF Data</h4>
      <div>



    <?php
    require_once __DIR__ . '/vendor/autoload.php';

    //error_reporting(0);
                
    $initos = new \Sastrawi\Stemmer\StemmerFactory();
    $bikinos = $initos->createStemmer();
        $ak=getStopNumber();
        $ar=getStopWords();

    $keluhanuji=Netral($bikinos,$keluhan,$ak,$ar);
    //===================================================== 
    $stemming=$keluhanuji;
     ?>
     
    <div class="table-responsive">
    <table id="table">
    <tr>
    <td><label for="status">keluhan</label>
    <td>:<td colspan="2"><?php echo $keluhan;?>
    </td></tr>
     
    <tr>
    <td><label for="status">Stemming</label>
    <td>:<td colspan="2"><?php echo $stemming;?>
    </td></tr>
    </table>
    </div>

    <?php
     //======================================       
     $sql="select * from tbl_proses  order by `id_proses` desc limit 5";      //      limit 0,10          
        $arr=getData($konek,$sql);
        $i=0;
        $arStem[0]=$stemming;
        $gabungan="";//$stemming." ";
            foreach($arr as $d) {   
                    $i++;       
                    $id_proses=$d["id_proses"];
                    $keluhan=$d["keluhan"];
                    $normalisasi=$d["normalisasi"];
                    $sentimen=$d["penanganan"];
                    $kategori=$d["perangkat"];
                    
                    $gabungan.=$normalisasi." ";
                    
                    $arKode[$i]=$id_proses;
                    $arKeluhan[$i]=$keluhan;
                    $arStem[$i]=$normalisasi;
                    $arSentimen[$i]=$sentimen;
                    $arKat[$i]=$kategori;
            }
            $jumdoc=$i+1;
     //======================================
     
     //error_reporting(0);
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
?>
<div class="table-responsive">
  <table class="table table-striped" width="100%">

<?php
    $gab1.="<tr><td>Kata";
     for($i=0;$i<$jumdoc;$i++){
      $gab1.="<td>D".$i; 
     }
     $gab1.="<td>df";
     $gab1.="<td>d/df";
     $gab1.="<td>IDF";
     $gab1.="<td>IDF+1";
     for($i=0;$i<$jumdoc;$i++){
          $gab1.="<td>WD".$i; 
     }


     for($i=0;$i<$jumdoc;$i++){
      $gab1.="<td>N".$i;  
     }
      for($i=0;$i<$jumdoc;$i++){
      $gab1.="<td>M".$i; 
     }
    $gab1.="</tr>";
     
     $bar=count($arUnix);
     for($i=0;$i<$bar;$i++){
      $kata=$arUnix[$i];
      $hitung=0;
     $gab1.="<tr><td>".$kata."</td>";
     $jumada=0;
     
       for($j=0;$j<$jumdoc;$j++){
        $ada=getHit2($kata,$arStem[$j]);
        $M[$i][$j]=$ada;
            if($ada>0){
                $jumada++;
            }
        $gab1.="<td>".$ada;
       }
     //$dfi=round($jumada/$jumdoc,2); 
     $dfi=round(($jumdoc)/$jumada,2); 

     $logs="log($jumada/$jumdoc)"; 
     $log=round(log($dfi,10),2); 
     $log=abs($log);
     $log1=$log+1;
     $gab1.="<td>".$jumada."</td>";
     $gab1.="<td>".$dfi."</td>";
     $gab1.="<td>$log";
     $gab1.="<td>$log1";
     
       for($j=0;$j<$jumdoc;$j++){
            $N[$i][$j]=$M[$i][$j] * $log1;
            $N2[$i][$j]=pow($N[$i][$j],2);
            
            $TOT[$j]=$TOT[$j]+$N[$i][$j];
            $gab1.= "<td>".$N[$i][$j];
       }
     
      for($j=0;$j<$jumdoc;$j++){
       // $NN[$i][$j-1]=$N[$i][0] * $N[$i][$j];
       //$gab1.= "<td>".$NN[$i][$j-1];
       $NN[$i][$j]=$N[$i][0] * $N[$i][$j];
       $gab1.= "<td>".$NN[$i][$j];
       }


      for($j=0;$j<$jumdoc;$j++){
        $gab1.= "<td>".$N2[$i][$j];
       }
     
     $gab1.="</tr>"; 
     }//for i


       for($j=0;$j<$jumdoc;$j++){//kolom
          $TOT1[$j]=0;
            for($k=0;$k<$bar;$k++){//baris
                $TOT1[$j]+=$NN[$k][$j];
            }
       }

          for($j=0;$j<$jumdoc+1;$j++){
                $TOT2[$j]=0;
                for($k=0;$k<$bar;$k++){//baris
                        $TOT2[$j]+=$N2[$k][$j];
                }
           } 

    //------------------------------------
    $gab1.="<tr><td>Q";
     for($i=0;$i<$jumdoc;$i++){
      $gab1.="<td>D".$i; 
     }
     $gab1.="<td>df";
     $gab1.="<td>d/df";
     $gab1.="<td>IDF";
     $gab1.="<td>IDF+1";
     for($i=0;$i<$jumdoc;$i++){
          $gab1.="<td>".$TOT[$i]; 
     }


     for($i=0;$i<$jumdoc;$i++){
      $gab1.="<td>".$TOT1[$i];
     }
      for($i=0;$i<$jumdoc;$i++){
      $gab1.="<td>".$TOT2[$i];
     }
     

    $gab1.="</tr>";

    //==========================================
    $gab1.="</table>"; 
?>
</div>
<?php

    //"CETAK";
        // coba lu cari kata- kata yang mirip ama 5 dokumen yang lagi lu tes di tf/idfnya

    $statustx="1";
    $catatan="";
    $rekapitulasi="";
    $Q=pow($TOT2[0],0.5);

    $gab2="Qvalue=$TOT2[0]<sup>0.5</sup> =".$Q."<br><br>";
    $gab2.="Cosine Similarity Terhadap tiap-tiap dokumen:<br>";


     for($i=1;$i<$jumdoc;$i++){
        $E=pow($TOT2[$i],0.5);
        $ES=$TOT2[$i];
        $QS=$TOT2[0];
        
        $D=pow(($TOT1[$i]*$TOT2[0]),0.5);
        // $DS="(".$TOT2[0]." x ".$TOT1[$i].")";
        $DS="(".$TOT1[$i].")";
        $H[$i]=$D/($Q * $E)+0;
        $PRO[$i]=round($H[$i]*100,2);
        $CS="CSvalue<sub>$i</sub> =$DS/($QS x ".$ES.")";

        
            $catatan.=$arKeluhan[$i]." (".$PRO[$i]." %),";
            $rekapitulasi.="Sentimen:".$arSentimen[$i]."->CS:".$CS.", ";

        $PROK[$i]=$arSentimen[$i];
        //$HS[$i]=$i.".".$arKeluhan[$i]."<br>&nbsp;&nbsp;&nbsp;<b>Stemming:</b><i>".$arSentimen[$i]."</i>
        $HS[$i]=$i.".".$arKeluhan[$i]."</i>
        <br>$CS";
        
        $gab2.=$HS[$i]."<br>";
        $gab2.="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Doc".$i."=>".$H[$i]." =>".$PRO[$i]." %  =<b>".$PROK[$i]."</b><hr>";

        $HPROK[$i-1]=$PROK[$i];
        $HPRO[$i-1]=$PRO[$i];
        $HarKode[$i-1]=$arKode[$i];
        $HarKeluhan[$i-1]=$arKeluhan[$i];
        $HarStem[$i-1]=$arStem[$i];
        $HarSentimen[$i-1]=$arSentimen[$i];
        $HarKat[$i-1]=$arKat[$i];
     }
     
    //"CETAK";


     $array_count = count($HPROK);
            for($x = 0; $x < $array_count; $x++){
                for($a = 0 ;  $a < $array_count - 1 ; $a++){
                    if($a < $array_count ){
                        if($HPRO[$a] > $HPRO[$a + 1] ){
                          swap($HPROK, $a, $a+1);
                            swap($HPRO, $a, $a+1);
                              swap($HarKode, $a, $a+1);
                                swap($HarKeluhan, $a, $a+1);
                                  swap($HarStem, $a, $a+1);
                                    swap($HarSentimen, $a, $a+1);
                                      swap($HarKat, $a, $a+1);
                        }
                    }
                }
            }
// sort($HPRO) for ($i = 0; $i < count($HPRO); $i++) { echo $HPRO[$i]; }
             
    // $k1=0;
    // $k2=0;
    // $k3=0;

           
                    
    $gab3="<table width='100%' border='1'>
          <tr>
            <td>No</td>
            <td>keluhan</td>
            <td>Persentase</td>
            <td>Penanganan</td>
            <td>Perangkat</td>
          </tr>";
             for($i = 0; $i < 3; $i++){
             // sort($HPRO) for($i = 0; $i < count($HPRO); $i++){
                $no=$i+1;
                 $gab3.="<tr>
                      <td>$no</td>
                      <td>$HarKeluhan[$i]</td>
                      <td>$HPRO[$i]</td>
                      <td>$HPROK[$i]</td>
                      <td>$HarKat[$i]</tr>"; 
                     // if($HPROK[$i]==-1){$k1++;}
                     // // else if($HPROK[$i]==0){$k2++;}
                     // // else if($HPROK[$i]==1){$k3++;}
                      
                      // HPRO = PERSENAN
                      // HPROK = PENANGANAN
                      // HARKAT = PERANGKAT 
             }
    $gab3.="</table><hr>";
    //"CETAK";

    $max=100;
    $smax="?";
    // if ($k1>=$k2 && $k1>=$k3){$max=-1;$smax="Negatif";}
    // else if ($k2>=$k1 && $k2>=$k3){$max=0;$smax="Netral";}
    // else if ($k3>=$k2 && $k3>=$k1){$max=1;$smax="Positif";}

    // $gab4="<h1>Dengan K: $K, Kesimpulan :".$max." /$smax</h1>";
    //"CETAK";

    echo $gab1;  
    echo $gab2;  
    echo $gab3;  
    echo $gab4;  

    $tanggal=date("Y-m-d");
    $kategori=$HarKat[0];//01 atau 02
    $sentimen=$max;
    $sql="Update tbl_datauji set normalisasi='$stemming',perangkat='$kategori',tanggal='$tanggal', penanganan='$sentimen',flag='1'  where `id_datauji`='$id_datauji'";
    $up=process($konek,$sql);    
    ?>


    </div>


    </div>

	</div>

</div>

