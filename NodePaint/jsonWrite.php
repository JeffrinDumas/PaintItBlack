<?php
$drawing = "drawing.json";//path to file
$data = "";//empty string for receive data


//wel nog inbouwen test op lege string van client
$data= $_GET['data'];
echo $data;
$file = fopen($drawing, "w") or die ("bekijk het");
fwrite($file, $data);
fclose($file);
 ?>
