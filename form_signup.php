<?php
  include("koneksi.php");
  session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
    <body>  
        <form name="signup" method="post" action="do_signup.php">
            <div>
                <input name="username" placeholder="Username" type="text" required title="required" style="width: 90%;font-size: 18px;">
                <input name="password" placeholder="Password" type="password"  required="required" style="width: 90%;font-size: 18px;">                   
                <input name="plat_nomer" placeholder="ADXXXXCA" type="text"  required="required" style="width: 90%;font-size: 18px;">                   
                <input name="no_telp" placeholder="085xxxxxxxxxx" type="text"  required="required" style="width: 90%;font-size: 18px;">                   
            
            </div>  
            <button type="submit">SUBMIT</button>
        </form>

        <?php 
             if (!isset($_SESSION['username'])) {
                    ?>
                     <a href="index.php">Kembali</a>
                    <?php
                }else{
                    ?>
                    <a href="admin.php">Kembali</a>
                    <?php
                }
        ?>    

       
        
    </body>
</html>