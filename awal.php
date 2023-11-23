<?php
include "koneksi.php";

$username = "rafly";
$password = "baik";
$passwordenc = md5("Aplikasi".md5($password));
$nama = "Rafly Ramadhan";
$status = "Pengunjung";

$sql = "insert into user(username, password, nama, status) values ('$username','$passwordenc','$nama','$status') ";
mysqli_query($conn, $sql);
?>