<?php
  include("koneksi.php");
  session_start();

  if (!isset($_SESSION['id'])){
                    echo "
                        <p><center>
                            Anda Belum Login.<br>
                            Klik Link Dibawah ini Untuk Login.<br>
                            <a href=index.php>Disini</a>
                            </center>
                        </p>
                    "; }
                    else{
?>

<!DOCTYPE html>
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
    
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <!--headerIncludes-->
     
    
</head>
<body>
    
    <div id="page" class="page">
        
    <!-- /.wrapper -->

    <!-- <section id="navbar-collapse-02" class= "container content-section text-center" > -->

    	<!-- /.item --><!-- /.item --><!-- /.container --><!-- /.item -->
        <div class="item header padding-bottom-0" id="header2">
    
    		
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
    							<li class="active propClone"><a href="beranda.php">Beranda</a></li>
    							<li class="page-scroll"><a href="beranda.php #content_section1">Servis</a></li>
    							<li class="propClone"><a href="tentang.php">Tentang</a></li>
    							<li class="propClone"><a href="contact.php">Kontak</a></li>
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
                                              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
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
    
    		<header class="wrapper grey">
    	
    			<div class="container" id="successMessage">
    		    			
    				<div class="row banner2">
    			
    					<div class="col-md-6 col-md-offset-0">
    					
    						<h1 class="editContent">Kebersihan Mobil Anda, Memelihara Penggunaannya <br> KAMI SIAP MEWUJUDKANNYA</h1>
                     
    					
    						<p class="editContent" >
    							V&Me Auto merupakan tempat pencucian mobil modern yang terletak di kota Surakarta. Model pencucian yang digunakan oleh V&Me Auto menggunakan Snow Wash atau cuci salju. Biaya pembersihan car washwash sangat terjangkau dan kualitas kami sangatlah terbukti hasilnya.
    						</p>
    					
    						<a href="beranda.php #content_section2" class="btn btn-primary btn-embossed btn-wide" ><span class="fa fa-arrow-circle-o-right"  ></span> Cek Harga</a>
                           
    				
    					</div>
                        <div class ="col-md-3 col-md-offset-2    " >
                            <div class="editContent">   
                            <h1> <h3> Untuk Meminta SMS Silakan Masuk Menu Profil atau Klik Tombol Dibawah Ini. </h3></h1>                           
                            <a href="fuser.php" class="btn btn-info btn-embossed"><span class="fa fa-arrow-circle-o-right"  ></span> Klik Disini</a>
                            </div>
                        </div>
    			
    				</div><!-- /.row -->
    		
    			</div><!-- /.container -->
            <div class="container" id="slideshow1">
    
            <div class="col-md-12">
                
                <!-- <h1>NivoSlider Example</h1> -->
    
                <div id="nivoSlider" class="nivoSlider">
                    <img src="images/carwas/1pp.jpg" alt="" class="edit">
                    <img src="images/carwas/2pp.jpg" alt="" title="#htmlcaption" class="edit">
                    <img src="images/carwas/3pp.jpg" alt="" title="This is an example of a caption" class="edit">
                    <img src="images/carwas/4p.jpg" alt="" class="edit">
                    <img src="images/carwas/5p.jpg" alt="" class="edit">
                </div>
                <!-- <div id="htmlcaption" class="nivo-html-caption">
                    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
                </div> -->
        
            </div><!-- /.col -->
            </div><!-- /.container -->
    	
    		</header></div><!-- /.wrapper -->
            <!-- </section> -->
    	
        <section id= "navbar-collapse-02" class="container content-section text-center"> 
        <!-- /.item -->
        <div class="item content padding-bottom-60" id="content_section1">
    		
    		<div class="container">
    		    		
    			<div class="row">
    			
    				<div class="col-md-4 text-center">
    				       				   	
    				   	<img alt="" src="images/carwas/cuci mobil.png">
    				   	
    				   	<div class="editContent">		
    					<h3>Cuci Mobil</h3>
    						
    					<p>
    						Cuci mobil merupakan proses pembersihan bagian bodi mobil dengan menggunakan air dan sabun sebagai media utama pembersih. cuci mobil dibagi menjadi 2 yaitu cuci mobil biasa dan cuci mobil hidrolis. 
    					</p>
    				   	</div><!-- /.editContent -->
    					
    					
    					    						    					    				
    				</div><!-- /.col-md-4 col -->
    				
    				<div class="col-md-4 text-center">
    				        				    
    				    <img alt="" src="images/carwas/cuci instant.png">
    				   	
    				   	<div class="editContent">	    					
    					<h3>Salon Instant</h3>
    						
    					<p>
    						Salon instant merupakan proses membersihkan kotoran yang melekat pada seluruh bagian mobil yang terlihat dan terjangkau sehingga memberikan perubahan penampilan menjadi lebih menarik, enak dilihat, dan nyaman dikendarai.
    					</p>
    				   	</div><!-- /.editContent -->
    						
    					
    						    						    					    				
    				</div><!-- /.col-md-4 col -->
    				
    				<div class="col-md-4 text-center">
    				   	    				   	
    				   	<img alt="" src="images/carwas/lengkappp.png">
    				   	
    				   	<div class="editContent">    					
    					<h3>Salon Lengkap</h3>
    						
    					<p>
    						Salon lengkap tidak berbeda jauh dengan salon instant namun setelah melakukan pembersihan atau pemolesan pada bagian mobil dilakukan pemolesan mesin bagian bawah mobil untuk membersihkan kotoran yang ada di bawah mesin
    					</p>
    				   	</div><!-- /.editContent -->
    						
    					
    						    					    					    				
    				</div><!-- /.col-md-4 col -->
    			
    			</div><!-- /.row -->
    		
    		</div><!-- /.container -->
    	

    
        <div class="item content" id="content_section2">
            
            <div class="container">
            
                <div class="row">
                    <h3>List Harga</h3>
                
                    <div class="col-md-8 col-md-offset-2">
                        
                        <div class="tableWrapper" data-selector="Footers"><table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td>
                                    No
                                </td>
                                <td>
                                    Services
                                </td>
                                <td>
                                    Price
                                </td>
                                <td>
                                    No
                                </td>
                                <td>
                                    Services
                                </td>
                                <td>
                                    Price
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Cuci Biasa
                                </td>
                                <td>
                                    40.000
                                </td>
                                <td>
                                    7
                                </td>
                                <td>
                                    Salon Lengkap (Kijang/Panther)
                                </td>
                                <td>
                                    575.000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    Cuci Hidrolis
                                </td>
                                <td>
                                    45.000
                                </td>
                                <td>
                                    8
                                </td>
                                <td>
                                    Cuci + Olie Plastik
                                </td>
                                <td>
                                    70.000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3
                                </td>
                                <td>
                                    Cuci Lengkap
                                </td>
                                <td>
                                    90.000
                                </td>
                                <td>
                                    9
                                </td>
                                <td>
                                    Cuci Mesin
                                </td>
                                <td>
                                    10.000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4
                                </td>
                                <td>
                                    Salon Instant (Sedan/Minibus)
                                </td>
                                <td>
                                    250.000
                                </td>
                                <td>
                                    10
                                </td>
                                <td>
                                    Cuci Mesin + Poles
                                </td>
                                <td>
                                    30.000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    5
                                </td>
                                <td>
                                    Salon Instant (Kijang/Panther)
                                </td>
                                <td>
                                    300.000
                                </td>
                                <td>
                                    11
                                </td>
                                <td>
                                    Poles Bodi Mesin + Cuci
                                </td>
                                <td>
                                    200.000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6
                                </td>
                                <td>
                                    Salon Lengkap (Sedan/Minibus)
                                </td>
                                <td>
                                    500.000
                                </td>
                                <td>
                                    12
                                </td>
                                <td>
                                    Kompon + Poles Bodi Mobil
                                </td>
                                <td>
                                    300.000
                                </td>
                            </tr>
                            </tbody>
                            </table></div><!-- /.tableWrapper -->               
                    
                    </div><!-- ./col-md-8 -->
                
                </div><!-- /.row -->
            
            </div><!-- /.container -->
        
        </div><!-- /.item -->
    </section>


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
									<li><a href="beranda.php">Beranda</a></li>
                                    <li><a href="tentang.php">Tentang Kami</a></li>
                                    <li><a href="beranda.php #content_section1">Servis</a></li>
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
    <!--// END Footer 1-1 --></div><!-- /#page -->


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
	<script>
	$(function(){
		
		if( $('#nivoSlider').size() > 0 ) {
		
	    	$('#nivoSlider').nivoSlider({
	    		effect: 'random',
				pauseTime: 5000
	    	});
		
		}
		
	})
	</script>


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

<script type="text/javascript">
        $(function() {
            function runEffect() {

                var selectedEffect = 'blind';

                var options = {};

                $("#successMessage").hide(selectedEffect, options, 500);
            };

            $("#successMessage").click(function() {
                runEffect();
                return false;
            });
        });
    </script>

</html>

<?php
}
?>