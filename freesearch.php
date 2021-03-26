<?php
// ini_set("display_errors", "1");
// error_reporting(E_ALL);
if(isset($_REQUEST['submit_btn']))
{
 $age1=$_POST['age1'];
 $age2=$_POST['age2'];
 $religion='';
 $caste='';
 $m_status='';
 $gender='';
}
else if(isset($_REQUEST['submit_caste']))
{
  $age1=$_POST['age1'];
  $age2=$_POST['age2'];
  $caste=$_POST['caste'];
  $religion='';
  $m_status='';
  $gender='';
}
else if(isset($_POST['submit']))
{
  $age1=$_POST['age1'];
  $age2=$_POST['age2'];
  $religion=$_POST['religion'];
  $caste=$_POST['caste'];
  $m_status=$_POST['martial_s'];
  $gender=$_POST['gender'];
}
else
{
  $age1='';
  $age2='';
  $religion='';
  $caste='';
  $m_status='';
  $gender='';
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
  <link href="//apps.shareaholic.com/v2/4ba3a7b2/shrMain.min.js" rel="preload" as="script">
  <!--if IE-->
  <link rel="stylesheet" type="text/css" href="css/all-ie-only.css">
  <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/metisMenu.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slicknav.min.css">
  <!-- amcharts css -->
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <!-- Start datatable css -->
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">

  <!-- style css -->
  <link rel="stylesheet" href="assets/css/typography.css">
  <link rel="stylesheet" href="assets/css/default-css.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- modernizr css -->
  <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
  <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')
    
  -->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
  <style>
  @media (max-width: 3200px) {
  .desktop{
    display: block;
  }
  .mobile{
    display: none;
  }
}
  .filterbutton
  {
    font-size: 12px;
    width: 75px;
    height: 27px;
    padding: 3px 1px 0px 3px;
    margin-top: -7px;
    margin-left: -22px;
  }
  @media (max-width: 360px) {
    .desktop{
    display: none;
  }
   .mobile{
    display: block;
  }
   .filterbutton
  {
    font-size: 12px;
    width: 75px;
    height: 27px;
    padding: 3px 1px 0px 3px;
    margin-top: 10px;
    margin-left: 20px;
  } 
  }
  .filterheader
  {
    font-size: 16px;
    font-weight: bold;
    padding-bottom: 15px;
  }
  .filter
  {
    padding-left: 20px;
    font-size: 15px;
  }
  .btn-primary {
    color: #fff;
    background-color: #EB1478;
    border-color: #2e6da4;
  }
  .btn-primary:hover {
    color: #fff;
    background-color: #c410d0;
    border-color: #2e6da4;
  }
  .headerstyle{
    text-align: left;  
  }
  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box;}
  .main-content {
    background: #F3F8FB;
  }
  .form-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 3px solid #f1f1f1;
    z-index: 9;
  }
  .form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
  }
  .form-container input[type=text], .form-container input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }
  .form-container input[type=text]:focus, .form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }
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
  .form-container .cancel {
    background-color: red;
  }
  .form-container .btn:hover, .open-button:hover {
    opacity: 1;
  }
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
table.dataTable {
  width: 100%;
  margin: 0 auto;
  clear: both;
  border-collapse: separate;
  border-spacing: 0;
  border-right: 0px solid;
}

table.dataTable thead>tr>th.sorting
{
  /*padding-right: 37px !important;*/
}
table.dataTable thead th
{
  padding: 0px 0px;
  font-size: 15px;
  font-weight: 200;
  text-align: center;
}
table.dataTable tbody td {
  padding: 0px 7px;
}
.datatable-primary thead {
  background: #c410d0;
  color: #fff;
}
table.dataTable tbody td {
  padding: 7px 0px;
  font-size: 17px;
  text-align: left;
}
.dataTables_wrapper .dataTables_paginate
{
 /* margin-right: -233px;*/
}
.dataTables_wrapper .dataTables_info 
{
  padding-top: 2.755em;
  /*margin-left: -153px;*/
  font-size: 14px;
}
div.dataTables_wrapper div.dataTables_length select {
  width: 76px;
  margin: -7px 8px;
}
.dataTables_wrapper .dataTables_filter input {
  margin-top: -6px;
}
label {
  font-weight: bold;
  color: #666;
  display: none;
  margin-bottom: 8px;
  margin-bottom: .5rem;
  font-size: 14px;
}
.datatable-primary .dataTables_paginate .page-item.active .page-link
{
  background-color: #3e3d42;
}
table tr td {
  border-top: 0px solid rgba(64, 59, 59, 0.94) !important;
}
.page-link:hover
{
  background-color: #3e3d42;
}
button.close 
{
  padding: 7px 106px;
}
.close
{
  font-size: 2.5rem;
}
</style>
</head>
<body>
 <?php
 include('conn.php');
 if(isset($_POST['submit11']))
 {
  $mail=$_POST['email'];
  $password=$_POST['psw'];
  $sql="SELECT * FROM login WHERE username = '$mail'";
  $res = mysql_query($sql);
  $row = mysql_fetch_assoc($res);
  $_SESSION["matri_id"] = $row["username"];

  if($mail=='meena' && $password='meena@123')

  {

    echo "<script> window.location.href='profiless.php'</script>";

  }

  elseif($row["username"]==$mail && $row["password"]==$password)
  {
    echo "<script>window.location.href='profiles.php'</script>";
  }
  else
  {
    echo "<script>alert('login failed');</script>";
  }
}
?>

<?php include('header.php');?>

<div class="single" style="background: #c410d0;color: black;font-size: 18px;padding: 24px 0px;">
  <div class="container">
    <div class="single-top">
      <div class="container-fluid">
        <div class="page-container" style="padding-left:0px;"> 
         <?php
         $cond = "";
            //SELECT matri_id,name,gender,age,edu,caste FROM registerfree                      

         if($age1 != '' && $age2 != '')
         {
           $cond .= "and age between $age1 and $age2 ";
         }
         if($religion != '')
         {
          $cond .= " AND religion='$religion'";
        }
        if($caste != '')
        {
          $cond .= " AND caste='$caste'";
        }
        if($m_status != '')
        {
          $cond .= " AND mstatus='$m_status'";
        }
        if($gender != '')
        {
          $cond .= " AND gender='$gender'";
        }
        if($age1=='' || $age2=='')
        {
         echo "<script>alert('Please Select the Age Range..!!'); window.location.href='index.php'</script>";
         return;
       }  
       if($cond=='')
       {
         echo "<script>alert('Please Select Atleast age..!!'); window.location.href='index.php'</script>";
         return;
       }

       $sql1="SELECT matri_id,name,gender,age,edu,caste,up_profile,rasi,star,city,dob FROM registerfree WHERE id<>'0' " . $cond ." order by id desc" ;

       $res1 = mysql_query($sql1);
       $count=mysql_num_rows($res1);

       ?>
       <!-- main content area start -->
       <div class="main-content" >
        <!-- header area start -->
        <div class="main-content-inner">
          <div class="row">
            <a href="freesearch.php"><button class="open-button" style="background-color: #c410d0;
            border: none;
            color: white;
            padding: 4px 6px;
            border-radius: 4px;
            margin-top: 5px;">Go Back</button></a>
            <div class="row">
              <div class="col-sm-4" style="margin-top: 10px !important;"> 
               <div class="card" >
                <div class="card-body" style="border: 1px solid #c410d0; border-top: 5px solid #c410d0;">
                  <h4 class="header-title">Filter Results</h4>
                  <hr style="border-top: 2px solid #c410d0;">
                  <div class="row">
                   <div class="col-md-12 col-sm-12 filterheader">Profile Type</div>
                   <div class="col-md-12 col-sm-12 filter"><a href="#">with Photo (<?php echo rand(1000,9999)?>)</a></div>
                   <div class="col-md-12 col-sm-12 filter"><a href="#">with Horoscope (<?php echo rand(1000,9999)?>)</a></div>
                 </div>
                 <br>
                 <div class="row">
                  <form action="freesearch.php" method="post">
                   <div class="col-md-12 col-sm-12 filterheader">Age</div>
                   <div class="col-md-5 col-xs-6 filter" style="margin-right: -10px;">From<span>
                    <select name="age1" class="select-menu" style="width: 50px">
                      <option value="18"><?php echo $age1?></option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>  
                      <option value="29">29</option>      
                      <option value="30">30</option>      
                      <option value="31">31</option>  
                      <option value="32">32</option>      
                      <option value="33">33</option>  
                      <option value="34">34</option>      
                      <option value="35">35</option>      
                      <option value="36">36</option>      
                      <option value="37">37</option>      
                      <option value="38">38</option>      
                      <option value="39">39</option>      
                      <option value="40">40</option>
                      <option value="41">41</option>  
                      <option value="42">42</option>      
                      <option value="43">43</option>  
                      <option value="44">44</option>      
                      <option value="45">45</option>      
                      <option value="46">46</option>      
                      <option value="47">47</option>      
                      <option value="48">48</option>      
                      <option value="49">49</option>      
                      <option value="50">50</option>  
                      <option value="51">51</option>  
                      <option value="52">52</option>      
                      <option value="53">53</option>  
                      <option value="54">54</option>      
                      <option value="55">55</option>      
                      <option value="56">56</option>      
                      <option value="57">57</option>      
                      <option value="58">58</option>      
                      <option value="59">59</option>      
                      <option value="60">60</option>      
                    </select></span>
                  </div>
                  <div class="col-md-5 col-xs-6 filter" style="margin-right: -10px;"> To <span>
                    <select name="age2" class="select-menu" style="width: 50px">
                      <option value="<?php echo $age2 ?>"><?php echo $age2 ?></option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>  
                      <option value="29">29</option>      
                      <option value="30">30</option>      
                      <option value="31">31</option>  
                      <option value="32">32</option>      
                      <option value="33">33</option>  
                      <option value="34">34</option>      
                      <option value="35">35</option>      
                      <option value="36">36</option>      
                      <option value="37">37</option>      
                      <option value="38">38</option>      
                      <option value="39">39</option>      
                      <option value="40">40</option>
                      <option value="41">41</option>  
                      <option value="42">42</option>      
                      <option value="43">43</option>  
                      <option value="44">44</option>      
                      <option value="45">45</option>      
                      <option value="46">46</option>      
                      <option value="47">47</option>      
                      <option value="48">48</option>      
                      <option value="49">49</option>      
                      <option value="50">50</option>  
                      <option value="51">51</option>  
                      <option value="52">52</option>      
                      <option value="53">53</option>  
                      <option value="54">54</option>      
                      <option value="55">55</option>      
                      <option value="56">56</option>      
                      <option value="57">57</option>      
                      <option value="58">58</option>      
                      <option value="59">59</option>      
                      <option value="60">60</option>      
                    </select></span>
                  </div>
                  <span>
                    <input type="submit" name="submit_btn" class="btn btn-primary filterbutton" value="Search"></a>
                  </span>
                </form>
              </div> 
              <br>
              <div class="row">
                <form action="freesearch.php" method="post">
                 <div class="col-md-12 col-sm-12 filterheader">Caste</div>
                 <select name="age1" class="select-menu" style="display: none; width: 50px">
                  <option value="<?php echo $age1 ?>"><?php echo $age1 ?></option>
                </select>
                <select name="age2" class="select-menu" style="display: none; width: 50px">
                  <option value="<?php echo $age2 ?>"><?php echo $age2 ?></option>
                </select>
                <div class="col-md-9 col-sm-12 filter" style="margin-right: 10px;">
                  <div class="select-box" title="Select Caste">
                    <select name="caste"  id="caste" class="select-menu" style="width:200px;">
                      <option value="">Select Caste</option>
                      <option value="Nadar">Nadar</option>
                      <option value="Yadhavar">Yadhavar</option>
                      <option value="Telugu Yadhavar">Telugu Yadhavar</option>
                      <option value="Tamil Viswakarma">Tamil Viswakarma</option>
                      <option value="Telugu Viswakarma">Telugu Viswakarma</option>
                      <option value="Agamudiyar Mudhaliyar">Agamudiyar Mudhaliyar</option>
                      <option value="Mudhaliyar">Mudhaliyar</option>
                      <option value="Devar">Devar</option>
                      <option value="Kallar">Kallar</option>
                      <option value="Maravar">Maravar</option>
                      <option value="Agamudaiya Devar">Agamudaiya Devar</option>
                      <option value="Chettiyar">Chettiyar</option>
                      <option value="RC Christian">RC Christian</option>
                      <option value="CSI Christian">CSI Christian</option><option value="Bondili">Bondili</option>
                      <option value="AC Christian">AC Christian</option>
                      <option value="Pillaimar">Pillaimar</option>
                      <option value="Saiva Pillai">Saiva Pillai</option>
                      <option value="Rettiyar">Rettiyar</option>
                      <option value="Adhi Drividar - Paraiyar">Adhi Drividar - Paraiyar</option>
                      <option value="Thevaendhira Kulam - Pallar">Thevaendhira Kulam - Pallar</option>
                      <option value="Brahmin">Brahmin</option>
                      <option value="Gounder">Gounder</option>
                      <option value="Muslim - Tamil">Muslim - Tamil</option>
                      <option value="Naidu">Naidu</option>
                      <option value="Kavura Naidu">Kavura Naidu</option>
                      <option value="Kammaavar Naidu">Kammaavar Naidu</option>
                      <option value="Balija Naidu">Balija Naidu</option>
                      <option value="Nayar">Nayar</option>
                      <option value="Arunthathiyar">Arunthathiyar</option>
                      <option value="Muppanar">Muppanar</option>
                      <option value="Maruthuvar">Maruthuvar</option>
                      <option value="Veera Saivam">Veera Saivam</option>
                      <option value="Vannaar">Vannaar</option>
                      <option value="Sourastra">Sourastra</option>
                      <option value="Nayakkar">Nayakkar</option>
                      <option value="Vellar">Vellar</option>
                      <option value="Udaiyaar">Udaiyaar</option>
                      <option value="Saaliyar">Saaliyar</option>

                      <option value="Jangam">Jangam</option>
                      <option value="Pandaaram">Pandaaram</option>
                      <option value="Pandiya vellalar">Pandiya vellalar</option>
                      <option value="Bhoyar">Bhoyar</option>
                      <option value="Okkalikka Gaudar">Okkalikka Gaudar</option>
                      <option value="Muththaraiyar">Muththaraiyar</option>
                      <option value="Muthu Raja">Muthu Raja</option>
                      <option value="Valluvan">Valluvan</option>
                      <option value="Ambalakkarar">Ambalakkarar</option>
                      <option value="Meenavar Parvatha Rajakulam">Meenavar Parvatha Rajakulam</option>
                      <option value="Kulaalar">Kulaalar</option>
                      <option value="kuravar">kuravar</option>
                      <option value="Vanniyar">Vanniyar</option>
                      <option value="Inter Caste Marriage">Inter Caste Marriage</option>
                      <option value="Caste No Bar">Caste No Bar</option>
                      <option value="Others">Others</option>
                    </select>
                  </div>
                </div>
                <div >
                  <span>
                    <input type="submit" name="submit_caste" class="btn btn-primary filterbutton" value="Search"></a>
                  </span>
                </div>             
              </form>
            </div>    
          </div>                 
        </div>
      </div>
      <div class="col-sm-8">
        <!-- Primary table start -->
        <div class="col-12 mt-5" style="margin-top: 10px !important;">
          <div class="card">
            <div class="card-body"  style="border: 1px solid #c410d0; border-top: 5px solid #c410d0;">
              <h4 class="header-title">Profiles</h4>
              <div class="data-tables datatable-primary">
                <table id="dataTable2" class="text-center" style="" border="0">
                  <thead class="text-capitalize">
                    <tr>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php

                   $cond = "";
            //SELECT matri_id,name,gender,age,edu,caste FROM registerfree                      

                   if($age1 != '' && $age2 != '')
                   {
                     $cond .= "and age between $age1 and $age2 ";
                   }
                   echo($religion);
                   if($religion != '')
                   {
                    $cond .= " AND religion='$religion'";
                  }
                  if($caste != '')
                  {
                    $cond .= " AND caste='$caste'";
                  }
                  if($m_status != '')
                  {
                    $cond .= " AND mstatus='$m_status'";
                  }
                  if($gender != '')
                  {
                    $cond .= " AND gender='$gender'";
                  }
                  if($age1=='' || $age2=='')
                  {
                   echo "<script>alert('Please Select the Age Range..!!'); window.location.href='index.php'</script>";
                   return;
                 }  
                 if($cond=='')
                 {
                   echo "<script>alert('Please Select Atleast age..!!'); window.location.href='index.php'</script>";
                   return;
                 }

                 $sql="SELECT matri_id,name,gender,age,edu,caste,up_profile,rasi,star,city,dob FROM registerfree WHERE id<>'0' " . $cond ." order by id desc" ;   
                 $res = mysql_query($sql);

                 $s=1;
                 while($row=mysql_fetch_assoc($res))
                 {

                  ?>

                  <tr>
                    <td>                      
                      <div class="col-md-6 box box3 shadow3 wow fadeInDown animated animated" style="visibility: visible;
                      animation-name: fadeInLeft;    font-weight: 700; width:100%;">

                      <div class="col-md-12 col-sm-12" >
                       <div class="row  ">
                         <div class="col-md-12 col-sm-9 divborder1 textstyle"><?php echo  $row['name'];?></div>
                         <div class="col-md-12 col-sm-9 " style="font-size: 14px">Reg No : <b><?php echo  $row['matri_id'];?></b></div>
                       </div>
                       <hr style="border-top: 2px solid #c410d0;">
                     </div>

                     <div style="padding-top: 10px;padding-bottom: 10px;">
                       <div class="col-md-4">
                        <img src="<?php //echo $row['up_profile']; ?>" style="border: 3px solid #c410d0;
                        width: 138px;
                        height: 170px;">
                      </div>
                    </div>

                    <div class="col-md-8 col-sm-12 divborder1">
                      <!-- Name -->
                          <!-- <div class="row  divborder1">
                           <div class="col-md-4 col-sm-3 divborder1 headstyle">Name</div>
                           <div class="col-md-1 col-sm-6 divborder1">:</div>
                           <div class="col-md-7 col-sm-9 divborder1 textstyle"><?php echo  $row['name'];?></div>
                         </div>    -->

                         <!-- Age -->
                         <div class="row  divborder1">
                           <div class="col-md-4 col-xs-4 divborder1 headstyle">Age</div>
                           <div class="col-md-1 col-xs-1 divborder1">:</div>
                           <div class="col-md-7 col-xs-6 divborder1 textstyle"><?php 
                           if(isset($row['dob']))
                           { 
                            $dob= $row['dob'];
                            $from = new DateTime($dob);
                            $to   = new DateTime('today');
                            echo $from->diff($to)->y;
                          }
                          ?>                   
                        </div>
                      </div>
                      <!-- Income -->
                      <div class="row  divborder1">
                        <div class="col-md-4 col-xs-4 divborder1 headstyle">Caste</div>
                       <div class="col-md-1 col-xs-1 divborder1">:</div>
                       <div class="col-md-7 col-xs-6 divborder1 textstyle"><?php echo  $row['caste'];?></div>
                     </div> 
                     <!-- Qualification -->
                     <div class="row  divborder1">
                       <div class="col-md-4 col-xs-4 divborder1 headstyle desktop">Qualification</div>
                       <div class="col-md-4 col-xs-4 divborder1 headstyle mobile">Qual.</div>
                       <div class="col-md-1 col-xs-1 divborder1">:</div>
                       <div class="col-md-7 col-xs-6 divborder1 textstyle"><?php echo  $row['edu'];?></div>
                     </div>
                     <!-- Raasi -->
                     <div class="row  divborder1">
                      <div class="col-md-4 col-xs-4 divborder1 headstyle">Rasi</div>
                      <div class="col-md-1 col-xs-1 divborder1">:</div>
                      <div class="col-md-7 col-xs-6 divborder1 textstyle"><?php echo  $row['rasi'];?></div>
                    </div>
                    <!-- Star -->
                    <div class="row  divborder1">
                      <div class="col-md-4 col-xs-4 divborder1 headstyle">Star</div>
                      <div class="col-md-1 col-xs-1 divborder1">:</div>
                      <div class="col-md-7 col-xs-6 divborder1 textstyle"><?php echo  $row['star'];?></div>
                    </div>
                    <!-- City -->
                    <div class="row  divborder1">
                     <div class="col-md-4 col-xs-4 divborder1 headstyle">City</div>
                     <div class="col-md-1 col-xs-1 divborder1">:</div>
                     <div class="col-md-7 col-xs-6 divborder1 textstyle"><?php echo  $row['city'];?></div>
                   </div>

                   <!-- View Button -->
                   <div class="row  divborder1" style="padding-top: 10px;text-align: right;">
                    <div class="col-md-12 col-sm-12 divborder1">
                      <!-- <a href="online_payment.php" class="btn btn-primary" onclick="openForm() style="font-size: 16px">View Profile >></a> -->
                      <button class="btn btn-primary" onclick="openForm()" style="font-size: 16px">View Profile >></button>
                    </div>
                  </div>

                </div>

              </div>
            </td>
          </tr>
               <!-- <div class="modal fade" id="myModal_<?php echo $row['matri_id']; ?>" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        </div> 
                        <div class="modal-body">
                             <img src="<?php echo $row['up_profile']; ?>" style="width:100%;"/>
                        </div>
                    </div>
                  </div> -->
                </div>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Primary table end -->
</div></div>

<!-- Modal -->


</div>
</div>
</div>
<!-- main content area end -->
<!-- footer area start-->

<!-- footer area end-->
</div>
<!-- page container area end -->


</div>
</div>
</nav>
</div>
<?php include('footer.php'); ?>
<!-- jquery latest version -->
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<!-- <script>
window.addEventListener("keyup", function(e){ if(e.keyCode == 27)window.location.href='home.php'; }, false);</script> -->
<script type="text/javascript">
  window.history.forward();
  function noBack()
  {
   window.onbeforeunload = function() { return "Your work will be lost."; };
 }
</script>
<!-- bootstrap 4 js -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/jquery.slicknav.min.js"></script>

<!-- Start datatable js -->
<script src="assets/js/jquery.dataTables.min.js"></script> 
<script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script> -->
      <!-- others plugins -->
      <script src="assets/js/plugins.js"></script>
      <script src="assets/js/scripts.js"></script>


    </body>
    </html>