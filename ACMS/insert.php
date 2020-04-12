<?php
 if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $gender=$_POST['gender'];

   $dbconnect=mysqli_connect('localhost','root','','acms');
    $sql= mysqli_query ($dbconnect, "insert into register(slno,name,phone,email,password,gender) values( '','$name','$phone','$email','$password','$gender')");
   	if($sql ){
   		echo" ...THANKYOU FOR  YOUR INFORMATION ...";
      header("refresh: 2;url=log.php");

      
   	}
  else {
  	 echo"fail to insert ";
     header("refresh: 2;url=insert.php");
  }   	
}
?>  
