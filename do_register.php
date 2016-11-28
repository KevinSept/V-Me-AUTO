<<<<<<< HEAD
<?php
 
  	include("koneksi.php");
  	session_start();
  	
  	$username = $_POST['uname'];
	$password = $_POST['psw'];
	$plat_nomer = $_POST['plat_nomer'];
	$no_telp = $_POST['no_telp'];

	$cek = mysql_query("SELECT * FROM tb_user where username='$username'");
	$jumlah = mysql_num_rows($cek);
	$hasil = mysql_fetch_array($cek);
	if($jumlah > 0) {
		?>
			<script language="javascript">
	            alert('Username telah ada');
	            window.location=history.go(-1);
	        </script>
	    <?php
	} else if (!eregi("^[a-zA-Z0-9]{1,100}$", $username)) {
		?>
			<script language="javascript">
	            alert('Username harus tanpa sepasi, – , dan _');
	            window.location=history.go(-1);
	        </script>
	    <?php
	} else if (!eregi("^[0-9]{1,100}$", $no_telp)) {
		?>
			<script language="javascript">
	            alert('Nomer Telepon harus angka');
	            window.location=history.go(-1);
	        </script>
	    <?php
	}else{

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO tb_user (username,password,plat_nomer,no_telp) VALUES('$username', '$password', '$plat_nomer', '$no_telp')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		if (!isset($_SESSION['username'])) {
				?>
 			<script language="javascript">
	            alert('Anda berhasil register');
	            document.location="index.php";
	        </script>
	        <?php
		
		}else {
			?>
			<script language="javascript">
	            alert('Admin berhasil menambahkan user');
 				document.location="admin.php";
 			</script>
	        <?php
			
		}
		
	}else{
		?>
		<script language="javascript">
	            alert('GAGAL');
	            document.location="index.php";
	        </script>
	    <?php
		
	}}
=======
<?php
 
  	include("koneksi.php");
  	session_start();
  	
  	$username = $_POST['uname'];
	$password = $_POST['psw'];
	$plat_nomer = $_POST['plat_nomer'];
	$no_telp = $_POST['no_telp'];

	$cek = mysql_query("SELECT * FROM tb_user where username='$username'");
	$jumlah = mysql_num_rows($cek);
	$hasil = mysql_fetch_array($cek);
	if($jumlah > 0) {
		?>
			<script language="javascript">
	            alert('Username telah ada');
	            window.location=history.go(-1);
	        </script>
	    <?php
	} else if (!eregi("^[a-zA-Z0-9]{1,100}$", $username)) {
		?>
			<script language="javascript">
	            alert('Username harus tanpa sepasi, – , dan _');
	            window.location=history.go(-1);
	        </script>
	    <?php
	} else if (!eregi("^[0-9]{1,100}$", $no_telp)) {
		?>
			<script language="javascript">
	            alert('Nomer Telepon harus angka');
	            window.location=history.go(-1);
	        </script>
	    <?php
	}else{

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO tb_user (username,password,plat_nomer,no_telp) VALUES('$username', '$password', '$plat_nomer', '$no_telp')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		if (!isset($_SESSION['username'])) {
				?>
 			<script language="javascript">
	            alert('Anda berhasil register');
	            document.location="index.php";
	        </script>
	        <?php
		
		}else {
			?>
			<script language="javascript">
	            alert('Admin berhasil menambahkan user');
 				document.location="admin.php";
 			</script>
	        <?php
			
		}
		
	}else{
		?>
		<script language="javascript">
	            alert('GAGAL');
	            document.location="index.php";
	        </script>
	    <?php
		
	}}
>>>>>>> 9a77919734c6d02dd885b89e63a150922366b57b
?>