
           
           <a href="index.php">HOME</a>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> Details</title>

</head>
<body>

	<form  class="background" align= 'center' action="table.php" method="post">

            <input type="text"  class="ip" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input class="button" type="submit" name="search" value="Filter"><br><br>

    </form>
</body>
</html>
<?php

include 'connect.php';

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
   
    $query = "SELECT * FROM grocerytb WHERE CONCAT(item_name, item_quantity, item_status, date) LIKE '%".$valueToSearch."%' ";
    $search_result = filterTable($query);}
 else {
    $query = "SELECT * FROM grocerytb";
    $search_result = filterTable($query);}

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "grocerydb");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
    $sql = "SELECT COUNT(*) AS `Rows`, `Item_name` FROM `grocerytb` GROUP BY `Item_name` ORDER BY `Item_name`;";


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
                <th>Delete</th>
                <th>Update</th>
                </tr>

                <?php while($rows = mysqli_fetch_array($search_result)):?>
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
                
                <td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $rows['id']; ?>"class="text-light">delete</a></button></td>

                <td><button class="btn btn-primary"><a href="update.php?id=<?php echo $rows['id']; ?>"class="text-light">update </a></button> </td>
               
                </tr>
                <?php endwhile;?>
            </table>

           
           
        </center>
    </body>
</html>
