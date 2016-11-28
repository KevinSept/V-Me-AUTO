<!DOCTYPE html>
<?php
        //iclude file koneksi ke database
        session_start();
        include('koneksi.php');
        


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
            
    $id=$_GET['id'];

    $query = "SELECT * FROM tb_user WHERE id = '$id'";
    $waton=mysql_query($query);
    $data = mysql_fetch_assoc($waton);

    $querysms = "SELECT * FROM sms";
    $waton1 = mysql_query($querysms);
    $datasms = mysql_fetch_assoc($waton1);
?>

<html><head>
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
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <!--headerIncludes-->
     
    
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
                                            echo $_SESSION['username']; ?></a>
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
        
    <div class="item contact padding-top-0 padding-bottom-0" id="contact1">
    	
    		<div class="wrapper grey">

               
            
    	       <div class="container">
            
                   
                    
                    <div class="col-md-10 col-md-offset-0">
                         <h3><strong>Masukan Pesan / Promo-Promo yang ingin ditawarkan</strong></h3>
                        <center>
                        <form method="post">

                        <div class="editContent">
                        
                                <div class="form-group row">
                                    <label for="edit-username" class="col-xs-3 col-form-label">Pesan : </label>
                                    <div class="col-xs-9">
                                        <textarea rows="10" cols="100" class="form-control" name="pesan" type="text" value="" required title="required" id="example-text-input">
--V&ME AUTO--
Kepada Bpk/Ibu <?php echo $data['username']; ?> 
Pelanggan yth, mobil anda dengan plat nomor <?php echo $data['plat_nomer']; ?> <?php echo $datasms['isi']; ?>
                                        </textarea>
                                    </div>
                                </div>
                               
                                
                                <!-- <div class="form-group row">
                                    <label for="disabledTextInput" class="col-xs-3 col-form-label">Status</label>
                                    <div class="col-xs-9">
                                        <input class="form-control" type="sta" value="SMS / Tidak" id="disabledTextInput">
                                    </div>
                                </div> -->
                                <button type="submit" name="button" class="btn btn-primary btn-embossed btn-wide">Kirim</button>
                                <a href="sms.php" type="button" class="btn btn-danger btn-embossed btn-wide">cancel</a>

                        </div><!-- /.editContent -->
                        </form>
                    </center>
                    </div><!-- /.col-md-6 -->

                </div><!-- /.container -->
          
    			
    		</div><!-- /.wrapper -->

    <?php           
            if(isset($_POST['button']))
            {
                $query = mysql_query("INSERT INTO outbox (DestinationNumber, TextDecoded) VALUES ('".$data['no_telp']."','".$_POST['pesan']."')");
                $noTujuan = $data['no_telp'];
                $message = $_POST['pesan'];
                
                if ($query){
                    //execInBackground('start cmd.exe @cmd /k "c:\gammu\bin\gammu.exe -c c:\gammu\bin\smsdrc sendsms TEXT '.$noTujuan.' -text "'.$message.'"');
                    exec('c:\gammu\bin\gammu.exe sendsms TEXT '.$noTujuan.' -text "'.$message.'"');
                        ?>
                            <script language="javascript">
                            alert('SMS berhasil dikirim');
                            document.location="sms.php";
                            </script>
                        <?php
                    $update = mysql_query("UPDATE tb_user SET status = '0' WHERE id = '$id' ") or die(mysql_error());
                } 
                
                else {
                ?>
                    <script language="javascript">
                    alert('SMS GAGAL dikirim');
                    document.location="sms.php";
                    </script>
                <?php
                }
        //echo "All your base are belong to us" | exec('gammu-smsd-inject TEXT 123456');
        //echo exec('c:\gammu\bin\gammu.exe sendsms TEXT '.$noTujuan.' -text "'.$message.'"');
        }
    	
    	?>

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
    </div>

    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
	<script src="js/jquery.nivo.slider.pack.js"></script>
    <script src="js/application.js"></script>
	<script src="js/over.js"></script>
<!-- 	<script>
	$(function(){
		
		if( $('#nivoSlider').size() > 0 ) {
		
	    	$('#nivoSlider').nivoSlider({
	    		effect: 'random',
				pauseTime: 5000
	    	});
		
		}
		
	})
	</script> -->


</body>

<style>
/* Full-width input fields */
input[type=text], input[type=password] {
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
    width: 15%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: 50px;
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