<?php

$d = $_REQUEST["d"];
$path = "measures/" . $d . ".csv";

$file = fopen($path, "r") or die("No data for this day.");
#echo fread($myfile,filesize($path));
$data = fread($file,filesize($path));
fclose($file);

echo $data;

?>
