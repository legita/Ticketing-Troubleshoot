<?php 
 
 include 'config/koneksi.php';
 
error_reporting(0);
session_start();

if(isset($_GET['halaman'])) $halaman = $_GET['halaman'];
  else $halaman = "index";
  
  $id = session_id();
  $id = $_SESSION ['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PT. Sebastian Jaya Metal</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="images/logos/logo.jpg" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assests/js/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <script src="staff/vendor/bootstrap/js/bootstrap.min.js"></script>

  <style type="text/css">
      body {
        margin: 0;
        font-family: Modeka;
        font-size: 17px;
      }

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

      input[type=text]:focus {
        border: 2px solid #757575;
        outline: none;
      }
      .autocomplete-suggestions {
          border: 1px solid #999;
          background: #FFF;
          overflow: auto;
      }
      .autocomplete-suggestion {
          padding: 2px 5px;
          white-space: nowrap;
          overflow: hidden;
      }
      .autocomplete-selected {
          background: #F0F0F0;
      }
      .autocomplete-suggestions strong {
          font-weight: normal;
          color: #3399FF;
      }
      .autocomplete-group {
          padding: 2px 5px;
      }
      .autocomplete-group strong {
          display: block;
          border-bottom: 1px solid #000;
      }

      .button {
        background-color: dimgray; /* Dim Gray */
        border: none;
        color: white;
        padding: 10px 28px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
      }

      .button1:hover {
        background-color: #cdd51f;
        color: white;
      }

      .btnn {
        border-radius: 12px;
        font-size: 18px;
        color: black;
        background-color: white;
        border: 2px solid #cdd51f;
      }

      #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 99;
        font-size: 16px;
        border: none;
        outline: none;
        background-color: #202020; /* Gray */
        color: white;
        cursor: pointer;
        padding: 10px;
        border-radius: 4px;
      }

      #myBtn:hover {
        background-color: #cdd51f;
      }
  </style>  

</head>
<body>

<!-- Loader -->
<?php include 'loader.php'; ?>
<!-- Medsos -->
<?php include 'nav-medsos.php'; ?>

<div class="jumbotron jumbotron-fluid" style="background-color:#cdd51f;">
    
      <div class="row">
        <div class="col-12">
          <center>
            <div class="animasi-teks">
              <h1 style="color: black; font-size: 48px;">Keluhan Troubleshooting</h1>
            </div>
          </center>
        </div>
      </div>
  </div>

  <div class="col-sm-12">
    <form class="form-horizontal" role="form" method="POST">
      <input type="hidden" name="tgl" value="<?php $tgl=date('d-m-Y'); echo $tgl;?>">
      <hr style="background-color: #cdd51f;">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="color: red;"><sub><span class="label label-danger">Penting</span> Input Keluhan Troubleshooting yang Terjadi Pada Perangkat Anda !</sub></i><hr><br>
      
      <div class="form-group" align="center">
        <label class="col-sm-2" for="username" style="text-align: left;">Username</label>
        <label class="col-sm-1">:</label>
        <label class="col-sm-5">
        <input class="form-control" type="text" value="<?php echo $_SESSION['username']; ?>" disabled>
        </label>
      </div>
      <div class="form-group" align="center">
        <label class="col-sm-2" for="no_ticket" style="text-align: left;">Nomor Ticket</label>
        <label class="col-sm-1">:</label>
        <label class="col-sm-5">
        <input class="form-control" type="random" value="<?php echo rand(100,1000000);?>" / name="no_ticket" disabled>
        </label>
      </div>
      <div class="form-group" align="center">
        <label class="col-sm-2" for="keluhan" style="text-align: left;" required>Keluhan</label>
        <label class="col-sm-1">:</label>
        <label class="col-sm-5">
        <input class="form-control" type="text" id="keluhan" name="keluhan" placeholder="Nama Keluhan" value="" required>
        </label>
      </div>    

      
      <!--<div class="form-group" align="center">
        <label class="col-sm-2" for="penanganan" style="text-align: left;">Keluhan</label>
        <label class="col-sm-1">:</label>
        <label class="col-sm-5">
        <input class="form-control" type="text" id="penanganan" name="penanganan"  value="" disabled>
        </label>
      </div>-->
      <label class="col-sm-10"></label>
      <button type="submit" value="SEND" id="submit" class="button button1 btnn" title="Kirim">Kirim</button>
    </form>
  </div>

  <hr style="background-color: #cdd51f;"><br>


<?php include 'footer.php'; ?>


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

<!-- Memanggil jQuery.js -->
<script src="assets/js/jquery-3.2.1.min.js"></script>

<!-- Memanggil Autocomplete.js -->
<script src="assets/js/jquery.autocomplete.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        // Selector input yang akan menampilkan autocomplete keluhan.
        $( "#keluhan" ).autocomplete({
            serviceUrl: "source.php",   // Kode php untuk prosesing data.
            dataType: "JSON",           // Tipe data JSON.
            onSelect: function (suggestion) {
                $( "#keluhan" ).val("" + suggestion.keluhan);
                //$( "#penanganan" ).val("" + suggestion.penanganan);
            }
        });
    })
</script>


<!-- Go To Top -->
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>



</body>
</html>
