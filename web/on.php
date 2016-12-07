<?php
$phps = "/var/www/html/on.py";
$python = "/usr/bin/python3";
$cmd = exec("$python $phps");
header("Location: Index.php");
?>
