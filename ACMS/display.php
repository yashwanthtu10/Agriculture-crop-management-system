<!DOCTYPE html>
<html>
<head>
    <title>delete a row from databases</title>
</head>
<body background="del.jpg">
    <a href="welcome.php" type="button"><button style="background-color:rgb(red);:color:white;width:100px; height: 30px;"value="HOME"> HOME</button>


    <table  width="300" height="100" align="center"  bgcolor="#38d692" border="0.5">
                <tr>
                    <th>slno</th>
                    <th>cropname</th>
                    <th>soiltype</th>
                    <th>duration</th>
                    <th>fertilizer</th>
                    <th>insecticide</th>
                     <th>Delete</th>
                </tr>
  <?php
  $conn= mysqli_connect('localhost','root','');
 
   mysqli_select_db($conn,'acms');
   $sql = "SELECT * FROM `crop_details`";
   $records= mysqli_query($conn,$sql);

   while($row= mysqli_fetch_array($records))
   {

     echo "<tr>";
     echo "<td>".$row ['slno']."</td>";
     echo "<td>".$row ['cropname']."</td>";
     echo "<td>".$row ['soiltype']."</td>";
     echo "<td>".$row ['duration']."</td>";
     echo "<td>".$row ['fertilizer']."</td>";
     echo "<td>".$row ['insecticide']."</td>";
      echo "<td><a href=del.php?cropname=".$row['cropname'].">Delete</a></td>";
    
 } 

?>              
</table>
</body>
</html>