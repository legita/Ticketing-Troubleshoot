<?php

include '../config/koneksi.php';

if (isset($_POST["import"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT INTO database_komputer(id_komputer,jenis,user,computer_name,sistem_operasi,motherboard,processor,hardisk,ram,vga_merk,vga_size,monitor_merk,monitor_size,keyboard,mouse,ups,ip_address)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "','" . $column[6] . "','" . $column[7] . "','" . $column[8] . "','" . $column[9] . "','" . $column[10] . "','" . $column[11] . "','" . $column[12] . "','" . $column[13] . "','" . $column[14] . "','" . $column[15] . "')";
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