<?php
	include("connect.php");
    
     $sql1 = SELECT SUM(Item_Quantity),`Item_name`, `Date` FROM `grocerytb` WHERE Item_status='1'and Item_name='egg' GROUP BY `date`;
     
     
      //echo $sql1;
    //$sql1 = "SELECT * FROM `grocerydb`.`grocerytb` WHERE `Item_name` = 'egg';";   
   $query=mysqli_query($con,$sql1);
    
    
?>
<!DOCTYPE html>
<html>
   <head>
   <style>
table, th, td {
  border: 2px solid black;
}
</style>

<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FORM</title>
</head>
    <body>
        <center>
       <table>
                <tr>
                <th>Item_name</th>
                <th>item_quantity</th>
                <th>status</th>
                <th>Date</th>
                
                </tr>

                <?php while($rows = mysqli_fetch_array($query)):?>
                <tr>
                    <td><?php echo $rows['Item_name'];?></td>
                <td><?php echo $rows['Item_Quantity'];?></td>
                <td>
                        <?php
						if($rows['Item_status'] == 1) {
						?>
						<p class="text-success">SOLD</p>
						<?php } else { ?>
						<p class="text-danger">NOT AVAILABLE</p>
						<?php } ?>

                        </td>

                <td><?php echo $rows['Date'];?></td>
              
                </tr>
                <?php endwhile;?>
            </table>

           
           
        </center>
    </body>
</html>

