<?php
    session_start();
    include("koneksi.php");
    $id=$_SESSION["id"];
    $query = mysql_query("SELECT * FROM tb_user WHERE id = '$id'");
    $data = mysql_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
    <body>  
        <h2>EDIT</h2>
        <form name="edit" method="post" action="do_edit.php">
            <div>
                <input name="username" placeholder="Username" type="text" value="<?php echo $data['username']; ?>" required title="required" style="width: 90%;font-size: 18px;">
                <input name="password" placeholder="Password" value="<?php echo $data['password']; ?>" type="password"  required="required" style="width: 90%;font-size: 18px;">                   
                <input name="plat_nomer" placeholder="ADXXXXCA" value="<?php echo $data['plat_nomer']; ?>" type="text"  required="required" style="width: 90%;font-size: 18px;">                   
                <input name="no_telp" placeholder="085xxxxxxxxxx" value="<?php echo $data['no_telp']; ?>" type="text"  required="required" style="width: 90%;font-size: 18px;">                   
            
            </div>  
            <button type="submit">SUBMIT</button>
        </form>
         <a href="index.php">Kembali</a>
        
    </body>
</html>