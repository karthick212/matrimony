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

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Inaikkum Karangal Matrimony</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendors/Stroke-Gap-Icons-Webfont/style.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css">
  <link rel="stylesheet" href="vendors/imagelightbox/imagelightbox.min.css">
  <link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <link rel="stylesheet" type="text/css" href="css/all-ie-only.css">
   <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    
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
    background: #f74d70d6;
    color: #fff;
}
table.dataTable tbody td {
    padding: 7px 0px;
        font-size: 14px;
            text-align: center;
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
 .dataTables_wrapper .dataTables_filter input {
    margin-top: -26px;
}
 label {
    font-weight: 500;
    color: #666;
    display: inline-block;
    margin-bottom: 8px;
    margin-bottom: .5rem;
    font-size: 14px;
}
 .datatable-primary .dataTables_paginate .page-item.active .page-link
 {
    background-color: #3e3d42;
 }
 table tr td {
    border-top: 1px solid rgba(64, 59, 59, 0.94) !important;
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
  <style>
 /*   select::-ms-expand {
    display: none;
    }*/
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


    .colorss{width: 94% !important;
      border-radius: 0;
      padding: 0px 2px;
      border: 2px solid #ffffff;
      height: 40px;
      background: #f50b3cba;
      outline: none;
      color: #ffffff;
      font: 400 1.039em/1em 'PT Serif', serif;
      font-style: italic;
    }

    .ui-selectmenu-menu .ui-menu {
      height: 167px;
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

<!-- Primary table start -->
                    <div class="col-12 mt-5" style="margin-top: 10px !important;">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">View Profile</h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center" style="" border="1">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Age</th>
                                                <th>Qualification</th>
                                                <th>Caste</th>                                                
                                                <th>Image</th>                                                
                                                <th>view Profile</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php
                    
            //             if($age1 != '' && $age2 != '' && $religion != '' && $caste != '' &&
            //              $m_status != '' && $gender != '')
            //             {
            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND religion='$religion' AND caste='$caste' AND mstatus='$m_status' AND gender='$gender' order by id desc" ;
            //                 // echo $sql;
                            

            //             }
            //             elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != ''  && $m_status != '')
            //             {

            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND religion='$religion' AND caste='$caste' AND mstatus='$m_status' order by id desc";
                         
                            
            //             }
            // elseif($age1 != '' && $age2 != '' && $religion != '' &&
            //  $m_status != '' && $gender != '')
            // {
            //   $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //   age<='$age2' AND religion='$religion' AND mstatus='$m_status' AND gender='$gender' order by id desc" ;
            //   // echo $sql;
              

            // }

            //             elseif($age1 != '' && $age2 != '' && $gender != '' && $caste != '')
            //             {
            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2'  AND caste='$caste' AND gender='$gender' order by id desc";
                            
            //             }
            //             elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != '')
            //             {
            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND religion='$religion' AND caste='$caste' order by id desc ";
                            
            //             }
            //             elseif($age1 != '' && $age2 != '' && $m_status != '' && $religion != '' ){

            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND religion='$religion' AND mstatus='$m_status' order by id desc";
            //             }
            //             elseif($age1 != '' && $age2 != '' && $religion != '')
            //             {
            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND religion='$religion' order by id desc ";
            //             }
                        
                        
            //             elseif($age1 != '' && $age2 != '' && $caste != ''){

            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND caste='$caste' order by id desc  ";
            //             }
            //             elseif($age1 != '' && $age2 != '' && $m_status != '' ){

            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND mstatus='$m_status' order by id desc  ";
            //             }
            //             elseif($age1 != '' && $age2 != ''  && $gender != ''){

            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND gender='$gender' order by id desc ";
            //             }
                        
            //             elseif($age1 != '' && $age2 != ''){

            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' order by id desc ";
            //             }
            //             else{
            //                  echo "<script>alert('Please Select the age'); window.location.href='profiless.php'</script>";
            //             }
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
               echo "<script>alert('Please Select the Age Range..!!'); window.location.href='profiless.php'</script>";
            }  
            if($cond=='')
            {
               echo "<script>alert('Please Select Atleast age..!!'); window.location.href='profiless.php'</script>";
            }

            $sql="SELECT matri_id,name,gender,age,edu,caste,up_profile FROM registerfree WHERE id<>'0' " . $cond ." order by id desc" ;   
                        $res = mysql_query($sql);

                    $s=1;
                 while($row=mysql_fetch_assoc($res))
                 {
              
                        ?>

                <tr>
                    <td><?php echo $s++; ?></td>
                    <td style="width:80px;"><?php echo  $row['matri_id'];?></td>
                    <td align="left"><?php echo  $row['name'];?></td>
                    <td align="left" style="width:80px;"><?php echo  $row['gender'];?></td>
                     <td align="left" style="width:50px;"><?php echo  $row['age'];?></td>
                    <td align="left"><?php echo  $row['edu'];?></td>
                    <td align="left"><?php echo  $row['caste'];?></td>
                   

                    <td style="width:70px;"><img src="<?php echo $row['up_profile']; ?>" data-toggle="modal" data-target="#myModal_<?php echo $row['matri_id']; ?>" style="width: 68px;height:70px;"></td> 
                    <td style="width:70px;"><a class="btn btn-primary"  target="_blank" href="m_viewprofile.php?id=<?php echo  $row['matri_id'];?>" style="padding: 8px 8px 1px;"><i class='far fa-user'></i></a></td>
                </tr>
               <div class="modal fade" id="myModal_<?php echo $row['matri_id']; ?>" role="dialog">
                <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                    <div class="modal-content">
                        <!-- <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div> -->
                        <div class="modal-body">
                             <img src="<?php echo $row['up_profile']; ?>" style="width:100%;"/>
                        </div>
                    </div>
                </div>
             </div>
          <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
                <!-- Primary table end -->

  <div class="single" style=" 
  background-image: linear-gradient(to right, #f519196b , #ead90880);
  color: black;
  font-size: 18px;">
  <div class="container">
    <div class="single-top">
      <div class="container-fluid">
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
       echo "<script>alert('Please Select the Age Range..!!'); window.location.href='profiless.php'</script>";
     }  
     if($cond=='')
     {
       echo "<script>alert('Please Select Atleast age..!!'); window.location.href='profiless.php'</script>";
     }

     $sql1="SELECT matri_id,name,gender,age,edu,caste,up_profile,rasi,star,city,dob FROM registerfree WHERE id<>'0' " . $cond ." order by id desc" ;

     $res1 = mysql_query($sql1);
     $count=mysql_num_rows($res1);
     ?>

     <div class="row">
      <div class="col-md-8 col-sm-12 divborder1"><h4 style="margin-bottom: 1em;">SEARCH RESULTS (<?php echo $count; ?> ) </h4>


      </div>

      <div><a href="index.php"><button class="open-button" style="margin-top: 11px;
      width: 100px;">Go Back</button></a></div>

    </div>
    <div class="data-tables datatable-primary">
      <table id="dataTable2" class="text-center" style="width: 100%" border="0">
        <div class="row">
          <form name="freesearch" method="post" action="#">
            <div class="col-md-12 col-sm-12 divborder1">
              <div class="row  liveborder2">
                <div class="col-md-12 col-sm-12 divborder1">
                 <!-- <link type="text/css" rel="stylesheet" href="css/dc_pagination.css"> -->
               </div>

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
               echo "<script>alert('Please Select the Age Range..!!'); window.location.href='profiless.php'</script>";
             }  
             if($cond=='')
             {
               echo "<script>alert('Please Select Atleast age..!!'); window.location.href='profiless.php'</script>";
             }

             $sql="SELECT matri_id,name,gender,age,edu,caste,up_profile,rasi,star,city,dob FROM registerfree WHERE id<>'0' " . $cond ." order by id desc" ;   

             $res = mysql_query($sql);

             if(mysql_num_rows($res)>0)
             {
                // $name= $row["stud_name"];
               while($row=mysql_fetch_assoc($res))
               {  
                ?>
                <tr>
                  <td>
                    <div class="col-md-12 box box3 shadow3 wow fadeInDown animated animated" style="visibility: visible;
                    animation-name: fadeInLeft;    font-weight: 700; width:100%;">

                    <div class="col-md-12 col-sm-12 divborder1" style="border-bottom: 1px solid black;">
                     <div class="row  divborder1">
                       <div class="col-md-4 col-sm-9 divborder1 textstyle">Reg No:<b><?php echo  $row['matri_id'];?></b></div>
                     </div>
                   </div>

                   <div style="padding-top: 30px;">
                     <div class="col-md-3">
                      <img src="<?php //echo $row['up_profile']; ?>" style="border: 3px solid #9b0000;
                      width: 150px;
                      height: 150px;">
                    </div>
                  </div>

                  <div class="col-md-9 col-sm-12 divborder1">
                    <!-- Name -->
                    <div class="row  divborder1">
                     <div class="col-md-5 col-sm-3 divborder1 headstyle">Name</div>
                     <div class="col-md-2 col-sm-6 divborder1">:</div>
                     <div class="col-md-5 col-sm-9 divborder1 textstyle"><?php echo  $row['name'];?></div>
                   </div>   
                   <!-- Age -->
                   <div class="row  divborder1">
                     <div class="col-md-5 col-sm-3 divborder1 headstyle">Age</div>
                     <div class="col-md-2 col-sm-6 divborder1">:</div>
                     <div class="col-md-5 col-sm-9 divborder1 textstyle"><?php 
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
                <!-- Qualification -->
                <div class="row  divborder1">
                 <div class="col-md-5 col-sm-3 divborder1 headstyle">Qualification</div>

                 <div class="col-md-2 col-sm-6 divborder1">:</div>
                 <div class="col-md-5 col-sm-9 divborder1 textstyle"><?php echo  $row['edu'];?></div>
               </div>
               <!-- Raasi -->
               <div class="row  divborder1">
                <div class="col-md-5 col-sm-3 divborder1 headstyle">Rasi</div>
                <div class="col-md-2 col-sm-6 divborder1">:</div>
                <div class="col-md-5 col-sm-9 divborder1 textstyle"><?php echo  $row['rasi'];?></div>
              </div>
              <!-- Star -->
              <div class="row  divborder1">
                <div class="col-md-5 col-sm-3 divborder1 headstyle">Star</div>
                <div class="col-md-2 col-sm-6 divborder1">:</div>
                <div class="col-md-5 col-sm-9 divborder1 textstyle"><?php echo  $row['star'];?></div>
              </div>
              <!-- City -->
              <div class="row  divborder1">
               <div class="col-md-5 col-sm-3 divborder1 headstyle">City</div>
               <div class="col-md-2 col-sm-6 divborder1">:</div>
               <div class="col-md-5 col-sm-9 divborder1 textstyle"><?php echo  $row['city'];?></div>
             </div>                                       
             <!-- View Button -->
             <div class="row  divborder1" style="padding-top: 10px;text-align: right;">
              <div class="col-md-12 col-sm-12 divborder1">
                <a href="online_payment.php" class="btn btn-primary" style="font-size: 20px">View Profile >></a>
              </div>
            </div>

          </div>

        </div></td></tr>
        <?php 
      }
    }  
    ?>
  </div>
</div>
</form>


</div>
</table>
</div>
</div>
</div>
</div>

</div>    

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

 <!-- Start datatable js -->
   <script src="assets/js/jquery.dataTables.min.js"></script> 
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>


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



</body>

</html>