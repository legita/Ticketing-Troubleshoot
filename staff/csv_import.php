<?php

include '../config/koneksi.php';

if (isset($_POST["import"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT INTO tbl_keluhan(keluhan,penanganan,perangkat)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "')";
            $result = mysqli_query($konek, $sqlInsert);
            
            if (! empty($result)) {
                $type = "success";
                $message = "Data CSV Diimpor ke dalam Database";
            } else {
                $type = "error";
                $message = "Masalah dalam Mengimpor Data CSV";
            }
        }
    }
}

header("location:index.php?halaman=data-trouble");

?>