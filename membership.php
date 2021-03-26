<!DOCTYPE html>
<html>
  
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
* {
    box-sizing: border-box;
}

.columns {
    float: left;
    width: 33%;
    padding: 8px;
    margin-left: 140px;
}

.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
    background-color: #f30034;
    color: white;
    font-size: 44px;
}

.price li {
   border: 1px solid #888282;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: #fbb7ff;
    font-size: 27px;
    color: black;
}
.price .greys {
    /* background-color: #fbb7ff; */
    font-size: 27px;
    color: black;
}
.button {
    background-color: #f30034;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 28px;
}
.fons{font-size: 28px;}

@media only screen and (max-width: 600px) {
    .columns {
            width: 100%;
    margin-left: 0px;
    }
}
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
    
    
    <section class="row final-inner-headermem">
      <div class="container">
        <h2 class="this-title"></h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="active">Payment</li>
        </ol>
      </div>
    </section>

    <section style="background:url(images/bgs.jpg);">
    <div class="container" style="font-family:'Playball';">
    
    <div class="columns">
  <ul class="price">
    <li class="header">Silver</li>
    <li class="grey">Rs 700/-</li>
    
    <li class="sizes">14 Profiles</li>
    
    <li class="greys"><a href="payment.php" class="button fons">Pay Now</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Gold</li>
    <li class="grey">Rs 1300/-</li>
    
    <li class="sizes">50 Profiles</li>
    <li class="greys"><a href="payment.php" class="button">Pay Now</a></li>
  </ul>
</div>

<!--<div class="columns">
  <ul class="price">
     <li class="header">Diamond</li>
    <li class="grey">Rs 2000/-</li>
    <li class="sizes">360 Days</li>
    <li class="sizes">80 Horoscopes</li>
    <li class="greys"><a href="online_payment.php" class="button">Pay Now</a></li>
  </ul>
</div>


<div class="columns">
  <ul class="price">
    <li class="header">Platinum</li>
    <li class="grey">Rs 4000/-</li>
    <li class="sizes">360 Days</li>
    <li class="sizes">160 Horoscopes</li>
    <li class="greys"><a href="online_payment.php" class="button">Pay Now</a></li>
  </ul>
</div>
-->



</div>
</section>

<?php include('footer.php'); ?>
	
    
    
  
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