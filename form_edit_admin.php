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
            $id_admin=$_SESSION["id"];
            $query_admin = mysql_query("SELECT * FROM tb_user WHERE id = '$id_admin'");
            $data_admin = mysql_fetch_assoc($query_admin);

            $id_user=$_GET['id'];
            $query_user = mysql_query("SELECT * FROM tb_user WHERE id = '$id_user'");
            $data_user = mysql_fetch_assoc($query_user);

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
        
    <div class="item contact padding-top-0 padding-bottom-0" id="contact1">
    	
    		<div class="wrapper grey">
    	   
            <h3><center><strong>Edit Pelanggan V&ME AUTO</strong></center></h3>
                <center>
               <form name="edit" method="post" action="do_edit.php?id=<?php echo $id_user; ?>">

                        <div class="editContent">
                        
                                <div class="form-group row">
                                    <label for="edit-username" class="col-xs-3 col-form-label">Nama</label>
                                    <div class="col-xs-7">
                                        <input class="form-control" name="username" type="text" value="<?php echo $data_user['username']; ?>" required title="required" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="edit-password" class="col-xs-3 col-form-label">Password</label>
                                    <div class="col-xs-7">
                                        <input class="form-control" name="password" type="text" value="<?php echo $data_user['password']; ?>" required title="required" id="example-search-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="edit-plat" class="col-xs-3 col-form-label">Plat Nomor</label>
                                    <div class="col-xs-7">
                                        <input class="form-control" name="plat_nomer" type="plat" value="<?php echo $data_user['plat_nomer']; ?>" required title="required" id="example-email-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="edit-telp" class="col-xs-3 col-form-label">Telephone</label>
                                    <div class="col-xs-7">
                                        <input class="form-control" name="no_telp" type="tel" value="<?php echo $data_user['no_telp']; ?>" required title="required" id="example-tel-input">
                                  </div>
                                </div>
                                
                                <!-- <div class="form-group row">
                                    <label for="disabledTextInput" class="col-xs-3 col-form-label">Status</label>
                                    <div class="col-xs-9">
                                        <input class="form-control" type="sta" value="SMS / Tidak" id="disabledTextInput">
                                    </div>
                                </div> -->
                                <button type="submit" class="btn btn-primary" >Edit</button>
                                <a href="admin.php" type="submit" class="btn btn-danger btn-wide" >Kembali</a>   

                        </div><!-- /.editContent -->
                    </form>
                </center>
    			
    		</div><!-- /.wrapper -->
    	
    	

        <section class="content-block-nopad bg-deepocean">
        <div class="container footer-1-1">
            <div class="row">
            
                <div class="col-sm-5">
                    <img src="images/carwas/logo.png" class="brand-img img-responsive"  >

                    <div class="editContent">
                        <h3>V&Me auto adalah tempat <strong>Cuci Mobil</strong> yang berkualitas tinggi</h3>
                    </div>
                    <div class="editContent">
                        <p class="lead">Kebersihan Mobil Anda, Memelihara Penggunaannya <br> <strong>KAMI SIAP MEWUJUDKANNYA</strong></p>
                    </div>
                </div>
                
                <div class="col-sm-6 col-sm-offset-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="editContent">
                                <h4>Shortcuts</h4>
                            </div>
                            <div class="editContent">
                                <ul>
                                    <li><a href="index.php">Beranda</a></li>
                                    <li><a href="#">Tentang Kami</a></li>
                                    <li><a href="index.php #content_section1">Servis</a></li>
                                    <li><a href="contact.html">Kontak</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- <div class="col-md-4">
                            <div class="editContent">
                                <h4>Seen Enough?</h4>
                            </div>
                            <a href="#" class="btn btn-block btn-primary">Buy Now</a>
                        </div> -->
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


/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 12%;
}
/*.form-control{
    width: 50%;
}*/

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