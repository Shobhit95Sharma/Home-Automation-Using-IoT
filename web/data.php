<?php
//Generating Random Color
// $r = mt_rand(0,255); //Generating a Random Number between 0 to 255
// $g = mt_rand(0,255);
// $b = mt_rand(0,255);
 
// //Generating Random Height
// $height = mt_rand(300,650); //
// echo "
// <div style='background:rgb({$r},{$g},{$b});height:{$height}px'></div>
 
// ";
$phpscript = "/var/www/html/templed.py";
$python = "/usr/bin/python3";

$cmd=exec("$python $phpscript");
echo $cmd;
?>
