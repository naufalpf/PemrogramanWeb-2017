<?php
	require ("connect.php");

	$hasil=mysqli_query($conn,"SELECT * FROM buku") ;
	if (false === $hasil) 
    	echo mysql_error();
	$i=0;
	$id2=0;
	while ($row = mysqli_fetch_array($hasil)) {
			$id2++;
			$i++;
			$id[$i] = $row['id'];
			$namabuku[$i] = $row['namabuku'];
			$pemilik[$i] = $row['pemilik'];
			$penulis[$i] = $row['penulis'];
			$review[$i] = $row['review'];
			$kat[$i]=$row['kategori'];
			$buku[$i]= $row['buku'];
			
	}
	//mysqli_close($con);


?>
<?php
  session_start();
  if(empty($_SESSION['email']))
  {
    header("location:index.php");
  }
  include "connect.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Fodensi e-Library</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css">  
    <!-- Elastic grid css file -->
    <link rel="stylesheet" href="css/elastic_grid.css"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>    
    <!-- Default Theme css file -->
    <link id="orginal" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>










li {
	display:inline;
	float:left;


}
li a{
	display: inline;
	padding: 10px;
	text-decoration: none;
	border-right:1px solid white;
	color:black;
}




table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    font-family:comic sans MS;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: lightblue;
    color: black;
}


</style>
  </head>
  <body> 
     <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
          <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->

            <!-- TEXT BASED LOGO -->
            <a class="navbar-brand" href="#">Fodensi<span> e-Library</span></a>
            
            <!-- IMG BASED LOGO  -->
            <!--  <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a> --> 
            
                   
          </div>
         <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
              <li class="active"><a href="#">Home</a></li>
               <li><a><?php echo "Selamat Datang, ";echo $_SESSION['nama']; echo "!"?></a></li>
              <li><a href="#about">List buku</a></li>
              <li><a href="buku.php">Berbagi Buku</a></li> 
             
              <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
            </ul>
        </li>
           
            </ul>   
          
          </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->

   <!-- BEGIN SLIDER AREA-->
      <div class="slider_area">
        <!-- BEGIN SLIDER-->          
        <div class="slider_area">
        <!-- BEGIN SLIDER-->          
        <div id="slides">
          <ul class="slides-container">

            <!-- THE FIRST SLIDE-->
            <li>
              <!-- FIRST SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- FIRST SLIDE MAIN IMAGE -->
              <img src="img/full-slide1.jpg" alt="img">
              <!-- FIRST SLIDE CAPTION-->
              <div class="slider_caption">
                <h2>Selamat datang di Fodensi e-Learning</h2>
                <p>Merupakan sebuah website yang dibentuk oleh pak Naufal untuk memfasilitasi pendidikan di Indonesia</p>
                <a href="#" class="slider_btn">Apakah Ini?</a>              
              </div>
            </li>


            <!-- THE SECOND SLIDE-->
            <li>
              <!-- SECOND SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- SECOND SLIDE MAIN IMAGE -->
              <img src="img/full-slide2.jpg" alt="img">
              <!-- SECOND SLIDE CAPTION-->
              <div class="slider_caption">
                <h2>Nikmati sistem yang dirancang sederhana nan user-friendly</h2>
                <p>Semua pengguna dapat membaca, mengunggah, serta mengunduh bacaan</p>
                <a href="#" class="slider_btn">Apa keunggulan kami?</a>
              </div>
            </li>

            <!-- THE THIRD SLIDE-->
            <li>
              <!-- THIRD SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- THIRD SLIDE MAIN IMAGE -->
              <img src="img/full-slide3.jpg" alt="img">
              <!-- THIRD SLIDE CAPTION-->
              <div class="slider_caption">
                <h2>Sir Naufal Pranasetyo Fodensi</h2>
                <p>The founder of Fodensi e-Learning Website</p>
                <a href="#" class="slider_btn">Siapakah saya?</a>                 
              </div>
            </li>
          </ul>
          <!-- BEGAIN SLIDER NAVIGATION -->
          <nav class="slides-navigation">
            <!-- PREV IN THE SLIDE -->
            <a class="prev" href="#">
              <span class="icon-wrap"></span>
              <h3><strong>Prev</strong></h3>
            </a>
            <!-- NEXT IN THE SLIDE -->
            <a class="next" href="#">
              <span class="icon-wrap"></span>
              <h3><strong>Next</strong></h3>
            </a>
          </nav>       
        </div>
        <!-- END SLIDER-->          
      </div>
      <!-- END SLIDER AREA -->
    </header>
    <!--=========== End HEADER SECTION ================--> 


    <!--=========== BEGIN ABOUT SECTION ================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="about_area">
              <!-- START ABOUT HEADING -->
              <div class="heading">

                <h2 class="wow fadeInLeftBig">Unduh atau baca buku maupun presentasi kesukaanmu</h2>

<table>
  <tr>
  <th>Judul Buku</th>
    <th>Penulis Buku</th>
    <th>Review</th>
    <th>Kategori</th>

    <th></th>
  </tr>

<?php if($id2!=0){for ($i=1; $i<=sizeof($id); $i++) {?>
  <tr>
    <td><?php echo $namabuku[$i] ?></td>
    <td><?php echo $penulis[$i] ?></td>
    <td><?php echo $review[$i] ?></td>
    <td><?php echo $kat[$i] ?></td>
     <td> <button onclick="location.href='buku/<?php echo $buku[$i] ?>' ">
	Download</button> 
  </tr>
<?php }}?>
</table>
</div>
</div>
</div>
</div>
</div>
</section>


     
    <!--=========== END CONTACT SECTION ================-->

    <!--=========== BEGAIN CONTACT FEATURE SECTION ================-->
    <section id="contactFeature">
      <!-- SKILLS COUNTER OVERLAY -->
      <div class="slider_overlay"></div>
      <div class="row">
        <div class="col-lg-12 col-md-12">       
          <div class="container">               
              <div class="contact_feature">
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-phone"></i>
                <h4>Call Us</h4>
                <p>087-8787-191-86</p>                
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-envelope-o"></i>
                <h4>Email Address</h4>
                <p>naufalpf@gmail.com</p>
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-map-marker"></i>
                <h4>Office Location</h4>
                <p>Jl. Jalan ke Pantai</p>
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-clock-o"></i>
                <h4>Working Hours</h4>
                <p>Monday-Friday 9.00-21.00</p>
              </div>
            </div>
          </div>
          </div>         
        </div>
      </div>
    </section>
    <!--=========== END CONTACT FEATURE SECTION ================-->

    <!--=========== BEGAIN SUBSCRIBE SECTION ================-->
    <section id="subscribe">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- START SUBSCRIBE HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Subscribe Us</h2>



            </div>
          
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SUBSCRIBE SECTION ================-->

     <!--=========== BEGAIN FOOTER ================-->
     <footer id="footer">
       <div class="container">
         <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="footer_left">
        
               <p>Copyright &copy; 2017 <a href="http://www.fodensi.kuliahweb.com">Sir Fodensi</a>. All Rights Reserved</p>
    
             </div>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="footer_right">
               <ul class="social_nav">
                    <li><a href="https://www.facebook.com/naufalpf2"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="https://twitter.com/naufalpf2"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="https://plus.google.com/112403765846654879609"><i class="fa fa-google-plus"></i></a></li>
                 <li><a href="https://www.linkedin.com/in/naufal-fodensi-0b9b4a123/"><i class="fa fa-linkedin"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
      </footer>
      <!--=========== END FOOTER ================-->

     <!-- Javascript Files
     ================================================== -->
  
     <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/jquery.ui.map.js"></script>
     <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script> 
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.superslides.min.js" type="text/javascript"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>    
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- for portfolio filter gallery -->
    <script src="js/modernizr.custom.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/elastic_grid.min.js"></script>
    <script src="js/portfolio_slider.js"></script>

    <!-- Custom js-->
    <script src="js/custom.js"></script>
  




</body>
</html>