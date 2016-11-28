<!DOCTYPE html>
<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		session_start();

		$id=$_SESSION["id"];
		$query = mysql_query("SELECT * FROM tb_user WHERE id = '$id'");
		$data = mysql_fetch_assoc($query);

		?>

<html>
<head>
	<title>User</title>
</head>
<body>
	<h2>Selamat datang <?php  echo $data['username'];
                    ?> </h2>
	
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>Nama</th>
			<th>Password</th>
			<th>Plat Nomer</th>
			<th>No HP</th>
			<th>status</th>
		</tr>
		
		
		<?php
		//query ke database dg SELECT table tb_user dimana id = id
		$query = mysql_query("SELECT * FROM tb_user WHERE id = '$id' ") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong

			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
				//menampilkan row dengan data di database
			$data = mysql_fetch_assoc($query);
				echo '<tr>';
					echo '<td>'.$data['username'].'</td>';	//menampilkan data username dari database
					echo '<td>'.$data['password'].'</td>';	//menampilkan data password dari database
					echo '<td>'.$data['plat_nomer'].'</td>';//menampilkan data plat_nomer dari database
					echo '<td>'.$data['no_telp'].'</td>';	//menampilkan data nomer telepon dari database
					echo '<td>'.$data['status'].'</td>';
					echo '</tr>';
				
			}
			
		
		?>
	</table>

	<a href="logout.php">logout </a>
	<a href="form_edit.php">EDIT </a>
	<br>
	<br>
	<form name="pemberitahuan" method="post" action="do_pemberitahuan.php">
		<?php 
			if ($data['status'] == 0) {
				?>
				<button type="submit">Pemberitahuan</button>
			<?php
				
			} else
			{
				echo "anda telah request sms";
			}


		?>
		
		<?php
			
		?>
	</form>
</body>
</html>