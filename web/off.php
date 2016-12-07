<?php

echo "led off";
$phps = "/var/www/html/off.py";
$python = "/usr/bin/python3";
$cmd = exec("$python $phps");
header("Location: Index.php");
?>
