<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);

$_SESSION['user'] = "Dwita";
echo "Sebuah session telah dibuat";
?>
<br>
<a href="fileb.php>Link ke File B</a>