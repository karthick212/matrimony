<?php
include ('conn.php');
if(isset($_GET['fid']))
        {
          $fid=$_GET['fid'];
          $tid=$_GET['tid'];
//echo $fid;
//echo $tid;

        }
        //echo $id;
        $sql1="SELECT * FROM registerfree WHERE matri_id = '$tid'";
 $res1 = mysql_query($sql1);
$row = mysql_fetch_assoc($res1);

$email=$row['email'];
$name=$row['name'];

$mobile=$row['mobile'];

$sql2="SELECT * FROM registerfree WHERE matri_id = '$fid'";
 $res2 = mysql_query($sql2);
$row1 = mysql_fetch_assoc($res2);

$email1=$row1['email'];

$name1=$row1['name'];

//$mobile1=$row1['mobile'];

    $from = 'Inaikkum Karangal Contact Mailer <web@http://inaikkumkarangalmatrimony.in/>'."\r\n" .'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion(); 
  $to = "info@inaikkumkarangal.in,santhoshini.zeronecorps@gmail.com,$email1,$email"; 
      //$to = "rajabasheer.94@gmail.com"; 
      
      $message = '<html><body>';
$message .= '<table rules="all" border="1" width="700" style="border-color: #666;" cellpadding="10">';
$message .= "<tr><td colspan='4' align='center'><img src='http://inaikkumkarangal.in/images/LOGOss.png'></td></tr>";
$message .= "<tr style='background: #da1e13;'><td colspan='4' align='center' style='color: white;'><strong>User Contact Details</strong> </td></tr>";

$message .= "<tr><td><strong> Name: </strong></td><td colspan='3'>" . $name. "</td></tr>";
$message .= "<tr><td><strong>User_id:</strong> </td><td colspan='3'>" . $fid  . "</td></tr>";

//$message .= "<tr><td><strong>Mobile Number:</strong> </td><td colspan='3'>" . $mobile . "</td></tr>";
//$message .= "<tr><td><strong>Mail:</strong> </td><td colspan='3'>" . $email . "</td></tr>";
$message .= "<tr><td><strong>Express interest id:</strong> </td><td colspan='3'>" . $tid . "</td></tr>";
$message .= "<tr><td><strong>Interest Name:</strong> </td><td colspan='3'>" . $name1 . "</td></tr>";
//$message .= "<tr><td><strong>Account No:</strong> </td><td colspan='3'>" . $acc . "</td></tr>";
//$message .= "<tr><td><strong>Amount:</strong> </td><td colspan='3'>" . $amount . "</td></tr>";
//$message .= "<tr><td><strong>Receipt Photo:</strong> </td><td colspan='3'>" . $upload . "</td></tr>";

 $subject = 'Contact Details';

      $headers = "From: " . $from . "\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   if(mail($to, $subject, $message, $headers)) {
            echo "<script>
alert('Contact will be send to your mail...!');
window.location.href='profiles.php';
</script>";
            } else {
           echo "<script>
alert('Some problem occur in sending mail...Please try again');
window.location.href='profiles.php';
</script>";   
            }
           
    
          
          
   
