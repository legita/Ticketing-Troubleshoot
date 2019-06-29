<?php
include '../config/koneksi.php';

$filename = "keluhan.csv";
$fp = fopen('php://output', 'w');

$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='sjm' AND TABLE_NAME='tbl_keluhan'";
$result = mysqli_query($konek,$query)or die(mysqli_error($konek));
while ($row = mysqli_fetch_row($result)) {
	$header[] = $row[0];
}	

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);

// header('Content-type: application/csv');
// header('Content-Disposition: attachment; filename='.$filename);
// fputcsv($fp);

$query = "SELECT * FROM tbl_keluhan";
$result = mysqli_query($konek, $query)or die(mysqli_error($konek));

while($row = mysqli_fetch_row($result)) {
	fputcsv($fp, $row, chr(9));
}

// fputcsv($fp);
exit;
?>