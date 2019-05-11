<?php
session_start();

  error_reporting();
  include 'config/koneksi.php';

  $id_laporan = $_GET['id_laporan'];

  $query   = "SELECT * FROM tbl_laporan where id_laporan='$id_laporan'";
  $hasil   = mysqli_query($konek, $query)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<?php
session_start();

  error_reporting();
  include 'config/koneksi.php';

  $id_user = $_GET['id'];

  $query   = "SELECT * FROM user where id_user='$id_user'";
  $hasil   = mysqli_query($konek, $query)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>


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
						<h1 style="color: black; font-size: 48px; font-family: Haunted Eyes;">Keluhan Troubleshooting</h1>
                    </div>
					</center>
				</div>
			</div>
	</div>

    <div id="about" class="section wb">
        
            <div class="section-title text-center">
                <font style="font-size:33px;color: black;">Input Laporan Masalah Troubleshooting</font>
                <p><font color="gray">Masukkan laporan Kerusakan pada form di bawah ini </font><br></p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-8 offset-md-2">
                  <hr style="background-color: #cdd51f;">
                    <form action="" method="POST">
                         
                        <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
                        <input type="hidden" name="tgl" value="<?php $tgl=date('d-m-Y'); echo $tgl;?>">

                        <div class="container" style="color: black;">
                          <label><b>Username</b></label>
                          <input class="form-control" type="text" value="<?php echo $_SESSION['username']; ?>" disabled><br>

                          <label><b>Jenis</b></label>
                          <div>
                            <select class="form-control" name="id_komputer">
                              <option>-- Jenis --</option>
                              <option>Komputer</option>
                              <option>Monitor</option>
                              <option>TV</option>
                              <option>Laptop</option>
                              <option>Printer</option>
                              <option>Wireles Router</option>
                              <option>Switch Hub</option>
                              <option>Scanner</option>
                              <option>Mikrotik</option>
                              <option>UPS</option>
                              <option>Mini PC</option>
                              <option>Modem</option>
                              <option>Mesin Finger</option>
                            </select>
                          </div><br>

                          <label><b>ID_Barang</b></label>
                          <div>
                            <select class="form-control" name="id_komputer">
                              <option>-- Jenis --</option>
                              <option>Komputer</option>
                              <option>Monitor</option>
                              <option>TV</option>
                              <option>Laptop</option>
                              <option>Printer</option>
                              <option>Wireles Router</option>
                              <option>Switch Hub</option>
                              <option>Scanner</option>
                              <option>Mikrotik</option>
                              <option>UPS</option>
                              <option>Mini PC</option>
                              <option>Modem</option>
                              <option>Mesin Finger</option>
                            </select>
                          </div><br>

                          <label><b>User</b></label>
                          <input class="form-control" type="text" name="user" id="user" value="<?php echo $data['nm_pegawai']; ?>"><br>

                          <label><b>Lokasi</b></label>
                          <input class="form-control" name="lokasi" id="lokasi" type="text" placeholder="Isi Lokasi"><br>

                          <label><b>Laporan</b></label>
                          <textarea class="form-control" type="text" placeholder="laporan" name="laporan" required></textarea>
                          <hr style="background-color: #cdd51f;">
                          <div class="text-center cont-btn" style="float: right;">
                              <button type="submit" value="SEND" id="submit" class="btn11"><span>Kirim</span></button>
                          </div>
                        </div>
                    </form>        
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

