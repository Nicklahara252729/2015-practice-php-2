<?php $host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db = "latihan"; 
$konek = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal! '); 
mysql_select_db($db); ?>