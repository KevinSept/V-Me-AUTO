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
        elseif ($_SESSION['id'] <> '1' ) {
             echo "<p><center>Bukan Hak Anda!!!.<br>
                            Klik Link Dibawah ini Untuk Kembali.<br>
                            <a href=index.php>Disini</a>
            </center></p>";
        }
        else{

        	//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=user
			if(isset($_GET['id'])){
											
				//membuat variabel $id yg bernilai dari URL GET id
				$id = $_GET['id'];
				
				//cek ke database apakah ada data user dengan id='$id'
				$cek = mysql_query("SELECT * FROM tb_user WHERE id='$id'") or die(mysql_error());
				
				//jika data tidak ada
				if(mysql_num_rows($cek) == 0){
					
					//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
					echo '<script>window.history.back()</script>';
				
				}else{
					
					//jika data ada di database, maka melakukan query DELETE tb_user dengan kondisi WHERE id='$id'
					$del = mysql_query("DELETE FROM tb_user WHERE id='$id'");
					
					//jika query DELETE berhasil
					if($del){
						?>
						<script language="javascript">
	            			alert('Data berhasil dihapus');
	            			document.location="admin.php";
	        			</script>
					<?php	
					}else{
						?>
						<script language="javascript">
	            			alert('GAGAL Hapus');
	            			document.location="admin.php";
	        			</script>
						<?php	
					}
					
				}
				
			}else{
				
				//redirect atau dikembalikan ke halaman beranda
				echo '<script>window.history.back()</script>';
				
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
        elseif ($_SESSION['id'] <> '1' ) {
             echo "<p><center>Bukan Hak Anda!!!.<br>
                            Klik Link Dibawah ini Untuk Kembali.<br>
                            <a href=index.php>Disini</a>
            </center></p>";
        }
        else{

        	//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=user
			if(isset($_GET['id'])){
											
				//membuat variabel $id yg bernilai dari URL GET id
				$id = $_GET['id'];
				
				//cek ke database apakah ada data user dengan id='$id'
				$cek = mysql_query("SELECT * FROM tb_user WHERE id='$id'") or die(mysql_error());
				
				//jika data tidak ada
				if(mysql_num_rows($cek) == 0){
					
					//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
					echo '<script>window.history.back()</script>';
				
				}else{
					
					//jika data ada di database, maka melakukan query DELETE tb_user dengan kondisi WHERE id='$id'
					$del = mysql_query("DELETE FROM tb_user WHERE id='$id'");
					
					//jika query DELETE berhasil
					if($del){
						?>
						<script language="javascript">
	            			alert('Data berhasil dihapus');
	            			document.location="admin.php";
	        			</script>
					<?php	
					}else{
						?>
						<script language="javascript">
	            			alert('GAGAL Hapus');
	            			document.location="admin.php";
	        			</script>
						<?php	
					}
					
				}
				
			}else{
				
				//redirect atau dikembalikan ke halaman beranda
				echo '<script>window.history.back()</script>';
				
			}
 }
>>>>>>> 9a77919734c6d02dd885b89e63a150922366b57b
?>