<?php
 if(isset($_POST['submit']))
 {
  define('id', 'jack');
  define('password', 'sparrow');



   $id=$_POST['id'];
   $password=$_POST['password'];

  if($id==id && $password==password )
  {
    header("refresh: 1;url=welcome.php");
  }
  else {
     echo"OHHHH !!! ENTER PROPER KEY...... ";
     header("refresh: 2;url=home.php");
  }     
}
?>  
