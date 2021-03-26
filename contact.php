<?php


if(isset($_POST['submit']))
{ extract($_POST);


		$from = 'Inaikkum Karangal Contact Mailer <web@http://inaikkumkarangalmatrimony.in/>'."\r\n" .'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion(); 
	$to = "srmmca@gmail.com,inaikkumkarangal1@gmail.com"; 
    //$to = "rajabasheer.94@gmail.com"; 
			
			
			$message = '<html><body>';
$message .= '<table rules="all" border="1" width="700" style="border-color: #666;" cellpadding="10">';
$message .= "<tr><td colspan='4' align='center'><img src='http://inaikkumkarangalmatrimony.in/images/LOGOss.png'></td></tr>";
$message .= "<tr style='background: #da1e13;'><td colspan='4' align='center' style='color: white;'><strong>Contact Details</strong> </td></tr>";

$message .= "<tr><td><strong>Name: </strong></td><td colspan='3'>" . $fname . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td colspan='3'>" . $email . "</td></tr>";
$message .= "<tr><td><strong>Phone Number:</strong> </td><td colspan='3'>" . $phone . "</td></tr>";
$message .= "<tr><td><strong>Suject:</strong> </td><td colspan='3'>" . $sub . "</td></tr>";
$message .= "<tr><td><strong>Message:</strong> </td><td colspan='3'>" . $msg . "</td></tr>";

 $subject = 'Contact Details';

			$headers = "From: " . $from . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   if(mail($to, $subject, $message, $headers)) {
            echo "<script>
alert('Thank you for contacting us');
window.location.href='contact.php';
</script>";
            } else {
           echo "<script>
alert('Some problem occur in sending mail...Please try again');
window.location.href='contact.php';
</script>";	  
            }
           
		
				  
				  
	 }
	 
	  ?>


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
    
  <?php include('header.php'); ?>
    <section class="row final-inner-headers">
      <div class="container">
        <h2 class="this-title">Contact us</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="active">Contact us</li>
        </ol>
      </div>
    </section>
    <!-- Header  Slider style-->
    <!-- Booking style-->
    <section class="clearfix common-pad booknow" style="background:url(images/conta.jpg);border-bottom: 2px solid #e1002d;">
    <div class="container">
      <div class="sec-header">
        <h2>Send A Message</h2>
        <br>
      
      </div>
      <div class="row nasir-contact">
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
          <div class="book-left-content input_form">
            <form id="contactForm" method="post">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12"><span>Your Name</span>
                  <input id="name" type="text" name="fname" placeholder="Your name" class="form-control">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12"><span>Your Email</span>
                  <input id="email" type="email" name="email" placeholder="Your Email" class="form-control">
                </div>
              </div>
              <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12"><span>Your Phone No</span>
                  <input id="name" type="number" name="phone" placeholder="Your Phone No" class="form-control">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12"><span>Subject</span>
                  <input id="subject" type="text" name="sub" placeholder="Subject" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span>Message</span>
                  <textarea id="message" rows="6" name="msg" placeholder="Message" class="form-control"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <button type="submit" name="submit" class="res-btn">Submit Now</button>
                </div>
              </div>
            </form>
            
            </div>
        </div>
           
        <div class="col-md-4">
          <div class="contact-info">
            <h2>Contact Info</h2>
            <div class="media-contact clearfix">
              <div class="media-contact-icon"><i aria-hidden="true" class="fa fa-map-marker"></i></div>
              <div class="media-contact-info">
                <p>Sathya Towers, 243, 1st Floor,<br> Anna Nagar Main Road,<br> Opposite Reliance Fresh,<br> Near Sarveshwarar Kovil,<br> Madurai - 625020.</p>
              </div>
            </div>
            <div class="media-contact clearfix">
              <div class="media-contact-icon"><i aria-hidden="true" class="fa fa-envelope-o"></i></div>
              <div class="media-contact-info">
                <p><a href="mailto:inaikkumkarangal1@gmail.in">info@inaikkumkarangal.in</a></p>
              </div>
            </div>
            
            <div class="media-contact clearfix">
              <div class="media-contact-icon"><i aria-hidden="true" class="fa fa-phone"></i></div>
              <div class="media-contact-info">
                <p><a href="tel:18005622487"><i>+91 6384166047 </i></a><br><a href="tel:32155468975"><i>+91 6384166048</i></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 clearfix">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d982.5368818398249!2d78.14525496405494!3d9.921668954863721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c5af6b5f89b3%3A0x570e367729eb074b!2sReliance+Fresh!5e0!3m2!1sen!2sin!4v1537791873517" width="100%" height="400" frameborder="0" style="border:1px solid bisque" allowfullscreen></iframe></div>
        
        
      </div>
      </div>
    </section>
   <!-- <section>
    <div class="container">
    <div class="col-md-12 clearfix">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d982.5368818398249!2d78.14525496405494!3d9.921668954863721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c5af6b5f89b3%3A0x570e367729eb074b!2sReliance+Fresh!5e0!3m2!1sen!2sin!4v1537791873517" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>
</section>
-->
   
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
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/map.js"></script>
    <script src="js/custom.js"></script>
  </body>

</html>