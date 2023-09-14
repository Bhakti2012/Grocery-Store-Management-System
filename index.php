<a href="table.php">Go to Table</a> 
<a href="link.php">card view</a>

<?php
	include 'connect.php';

	if (isset($_POST['filter'])) 
	{
		$date=$_POST['idate'];
		$q="select * from grocerytb where Date='$date'";
		$query=mysqli_query($con,$q);

	}
	else {
		$q= "select * from grocerytb";
		$query=mysqli_query($con,$q);


		// echo '<script language="javascript">';
        //     echo 'alert("PLEASE ENTER DATE")';
        //     echo '</script>';
		
	}
?>
<html>

<head>
	<meta http-equiv="Content-Type"
		content="text/html; charset=UTF-8">

	<title>View List</title>

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<link rel="stylesheet"
		href="css/style.css">
</head>

<body>
	<div class="container mt-5">
		
		<!-- top -->
		<div class="row">
			<div class="col-lg-8">
				<h1>View Grocery List</h1>
				<div class="container my-3">
					<button class="btn btn-primary"><a href="add.php" class="text-light">Add Item</a></button></div>

				</div>
				<div class="col-lg-4">
				<div class="row">
					<div class="col-lg-8">

			
						
						<!-- Date Filtering-->
						<form method="post" action="">
							<input type="date"
								class="form-control"
								name="idate">
						
							<div class="col-lg-4"
								method="post">
								<input type="submit"
								class="btn btn-danger float-right"
								name="filter" value="filter">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Grocery Cards -->
		<div class="row mt-4">
			<?php
				while ($qq=mysqli_fetch_array($query))
				{
			?>

			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">
							<?php echo $qq['Item_name']; ?> <br>
							<?php echo $qq['Date']; ?>
						</h5>
						<h6 class="card-subtitle mb-2 text-muted">
							<?php echo
							$qq['Item_Quantity']; ?>
						</h6>
						<?php
						if($qq['Item_status'] == 0) {
						?>
						<p class="text-info">PENDING</p>

						<?php
						} else if($qq['Item_status'] == 1) {
						?>
						<p class="text-success">BOUGHT</p>

						<?php } else { ?>
						<p class="text-danger">NOT AVAILABLE</p>

						<?php } ?>
						<a href=
						"delete.php?id=<?php echo $qq['id']; ?>"
							class="card-link">
							Delete
						</a>

						<a href="update.php?id=<?php echo $qq['id']; ?>"
							class="card-link">
							Update
						</a>

					</div>
				</div><br>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</body>

</html>



