<?php
 if(isset($_POST['submit'])){
   $cropname=$_POST['cropname'];
    $soiltype=$_POST['soiltype'];
     $duration=$_POST['duration'];
      $fertilizer=$_POST['fertilizer'];
       $insecticide=$_POST['insecticide'];
  
   $dbconnect=mysqli_connect('localhost','root','','acms');
    $sql= mysqli_query ($dbconnect, "insert into crop_details(slno,cropname,soiltype,duration,fertilizer,insecticide) values( '','$cropname','$soiltype','$duration','$fertilizer','$insecticide')");
   	if($sql ){
   		echo" ...THANKYOU FOR  YOUR INFORMATION ...";

      header("refresh: 2;url=welcome.php");

      
   	}
  else {
  	 echo"fail to insert ";
     header("refresh: 2;url=insert.php");
  }   	
}
?> 