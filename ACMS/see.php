
<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    
    $query = "SELECT * FROM `crop_details` WHERE  CONCAT(`slno`, `cropname`, `soiltype`, `duration`,'fertilizer','insecticide') LIKE '%".$valueToSearch."%'";
    
}
 else {
    $query = "SELECT * FROM `crop_details`";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "acms");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                 ;
            }
        </style>
    </head>
    <body background="see.jpg">
        
       
            <table width="700" height="1050" background="22.jpg" align="center">
                <tr>
                    <p> <u><i><b><font color="white"><h2><center>AVAILABLE  CROPS</p></b></i></u></center></h2>
                    <th>Slno</th>
                    <th>Cropname</th>
                    <th>Soiltype</th>
                    <th>Duration</th>
                    <th>Fertilizer</th>
                    <th>Insecticide</th>

                </tr>

      
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['slno'];?></td>
                    <td><?php echo $row['cropname'];?></td>
                    <td><?php echo $row['soiltype'];?></td>
                    <td><?php echo $row['duration'];?></td>
                    <td><?php echo $row['fertilizer'];?></td>
                    <td><?php echo $row['insecticide'];?></td>
                </tr>
                </tr>
                <?php endwhile;?>
            </table>`
        </form>
        
    </body>
</html>