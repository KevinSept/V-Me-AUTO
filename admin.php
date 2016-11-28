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
            $id=$_SESSION["id"];
            $query_admin = mysql_query("SELECT * FROM tb_user WHERE id = '$id'");
            $data_admin = mysql_fetch_assoc($query_admin);
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
    	   
            <h3><center><strong>Data Pelanggan V&ME AUTO</strong></center></h3>
                <center>
                <table class="table-bordered table-hover " cellpadding="5" cellspacing="0" border="1">
                    <tr bgcolor="#CCCCCC">
                        <th>No</th>
                        <th>Username</th>
                        <th>Plat Nomer</th>
                        <th>Nomer Telp</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>

                    <?php

                    $per_page = 10;
                    $page_query = mysql_query("SELECT COUNT(*) FROM tb_user");
                    $pages = ceil(mysql_result($page_query, 0) / $per_page);
                    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                    $start = ($page - 1) * $per_page;

                    //query ke database dg SELECT table tb_user diurutkan berdasarkan id terkecil
                    //$query = mysql_query("SELECT * FROM tb_user WHERE id !='1' ORDER BY id ASC") or die(mysql_error());
                    $query = mysql_query("SELECT * FROM tb_user WHERE id != '1' LIMIT $start, $per_page");
                    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
                    if(mysql_num_rows($query) == 0){    //ini artinya jika data hasil query di atas kosong
                        
                        //jika data kosong, maka akan menampilkan row kosong
                        echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
                        
                    }else{  //else ini artinya jika data hasil query ada (database tidak kosong)
                        
                        //jika data tidak kosong, maka akan melakukan perulangan while
                        //membuat variabel $no untuk membuat nomor urut
                        $no = 1;
                        while($data = mysql_fetch_assoc($query)){   //perulangan while dg membuat variabel $data yang akan mengambil data di database
                            
                            //menampilkan row dengan data di database
                            echo '<tr>';
                                echo '<td>'.$no.'</td>'; 
                                // echo '<td>'.$data['id'].'</td>'; //menampilkan data id dari database
                                echo '<td>'.$data['username'].'</td>';    //menampilkan data username dari database
                                echo '<td>'.$data['plat_nomer'].'</td>';   //menampilkan data plat_nomer dari database
                                echo '<td>'.$data['no_telp'].'</td>'; //menampilkan data no_telp dari database
                                $no++;                            
                                ?>
                                <td> 
                                    <a href="form_edit_admin.php?id=<?php echo $data['id']; ?>">edit</a>
                                </td>
                                <td>
                                    <a onclick="return konfirmasi()" href="do_delete_admin.php?id=<?php echo $data['id']; ?>">delete</a>
                                </td>
                               
                                <?php

                            echo '</tr>';
                        }

                        //script konfirmasi penghapusan data
                        ?>
                        <script type="text/javascript" language="JavaScript">
                             function konfirmasi(){
                                tanya = confirm("Anda Yakin Akan Menghapus Data ?");
                                if (tanya == true){
                                    return true;
                                }
                                else return false;
                             }
                        </script>
                        <?php
                        
                    }
                    ?>

                </table>
                
                <nav aria-label="Page navigation">
                      <ul class="pagination">                        
                        <?php
                            if($pages >= 1 && $page <= $pages){
                                for($x=1; $x<=$pages; $x++){
                                    echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
                                }
                            }
                        ?>
                          
                        </li>
                      </ul>
                    </nav>

                
                <a href="register_admin.php" class="btn btn-primary btn-embossed btn-wide"><span class="fa fa-arrow-circle-o-right"></span>Tambah Pelanggan</a>
                    
                </center>
    			
    		</div><!-- /.wrapper -->
    	
    	

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

<?php
}
?>