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

echo($objson['schools']['0']['school']);
echo("<br>");
echo($objson['schools']['1']['school']);
?>
