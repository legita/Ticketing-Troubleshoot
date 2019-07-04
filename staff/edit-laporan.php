<?php

  error_reporting();

  include '../config/koneksi.php';

  $id_laporan = $_GET['id'];

  $edit    = "SELECT * FROM tbl_laporan WHERE id_laporan = '$id_laporan'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

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
          <li class="breadcrumb-item active">Edit User</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-edit"></i>
            Edit Data User</div>
          <div class="card-body">
            <form action="../config/update_laporan.php" method="POST" class="form-horizontal">
              <input type="hidden" name="id_laporan" value="<?php echo $data['id_laporan']; ?>">
              <div class="form-group input-group">
                <div class="col-md-1"></div>
                  <label class="col-md-3" for="ting_laporanbar">Kesulitan Laporan</label>
                  <label class="col-md-1">:</label>
                  <div class="col-md-6">
                  <select class="form-control" id="ting_laporanbar" name="ting_laporanbar" value="<?php echo $data['ting_laporan']; ?>">
                    <option><?php echo $data['ting_laporan']; ?></option>
                    <option value="1">Darurat</option>
                    <option value="0">Tidak Darurat</option>
                  </select>
                  </div>
              </div>
              <hr>
              <div style="float: right;">
                <a href="?halaman=management-komputer" class="btn btn-danger">Kembali</a> 
                &nbsp;&nbsp;
                <button type="submit" class="btn btn-primary">Ubah</button>&nbsp;&nbsp; 
              </div><br>
            </form>
        </div>
</div>
</div>
