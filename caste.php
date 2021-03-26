<?php
include 'conn.php';

if($_POST['id'])
{
$id=$_POST['id'];
//echo $id;

                    
   $sql6="SELECT caste FROM registerfree where religion='$id' group by caste"; 
   
   $res6=mysql_query($sql6);
   ?>
           
           <?php
 echo '<option value="">Select caste</option>';
 echo "vghjg";
                 while($row=mysql_fetch_assoc($res6))
                 {  
                 //  $s_id= $row["staff_id"];
                 	
                  echo $row['caste'];
                  echo '<option value="'.$row['caste'].'">'.$row['caste'].'</option>';

   

               }
                  


}

if(isset($_POST['matri_id']))
{
	$matri_id= $_POST['matri_id'];
	$sql4="SELECT * FROM interest WHERE matri_id='$matri_id'";
    	//echo $sql4;
    	$res4=mysql_query($sql4);

   		
   		if(mysql_num_rows($res4)>0)
   		{
   			
   			$row4=mysql_fetch_assoc($res4);
   			$int_id=$row4['interest_id'];
   			$tot=$row4['total_id'];
   			$ids =$int_id.','.$fid;
   			
   			$t=$tot+1;
   			
   			$sql5="UPDATE interest SET interest_id='$ids',total_id='$t' WHERE matri_id='$matri_id'";
   			$res5=mysql_query($sql5);
   			echo 'Totally you have seen '.$t.' Ids';
   			





   		}

   	

 else

             {

   	$sql3="INSERT INTO interest (name,interest_id,total_id,matri_id) VALUES ('$name','$fid','1','$matri_id') ";
   	$result=mysql_query($sql3);
   	
            	
            }
           
    
          
         }
   
   

	// $sql5="UPDATE interest SET total_id='$t' WHERE matri_id='$matri_id'";
 //   			$res5=mysql_query($sql5);
 //   			if($res5)
 //   			{
 //   				 $sql7="SELECT * FROM interest where matri_id='$matri_id'";
 //   				 $res7=mysql_query($sql7);
 //   				 $row=mysql_fetch_assoc($res7);
 //   				 echo $row['total_id'];

 //   			}


                    ?>
