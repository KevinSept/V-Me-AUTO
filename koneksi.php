<?php
	$server = "localhost";
	$user ="root";
	$password = "";
	$database = "gammu";
	$connecting = mysql_connect($server,$user,$password) or die ("Koneksi Gagal ke Database");
	mysql_select_db($database);
?>