<?php
session_start();
echo "Selamat datang ".$_SESSION['nama']." <br>";
echo "Anda adalah ".$_SESSION['status']." <br>";
?>
<br>
<a href='logout.php'>Logout</a>