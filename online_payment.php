<?php


if(isset($_POST['submit1']))
{ extract($_POST);


		$from = 'Inaikkum Karangal Contact Mailer <web@http://inaikkumkarangalmatrimony.in/>'."\r\n" .'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion(); 
	$to = "inaikkumkarangal1@gmail.com,santhoshini.zeronecorps@gmail.com"; 
			//$to = "rajabasheer.94@gmail.com"; 
			
			$message = '<html><body>';
$message .= '<table rules="all" border="1" width="700" style="border-color: #666;" cellpadding="10">';
$message .= "<tr><td colspan='4' align='center'><img src='http://inaikkumkarangalmatrimony.in/images/LOGOss.png'></td></tr>";
$message .= "<tr style='background: #da1e13;'><td colspan='4' align='center' style='color: white;'><strong>Payment Details</strong> </td></tr>";

$message .= "<tr><td><strong>Billing Name: </strong></td><td colspan='3'>" . $name . "</td></tr>";
$message .= "<tr><td><strong>Phone Number:</strong> </td><td colspan='3'>" . $phones . "</td></tr>";
//$message .= "<tr><td><strong>Receipt No:</strong> </td><td colspan='3'>" . $receipt . "</td></tr>";
//$message .= "<tr><td><strong>Transaction Id:</strong> </td><td colspan='3'>" . $trans . "</td></tr>";
//$message .= "<tr><td><strong>User Id::</strong> </td><td colspan='3'>" . $user . "</td></tr>";
//$message .= "<tr><td><strong>Bank Name::</strong> </td><td colspan='3'>" . $bank . "</td></tr>";
//$message .= "<tr><td><strong>Account No:</strong> </td><td colspan='3'>" . $acc . "</td></tr>";
//$message .= "<tr><td><strong>Amount:</strong> </td><td colspan='3'>" . $amount . "</td></tr>";
$message .= "<tr><td><strong>Receipt Photo:</strong> </td><td colspan='3'>" . $upload . "</td></tr>";

 $subject = 'Payment Details';

			$headers = "From: " . $from . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   if(mail($to, $subject, $message, $headers)) {
            echo "<script>
alert('Thank you for contacting us');
window.location.href='online_payment.php';
</script>";
            } else {
           echo "<script>
alert('Some problem occur in sending mail...Please try again');
window.location.href='online_payment.php';
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
    <!-- /.side-menu-->
   
    <?php include('membership.php'); ?>
	
    <!-- <section class="row final-inner-headero">
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
    
    
    <section class="clearfix common-pad-inner booknow" style="background:url(images/onbg.jpg);">
    
    <div class="container">
      <div class="sec-header">
        <h2 style="color:white;">Enter Payment Details</h2>
        <h3 style="color:white;">Price is what you pay.Value is what you get</h3>
      
      <h3 style="color:white;">14 Profiles Rs.700<br>50 Profiles Rs.1300</h3>
      </div>
      <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cls">
      <h2>&nbsp;&nbsp;&nbsp;&nbsp;Send Your Bill Receipt Through What'S App Number </h2>
      </div>
     
      </div>
      <br>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
          <div class="book-left-content input_form">
            <form id="contactBooking" method="post">
              <div class="row">
             
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                 Membership ID:<br>
                  <input id="name" type="text" name="name"  class="form-control">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                 Phone Number:<br>
                  <input id="phno" type="number" name="phones"  class="form-control">
                </div>
              </div> -->
             <!-- <div class="row">
             
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                 Receipt No:<br>
                  <input id="receipt" type="text" name="receipt"  class="form-control">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                Transaction Id:<br>
                  <input id="transaction" type="text" name="trans" class="form-control">
                </div>
              </div>
              <div class="row">
             
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                 User Id:<br>
                  <input id="user" type="text" name="user" class="form-control">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
               Bank Name:<br>
                  <input id="bank" type="text" name="bank" class="form-control">
                </div>
              </div>
              
              <div class="row">
             
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                 Account No:<br>
                  <input id="accno" type="text" name="acc" class="form-control">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
               Amount:<br>
                  <input id="amount" type="text" name="amount" class="form-control">
                </div>
              </div>
              
              
              <div class="row">
                <div class="col-xs-12 col-md-3 divborder1"><label class="control-label">Upload the Receipt</label></div>
                
                
                  <div class="col-lg-6 col-md-3 col-sm-12 m0 col-xs-12 divborder1">
									<div class="form-group">
										<input type="file" name="upload" id="photo1" size="48" accept="image/jpg,image/jpeg" onchange="loadFile(event)">
									</div>
								</div>
                </div>
              
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <button type="submit"  name="submit1" class="res-btn">Send</button>
                </div>
              </div>
            </form>
          </div>
        
        </div>
        
        
        <div class="col-sm-4 pull-right">
          <div class="book-right"><span><img src="images/atm1.jpg" alt=""></span>
          
          
         
           
          </div>
        </div>
      </div>
      
      
      </div></div>
      </section>-->
    
  
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