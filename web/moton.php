<?php
$phps = "/var/www/html/mot.py";
$python = "/usr/bin/python3";
$cmd = exec("$python $phps");
header("Location: Index.php");
?>


