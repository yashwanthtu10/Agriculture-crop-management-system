<?php
$email=$_POST['email'];
$password=$_POST['password'];
session_start();

$con=mysqli_connect("localhost","root","","acms");
$result=mysqli_query($con,"SELECT * FROM `register` WHERE `email`='$email' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	echo "Login success";
	header("refresh:2;url=welcome.php");

}
else
{
	echo "please fill proper details";
	header("refresh:2;url=log.php");
}


?>