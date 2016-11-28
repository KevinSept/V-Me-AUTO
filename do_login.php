<?php
  	session_start();
  	include("koneksi.php");
  	$username = $_POST['uname'];
	$password = $_POST['psw'];

	$cek = mysql_query("SELECT * FROM tb_user where username='$username'");
	$jumlah = mysql_num_rows($cek);
	$hasil = mysql_fetch_array($cek);
	if($jumlah == 0) {
		?>
			<script language="javascript">
	            alert('Username Belum Terdaftar!');
	            document.location="index.php";
	        </script>
	    <?php
	} else {
		if($password != $hasil['password'] || $username != $hasil['username']) {
		?>
			<script language="javascript">
	            alert('Username atau Password Salah!');
	            document.location="index.php";
	        </script>
	    <?php
	} else {
		if ($hasil['hak_akses'] == 1) {
		    $_SESSION['id'] = $hasil['id'];
		    $_SESSION['username'] = $hasil['username'];
		    
		    header('location:admin.php');
		}
		else {
			$_SESSION['id'] = $hasil['id'];
			 header('location:beranda.php');
		}
	}
}
?>