<?php
  	session_start();
  	include("koneksi.php");
  	$id=$_SESSION["id"];

  	$update = mysql_query("UPDATE tb_user SET status = '1' WHERE id = '$id' ") or die(mysql_error());
  	header('location:user.php');

	


?>