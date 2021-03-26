<?php
session_start();
include 'conn.php';
?>
<style>
.open-buttons {
   font-size: 13px;
    line-height: 22px;
    color: #7F7F7F;
    font-family: 'Open Sans';
    font-weight: 600;
    background-color: #c410d0;
    color: white;
    padding: 4px 7px;
    border: none;
    cursor: pointer;
    width: 152px;
    margin-top: -17px;
    margin-right: -401px;
}
.open-buttonss {
    font-size: 13px;
    line-height: 22px;
    color: #7F7F7F;
    font-family: 'Open Sans';
    font-weight: 600;
    background-color: #c410d0;
    color: white;
    padding: 4px 7px;
    border: none;
    cursor: pointer;
    width: 113px;
    margin-top: -4px;
    margin-right: 44px;
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.buttons {
    margin: 10%;
    text-align: center;
}
/*td
{
  font-size: 15px !important;
}*/
.btn-hover {
  width: 148px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 20px;
    height: 45px;
    text-align: center;
    border: none;
    background-size: 300% 100%;
    border-radius: 5px;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:focus {
    outline: none;
}

.btn-hover.color-1 {
    background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
    box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
}
.btn-hover.color-2 {
    background-image: linear-gradient(to right, #f5ce62, #e43603, #fa7199, #e85a19);
    box-shadow: 0 4px 15px 0 rgba(229, 66, 10, 0.75);
}
.btn-hover.color-3 {
    background-image: linear-gradient(to right, #667eea, #764ba2, #6B8DD6, #8E37D7);
    box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
}
.btn-hover.color-4 {
    background-image: linear-gradient(to right, #fc6076, #ff9a44, #ef9d43, #e75516);
    box-shadow: 0 4px 15px 0 rgba(252, 104, 110, 0.75);
}
.btn-hover.color-5 {
    background-image: linear-gradient(to right, #0ba360, #3cba92, #30dd8a, #2bb673);
    box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);
}
.btn-hover.color-6 {
    background-image: linear-gradient(to right, #009245, #FCEE21, #00A8C5, #D9E021);
    box-shadow: 0 4px 15px 0 rgba(83, 176, 57, 0.75);
}
.btn-hover.color-7 {
    background-image: linear-gradient(to right, #6253e1, #852D91, #A3A1FF, #F24645);
    box-shadow: 0 4px 15px 0 rgba(126, 52, 161, 0.75);
}
.btn-hover.color-8 {
    background-image: linear-gradient(to right, #29323c, #485563, #2b5876, #4e4376);
    box-shadow: 0 4px 15px 0 rgba(45, 54, 65, 0.75);
}
.btn-hover.color-9 {
    background-image: linear-gradient(to right, #25aae1, #4481eb, #04befe, #3f86ed);
    box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
}
.btn-hover.color-10 {
       background-image: linear-gradient(to right, #f52174, #dc4913, #e08d0d , #ed1c9b);
    box-shadow: 0 4px 15px 0 rgba(13, 12, 12, 0.75);
}
.btn-hover.color-11 {
       background-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);  box-shadow: 0 5px 15px rgba(242, 97, 103, .4);
}
</style>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html"; charset="utf-8" />
<?php
session_start();
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
    <!--if IE-->
    <link rel="stylesheet" type="text/css" href="css/all-ie-only.css">
     <script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
            
            var printButton = document.getElementById("print");
            var printButton1 = document.getElementById("print1");
           var printButton2 = document.getElementById("print2");
            var modal = document.getElementById("myModal");
            
            printButton.style.visibility = 'hidden';
            printButton1.style.visibility = 'hidden';
            printButton2.style.visibility = 'hidden';
            modal.style.visibility = 'hidden';
            
           var popupWin = window.open('', '_blank', 'width=1000,height=1000');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
           popupWin.document.close();
              

                }
     </script>
    <body>
<section>
 <div class="container">
      <div class="row" style="margin-left: 35px;text-align: -webkit-right;">
       
    <?php
    if(isset($_GET['id']))
        {
          $mat_id=$_GET['id'];
        }
       $t_id= $_SESSION['matri_id'];
        //echo $t_id;
        ?>
    
     </div></div>
    </section>
    <br> 
    <section>
     
    <div align="center" style="  border:1px solid #8b0000;
    width: 80%;
    margin: 20px 140px 20px;background-image: radial-gradient(#ff000038, #ffff0052, #eb0c99);">

<div id="divToPrint">
<table width="1003" border="0" align="center" style="background-image:url(images/bg.png);">
  <tr>
    <td height=""><table width="1003" height="" border="0">
    <tr ><br /><td valign="bottom" height="" colspan="2" align="center" style="font-weight:bold; font-size:12px;"></td></tr>
       <tr><td height="" colspan="2" align="center" style="font-weight:bold; font-size:12px;"></td></tr>
      <tr align="center">
        <?php 
        if(isset($_GET['id']))
        {
          $mat_id=$_GET['id'];
        }
$mat_id=$_GET['id'];

$sql1="SELECT * FROM registerfree WHERE matri_id ='$mat_id'";
 $res1 = mysql_query($sql1);
$row = mysql_fetch_assoc($res1);
            ?>
        <td width="250" height="" align="left"> <img src="<?php echo $row['up_profile']; ?>" style=" border: 2px solid #a4214a;" height="300px" width="230px" /></td>
        <td width:"400">
         
          <img style="margin-left: 40px;" src="images/LOGOss.png" alt="Wedding Vendors" class="img-responsive" style="">
<p style="font-size: 18px;
    font-weight: 700; margin-left: 26px;">
    <br>
    <br>
    <input type="hidden" name="matri_id" id="matri_id" value="<?php echo $_SESSION['matri_id']?>">
             </p>
        </td>
      <td width="346"> <table width="246" border="0" cellspacing="0" cellpadding="0">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Contact Details</h4>
      </div>
      <div class="modal-body">
        <div>
          <label>Address:</label>
          <span><?php echo  $row['address'];?></span>
        </div>
        <div>
          <label>Contact:</label>
          <span><?php echo  $row['mobile'];?></span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<tr>
            <p style="font-size: 18px;
    font-weight: 700;"><b>Reg.No:
             <span style="font-size:26px"></span><?php echo $mat_id; ?></b><br>

           

  <a href="edit_profile.php?id=<?php echo $mat_id; ?>"><button class="btn-hover color-10" id="print">Edit Profile</button></a><br>
            
             <a href="pic.php?id=<?php echo $mat_id; ?>"><button class="btn-hover color-10" id="print1">Manage Photos</button>
             </a>
             <a href=""><button class="btn-hover color-10" id="print2" onclick="PrintDiv()">Print</button>
             </a>
             </p>
             </tr>
            <td width="10">
          </tr>
        </table>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height=""><hr style="height:20px;border-top: 2px solid #6b6a69;"><table width="1003" border="0" />
      <tr>
        <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Name</td>
        <td width="11">:</td>
        <td width="450" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['name'];?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left" style="padding-left:50px;font-size: 16px;font-weight: bold;">Sex</td>
        <td width="10">:</td>
        <td width="250" style="font-weight:bold;font-size:16px;"><?php echo  $row['gender'];?></td>
      </tr>
      <tr>
        <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Religion</td>
        <td>:</td>
        <td width="311" style="font-weight:bold;font-size:16px;"><?php echo  $row['religion'];?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left" style="padding-left:50px;font-size: 16px;font-weight: bold;">Caste</td>
        <td>:</td>
        <td width="250" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['caste'];?></td>
      </tr>
       <tr>
        <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Sub Caste</td>
        <td>:</td>
        <td width="311" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['subcaste'];?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left" style="padding-left:50px;font-size: 16px;font-weight: bold;">Martial Status</td>
        <td>:</td>
        <td width="250" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['mstatus'];?></td>
      </tr>

     <tr>
        <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Date Of Birth</td>
        <td>:</td>
        <td width="311" style="font-weight:bold;font-size:18px;"><?php echo  $row['dob'];?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left" style="padding-left:50px;font-size: 16px;font-weight: bold;">Age:</td>
        <td>:</td>
        <td width="250" style="font-weight:bold;font-size:18px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>">
          <?php
          $dob= $row['dob'];
         $g= explode('-',$dob);
         //print_r($g[0]);
         $d1=date(Y);
         //echo $d1;
$d2=$d1-$g[0];
echo $d2;
?></td>
      </tr>


 <tr>
        <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Birth Time</td>
        <td>:</td>
        <td width="311" style="font-weight:bold;font-size:18px;"><?php  $gt= $row['dot'];

  echo date('h:i a', strtotime($gt))

        ?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left" style="padding-left:50px;font-size: 16px;font-weight: bold;">Birth Place:</td>
        <td>:</td>
        <td width="250" style="font-weight:bold;font-size:18px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>">
          <?php
           echo $row['birth_place'];

        
         
?></td>
      </tr>

      
      <tr>
        <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Educational Qualification</td>
        <td>:</td>
        <td width="311" style="font-weight:bold;font-size:18px;"><?php echo $row['edu'];?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left"style="padding-left:50px;font-size: 16px;font-weight: bold;">Height:</td>
        <td>:</td>
        <td width="250" style="font-weight:bold;font-size:16px;"><?php echo  $row['height'];?>&nbsp;&nbsp;&nbsp;</td>
      </tr>
       <tr>
        <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Job/Business</td>
        <td>:</td>
        <td width="311" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['working_place'];?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left"style="padding-left:50px;font-size: 16px;font-weight: bold;">Monthly Salary</td>
        <td>:</td>
        <td width="250" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['monthlyincome'];?></td>
      </tr>
      
      <tr>
        <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Father Name</td>
        <td>:</td>
        <td width="311" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['father_name'];?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left"style="padding-left:50px;font-size: 16px;font-weight: bold;">Mother Name</td>
        <td>:</td>
        <td width="250" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['mother_name'];?></td>
      </tr>
      <tr>
        <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Father Occupation</td>
        <td>:</td>
        <td width="311" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['father_occ'];?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left"style="padding-left:50px;font-size: 16px;font-weight: bold;">Mother Occupation</td>
        <td>:</td>
        <td width="250" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['mother_occ'];?></td>
      </tr>
      <tr>
         <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Brother's</td>
        <td>:</td>
        <td width="311" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['bro'];?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left" style="padding-left:50px;font-size: 16px;font-weight: bold;">Sister's</td>
        <td>:</td>
        <td width="250" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['sis'];?></td>
      </tr>

      <tr>
         <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Married Brother's</td>
        <td>:</td>
        <td width="311" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['mbro'];?></td>
        <td width="1">&nbsp;</td>
        
         <td width="163" align="left" style="padding-left:50px;font-size: 16px;font-weight: bold;">Married Sister's</td>
        <td>:</td>
        <td width="250" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['msis'];?></td>
      </tr>
      
       <tr>
        <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Family Status</td>
        <td>:</td>
        <td width="311" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['f_status'];?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left"style="padding-left:50px;font-size: 16px;font-weight: bold;">City</td>
        <td>:</td>
        <td width="250" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['city'];?></td>
      </tr>
       <tr>
        <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Rasi</td>
        <td>:</td>
        <td width="311" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['rasi'];?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left"style="padding-left:50px;font-size: 16px;font-weight: bold;">Star</td>
        <td>:</td>
        <td width="250" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['star'];?></td>
      </tr>
      <tr>
        <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Lagnam</td>
        <td>:</td>
        <td width="311" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['lagnam'];?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left"style="padding-left:50px;font-size: 16px;font-weight: bold;">Thesai</td>
        <td>:</td>
        <td width="250" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['thisai'];?></td>
      </tr>





      <!-- <tr>
        <td width="227" height="29" align="left"  style="padding-left:50px;font-size: 16px;font-weight: bold;">Address</td>
        <td>:</td>
        <td width="311" style="font-weight:bold;font-size:18px;"><?php echo  $row['address'];?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left" style="padding-left:50px;font-size: 16px;font-weight: bold;">Phone no:</td>
        <td>:</td>
        <td width="250" style="font-weight:bold;font-size:18px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>">
          <?php
          echo $row['mobile'];
?></td>
      </tr>-->

   
        </table></td>
    </tr>
  </table></td>
  </tr>
   <br /><br />
   <tr>
    <td ><table width="1003" border="0" cellspacing="0" cellpadding="0" align="center" class="b" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>">
      <tr valign="top">
        <th height="373"  align="left" scope="col"></th>
        <th scope="col" align="left">
        
        <table  border="0" align="center" cellpadding="0"  id="table6" style="border-collapse: collapse;margin-left:45px;">
						<tbody class="b" style="font-weight:bold;font-size:18px;"><tr class="b" style="font-weight:bold;font-size:18px;">
							<td width="77" >
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"><?php  $row['one'];?><?php 
$c1=$row['one'];				
$array =  explode(',', $c1);
foreach ($array as $item) {
	?>
   
  <?php $t=trim($item); //echo $t;
  
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }


elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }



   }  ?>
  </textarea></td>
							<td width="77"  >
							<textarea  class="a" style="overflow: hidden;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="3" tabindex="48"><?php $row['r2'];?><?php
$c2=$row['two'];				
$array =  explode(',', $c2);
foreach ($array as $item) {
	?>
   
  <?php $t=trim($item);
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }


   }  ?>
  </textarea></td>
							<td width="77"  >
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r3'];?> <?php
$c3=$row['three'];				
$array =  explode(',', $c3);
foreach ($array as $item) {
	//echo $item;
	

	?>
  <?php $t=trim($item); //echo $t; 
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }


}  ?>
  </textarea></td>
							<td width="77"  >
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r4'];?> <?php
$c4=$row['four'];				
$array =  explode(',', $c4);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t; 
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

}

    ?>
  </textarea></td>
							<td width="77" rowspan="4">&nbsp;</td>
							<td width="58">
						<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r13'];?> <?php
$c13=$row['aone'];				
$array =  explode(',', $c13);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }
  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }


   }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r14'];?> <?php
$c14=$row['atwo'];				
$array =  explode(',', $c14);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t; 
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }


}  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r15'];?> <?php
$c15=$row['athree'];				
$array =  explode(',', $c15);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t; 
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }
elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }


}  ?>
  </textarea></td>
							<td width="65">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r16'];?> <?php
$c16=$row['afour'];				
$array =  explode(',', $c16);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;

  if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }
elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }


   }  ?>
  </textarea></td>
						</tr>
						<tr>
							<td width="77" >
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r12'];?> <?php
$c12=$row['twelve'];				
$array =  explode(',', $c12);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;

if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
							<td width="114" colspan="2" rowspan="2" valign="top" align="center" style="background:url(images/user-avatar1.png) no-repeat;"><span style="font-size:14px;"><br /><br /> </span><br /><br/><strong><span lang="ta" xml:lang="ta">ராசி</span></strong><br /><br /></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r5'];?> <?php
$c5=$row['five'];				
$array =  explode(',', $c5);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r24'];?> <?php
$c24=$row['atwelve'];				
$array =  explode(',', $c24);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
							<td width="114" colspan="2" rowspan="2" valign="top" align="center" style="background:url(images/user-avatar1.png) no-repeat;"><span style="font-size:14px;"><br /><br /></span><br /><br/><strong><span lang="ta" xml:lang="ta">அம்சம்</span></strong><br /><br /></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r17'];?> <?php
$c17=$row['afive'];						
$array =  explode(',', $c17);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;

if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
						</tr>
						<tr>
							<td width="77" >
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r11'];?> <?php
$c11=$row['eleven'];				
$array =  explode(',', $c11);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }
elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r6'];?> <?php
$c6=$row['six'];				
$array =  explode(',', $c6);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }
elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r23'];?> <?php
$c23=$row['aeleven'];				
$array =  explode(',', $c23);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;

if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r18'];?> <?php
$c18=$row['asix'];				
$array =  explode(',', $c18);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;

if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
						</tr>
						<tr>
							<td width="77" >
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r10'];?> <?php
$c10=$row['ten'];				
$array =  explode(',', $c10);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
							<td width="77">
						  <textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r9'];?> <?php
$c9=$row['nine'];				
$array =  explode(',', $c9);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t; 
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

}  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r8'];?> <?php
$c8=$row['eight'];				
$array =  explode(',', $c8);



foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }
elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r7'];?> <?php
$c7=$row['seven'];				
$array =  explode(',', $c7);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r22'];?> <?php
$c22=$row['aten'];				
$array =  explode(',', $c22);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r21'];?> <?php
$c21=$row['anine'];				
$array =  explode(',', $c21);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r20'];?> <?php
$c20=$row['aeight'];				
$array =  explode(',', $c20);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }

elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
  <td width="77">
							<textarea  class="a" style="overflow: hidden;text-align:justify;text-align:justify;font-size:17px;font-weight:bold;border: 2px solid black;" rows="3" name="r1" cols="8" tabindex="48"> <?php   $row['r19'];?> <?php
$c19=$row['aseven'];				
$array =  explode(',', $c19);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); //echo $t;
if($t=='à®ªà¯à®¤à®©à¯')
  {
echo 'புதன்';
  }
elseif($t=='à®ªà¯à®¤à®©à¯')
{
echo 'புதன்';
}

  elseif($t=='à®°à®¾à®•à¯')
  {
echo 'ராகு';
  }
  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
  {
echo 'வியாழன்';
  }
  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
  {
echo 'சுக்கிரன்';
  }
  elseif($t=='à®•à¯à¯«')
  {
echo 'கு௫';
  }
  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
  {
echo 'சூரியன்';
  }
  elseif($t=='à®šà®©à®¿')
  {
echo 'சனி';
  }
  elseif($t=='à®•à¯‡à®¤à¯')
  {
echo 'கேது';
  }
  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
  {
echo 'சந்திரன்';
  }
  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
  {
echo 'செவ்வாய்';
  }
  elseif($t=='à®²à®•à¯à®©à®®à¯')
  {
echo 'லக்னம்';
  }
  else
  {
echo $t;
  }

   }  ?>
  </textarea></td>
							
			  </tr>
			</tbody></table> 
             
        </th>

      </tr>
      
       
    </table></td>
  </tr>
       
  </table></td>
  </tr>
 
 </div>
  
  
  </section>
    
    
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
$("#print12").click(function()
{
var matri_id = $('#matri_id').val();
var dataString = 'matri_id='+ matri_id;

$.ajax
({
type: "POST",
url: "caste.php",
data: dataString,
cache: false,
success: function(data)
{
alert(data)
}
});

});
});
</script>



</body></html>