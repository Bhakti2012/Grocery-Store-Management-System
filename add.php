<a href="index.php"><img src="img/back.png"  width=40 height=50/></a>

<html>

<head>
	<meta http-equiv="Content-Type"
		content="text/html; charset=UTF-8">

	<title>Add List</title>

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container mt-5">
		<h1>Add Grocery List</h1>
		<form action="add.php" method="POST">
			<div class="form-group">
				<label>Item name</label>
				<input type="text" class="form-control" placeholder="Item name" name="iname" autocomplete="off"/>
			</div>

			<div class="form-group">
				<label>Item quantity</label>
				<input type="text"
					class="form-control"
					placeholder="Item quantity" 
					name="iqty" />
			</div>

			<div class="form-group">
				<label>Item status</label>
				<select class="form-control"
					name="istatus">
					<option value="1">
						BOUGHT
					</option>
					<option value="2">
						NOT AVAILABLE
					</option>
				</select>
			</div>
			<div class="form-group">
				<label>Date</label>
				<input type="date"
					class="form-control"
					placeholder="Date"
					name="idate">
			</div>
			<div class="form-group">
				<input type="submit"
					value="Add"
					class="btn btn-danger"
					name="submit">
			</div>
		</form>
	</div>

	<?php
		if(isset($_POST["submit"])) {
			include("connect.php");
			$item_name=$_POST['iname'];
			$item_qty=$_POST['iqty'];
			$item_status=$_POST['istatus'];
			$date=$_POST['idate'];
	

			$q="insert into grocerytb(Item_name,Item_Quantity,Item_status,Date) values('$item_name',$item_qty,
			'$item_status','$date')";
			$res=mysqli_query($con,$q);
			

			if($res){
				echo '<script language="javascript">';
				 echo 'alert("Data added")';
				echo '</script>';
				header("location:index.php");
			}
			else{
				die(msqli_error($con));
			}

			

		// 	$q = "SELECT * FROM grocerytb WHERE Id='".$_GET['id']."'";
		// $query=mysqli_query($con,$q);
		// $res= mysqli_fetch_array($query);
			
		// 	if($_POST['iname']==$res['Item_name'] and  $_POST['idate']==$res['Date']){
		// 		echo"updated";
		// 	$q1="insert into grocerytb(Item_Quantity) values('$item_qty'+$_POST[iqty])";
		// 	mysqli_query($con,$q1);
		// 	}
		    
		// 	else{
		// 	$q="insert into grocerytb(Item_name,Item_Quantity,Item_status,Date) values('$item_name',$item_qty,
		// 	'$item_status','$date')";
				
		}
		
		
		
	
	?>
</body>

</html>
