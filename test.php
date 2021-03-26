<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
 
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>


<?php
// ini_set("display_errors", "1");
// error_reporting(E_ALL);

if(isset($_POST['submit']))
{
$age1=$_POST['age1'];
$age2=$_POST['age2'];
$religion=$_POST['religion'];
$caste=$_POST['caste'];
$m_status=$_POST['martial_s'];
$gender=$_POST['gender'];



// echo $age1;
// echo $age2;
// echo "<br>";
// echo $religion;
// echo "<br>";
// echo $caste;
// echo "<br>";
// echo $m_status;
// echo "<br>";
// echo $gender;
}

?>


<html class=""><head>
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
    <link href="//apps.shareaholic.com/v2/4ba3a7b2/shrMain.min.js" rel="preload" as="script">
    <!--if IE-->
    <link rel="stylesheet" type="text/css" href="css/all-ie-only.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')
    
    -->
    <style>
	.setPage{
	padding:15px 10px;
	font-size:14px;
	}
	.newbottom{
		background-color: #a90f0f;
    border-radius: 2px;
    line-height: 37px;
    color: white;
    margin-top: 10px;
	}
	
	.liveborder {
    border: 1px solid #ccc;
    border-top-right-radius: 1.5em;
    border-top-left-radius: 1.5em;
}
.litehead {
    color: #EB1478;
    font-size: 0.9em;
    font-weight: 500;
    font-family: 'Nunito-Regular';
}
.ad-top {
    padding-top: 3em;
}
.newbottom {
    background-color: #347ab7;
    border-radius: 3px;
    line-height: 35px;
    color: white;
    margin-top: 10px;
}
.box:hover {
       background-color:rgb(255, 255, 255);
    box-shadow:0 1px 9px rgb(49, 49, 47), 0 0 20px rgb(175, 168, 168) inset;
}
.box {
    width: 95%;
    height: auto;
    float: left;
    background-color: white;
    margin: 0 0 15px 0;
    border-radius: 5px;
    padding: 20px 15px;
}
.shadow3 {
    position: relative;
    box-shadow:0 1px 9px rgb(49, 49, 47), 0 0 14px rgb(197, 197, 197) inset;
}
</style>
  <style type="text/css">.fancybox-margin{margin-right:17px;}</style>
  </head>
  <body>

    <!-- /.side-menu-->
   <?php
session_start();
?>
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

<style>
body {}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
	font-size: 13px;
    line-height: 22px;
    color: #7F7F7F;
    font-family: 'Open Sans';
    font-weight: 600;
    background-color: #c410d0;
    color: white;
    padding: 3px 0px;
    border: none;
    cursor: pointer;
    /* opacity: 0.8; */
       position: absolute;
   
    right: 253px;
    width: 152px;
    margin-top: -4px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: #e60937;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color:#f59f09;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  /*opacity: 0.8;*/
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color:#4a3e3e;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>
<section class="top-bar dhomev">
      <div class="container">
        <div class="pull-left left-infos contact-infos">
          <ul class="list-inline">
          <li class="sty">பதிவு கட்டணம் இலவசம்</li>
            <li><a href="#"><i class="fa fa-phone"></i> +91 6384166047</a></li>
            <!--comment for inline hack
            -->
           
            <!--comment for inline hack
            -->
            <li><a href="#"><i class="fa fa-envelope"></i> info@inaikkumkarangal.com</a></li>
          </ul>
        </div>
        <!-- /.pull-left left-infos-->
       <!--  <div class="pull-right right-infos link-list">
          
          
          
           <button class="open-button" onclick="openForm()">MEMBERSHIP LOGIN</button>
           <?php

  include('conn.php');
if(isset($_POST['submit11']))
{
   $mail=$_POST['email'];
   $password=$_POST['psw'];
    //$mail=$_POST['mail'];
   echo $mail;
   


   include('conn.php');

   $sql="SELECT * FROM login WHERE username = '$mail'";
 $res = mysql_query($sql);
$row = mysql_fetch_assoc($res);

$_SESSION["matri_id"] = $row["username"];




if($row["username"]==$mail && $row["password"]==$password)
{
//echo "success";
//echo "<script>alert('login successfully'); window.location.href='profiles.php'</script>";
}
else{

  //echo "<script>alert('login failed');</script>";
}

}



  ?>

<div class="form-popup" id="myForm">
  
  <form class="form-container" action="search_profiles.php" method="post">
    <h1 style="color:white;">LOGIN</h1>

    <label for="email"><b  style="color:white;">USER ID</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
                                          
    <label for="psw"><b  style="color:white;">PASSWORD</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

 <button type="submit" class="btn" name="submit11" style="color:white;font-weight: 700;">LOGIN</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

            <!--comment for inline hack
            -->
            <!-- <ul class="list-inline">
            <li><a class="pad" href="freeregisteration.php">FREE REGISTRATION</a></li>
          </ul> -->
<ul class="list-inline">
        <li class="l-style">
        <a href="index.php"> <button class="open-button" style="float: right;"> LOGOUT</button></a>
        </li>
      </ul>
        </div> 
        <!-- /.pull-right right-infos link-list-->
      </div>

      <!-- /.container-->
    </section>
    <!-- /.top-bar-->
    <!-- <nav id="main-navigation-wrapper" class="navbar navbar-default _fixed-header _light-header stricky">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.php" class="navbar-brand"><img style="margin-left: -30px;" alt="Awesome Image" src="images/LOGOss.png"></a>
        </div>
        <div id="main-navigation" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          
          <li><a href="index.php">Home</a> </li>
        
            <li><a href="search_profiles.php">Search Profiles</a></li>
            <li><a href="contact.php">Contact Us</a></li>
             <li><a href="online_payment.php">Payment</a></li>
      <!-- <li><a role="button" data-toggle="collapse" href="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse"><span class="phone-only"></span><i class="fa fa-bars"></i></a></li>-->
          </ul>
        
          
        </div>
      </div>
    </nav>


<div class="single" style=" 
    background-image: linear-gradient(to right, #f519196b , #ead90880);
    color: black;
    font-size: 18px;">
	<div class="container">
		<div class="single-top">
		<div class="container-fluid">
      <?php
          
            if($age1 != '' && $age2 != '' && $religion != '' && $caste != '' &&
             $m_status != '' && $gender != '')
            {
              $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
              age<='$age2' AND religion='$religion' AND caste='$caste' AND mstatus='$m_status' AND gender='$gender' order by id desc" ;
              // echo $sql;
              

            }
            elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != ''  && $m_status != '')
            {

              $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
              age<='$age2' AND religion='$religion' AND caste='$caste' AND mstatus='$m_status' order by id desc";
             
              
            }
            elseif($age1 != '' && $age2 != '' && $gender != '' && $caste != '')
            {
              $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
              age<='$age2'  AND caste='$caste' AND gender='$gender' order by id desc";
              
            }
            elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != '')
            {
              $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
              age<='$age2' AND religion='$religion' AND caste='$caste'  order by id descorder by id desc";
              
            }
            elseif($age1 != '' && $age2 != '' && $m_status != '' && $religion != '' ){

              $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
              age<='$age2' AND religion='$religion' AND mstatus='$m_status' ";
            }
            elseif($age1 != '' && $age2 != '' && $religion != '')
            {
              $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
              age<='$age2' AND religion='$religion' order by id desc";
            }
            
            
            elseif($age1 != '' && $age2 != '' && $caste != ''){

              $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
              age<='$age2' AND caste='$caste'  order by id desc";
            }
            elseif($age1 != '' && $age2 != '' && $m_status != '' ){

              $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
              age<='$age2' AND mstatus='$m_status' order by id desc ";
            }
            elseif($age1 != '' && $age2 != ''  && $gender != ''){

              $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
              age<='$age2' AND gender='$gender' order by id desc";
            }
            
            elseif($age1 != '' && $age2 != ''){

              $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
              age<='$age2' order by id desc";
            }
else if($age1=='' || $age2==''){
               echo "<script>alert('Please Select the field'); window.location.href='profiless.php'</script>";
            }

            else{
               echo "<script>alert('Please Select the age'); window.location.href='profiless.php'</script>";
            }

            $res1 = mysql_query($sql1);
            $count=mysql_num_rows($res1);
            

?>
			
			<div class="row">
				<div class="col-md-11 col-sm-12 divborder1"><h4 style="margin-bottom: 1em;">SEARCH RESULTS (<?php echo $count; ?> ) </h4></div>

        <div><a href="profiless.php"><button>Go Back</button></a></div>
				
			</div>
<div class="row">




<form name="freesearch" method="post" action="#">
				<div class="col-md-10 col-sm-12 divborder1">
					<div class="row  liveborder2">
						<div class="col-md-12 col-sm-12 divborder1">
							<link type="text/css" rel="stylesheet" href="css/dc_pagination.css">
							
						</div>
						<?php
					
						if($age1 != '' && $age2 != '' && $religion != '' && $caste != '' &&
						 $m_status != '' && $gender != '')
						{
							$sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
							age<='$age2' AND religion='$religion' AND caste='$caste' AND mstatus='$m_status' AND gender='$gender' order by id desc" ;
							// echo $sql;
							

						}
						elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != ''  && $m_status != '')
						{

							$sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
							age<='$age2' AND religion='$religion' AND caste='$caste' AND mstatus='$m_status' order by id desc";
						 
							
						}
            elseif($age1 != '' && $age2 != '' && $religion != '' &&
             $m_status != '' && $gender != '')
            {
              $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
              age<='$age2' AND religion='$religion' AND mstatus='$m_status' AND gender='$gender' order by id desc" ;
              // echo $sql;
              

            }

						elseif($age1 != '' && $age2 != '' && $gender != '' && $caste != '')
						{
							$sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
							age<='$age2'  AND caste='$caste' AND gender='$gender' order by id desc";
							
						}
						elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != '')
						{
							$sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
							age<='$age2' AND religion='$religion' AND caste='$caste' order by id desc ";
							
						}
						elseif($age1 != '' && $age2 != '' && $m_status != '' && $religion != '' ){

							$sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
							age<='$age2' AND religion='$religion' AND mstatus='$m_status' order by id desc";
						}
						elseif($age1 != '' && $age2 != '' && $religion != '')
						{
							$sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
							age<='$age2' AND religion='$religion' order by id desc ";
						}
						
						
						elseif($age1 != '' && $age2 != '' && $caste != ''){

							$sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
							age<='$age2' AND caste='$caste' order by id desc  ";
						}
						elseif($age1 != '' && $age2 != '' && $m_status != '' ){

							$sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
							age<='$age2' AND mstatus='$m_status' order by id desc  ";
						}
						elseif($age1 != '' && $age2 != ''  && $gender != ''){

							$sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
							age<='$age2' AND gender='$gender' order by id desc ";
						}
						
						elseif($age1 != '' && $age2 != ''){

							$sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
							age<='$age2' order by id desc ";
						}
						else{
							 echo "<script>alert('Please Select the age'); window.location.href='profiless.php'</script>";
						}

						$res = mysql_query($sql);

            if(isset($_GET['search']))
            {
              $get = $_GET['search'];
              echo "string";

            }
						

                 while($row=mysql_fetch_assoc($res))
                 {  
           
						?>
						
												<div class="col-md-12 box box3 shadow3 wow fadeInDown animated animated" style="visibility: visible;
    animation-name: fadeInLeft;
    
    font-weight: 700; width:100%;">
							<div class="col-md-12 col-sm-12 divborder1" style="border-bottom: 1px solid black;">
							    <div class="row  divborder1">
									<div class="col-md-4 col-sm-9 divborder1 textstyle">Reg No:<b><?php echo  $row['matri_id'];?></b></div>

								
								    	

								    	<div class="col-md-4 col-sm-6 divborder1"><a target="_blank" href="viewprofiless.php?id=<?php echo $row['matri_id'];?>">View Profile</a></div>
								</div>
							</div>
                            <br> <br>
							<div class="col-md-4">
							  	<img src="<?php echo $row['up_profile']; ?>" style="border: 3px solid #9b0000;
    width: 150px;
    height: 150px;">
							  </div>
							<div class="col-md-8 col-sm-12 divborder1">
							
										 <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Name</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle"><?php echo  $row['name'];?></div>
								    </div>
										
										
										
										
										
										
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Gender</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle"><?php echo  $row['gender'];?></div>
								    </div>
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Age</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle"><?php 
                                        if(isset($row['dob']))
                                        { 
                                        $dob= $row['dob'];
         $g= explode('-',$dob);
         //print_r($g[0]);
         $d1=date(Y);
         //echo $d1;
$d2=$d1-$g[0];
echo $d2;
}

                                        ?></div>
								    </div>
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Qualification</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle"><?php echo  $row['edu'];?></div>
								    </div>
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Caste</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle"><?php echo  $row['caste'];?></div>
								    </div>
								    
                                    
								    
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Home Town</div>
                                        <div class="col-md-2 col-sm-6 divborder1">:</div>
								    	<div class="col-md-5 col-sm-9 divborder1 textstyle"><?php echo  $row['city'];?></div>
								    	
								    </div>								    								    
							  </div>
							  
							  
						</div>
							<?php
							}?>					
												
												
					</div>
					
				</div>
				</form>
                
                
							<!-- 	<form name="freesearch" method="post" action="#">
				<div class="col-md-6 col-sm-12 divborder1" style="margin-top: -18px;">
					<div class="row  liveborder2">
						<div class="col-md-12 col-sm-12 divborder1">
							<link type="text/css" rel="stylesheet" href="css/dc_pagination.css">
							
						</div>
						
												<div class="box box3 shadow3 wow fadeInDown animated animated" style="visibility: visible;
    animation-name: fadeInLeft;
  
    font-weight: 700;">
							<div class="col-md-12 col-sm-12 divborder1" style="border-bottom: 1px solid black;">
							    <div class="row  divborder1">
									
									<div class="col-md-4 col-sm-3 divborder1 headstyle"><b>R.Karthik</b></div>
								    	<div class="col-md-4 col-sm-9 divborder1 textstyle">Reg No:<b>256854</b></div>
								    	<div class="col-md-4 col-sm-6 divborder1"><a href="#">View Profile</a></div>
								</div>
							</div>
                            <br> <br>
							<div class="col-md-12 col-sm-12 divborder1">
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Gender</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle">Male</div>
								    </div>
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">DOB</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle">11.06.1980</div>
								    </div>
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Qualification</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle">B.E</div>
								    </div>
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Caste</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle">Mudhaliyar</div>
								    </div>
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Working Location</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle">Madurai</div>
								    </div>
                                    
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Salary</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle">50,000</div>
								    </div>
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Home Town</div>
                                        <div class="col-md-2 col-sm-6 divborder1">:</div>
								    	<div class="col-md-5 col-sm-9 divborder1 textstyle">Madurai</div>
								    	
								    </div>								    								    
							  </div>
							  <div class="col-md-12 col-sm-12 divborder1 text-center newbottom">
							  	After Paying Money,You can able to see the Biodata, Photo, Jathagam.
							  </div>
						</div>
												
												
												
												
								
												
					</div>
					
				</div>
				</form> -->
       
        <div class="page-nation">
          <ul class="pagination pagination-large">
          <li class="disabled"><span>«</span></li>
          <?php
            // $split = mysql_query("SELECT * FROM registerfree");
            // $count = mysql_num_rows($split);
           
            $total = ceil($count/20);
            
            for($i=1;$i<=$total;$i++)
            {
              
          ?>
          <li><a href="freesearch1.php?search='$total'"><?php echo $i; ?></a></li>
          <?php } ?>  
         
          <li><a rel="next" href="#">Next</a></li>
        </ul>
     </div>
			</div>
		</div>
		</div>
		
	</div>		
</div>

                  

<?php include('footer.php'); ?>
   

   
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
<script src="js/move-top.js"></script>

<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>
                    
                    <script>
			 new WOW().init();
		</script>



</body></html>