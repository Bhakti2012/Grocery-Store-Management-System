<?php
	include("connect.php");
    $sql = "SELECT `Item_name` FROM `grocerytb` GROUP BY `Item_name` ORDER BY `Item_name`;";
    $query=mysqli_query($con,$sql);
    $item_name=["iname"];
    

?>
<html>

<head>
	<meta http-equiv="Content-Type"
		content="text/html; charset=UTF-8">

	<title>View card</title>

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<link rel="stylesheet"
		href="css/style.css">
</head>

<body>
<form method="post">
<div class="row mt-4">
			<?php
				while ($qq=mysqli_fetch_array($query))
				{
			?>
                <div class="col-lg-4">
				<div class="card" >
				<div class="card-body">
				<h5 class="card-title">
                <!-- <a href="a.php?ain='".$item_name."'" ?> -->

                <a href="a.php?ain=<?php echo $qq['Item_name']; ?>">
							<!-- <?php
                            // $ain=$qq['Item_name'];?>
                -->
							
							<?php echo $qq['Item_name']; ?>
						</a>
                        </div>
				</div><br>
			</div>
         <?php                  
			}
			?>

          