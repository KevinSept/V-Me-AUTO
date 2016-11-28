<?php
  include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
    <body>  
        <form name="login" method="post" action="do_login.php">
            <div>
                <input name="username" placeholder="Username" type="text" required title="required" style="width: 90%;font-size: 18px;">
                <input name="password" placeholder="Password" type="password" required title="required" style="width: 90%;font-size: 18px;">                   
            </div>  
            <button type="submit">SUBMIT</button>
        </form>
        <form name="signup" method="post" action="do_signup.php">
            <div>
                Belum Daftar?? ayo segera sign up dulu
               <a href="form_signup.php">Daftar</a>
            </div>
        </form>
    </body>
</html>