<<<<<<< HEAD
<?php
  	session_start();
  	include("koneksi.php");

	if (!isset($_SESSION['id'])){
        echo "<p><center>Anda Belum Login.<br>
            Klik Link Dibawah ini Untuk Login.<br>
            <a href=index.php>Disini</a>
            </center></p>";
    }
    elseif ($_SESSION["id"]=='1') { //Pengecekan edit melalui admin, ambil id sesuai tabel yg di klik
        $id=$_GET['id'];
    }
    else{
        $id=$_SESSION["id"];    //edit melalui user, ambil id sesuai user login
    }

  	$username = $_POST['username'];
	$password = $_POST['password'];
	$plat_nomer = $_POST['plat_nomer'];
	$no_telp = $_POST['no_telp'];

	$cek = mysql_query("SELECT * FROM tb_user where username='$username'");
	$jumlah = mysql_num_rows($cek);
	$hasil = mysql_fetch_array($cek);

	//pengecekan apakah username diganti atau tidak
	$cekusername = mysql_query("SELECT * FROM tb_user WHERE id = '$id'");
    $data = mysql_fetch_assoc($cekusername);

	if (!eregi("^[a-zA-Z0-9]{1,100}$", $username)) {
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
	} else if ($username != $data['username']) {
		if($jumlah > 0) {
		?>
			<script language="javascript">
	            alert('Username telah ada');
	            window.location=history.go(-1);
	        </script>
	    <?php
		}
		else{
			//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
			$update = mysql_query("UPDATE tb_user SET username='$username', password='$password', plat_nomer='$plat_nomer', no_telp='$no_telp' WHERE id = '$id' ") or die(mysql_error());
	
			//jika query input sukses
			if($update){
		 		if ($_SESSION['id']=='1') {
		 			?>
		 			<script language="javascript">
			            alert('Data berhasil disimpan');
			            document.location="admin.php";
			        </script>
			        <?php
			    }
			    else{
			    	?>
		 			<script language="javascript">
			            alert('Data berhasil disimpan');
			            document.location="fuser.php";
			        </script>
			        <?php
			    }	    
			}else{
				
			if ($_SESSION['id']=='1') {
		 			?>
		 			<script language="javascript">
			            alert('GAGAL');
			            document.location="admin.php";
			        </script>
			        <?php
			    }
				else{
			    	?>
		 			<script language="javascript">
			            alert('GAGAL');
			            document.location="fuser.php";
			        </script>
			        <?php
			    }
			}
		}
	}
	else{

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$update = mysql_query("UPDATE tb_user SET username='$username', password='$password', plat_nomer='$plat_nomer', no_telp='$no_telp' WHERE id = '$id' ") or die(mysql_error());
	
	//jika query input sukses
	if($update){
 		if ($_SESSION['id']=='1') {
 			?>
 			<script language="javascript">
	            alert('Data berhasil disimpan');
	            document.location="admin.php";
	        </script>
	        <?php
	    }
	    else{
	    	?>
 			<script language="javascript">
	            alert('Data berhasil disimpan');
	            document.location="fuser.php";
	        </script>
	        <?php
	    }	    
	}else{
		
	if ($_SESSION['id']=='1') {
 			?>
 			<script language="javascript">
	            alert('GAGAL');
	            document.location="admin.php";
	        </script>
	        <?php
	    }
		else{
	    	?>
 			<script language="javascript">
	            alert('GAGAL');
	            document.location="fuser.php";
	        </script>
	        <?php
	    }
	}
 }
=======
<?php
  	session_start();
  	include("koneksi.php");

	if (!isset($_SESSION['id'])){
        echo "<p><center>Anda Belum Login.<br>
            Klik Link Dibawah ini Untuk Login.<br>
            <a href=index.php>Disini</a>
            </center></p>";
    }
    elseif ($_SESSION["id"]=='1') { //Pengecekan edit melalui admin, ambil id sesuai tabel yg di klik
        $id=$_GET['id'];
    }
    else{
        $id=$_SESSION["id"];    //edit melalui user, ambil id sesuai user login
    }

  	$username = $_POST['username'];
	$password = $_POST['password'];
	$plat_nomer = $_POST['plat_nomer'];
	$no_telp = $_POST['no_telp'];

	$cek = mysql_query("SELECT * FROM tb_user where username='$username'");
	$jumlah = mysql_num_rows($cek);
	$hasil = mysql_fetch_array($cek);

	//pengecekan apakah username diganti atau tidak
	$cekusername = mysql_query("SELECT * FROM tb_user WHERE id = '$id'");
    $data = mysql_fetch_assoc($cekusername);

	if (!eregi("^[a-zA-Z0-9]{1,100}$", $username)) {
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
	} else if ($username != $data['username']) {
		if($jumlah > 0) {
		?>
			<script language="javascript">
	            alert('Username telah ada');
	            window.location=history.go(-1);
	        </script>
	    <?php
		}
		else{
			//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
			$update = mysql_query("UPDATE tb_user SET username='$username', password='$password', plat_nomer='$plat_nomer', no_telp='$no_telp' WHERE id = '$id' ") or die(mysql_error());
	
			//jika query input sukses
			if($update){
		 		if ($_SESSION['id']=='1') {
		 			?>
		 			<script language="javascript">
			            alert('Data berhasil disimpan');
			            document.location="admin.php";
			        </script>
			        <?php
			    }
			    else{
			    	?>
		 			<script language="javascript">
			            alert('Data berhasil disimpan');
			            document.location="fuser.php";
			        </script>
			        <?php
			    }	    
			}else{
				
			if ($_SESSION['id']=='1') {
		 			?>
		 			<script language="javascript">
			            alert('GAGAL');
			            document.location="admin.php";
			        </script>
			        <?php
			    }
				else{
			    	?>
		 			<script language="javascript">
			            alert('GAGAL');
			            document.location="fuser.php";
			        </script>
			        <?php
			    }
			}
		}
	}
	else{

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$update = mysql_query("UPDATE tb_user SET username='$username', password='$password', plat_nomer='$plat_nomer', no_telp='$no_telp' WHERE id = '$id' ") or die(mysql_error());
	
	//jika query input sukses
	if($update){
 		if ($_SESSION['id']=='1') {
 			?>
 			<script language="javascript">
	            alert('Data berhasil disimpan');
	            document.location="admin.php";
	        </script>
	        <?php
	    }
	    else{
	    	?>
 			<script language="javascript">
	            alert('Data berhasil disimpan');
	            document.location="fuser.php";
	        </script>
	        <?php
	    }	    
	}else{
		
	if ($_SESSION['id']=='1') {
 			?>
 			<script language="javascript">
	            alert('GAGAL');
	            document.location="admin.php";
	        </script>
	        <?php
	    }
		else{
	    	?>
 			<script language="javascript">
	            alert('GAGAL');
	            document.location="fuser.php";
	        </script>
	        <?php
	    }
	}
 }
>>>>>>> 9a77919734c6d02dd885b89e63a150922366b57b
?>