<?php

  error_reporting();

  include '../config/koneksi.php';


  $edit    = "SELECT * FROM tbl_laporan";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="?halaman=laporanmasuk" id="userDropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw" title="Laporan Masuk"></i>
          <span class="badge badge-danger" id="notif"><?php echo $countNotif; ?> +</span>
        </a>

      </li>

      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="modal" data-target="#logoutModal" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-sign-out-alt" title="Keluar"></i>
        </a>
        </div>
      </li> 