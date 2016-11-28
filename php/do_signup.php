<?php
  	session_start();
  	include("koneksi.php");
  	$username = $_POST['username'];
	$password = $_POST['password'];
	$plat_nomer = $_POST['plat_nomer'];
	$no_telp = $_POST['no_telp'];

	$cek = mysql_query("SELECT * FROM tb_user where username='$username'");
	$jumlah = mysql_num_rows($cek);
	$hasil = mysql_fetch_array($cek);
	if($jumlah > 0) {
		?>
			<script language="javascript">
	            alert('Username telah ada');
	            document.location="form_signup.php";
	        </script>
	    <?php
	} else{

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO tb_user (username,password,plat_nomer,no_telp) VALUES('$username', '$password', '$plat_nomer', '$no_telp')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="index.php">Kembali</a>';		//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';				//Pesan jika proses tambah gagal
		echo '<a href="form_signup.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}}
?>