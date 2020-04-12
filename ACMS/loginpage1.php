<?php
 if(isset($_POST['submit']))
 {
  define('id', 'jack');
  define('password', 'sparrow');



   $id=$_POST['id'];
   $password=$_POST['password'];

  if($id==id && $password==password )
  {
     echo "...YOU CAN ACCESS THIS TABLES...";
    header("refresh: 2;url=display.php");
  }
  else {
     echo"OHHHH !!! SHIT ENTER PROPER KEY...... ";
     header("refresh: 2;url=welcome.php");
  }     
}
?>  
