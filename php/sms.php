<?php
  session_start();
    echo $_SESSION["username"];
  include("koneksi.php");

?>
<!DOCTYPE html>
<html lang="en">
    <body>  
        <div>
            <p>
                Selamat DAtang <?php  echo $_SESSION["username"];
                    ?>
            </p>
        </div>

<table cellpadding="5" cellspacing="0" border="1">
        <tr bgcolor="#CCCCCC">
            <th>No.</th>
            <th>ID</th>
            <th>Username</th>
            <th>Plat Nomer</th>
            <th>Nomer Telp</th>
            <th>SMS</th>
        </tr>
        
        <?php        
        //query ke database dg SELECT table tb_user diurutkan berdasarkan NIS paling besar
        $query = mysql_query("SELECT * FROM tb_user WHERE status = '1' ORDER BY id ASC") or die(mysql_error());
        
        //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
        if(mysql_num_rows($query) == 0){    //ini artinya jika data hasil query di atas kosong
            
            //jika data kosong, maka akan menampilkan row kosong
            echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
            
        }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
            
            //jika data tidak kosong, maka akan melakukan perulangan while
            $no = 1;    //membuat variabel $no untuk membuat nomor urut
            while($data = mysql_fetch_assoc($query)){   //perulangan while dg membuat variabel $data yang akan mengambil data di database
                
                //menampilkan row dengan data di database
                echo '<tr>';
                    echo '<td>'.$no.'</td>';    //menampilkan nomor urut
                    echo '<td>'.$data['id'].'</td>'; //menampilkan data id dari database
                    echo '<td>'.$data['username'].'</td>';    //menampilkan data username dari database
                    echo '<td>'.$data['plat_nomer'].'</td>';   //menampilkan data plat_nomer dari database
                    echo '<td>'.$data['no_telp'].'</td>'; //menampilkan data no_telp dari database
                    ?>
                    <td>  <form name="sms" method="post" action="do_sms.php">
                    <a href="do_sms.php?id=<?php echo $data['id']; ?>">sms</a>
             </td>

                </form>

                    <?php
                echo '</tr>';

                
                $no++;  //menambah jumlah nomor urut setiap row
                
            }
            
        }
        ?>
    </table>


        <div>
            <a href="logout.php">logout</a> |
           <a href="admin.php">admin</a> |
            
        </div>
    </body>
</html>