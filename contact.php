<!DOCTYPE html>

<?php
  include("koneksi.php");
  session_start();
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
                            <ul class="nav navbar-nav">               
                                <?php
                                if (!isset($_SESSION['id'])){
                                    ?>
                                    <li class="propClone"><a href="index.php">Beranda</a></li>
                                    <li class="page-scroll"><a href="index.php #content_section1">Servis</a></li>
                                    <?php 
                                }else{
                                    ?>
                                    <li class="propClone"><a href="beranda.php">Beranda</a></li>
                                    <li class="page-scroll"><a href="beranda.php #content_section1">Servis</a></li>
                                    <?php 
                                }
                            ?>             
                                <li class="propClone"><a href="tentang.php">Tentang</a></li>
                                <li class="active propClone"><a href="contact.php">Kontak</a></li>
                                <li class="propClone"><a href="fitur.php">Fitur</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                    <li class="propClone">

                                        <?php
                                        if (!isset($_SESSION['id'])){
                                            ?>
                                            <a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login <span class="fa fa-lock"></span></a>
                                            <li>
                                                <a href="register.php">Belum Daftar?</a>
                                            </li>
                                                <?php
                                            }
                                            else{
                                                ?>
                                                <a href="fuser.php" style="width:auto;"> <?php 
                                                $id=$_SESSION["id"];
                                                $query = mysql_query("SELECT * FROM tb_user WHERE id = '$id'");
                                                $data = mysql_fetch_assoc($query);

                                                echo $data['username']; ?></a>
                                                <li>
                                                    <a href="logout.php">Logout</a>
                                                </li>
                                                <?php
                                            }
                                        ?>
                                       
                                        <div id="id01" class="modal">
              
                                          <form class="modal-content animate" method="post" action="do_login.php">
                                            <div class="imgcontainer">
                                              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                              <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
                                            </div>

                                            <div class="container">

                                              <label><b>Username</b></label>
                                              <input type="text" placeholder="Enter Username" name="uname" required>

                                              <label><b>Password</b></label>
                                              <input type="password" placeholder="Enter Password" name="psw" required>
                                                
                                              <button type="submit">Login</button>
                                              
                                            </div>
                                       

                                            <div class="container" style="background-color:#f1f1f1">
                                              <a type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger">Cancel</a>
                                              <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
                                            </div>
                                          </form>
                                        </div>
                                        
                                    </li>
                                    
                            </ul>             
                        </div><!-- /.navbar-collapse -->
                    </nav>
            
                </div><!-- /.container -->
        
            </div><!-- /.wrpaper -->

        
    <div class="item contact padding-top-0 padding-bottom-0" id="contact1">
    	
    		<div class="wrapper grey">
    	
    			<div class="container">
    		
    			
    				<div class="col-md-5 col-md-offset-3">
	    				
	    				<div class="editContent">
                        <img src="images/carwas/logo.png" class="brand-img img-responsive" >
    					<h5>Bagaimana Cara Menghubungi Kami:</h5>
    				
    					
	    				</div><!-- /.editContent -->
    				
    					<p>
    						<b class="chead"><span class="fa fa-map-marker"></span>Alamat</b><br>
    						<span class="editContent">
    						Jl. Wora Wari No. 32, Mangkubumen, Banjarsari<br>
    						Kota Surakarta<br>
    						Jawa Tengah, Indonesia
                            <br>Kode Pos 57141
    						</span>
    					</p>
    				
    					<p>
    						<b class="chead"><span class="fa fa-phone"></span> TELEPON</b><br>
    						<span class="editContent">0271 - 719 402</span>
    					</p>
    				
    					<p>
    						<b class="chead"><span class="fa fa-user"></span> JAM BUKA</b><br>
                            <span class="editContent">Hari Biasa : 07.00 - 16.00 <br>
                            Hari Minggu/ hari besar : 08.00 - 16.00
                            </span>
    						<a href="#" class="editContent"></a>
                            
    					</p>
    			
    				</div><!-- /.col-md-6 -->
    		
    			</div><!-- /.container -->
    		
    		</div><!-- /.wrapper -->
    	
    	</div><!-- /.item --></div><!-- /#page -->

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
                                     <?php
                                if (!isset($_SESSION['id'])){
                                    ?>
                                    <li><a href="index.php">Beranda</a></li>
                                    <li><a href="tentang.php">Tentang Kami</a></li>
                                    <li><a href="index.php #content_section1">Servis</a></li>
                                    <?php 
                                }else{
                                    ?>
                                    <li><a href="beranda.php">Beranda</a></li>
                                    <li><a href="tentang.php">Tentang Kami</a></li>
                                    <li><a href="beranda.php #content_section1">Servis</a></li>
                                    <?php 
                                }
                            ?>   
                                    <li><a href="contact.php">Kontak</a></li>
                                    <li><a href="fitur.php">Fitur</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <div class="editContent">
                            
                                <h4>Legal Stuff</h4>
                            </div>
                            <div class="editContent">
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Cookie Policy</a></li>
                                </ul>
                            </div>
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
    width: 100%;
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