<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html"; charset="utf-8" />
<head>
  <meta charset="UTF-8">
  <title></title>
  <!-- reponsive meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <!-- Bootstrap-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- strock gap icons-->
  <link rel="stylesheet" href="vendors/Stroke-Gap-Icons-Webfont/style.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <!-- owl-carousel-->
  <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css">
  <link rel="stylesheet" href="vendors/imagelightbox/imagelightbox.min.css">
  <link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
  <!-- Main Css-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <!--if IE-->
  <link rel="stylesheet" type="text/css" href="css/all-ie-only.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
  <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')
    
  -->
  <style>

    /* Style the tab */
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
     background-color: inherit;
     float: left;
     border: none;
     outline: none;
     cursor: pointer;
     padding: 14px 16px;
     transition: 0.3s;
     font-size: 25px;
     font-family: Playball;

   }

   /* Change background color of buttons on hover */
   .tab button:hover {
     background-color: #870101;
     font-family: "Playball", cursive;
     color: white;
     font-size: 24px;
   }

   /* Create an active/current tablink class */
   .tab button.active {
     background-color: #f90558;
     font-family: "Playball", cursive;
     color: white;
   }

   /* Style the tab content */
   .tabcontent {
    display: none;
    padding: 6px 12px;
    /* border: 1px solid #ccc;*/
    border-top: none;
  }

  /* Style the close button */
  .topright {
    float: right;
    cursor: pointer;
    font-size: 33px;
    color: whitesmoke;
  }

  .topright:hover {color: red;}
</style>
</head>
<body>
  <!-- .hidden-bar-->
  <section id="sidebarCollapse" class="side-menu">
    <button type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse" class="close-button"><i class="fa fa-times"></i></button>
    <div class="side-menu-widget about-widget"><a href="index-2.html" class="logo"><img src="images/icon/lr-home.png" alt="Awesome Image"></a>
      <h3 class="title playball-font">Welcome to Resort</h3>
      <!-- /.title playball-font-->
      <p>Edolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit.</p>
    </div>
    <!-- /.side-menu-widget-->
    <div class="side-menu-widget gallery-widget">
      <div class="title-box">
        <h4>From Our Gallery</h4><span class="decor-line inline"></span>
      </div>
      <!-- /.title-box-->
      <ul class="list-inline">
        <li><a href="#"><img src="images/gallery-thumb/1.jpg" alt="Awesome Image"></a></li>
        <li><a href="#"><img src="images/gallery-thumb/2.jpg" alt="Awesome Image"></a></li>
        <li><a href="#"><img src="images/gallery-thumb/3.jpg" alt="Awesome Image"></a></li>
        <li><a href="#"><img src="images/gallery-thumb/4.jpg" alt="Awesome Image"></a></li>
        <li><a href="#"><img src="images/gallery-thumb/5.jpg" alt="Awesome Image"></a></li>
        <li><a href="#"><img src="images/gallery-thumb/6.jpg" alt="Awesome Image"></a></li>
        <li><a href="#"><img src="images/gallery-thumb/7.jpg" alt="Awesome Image"></a></li>
        <li><a href="#"><img src="images/gallery-thumb/8.jpg" alt="Awesome Image"></a></li>
      </ul>
      <!-- /.list-inline-->
      <ul class="contact-info">
        <li>hello@youremail.com</li>
        <li>+1234567890</li>
      </ul>
      <!-- /.contact-info-->
    </div>
    <!-- /.side-menu-widget-->
    <div class="side-menu-widget subscribe-widget">
      <div class="title-box">
        <h4>Subscribe for our Special Offers</h4><span class="decor-line inline"></span>
      </div>
      <!-- /.title-box-->
      <form action="#" class="clearfix">
        <input type="text" placeholder="Enter email address">
        <button type="submit" class="res-btn">Subscribe</button>
      </form>
    </div>
  </section>
  <!-- /.side-menu-->
  <?php include('header.php'); ?>





  <section class="row final-inner-headersea">
    <div class="container">
      <h2 class="this-title"></h2>
    </div>
  </section>
  <section class="row final-breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>

      </ol>
    </div>
  </section>
  <?php
  if(isset($_POST['search']))
  {
 //if(isset($_POST['id'])) 
 //{
    $v1=$_POST['id'];
  //echo $v1;

    $sql1="SELECT * FROM registerfree WHERE matri_id = '$v1'";
    $res1 = mysql_query($sql1);
    if(mysql_num_rows($res1) == 0)
    {
     echo "<script> alert ('Please enter valid Id'); </script";

   }
   else{
    echo "<script> window.location.href='m_viewprofilePrint.php?id=$v1'</script>";

  }

}

?>




<section style="background:url(images/seaban.jpg);">
  <div class="container">

    <div class="row fadeInUp animated">






      <div  class="">
        <br>

        <br>

        <form name="freesearch"  method="post">
          <div class="col-md-12 col-sm-12 divborder1" style="background: #ff8300b3;
          color: white;">
          <div class="row divborder pag">
            <div class="col-md-12 divborder1 pags">By Matrimony Id</div>
           
            <div class="col-xs-12 col-md-2 divborder1"><br><label class="form-group control-label">Membership ID</label></div>
            <div class="col-md-4 divborder1"><br>
              <div class="form-group">
                <input type="text" class="form-control input-sm textbox1" name="id" id="idno" placeholder="Enter ID" value="" data-title="Please valid Name">
              </div>
            </div>


            <div class="col-md-4 divborder1" style="margin-top: 1em;text-align:center">
              <button type="submit" id="searchs" style="background-color: #bf0752;
              color: #fff;
              font-size: 21px;" onclick="return validate(document);" name="search" class="btn">Search</button>
            </div>
            <div class="col-md-12 divborder1" style="margin-top: 1em;text-align:center;font-size:0.8em;">

            </div>
            <div class="col-md-12 divborder1" style="background-color: #ff0068;border-bottom-left-radius: 12px;border-bottom-right-radius: 12px;font-weight: 700;color: #fff;;margin-top: 1em;">
              <marquee>&nbsp;--&nbsp;&nbsp;INAIKKUM KARANGAL&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;Free Registeration</marquee>
            </div>
            
          </div>
          
        </div>
        <input type="hidden" name="contt" id="contt" value="okok">
      </form>


    </div>






  </div>
  <br><br>

</div>
</section>





<?php include('footer.php'); ?>

<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<!-- footer  style-->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.js"></script>
<!-- owl carousel-->
<script src="vendors/owlcarousel/owl.carousel.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/zebra_datepicker.js"></script>
<!-- jQuery appear-->
<script src="vendors/jquery-appear/jquery.appear.js"></script>
<!-- jQuery countTo-->
<script src="vendors/jquery-countTo/jquery.countTo.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
