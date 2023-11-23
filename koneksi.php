<?php
error_reporting(E_ALL ^ E_NOTICE AND E_DEPRECATED );
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'ppdb';

$conn = mysqli_connect($host,$user,$password,$db) or die ('Not Connect');

?>