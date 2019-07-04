<?php
error_reporting();
    include 'koneksi.php';
    
    $id              = $_GET['id'];
    $ting_laporan   = $_GET['ting_laporan'];

    if($ting_laporan==0) 
    {

        $update = "UPDATE tbl_laporan SET   ting_laporan = '1'
                                      WHERE id_laporan   = '$id'";

        $updateidjenis  = mysqli_query($konek, $update)or die(mysqli_error()); }
        else

 {

        $update = "UPDATE tbl_laporan SET   ting_laporan = '0'
                                      WHERE id_laporan   = '$id'";

        $updateidjenis  = mysqli_query($konek, $update)or die(mysqli_error()); }

    if ($updateidjenis)
        {
            echo "<script>alert('Berhasil Diubah!');</script>";
            echo '<META HTTP-EQUIV="REFRESH" CONTENT = "0; URL=../staff/index.php?halaman=laporan-masuk">';
        }
    else {
            print"
                <script>
                    alert(\"ID Perangkat Gagal Diubah!\");
                    history.back(-1);
                </script>";
        }
?>