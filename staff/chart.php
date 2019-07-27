<?php

$query   = mysqli_query($konek,"SELECT * FROM tbl_keluhan WHERE perangkat = 'Hardware' ") or die(mysqli_error($konek));
$set1    = mysqli_num_rows($query);

$query1  = mysqli_query($konek,"SELECT * FROM tbl_keluhan WHERE perangkat = 'Software' ") or die(mysqli_error($konek));
$set2    = mysqli_num_rows($query1);

$query1  = mysqli_query($konek,"SELECT * FROM tbl_keluhan WHERE perangkat = 'Jaringan' ") or die(mysqli_error($konek));
$set3    = mysqli_num_rows($query1);

?>

<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="index.php?halaman=edit-user">Home</a>
          </li>
          <li class="breadcrumb-item active">Grafik Troubleshooting</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-edit"></i>Grafik
          </div>
          <div class="card-body">
             <div class="panel-body">
               <center>
               <h4><b>Hardware : <?php echo $set1; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                      Software : <?php echo $set2; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      Jaringan : <?php echo $set3; ?> 

                   </b>
               </h4><br>
               <canvas id="piechart" width="400" height="400"></canvas>
               </center><br>
               <table align="right">
                 <tr>
                      <th>Keterangan : </th>
                  </tr>
                  <tr>
                     <td><button class="btn btn-danger btn-sm"></button></td><td>:</td><td>&nbsp;Jumlah Trayek Penjualan E-Ticketing Laris</td>
                  </tr>   
                   <tr> 
                    <td><button class="btn btn-primary btn-sm"></button></td><td>:</td><td>&nbsp;Jumlah Trayek Penjualan E-Ticketing Tidak Laris</td>
                  </tr>
                  <tr> 
                    <td><button class="btn btn-success btn-sm"></button></td><td>:</td><td>&nbsp;Jumlah Trayek Penjualan E-Ticketing Tidak Laris</td>
                  </tr>
               </table>     

            </div>
          </div>
        </div>
</div>

 <script type="text/javascript" src="../assets/node_modules/chart.js/dist/Chart.js"></script>
 <script type="text/javascript" src="../assets/node_modules/chart.js/dist/Chart.min.js"></script>
 <script type="text/javascript" src="../assets/node_modules/chart.js/dist/Chart.bundle.js"></script>
 <script type="text/javascript" src="../assets/node_modules/chart.js/src/core/core.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
 
 
<script type="text/javascript">
    var ctx = document.getElementById("piechart").getContext("2d");
    var pieData = [
      {
          value: <?php echo $set1; ?>,
          color: "#04064f",
          highlight: "#eba2a2",
          label: "Hardware"
      },
      {
          value : <?php echo $set2; ?>,
          color: "#062994",
          highlight:"#716de3", 
          label: "Software"
      },
      {
          value : <?php echo $set3; ?>,
          color: "#238bad",
          highlight:"#7bd67a", 
          label: "Jaringan"
      }
      
    ];
    var options = {
      animateScale: true
    };

    var myNewChart = new Chart(ctx).Pie(pieData,options);

 </script>