<?php
  include("koneksi.php");
  session_start();
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
            $id=$_SESSION["id"];
            $query_admin = mysql_query("SELECT * FROM tb_user WHERE id = '$id'");
            $data_admin = mysql_fetch_assoc($query_admin);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!--     <meta charset="UTF-8">
    <title>Form Register Sederhana dengan Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">

    <link href="css/style.complete.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->


     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Script Eden ( http://scripteden.net/ ) Template Builder v2.0.0">  
    <!--pageMeta-->

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">

    <link href="css/style.complete.css" rel="stylesheet">



</head>
<body>

    <div id="page" class="page">
        
        <div class="wrapper">
        
                <div class="container">
            
                    <nav role="navigation" class="navbar navbar-inverse navbar-embossed navbar-lg navbar-fixed-top">
                        <div class="navbar-header">
                            <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                                <span class="sr-only">Toggle navigation</span>
                            </button>
                            <a href="#" class="navbar-brand"><del></del><img alt="" src="images/carwas/logo.png" style="height: 170%;">
                            </a>
                            </div>
                                    
                        <div id="navbar-collapse-02" class="collapse navbar-collapse">
                        
                            <ul class="nav navbar-nav navbar-right">
                                    <li class="propClone">
                                        <li>
                                            <a href="admin.php" style="width:auto;"> <?php 
                                            echo $data_admin['username']; ?></a>
                                        </li>
                                        <li>
                                            <a href="sms.php">SMS</a>
                                        </li>
                                        <li>
                                            <a href="logout.php">Logout</a>
                                        </li>
                                                
                                       
                                       
                                    </li>
                                    
                            </ul>             
                        </div><!-- /.navbar-collapse -->
                    </nav>
            
                </div><!-- /.container -->
        
            </div><!-- /.wrpaper -->

        <div class="wrapper grey">    
            <div class="container">


            <div class="form-horizontal">
            <h1 class="edit-content"><t>Register</t></h1>
                
            <form name="register" method="post" action="do_register.php">
                <div class="form-group">
                    <label class="control-label col-xs-2" for="inputUsername">Username:</label>
                    <div class="col-xs-7">
                        <input type="text" class="form-control" name="uname" placeholder="Username Anda" required title="required">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-xs-2" for="inputPassword">Password:</label>
                    <div class="col-xs-7">
                        <input type="password" class="form-control" name="psw" id="psw" placeholder="Masukan Kata Sandi" required title="required">
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-xs-2" for="inputPassword">Re-Password:</label>
                    <div class="col-xs-7">
                        <input type="password" class="form-control" name="psw1" id="psw1" placeholder="Masukan Ulang Kata Sandi" required title="required">
                    </div>
                </div>

                
                <div class="form-group">
                    <label class="control-label col-xs-2" for="plat">Plat Nomor:</label>
                    <div class="col-xs-7">
                        <input type="plat" class="form-control" name="plat_nomer" placeholder="Nomor Plat Mobil" required title="required">
                    </div>
                </div>
               
                
                <div class="form-group">
                    <label class="control-label col-xs-2" for="telp">No. Telp:</label>
                    <div class="col-xs-7">
                        <input type="tel" class="form-control" name="no_telp" placeholder="Nomor Telepon / Handphone" required title="required">
                    </div>
                </div>
                
    <!--             <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-7">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="Setuju">  Saya Setuju dengan <a href="#">Kebijakan dan Ketentuan</a> yang berlaku.
                        </label>
                    </div>
                </div> -->
                <br>
                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-7">
                        <input type="submit" id="submit" class="btn btn-primary" value="Kirim">
                        </form>

                <!-- pengecekan password harus sama -->
                <script language="javascript">
                            window.onload=function(){
                                var submitButton = document.getElementById("submit");
                                submitButton.onclick = checkPassword;
                        }

                        function checkPassword(){
                            var textPsw = document.getElementById('psw');
                            var textPsw1 = document.getElementById('psw1');

                            var psw = textPsw.value;
                            var psw1 = textPsw1.value;

                            if(psw != psw1){
                                alert('Password tidak sama');
                                return false;
                            }
                        }
                </script>

                        <a href="admin.php" type="buttoncancel" class="btn btn-default">Cancel</a>
                    </div>
                </div>
             
        </div>

        </div>
        </div>
    </div>

    <section class="content-block-nopad bg-deepocean">
        <div class="container footer-1-1">
            <div class="row">
            
                <div class="col-sm-3 col-sm-offset-2">
                    <img src="images/carwas/logo.png" class="brand-img img-responsive"  >
                </div>
                
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="editContent">
                        <h3>V&Me auto adalah tempat <strong>Cuci Mobil</strong> yang berkualitas tinggi</h3>
                    </div>
                    <div class="editContent">
                        <p class="lead">Kebersihan Mobil Anda, Memelihara Penggunaannya <br> <strong>KAMI SIAP MEWUJUDKANNYA</strong></p>
                    </div>
                    <div class="row">
                        
                    </div>
                </div>
            
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

</body>

<!-- <style>
    h1{
        margin: 30px 0;
        padding: 0 200px 15px 0;
        border-bottom: 1px solid #E5E5E5;
    }
    .bs-example{
        margin: 20px;
    }

</style> -->
<style>
/* Full-width input fields */
input[type=text], input[type=password],input[type=tel],input[type=plat]{ 
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}



/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.btn-default{
    width: auto;
}
/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 8px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 90%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>



</html>                                     

<?php
}
?>