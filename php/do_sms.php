<?php
  	session_start();
  	include("koneksi.php");


  	$id=$_GET['id'];
  	$_SESSION['id'] = $id;

  	$query = "SELECT * FROM tb_user WHERE id = '$id'";
  	$waton=mysql_query($query);
		$data = mysql_fetch_assoc($waton);


		echo $data['id'];
		echo $data['no_telp'];
		//SMS GATEWAY

		$update = mysql_query("UPDATE tb_user SET status = '0' WHERE id = '$id' ") or die(mysql_error());


	


?>