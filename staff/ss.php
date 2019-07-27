    <?php

              //error_reporting();

              include '../config/koneksi.php';

              $edit    = "SELECT * FROM tbl_laporan ORDER BY ting_laporan = '1' DESC";
              $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
              $data    = mysqli_fetch_array($hasil);

              echo $data['waktu'];
              
              

             
            ?> 