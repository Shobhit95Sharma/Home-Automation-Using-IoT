<?php
$phps = "/var/www/html/motoff.py";
$python = "/usr/bin/python3";
$cmd = exec("$python $phps");
header("Location: Index.php");
?>


