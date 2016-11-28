<?php
  	session_start();
  	include("koneksi.php");
  	if (!isset($_SESSION['id'])){
                    echo "
                        <p><center>
                            Anda Belum Login.<br>
                            Klik Link Dibawah ini Untuk Login.<br>
                            <a href=index.php>Disini</a>
                            </center>
                        </p>
                    "; }
                    else{

  	$id=$_SESSION["id"];

  	$update = mysql_query("UPDATE tb_user SET status = '1' WHERE id = '$id' ") or die(mysql_error());
  	header('location:fuser.php');
	}
?>