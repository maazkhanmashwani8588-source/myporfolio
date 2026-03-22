<?php
include "config.php";

if (isset($_POST['submit'])) {
	
	$name = mysqli_real_escape_string($conn,$_POST['name']);

	if (!empty($_FILES['file']['name'])) {
		
		$filename = $_FILES['file']['name'];
		$temp_name = $_FILES['file']['tmp_name'];
		$folder = "images".$filename;

	}

	$sql = "INSERT INTO contents(name,image)VALUES('$name','$filename')";
	$result = mysqli_query($conn,$sql);
	if ($result) {
		
		header("location:add_pics.php?msg=Product added successfully.");
	}
	else{
		echo "Error".mysqli_error($conn);
	}
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Portfolio | Add</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
		}
		body{
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
			background-color: #f0f0f0;
		}
		.container{
			padding: 20px;
			background-color: lightgrey;
			border-radius: 10px;
			box-shadow: 5px 5px 15px rgba(0,0,0,0.5);
			width: 400px;
			border: 1px solid black;
		}
		form{
			display: flex;
			flex-direction: column;
			gap: 15px;
		}
		.input-box{
			display: flex;
			flex-direction: column;
			gap: 5px;
		}
		.input-box input[type="text"], 
		.input-box input[type="file"]{
			padding: 8px;
			border: 1px solid #ccc;
			border-radius: 5px;
			width: 100%;
		}
		button{
			padding: 10px;
			border: none;
			border-radius: 5px;
			background-color: red;
			color: white;
			font-weight: bold;
			cursor: pointer;
		}
		.message{
			color: green;
			font-weight: bold;
			text-align: center;
		}
	</style>
</head>
<body>

	<div class="container">
		<?php if(isset($_GET['msg'])){?> <p class='message'><?php echo  $_GET['msg'];?></p><?php }?>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="input-box">
				<input type="text" name="name" placeholder="Enter the product name" required>
			</div>
			<div class="input-box">
				<input type="file" name="file" required>
			</div>
			<button type="submit" name="submit">Add Product</button>
		</form>
	</div>

</body>
</html>