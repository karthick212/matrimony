<?php
session_start();
?>
  <?php include('header1.php');
  include('conn.php');
  ?>

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
    echo "<script> window.location.href='c_viewprofile.php?id=$v1'</script>";

  }
}
?>

<html class=""><head>
  <meta charset="UTF-8">
  <title></title>
  <META HTTP-EQUIV="Content-Type" CONTENT="text/html"; charset="utf-8" />
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

    .ser-in-box {
      width: 15% !important;
      float: left;
      position: relative;
    }
    .search-sec-homet {
      background: transparent;
      margin-top: -6em !important;
      margin-left: 0px !important;
    }
    .quicksearchheight
    {
      margin-bottom: 14em;
    }
    @media (max-width: 360px)
    {
      .search-sec-homet {
        background: transparent;
        margin-top: 0em !important;
        margin-left: -24px !important;
      }
      .quicksearchheight
      {
        margin-bottom: 0em;
      }   
    }
    option {
      background-color: #fff !important;
      color: #000 !important;
      padding: 5px 20px !important;
      font-family: 'PT Serif', sans-serif !important;
      font-style: italic !important;
      border-bottom: 1px solid #E1E1E1 !important;
      text-transform: capitalize !important;
      font-size: 16px !important;
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
  width: 98%;
  height: auto;
  float: left;
  background-color: white;
  margin: 25px 15px;
  border-radius: 5px;
  padding: 20px 15px;
}
.shadow3 {
  position: relative;
  box-shadow:0 1px 9px rgb(49, 49, 47), 0 0 14px rgb(197, 197, 197) inset;
}
.colorss{
  width: 96% !important;
  border-radius: 0;
  padding: 0px 12px;
  border: 2px solid #ffffff;
  height: 40px;
  background: #f50b3cba;
  outline: none;
  color: #ffffff;
  font: 400 1.039em/1em 'PT Serif', serif;
  font-style: italic;
}
</style>


<style type="text/css">.fancybox-margin{margin-right:17px;}</style></head>
<body>

  <!-- /.side-menu-->

  <div class="main-container" style="background-image: linear-gradient(to right, #e60f54b3,#ef7a079c);">

    <div class="container">

      <div class="row quicksearchheight">
        <h1 style="font-family: 'Playball', cursive;font-size: 43px;text-align: center;color:#ffffff;">Welcome To Inaikkum Karangal Matrimony</h1><br>

        <?php 
            //echo "test123";

        $mat_id= $_SESSION['matri_id'];

        $sql1="SELECT * FROM registerfree WHERE matri_id = '$mat_id'";
        $res1 = mysql_query($sql1);
        $row = mysql_fetch_assoc($res1);
        $ca=$row['category'];

        ?>
        <div class="col-md-1"></div>
        <div class="col-md-9 page-description">

          <div class="customer-review">
            <div class="row" style="border: 3px solid #830000;color: white;">
             <div class="col-md-8  col-xs-12">


               <div class="capacity" style="width: 23%;float: left;padding: 11px 0px;font-size: 12px;margin-right: 17px;">

                <img src="<?php echo $row['up_profile']; ?>" style="object-position: 50% 50%; height:100px; width:90px; background-color:#FFF;" class="img-responsive">
              </div> <h3 style="font-family:Gabriola">Name: <b><?php echo  $row['name'];?></b> <br>
                Reg No: <b style="font-family: initial;"><?php echo  $row['matri_id'];?></b> <br>
                Caste: <b><?php echo  $row['caste'];?></b> </h3>



              </div>

              <div class="col-md-4 col-xs-12">
                <h3 style="font-family:Gabriola">Martial Status: <b><?php echo  $row['mstatus'];?></b> <br>
                  Physical Status: <b><?php echo  $row['phy'];?></b> <br>
                  Religion :<b><?php echo  $row['religion'];?></b> </h3>
                </div>

              </div>

            </div>

          </div>

          <div class="col-md-2">

            <div class="row">

              <div class="col-md-12">

                <div class="venue-info">

                  <div class="pricebox">

                    <form name="freesearch" method="post">
                   <span><div title="Search By ID" class="row">                            
                    <div class="col-md-8 col-xs-6 " style="margin-right: -25px;"> <input class="form-control" type="text" style="height: 35px;padding-right: 0px" name="id" placeholder="Search by ID">
                    </div>
                    <div class="col-md-4 col-xs-6"><button type="submit" id="searchs" onclick="return validate(document);" name="search" class="btn" style="height: 35px"><i class="fa fa-arrow-right"></i></button>
                    </div>
                  </div>
                </span> 
                <span style="font-size: 17px;font-weight: 1000;"><a href="m_viewprofile.php?id=<?php echo $row['matri_id']; ?>" target="_blank" style="color: white;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;View profile</a></span><br>
                <span style="color: white;font-size: 17px;font-weight: 1000;"><a href="index.php" style="color: white;"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Logout</a></span>	
              </form>
              </div>

              </div>

            </div>



          </div>

        </div>

      </div>

      <br>
      <div class="search-wrapper">
        <section class="container clearfix">
          <div class="search-sec search-sec-homet">
            <div class="overlay" >
              <div class="border">
                <form action="" method="post">
                  <div class="ser-in-box">
                    <div class="select-box">
                      <select name="age1" class="select-menu" style="width: 162px;">
                        <option value="">Age (From)</option>
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
                      </select>
                    </div>
                  </div>

                  <div class="ser-in-box">
                    <div class="select-box">
                      <select name="age2" class="select-menu">
                        <option value="">Age (To)</option>
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
                      </select>
                    </div>
                  </div>

                  <div class="ser-in-box">
                    <div class="select-box">
                      <!-- <select onchange="showhidediv()" class="select-menu"> -->
                        <select name="religion" class="select-menu">

                          <option value="">Religion</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Muslim">Muslim</option>
                          <option value="Christian">Christian</option>
                          <option value="Buddhist">Buddhist</option>
                          <option value="Jain">Jain</option>
                          <option value="Parsi">Parsi</option>
                          <option value="Sikh">Sikh</option>
                          <option value="">Inter religion</option>

                        </select>
                      </div>
                    </div>

                    <div class="ser-in-box">
                      <div class="select-box" title="Select Caste">
                        <select name="caste"  id="caste" class="select-menu">
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

                    <div class="ser-in-box">
                      <div class="select-box" title="Marital Status" >
                        <select name="martial_s" class="colorss" style="width: 150px;" title="Marital Status">
                          <option value="" title="Marital Status">Marital Status</option>
                          <option value="unmarried">Unmarried</option>
                          <option value="divorce">Divorce</option>
                          <option value="widow">Widow</option>
                        </select>
                      </div>
                    </div>

                        <!-- <div class="ser-in-box">
                          <div title="Search By ID" >                            
                            <input class="form-control" type="text" style="height: 39px" name="matriid" placeholder="Search by ID">
                          </div>
                        </div> -->
        <!-- <div class="ser-in-box">
            <div class="select-box">
              <select name="gender" class="colorss">
                <option value="">Looking For</option>
                <option value="Female">Bride</option>
                <option value="Male">Groom</option>
            </select>
        </div>
      </div> -->

      <div class="ser-in-box chk-button">
        <button type="submit" name="submit1111" class="res-btn" style="margin-left: 4px">Quick Search</button>
      </div>
    </form> 
  </div>
</div>
</div>
</section>
</div>

<br>
<?php

$caste = $row['caste'];
$gen = $row['gender'];
//echo "<h3>$caste</h3>";
//echo $cat;
if(isset($_POST['submit1111']))
{
  $sql5="SELECT * FROM interest WHERE matri_id = '$mat_id'";
  $res5 = mysql_query($sql5);
  $row5 = mysql_fetch_assoc($res5);

  $tot=$row5['total_id'];
  if($ca==$tot){
    echo  "<script>
    confirm('Your Limit was over.... Contact Management...!');
    window.location.href='profiles.php';
    </script>";
  }
  else{

    $age1=$_POST['age1'];
    $age2=$_POST['age2'];
    $religion=$_POST['religion'];
    $caste=$_POST['caste'];
    $m_status=$_POST['martial_s'];
    $matriid=$_POST['matriid'];

//         if($gen=='Male')
//         {
//            if($age1 != '' && $age2 != '' && $religion != '' && $caste != '' &&
//              $m_status != '')
//            {
//             $sql2="SELECT * FROM registerfree WHERE age>='$age1' AND 
//             age<='$age2' AND religion='$religion' AND caste='$caste' AND mstatus='$m_status' AND gender='Female' " ;
//             echo $sql;
//         }
//         elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != ''  && $m_status != '')
//         {

//             $sql2="SELECT * FROM registerfree WHERE age>='$age1' AND 
//             age<='$age2' AND religion='$religion' AND caste='$caste' AND mstatus='$m_status' AND gender='Female' ";
//             echo $sql;

//         }
//         elseif($age1 != '' && $age2 != '' && $caste != '')
//         {
//             $sql2="SELECT * FROM registerfree WHERE age>='$age1' AND 
//             age<='$age2'  AND caste='$caste' AND gender='Female'";
//             echo $sql;
//         }
//         elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != '')
//         {
//             $sql2="SELECT * FROM registerfree WHERE age>='$age1' AND 
//             age<='$age2' AND religion='$religion' AND caste='$caste' AND gender='Female' ";
//             echo $sql;
//         }
//         elseif($age1 != '' && $age2 != '' && $m_status != '' && $religion != '' ){

//             $sql2="SELECT * FROM registerfree WHERE age>='$age1' AND 
//             age<='$age2' AND religion='$religion' AND mstatus='$m_status' AND gender='Female' ";
//             echo $sql;
//         }
//         elseif($age1 != '' && $age2 != '' && $religion != '')
//         {
//             $sql2="SELECT * FROM registerfree WHERE age>='$age1' AND 
//             age<='$age2' AND religion='$religion' AND gender='Female' ";
//             echo $sql;
//         }
//         elseif($age1 != '' && $age2 != '')
//         {
//             $sql2="SELECT * FROM registerfree WHERE age>='$age1' AND 
//             age<='$age2' AND gender='Female' ";
//             echo $sql;
//         }
// //echo $sql2;
//     }
//     elseif($gen=='Female')
//     {

//         if($age1 != '' && $age2 != '' && $religion != '' && $caste != '' &&
//          $m_status != '')
//         {
//             $sql2="SELECT * FROM registerfree WHERE age>='$age1' AND 
//             age<='$age2' AND religion='$religion' AND caste='$caste' AND mstatus='$m_status' AND gender='Male'  " ;
//                             // echo $sql;


//         }
//         elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != ''  && $m_status != '')
//         {

//             $sql2="SELECT * FROM registerfree WHERE age>='$age1' AND 
//             age<='$age2' AND religion='$religion' AND caste='$caste' AND mstatus='$m_status' AND gender='Male' ";


//         }
//         elseif($age1 != '' && $age2 != '' && $gender != '' && $caste != '')
//         {
//             $sql2="SELECT * FROM registerfree WHERE age>='$age1' AND 
//             age<='$age2'  AND caste='$caste' AND gender='$gender'";

//         }
//         elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != '')
//         {
//             $sql2="SELECT * FROM registerfree WHERE age>='$age1' AND 
//             age<='$age2' AND religion='$religion' AND caste='$caste' AND gender='Male' ";

//         }
//         elseif($age1 != '' && $age2 != '' && $m_status != '' && $religion != '' ){

//             $sql2="SELECT * FROM registerfree WHERE age>='$age1' AND 
//             age<='$age2' AND religion='$religion' AND mstatus='$m_status' AND gender='Male' ";
//         }
//         elseif($age1 != '' && $age2 != '' && $religion != '')
//         {
//             $sql2="SELECT * FROM registerfree WHERE age>='$age1' AND 
//             age<='$age2' AND religion='$religion' AND gender='Male' ";
//         }
//         elseif($age1 != '' && $age2 != '')
//         {
//             $sql2="SELECT * FROM registerfree WHERE age>='$age1' AND 
//             age<='$age2' AND gender='Male' ";
//                                 //echo $sql;
//         }
//     }

    $cond = "";
            //SELECT matri_id,name,gender,age,edu,caste FROM registerfree                      

    if($gen=='Female')
    {
     $cond .= " AND gender='Male'";
   }
   if($gen=='Male')
   {
     $cond .= " AND gender='Female'";
   }
   if($age1 != '' && $age2 != '')
   {
     $cond .= "and age between $age1 and $age2 ";
   }
   if($religion != '')
   {
    $cond .= " AND religion='$religion'";
  }
  if($matriid != '')
  {
    $cond .= " AND matri_id='$matriid'";
  }
  if($caste != '')
  {
    $cond .= " AND caste='$caste'";
  }
  if($m_status != '')
  {
    $cond .= " AND mstatus='$m_status'";
  }

  if(($age1=='' || $age2=='')&&$matriid == '')
  {
   echo "<script>alert('Please Select the Age Range..!!'); window.location.href='profiles.php'</script>";
 }  
 if($cond=='')
 {
   echo "<script>alert('Please Select Atleast age..!!'); window.location.href='profiles.php'</script>";
 }

 $sql2="SELECT matri_id,name,gender,age,edu,caste,up_profile,city,dob FROM registerfree WHERE id<>'0' " . $cond ." order by id desc limit 50" ;

}

}

if(isset($sql2))
  $res2=mysql_query($sql2);

?>
<br>

<div class="row">
 <?php
 if(isset($sql2)&&mysql_num_rows($res2)>0)
 {

   while($row1=mysql_fetch_assoc($res2))
   { 

    ?>
    <div class="col-md-6 sold">

      <div class="col-md-3">

        <img class="cir" src="<?php echo $row1['up_profile']; ?>">
      </div>


      <form name="freesearch" method="post" action="#">
        <div class="col-md-9 col-sm-12 divborder1">
          <div class="row  liveborder2">
            <div class="col-md-12 col-sm-12 divborder1">
              <link type="text/css" rel="stylesheet" href="css/dc_pagination.css">

            </div>


            <div class="box box3 shadow3 wow fadeInDown animated animated" style="visibility: visible;
            animation-name: fadeInLeft;

            font-weight: 700;font-size:12px;">
            <div class="col-md-12 col-sm-12 divborder1" style="border-bottom: 1px solid black;">
              <div class="row  divborder1">

                <div class="col-md-6 col-xs-6 divborder1 headstyle"><b><?php echo $row1['name']; ?></b></div>
                <div class="col-md-6 col-xs-6 divborder1" style="text-align: right;"><a href="c_viewprofile.php?id=<?php echo $row1['matri_id']; ?>" target="_blank">View Profile</a></div>
                <div class="col-md-12 col-xs-9 divborder1 textstyle"  style="font-size: 10px;">Reg No:<b><?php echo $row1['matri_id']; ?></b></div>
              </div>
            </div>
            <br> <br>
            <div class="col-md-12 col-sm-12 divborder1">
                                    <!-- <div class="row  divborder1">
                                        <div class="col-md-5 col-sm-3 divborder1 headstyle">Gender</div>
                                        
                                        <div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle"><?php echo $row1['gender']; ?></div>
                                      </div> -->
                                      <div class="row  divborder1">
                                        <div class="col-md-5 col-xs-3 divborder1 headstyle">DOB</div>
                                        
                                        <div class="col-md-1 col-xs-2 divborder1">:</div>
                                        <div class="col-md-6 col-xs-7 divborder1 textstyle"><?php echo $row1['dob']; ?></div>
                                      </div>
                                      <div class="row  divborder1">
                                        <div class="col-md-5 col-xs-3 divborder1 headstyle">Qualification</div>
                                        
                                        <div class="col-md-1 col-xs-2 divborder1">:</div>
                                        <div class="col-md-6 col-xs-7 divborder1 textstyle"><?php echo $row1['edu']; ?></div>
                                      </div>
                                      <div class="row  divborder1">
                                        <div class="col-md-5 col-xs-3 divborder1 headstyle">Caste</div>
                                        
                                        <div class="col-md-1 col-xs-2 divborder1">:</div>
                                        <div class="col-md-6 col-xs-7 divborder1 textstyle"><?php echo $row1['caste']; ?></div>
                                      </div>
                                      <div class="row  divborder1">
                                        <div class="col-md-5 col-xs-3 divborder1 headstyle">City</div>
                                        
                                        <div class="col-md-1 col-xs-2 divborder1">:</div>
                                        <div class="col-md-6 col-xs-7 divborder1 textstyle"><?php echo $row1['city']; ?></div>
                                      </div>

                                    <!-- <div class="row  divborder1">
                                        <div class="col-md-5 col-sm-3 divborder1 headstyle">Salary</div>
                                        
                                        <div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle"><?php echo $row1['salary']; ?></div>
                                      </div> -->
                                    <!-- <div class="row  divborder1">
                                        <div class="col-md-5 col-sm-3 divborder1 headstyle">Home Town</div>
                                        <div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle"><?php echo $row1['city']; ?></div>
                                        
                                      </div>   -->                                                                    
                                    </div>

                                  </div>

                                </div>

                              </div>

                            </form>
                          </div>
                          <?php
                        }
                      }
                      ?>
                <!-- <div class="col-md-2">
                </div>
                
                <div class="col-md-5 sold">
            
            <div class="col-md-3">
            <img class="cir" src="images/car2.jpg">
            </div>
            
            <form name="freesearch" method="post" action="#">
				<div class="col-md-9 col-sm-12 divborder1">
					<div class="row  liveborder2">
						<div class="col-md-12 col-sm-12 divborder1">
							<link type="text/css" rel="stylesheet" href="css/dc_pagination.css">
							
						</div>
						
												<div class="box box3 shadow3 wow fadeInDown animated animated" style="visibility: visible;
    animation-name: fadeInLeft;
    
    font-weight: 700; font-size:12px;">
							<div class="col-md-12 col-sm-12 divborder1" style="border-bottom: 1px solid black;">
							    <div class="row  divborder1">
									
									<div class="col-md-4 col-sm-3 divborder1 headstyle"><b>S.Sheela</b></div>
								    	<div class="col-md-4 col-sm-9 divborder1 textstyle">Reg No:<b>256854</b></div>
								    	<div class="col-md-4 col-sm-6 divborder1"><a href="#">View Profile</a></div>
								</div>
							</div>
                            <br> <br>
							<div class="col-md-12 col-sm-12 divborder1">
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Gender</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle">Female</div>
								    </div>
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">DOB</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle">11.06.1989</div>
								    </div>
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Qualification</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle">M.Tech(CS)</div>
								    </div>
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Caste</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle">Mudhaliyar</div>
								    </div>
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Location</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle">Chennai</div>
								    </div>
                                    
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Salary</div>
								    	
								    	<div class="col-md-2 col-sm-6 divborder1">:</div>
                                        <div class="col-md-5 col-sm-9 divborder1 textstyle">60,000</div>
								    </div>
								    <div class="row  divborder1">
								    	<div class="col-md-5 col-sm-3 divborder1 headstyle">Home Town</div>
                                        <div class="col-md-2 col-sm-6 divborder1">:</div>
								    	<div class="col-md-5 col-sm-9 divborder1 textstyle">Madurai</div>
								    	
								    </div>								    								    
							  </div>
							  
						</div>
												
												
												
												
								
												
					</div>
					
				</div>
				</form>
      </div> -->

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
<script type="text/javascript">
  // function showhidediv()
  // {
  //   alert(2);
  // }<script type="text/javascript">

  $(document).ready(function()
  {
    $("#showhidediv").change(function()
    {
      var id=$(this).val();
      var dataString = 'id='+ id;

//alert(dataString);

$.ajax
({
  type: "POST",
  url: "caste.php",
  data: dataString,
  cache: false,
  success: function(html)
  {
    $("#caste").html(html);
  }
});

});
  });
</script>




</body></html>
