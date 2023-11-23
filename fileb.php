<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);

$_SESSION['user'] = "Dwita";
echo "User Session yang ada adalah ".$_SESSION['user'];
?>
<br>
<a href='filea.php'>Link ke File A</a> | <a href='logout.php'>Logout</a>