<?php
session_start();

  error_reporting();
  include 'config/koneksi.php';

  $id_trouble = $_GET['id_trouble'];

  $query    = "SELECT * FROM tbl_trouble where id_trouble='$id_trouble'";
  $hasil   = mysqli_query($konek, $query)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<style>

</style>

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

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
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
                <h3>Input Keluhan Troubleshooting</h3>
                <p><font color="gray">Masukkan Keluhan Kerusakan pada form di bawah ini </font><br> <font color="red">Tolong gunakan bahasa indonesia baku, tidak disingkat dan tidak menggunakan bahasa daerah !</font></p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-8 offset-md-2" style="color:darkslategray; font-size:18px; ">
                  <hr style="background-color: #cdd51f;">
                    <form action="" method="POST">
                         
                        <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
                        <input type="hidden" name="tgl" value="<?php $tgl=date('d-m-Y'); echo $tgl;?>">  

                        <div class="container" style="color: black;">
                        <br>
                          <label><b>Username</b></label>
                          <input class="form-control" type="text" value="<?php echo $_SESSION['username']; ?>" disabled> <br>
                          <label><b>Nomer Ticket</b></label>
                          <input class="form-control" type="text" value="<?php echo (rand());?>" name="no_ticket" disabled><br>
                          <label><b>ID Komputer</b></label>
                          <div>
                            <select class="form-control" id="id_komputer" name="id_komputer">
                              <option>-- ID Komputer --</option>
                                <?php
                                include 'config/koneksi.php';
                                $query = "select * from database_komputer";
                                $hasil = mysqli_query($konek,$query);
                                while($data=mysqli_fetch_array($hasil)){
                                    echo "<option value=$data[id_kom]>$data[id_komputer]</option>";
                                }
                                ?>
                            </select>
                          </div><br>
                          <label for="keluhan"><b>Keluhan</b></label>
                          <input id="keluhan" name="keluhan" class="form-control" type="text" placeholder="Keluhan" required>
                          <hr>
                          <div class="text-center cont-btn" style="float: right;">
                              <button type="submit" value="SEND" id="submit" class="btn11"><span>Submit</span></button>
                          </div>
                        </div>
                    </form>
                </div><!-- end col --><hr> 


            <div class="col-md-10 offset-md-1" style="color:darkslategray;">
              <hr style="background-color: #cdd51f;"><p><b><i class="fa fa-angle-double-right" aria-hidden="true" style="color: #cdd51f;"></i> 3 Rekomendasi Penanganan Teratas <i class="fa fa-angle-double-left" aria-hidden="true" style="color: #cdd51f;"></i></b></p>
              <button class="collapsible">Open Section 1</button>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
              <button class="collapsible">Open Section 2</button>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
              <button class="collapsible">Open Section 3</button>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div><!-- end row -->

        </div><!-- end container -->


<!-- Coding Autocomplete/Sugestion -->
<script type="text/javascript">
    $(document).ready(function() {
        // Selector input yang akan menampilkan autocomplete.
        $( "#keluhan" ).autocomplete({
            serviceUrl: "coba.php",   // Kode php untuk prosesing data.
            dataType: "JSON",           // Tipe data JSON.
            onSelect: function(suggestion){
                $( "#keluhan" ).val("" + suggestion.keluhan);
            }
        });
    })
</script>

<!-- Coding Collapsible -->
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>