<style>
.animasi-teks {
  font-size: 48px;
  width: 100%;
  white-space:nowrap;
  overflow:hidden;
  -webkit-animation: typing 5s steps(70, end);
  animation: animasi-ketik 5s steps(70, end);
}
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: white;

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
    <div class="col-sm-12">
      <center>
            <div class="animasi-teks">
        <h1 style="color: black; font-size: 48px; ">Histori Penanganan Ticketing Troubleshooting</h1>
            </div>
      </center>
    </div>
  </div>
</div>

<div class="message-box" align="center">
  <a href="index.php?halaman=DataKeluhan" class="btn11"><span>Kembali</span><div class="transition"></div></a>
</div><!-- end messagebox -->

<div id="about" class="section wb" style="color: black;">
  <hr style='background-color: #cdd51f;'>
  <div class="container">

        <?php
        if(isset($_GET["gen"])){


        require_once __DIR__ . '/vendor/autoload.php';

        //error_reporting(0);
              
        $initos = new \Sastrawi\Stemmer\StemmerFactory();
        $bikinos = $initos->createStemmer();
          $ak=getStopNumber();
          $ar=getStopWords();

        $nomor=0;
         $sql0="select * from tbl_datauji where flag='0' order by `id_datauji`";    //    limit 0,10      
          $arr0=getData($konek,$sql0);
            foreach($arr0 as $d0) { 
                $nomor++;   
                $id_datauji=$d0["id_datauji"];
                $keluhan=$d0["keluhan"];
          
        $keluhanuji=Netral($bikinos,$keluhan,$ak,$ar);
        //===================================================== 
        $stemming=$keluhanuji;
         ?>
        
        <div class="form-group">
          <b style="color: red;"><label class="col-sm-2" for="status" style="text-align: left;">Keluhan <?php echo $nomor;?></label>
          <label class="col-sm-1">:</label>
          <label class="col-sm-3"><?php echo $keluhan;?></label></b>
        </div>
        <div class="form-group">
          <b style="color: blue;"><label class="col-sm-2" for="status" style="text-align: left;">Stemming</label>
          <label class="col-sm-1">:</label>
          <label class="col-sm-3"><?php echo $stemming;?></label></b>
        </div>
        <hr>

        <?php
         //======================================   
         $sql="select * from tbl_keluhan  order by `id_keluhan` desc limit 180";    //    limit 0,10      
          $arr=getData($konek,$sql);
          $i=0;
          $arStem[0]=$stemming;
          $gabungan="";//$stemming." ";
            foreach($arr as $d) { 
                $i++;   
                $id_keluhan=$d["id_keluhan"];
                $keluhan=$d["keluhan"];
                $normalisasi=$d["normalisasi"];
                $penanganan=$d["penanganan"];
                $kategori=$d["perangkat"];
                
                $gabungan.=$normalisasi." ";
                
                $arKode[$i]=$id_keluhan;
                $arKeluhan[$i]=$keluhan;
                $arStem[$i]=$normalisasi;
                $arPenanganan[$i]=$penanganan;
                $arKat[$i]=$kategori;
            }
            $jumdoc=$i+1;
         //======================================
         
         error_reporting(0);
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

        <?php
        $gab1="<table class='table table-striped'>";
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
         $dfi=round($jumada/$jumdoc,2); 
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
            $NN[$i][$j-1]=$N[$i][0] * $N[$i][$j];
            $gab1.= "<td>".$NN[$i][$j-1];
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

        echo $gab1;
        ?>

      </div>

        <?php

        //"CETAK";

        $statustx="1";
        $catatan="";
        $reakpitulasi="";
        $Q=round(sqrt($TOT2[0]),2);

        $gab2="Qvalue=$TOT2[0]<sup>0.5</sup> =".$Q."<br><br>";
        $gab2.="Cosine Similarity Terhadap tiap-tiap dokumen:<br>";

        // $max=0;
        // $index=0;

         for($i=1;$i<$jumdoc;$i++){
          $E=round(sqrt($TOT2[$i]),2);
          $ES=round(sqrt($TOT2[$i]),2);
          $QS=round(sqrt($TOT2[0]),2);
          
          $D=$TOT1[$i];
          $DS="(".$TOT1[$i].")";
          $H[$i]=$D/($Q * $E)+0;
          // $H[$i]=$DS/($QS * $ES);
          $PRO[$i]=round($H[$i]*100,2);
          $CS="CSvalue<sub>$i</sub> =$DS/($QS x $ES)";

          
            $catatan.=$arKeluhan[$i]." (".$PRO[$i]." %),";
            $rekapitulasi.="penanganan:".$arPenanganan[$i]."->CS:".$CS.", ";

          $PROK[$i]=$arPenanganan[$i];
          //$HS[$i]=$i.".".$arKeluhan[$i]."<br>&nbsp;&nbsp;&nbsp;<b>Stemming:</b><i>".$arPenanganan[$i]."</i>
          $HS[$i]=$i.".".$arKeluhan[$i]."</i>
          <br>$CS";
          
          $gab2.=$HS[$i]."<br>";
          $gab2.="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Doc".$i."=>".$H[$i]." =>".$PRO[$i]." %  = <b>".$PROK[$i]."</b><hr>";


          $HPROK[$i-1]=$PROK[$i];
          $HPRO[$i-1]=$PRO[$i];
          $HarKode[$i-1]=$arKode[$i];
          $HarKeluhan[$i-1]=$arKeluhan[$i];
          $HarStem[$i-1]=$arStem[$i];
          $HarPenanganan[$i-1]=$arPenanganan[$i];
          $HarKat[$i-1]=$arKat[$i];
         }

          // CODING TAMPIL 1 TERTINGGI         
         // if($max<$HPRO[$i]){
         //     $max=$HPRO[$i];
         //     $index=$i;
         //   }
             
            //"CETAK";


             $array_count = count($HPROK);
                    for($x = 0; $x < $array_count; $x++){
                        for($a = 0 ;  $a < $array_count - 1 ; $a++){
                            if($a < $array_count ){
                                if($HPRO[$a] < $HPRO[$a + 1] ){
                                swap($HPROK, $a, $a+1);
                                swap($HPRO, $a, $a+1);
                                swap($HarKode, $a, $a+1);
                                swap($HarKeluhan, $a, $a+1);
                                swap($HarStem, $a, $a+1);
                                swap($HarPenanganan, $a, $a+1);
                                swap($HarKat, $a, $a+1);
                                }
                            }
                        }
                    }

             
                
        $gab3="<table class='table table-bordered'>
               <tr><td>No</td>
               <td>Keluhan</td>
               <td>Similarity</td>
               <td>Penanganan</td>
               <td>Perangkat</td></tr>";
               for($i = 0; $i < 10; $i++){
             // for($i = 0; $i < $array_count; $i++){
               $no=$i+1;
               $gab3.="<tr><td>$no</td>
                           <td>$HarKeluhan[$i]</td>
                           <td>$HPRO[$i]</td>
                           <td>$HPROK[$i]</td>
                           <td>$HarKat[$i]</td></tr>"; 

             }
        $gab3.="</table><hr style='background-color: red;'><hr style='background-color: #cdd51f;'><hr style='background-color: blue;'>";


        //"CETAK";

        echo $gab2;
        echo $gab3;



        //"CETAK";

        // echo $gab1;  
        // echo $gab2;  
        // echo $gab3;  
        // echo $gab4;  



        $tanggal=date("Y-m-d");
        $kategori=$HarKat[0];//01 atau 02
        $penanganan=$max;
        $sql="Update tbl_datauji set normalisasi='$stemming', perangkat='$kategori', tanggal='$tanggal', penanganan='$penanganan', flag='0' where id_datauji='$id_datauji'";
        $up=process($konek,$sql);
            }//loop dataUji
          }//isset
        ?>
</div>
</div>