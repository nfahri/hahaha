<?php
  session_start();
  include('check_user_browser.php');
  if(empty($_SESSION['user_id']))
    header("Location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pilih karakter</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>

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
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <!-- <link rel="stylesheet" href="css/animate.css">  -->
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      table, th, td {
        border: 2px solid black;
        text-align: center;
        font-family: "Comic Sans MS";
      }
      td {
        padding : 10px;
      }
    </style>
  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN AJAX SECTION ================-->
    <script>

    function pilihKarakter1()
    {
      var id_karakter, hasil;
      id_karakter = document.getElementById("id1").value;
      
      // document.getElementById("deskripsi_karakter").innerHTML = id_karakter;

      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        hasil=new XMLHttpRequest();
      }
      else
      {// code for IE6, IE5
        hasil=new ActiveXObject("Microsoft.XMLHTTP");
      }
      hasil.onreadystatechange=function()
      {
      if (hasil.readyState==4 && hasil.status==200)
        {
          document.getElementById("deskripsi_karakter").innerHTML=hasil.responseText;
        }
      }
    hasil.open("GET","deskripsi_karakter.php?id_karakter="+id_karakter,true);
    hasil.send();
    }

    function pilihKarakter2()
    {
      var id_karakter, hasil;
      id_karakter = document.getElementById("id2").value;
      
      // document.getElementById("deskripsi_karakter").innerHTML = id_karakter;

      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        hasil=new XMLHttpRequest();
      }
      else
      {// code for IE6, IE5
        hasil=new ActiveXObject("Microsoft.XMLHTTP");
      }
      hasil.onreadystatechange=function()
      {
      if (hasil.readyState==4 && hasil.status==200)
        {
          document.getElementById("deskripsi_karakter").innerHTML=hasil.responseText;
        }
      }
    hasil.open("GET","deskripsi_karakter.php?id_karakter="+id_karakter,true);
    hasil.send();
    }

    function pilihKarakter3()
    {
      var id_karakter, hasil;
      id_karakter = document.getElementById("id3").value;
      
      // document.getElementById("deskripsi_karakter").innerHTML = id_karakter;

      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        hasil=new XMLHttpRequest();
      }
      else
      {// code for IE6, IE5
        hasil=new ActiveXObject("Microsoft.XMLHTTP");
      }
      hasil.onreadystatechange=function()
      {
      if (hasil.readyState==4 && hasil.status==200)
        {
          document.getElementById("deskripsi_karakter").innerHTML=hasil.responseText;
        }
      }
    hasil.open("GET","deskripsi_karakter.php?id_karakter="+id_karakter,true);
    hasil.send();
    }

    function pilihKarakter4()
    {
      var id_karakter, hasil;
      id_karakter = document.getElementById("id4").value;
      
      // document.getElementById("deskripsi_karakter").innerHTML = id_karakter;

      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        hasil=new XMLHttpRequest();
      }
      else
      {// code for IE6, IE5
        hasil=new ActiveXObject("Microsoft.XMLHTTP");
      }
      hasil.onreadystatechange=function()
      {
      if (hasil.readyState==4 && hasil.status==200)
        {
          document.getElementById("deskripsi_karakter").innerHTML=hasil.responseText;
        }
      }
    hasil.open("GET","deskripsi_karakter.php?id_karakter="+id_karakter,true);
    hasil.send();
    }

    </script>

    <!--=========== BEGIN AJAX SECTION ================-->

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
              <a class="navbar-brand" href="index.php">Pilih <span>Karakter</span></a>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->             
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <!-- <li><a href="index.html">Home</a></li>
                <li><a href="course-archive.html">Course</a></li>
                <li><a href="scholarship.html">Scholarship</a></li>
                <li><a href="events-archive.html">Events</a></li>
                <li class="active"><a href="gallery.html">Gallery</a></li>                
                <li><a href="blog-archive.html">Blog</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Page<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="#">Link Two</a></li>
                    <li><a href="#">Link Three</a></li>               
                  </ul>
                </li>               
                <li><a href="contact.html">Contact</a></li> -->
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 
    
    <!--=========== BEGIN GALLERY SECTION ================-->
    <section id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="gallerySLide" class="gallery_area">
                <!-- <a href="img/slider/1.jpg" title="This is Title">
                  <img class="gallery_img" src="img/slider/1.jpg" alt="img" />
                <span class="view_btn">View</span>
                </a> -->
                
                <br/>
                <br/>

           
                  <!-- <input type="button" class="gallery_img" value="1" style="background: url('img/slider/1.jpg');"></input> -->
                  <button id="id1" onclick="pilihKarakter1()" name="karakter" value="1" style="background-image: url(img/slider/hantu-01.png); background-size : contain; background-color : white; background-position : center; background-repeat: no-repeat; font-family: Georgia, ..., serif; font-size:0.1px;height: 160px; width: 250px;"></button>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <button id="id2" onclick="pilihKarakter2()" name="karakter" value="2" style="background-color : white; background-position : center; background-image: url(img/slider/hantu-02.png); background-size : contain; background-repeat: no-repeat; font-family: Georgia, ..., serif; font-size:0.1px;height: 160px; width: 250px;"></button>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <button id="id3" onclick="pilihKarakter3()" name="karakter" value="3" style="background-color : white; background-position : center; background-image: url(img/slider/hantu-03.png); background-size : contain; background-repeat: no-repeat; font-family: Georgia, ..., serif; font-size:0.1px;height: 160px; width: 250px;"></button>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <button id="id4" onclick="pilihKarakter4()" name="karakter" value="4" style="background-color : white; background-position : center; background-image: url(img/slider/hantu-04.png); background-size : contain; background-repeat: no-repeat; font-family: Georgia, ..., serif; font-size:0.1px;height: 160px; width: 250px;"></button>
                  <!-- <button type="button" onclick="myFunction()">Submit</button> -->
               

                <?php 

                if(isset($_POST["karakter"]))
                {                  
                  echo $_POST["karakter"]."<br/>";
                }

                ?>

                <div id="deskripsi_karakter"></div>

                <!-- <a href="img/slider/2.jpg" title="This is Title">
                  <img class="gallery_img" src="img/slider/2.jpg" alt="img" />
                <span class="view_btn">View</span>
                </a>
                <a href="img/slider/3.jpg" title="This is Title">
                  <img class="gallery_img" src="img/slider/3.jpg" alt="img" />
                <span class="view_btn">View</span>
                </a>
                <a href="img/slider/4.jpg" title="This is Title">
                  <img class="gallery_img" src="img/slider/4.jpg" alt="img" />
                <span class="view_btn">View</span>
                </a> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END GALLERY SECTION ================-->
    
    

  

    <!-- Javascript Files
    ================================================== -->
<!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
     <?php
      if($ua=="Google Chrome")
        echo "<script src=\"js/queryloader2.min.js\" type=\"text/javascript\"></script>";
    ?>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="js/custom.js"></script>
    <!-- initialize jQuery Library -->
   
   
  <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
  ====================================================-->

  </body>
</html>