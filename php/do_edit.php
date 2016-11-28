<?php
  	session_start();
  	include("koneksi.php");
  	$id=$_SESSION["id"];
  	$username = $_POST['username'];
	$password = $_POST['password'];
	$plat_nomer = $_POST['plat_nomer'];
	$no_telp = $_POST['no_telp'];

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$update = mysql_query("UPDATE tb_user SET username='$username', password='$password', plat_nomer='$plat_nomer', no_telp='$no_telp' WHERE id = '$id' ") or die(mysql_error());
	
	//jika query input sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="user.php">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="form_edit.php">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}
 
?>