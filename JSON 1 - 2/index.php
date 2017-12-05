<?php

$file = 'school3.json';
if(file_exists($file)){
  $filedata = file_get_contents($file);
  $objson = json_decode($filedata,true);
    echo"<hr><code><pre>";
    print_r($objson);
    echo"</hr></code></pre>";
}
else echo $file . ' does not exist.';

writeJson($objson,$file);
$objson["schools"]["2"]["school"]="Nova";
$objson["schools"]["2"]["courses"]="VMBO-T";
$objson["schools"]["2"]["category"]="VMBO";
$objson["schools"]["2"]["nr_studens"]="200";

function writeJson($objson,$fileOutput){
  $savejson = json_encode($objson);
  $file = fopen($fileOutput, "w") or die ("fucked up somewhere");
  fwrite($file,$savejson);
  fclose($file);
}
?>
