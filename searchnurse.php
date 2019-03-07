<?php include('server.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Patient Information Tracking System">
    <meta name="description" content="Computerized Patient Information Tracking System is a system that is implemented to replace the manual system in keeping patient records in the hospital">
    <meta name="keywords" content="Hospital, Patient, records, Information, record-keeping, health-care, system, computer, Computerized">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>PITS</title>
	<link rel="stylesheet" type="text/css" href="css/styless.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
	<link rel="stylesheet" href="css/awesome/css/font-awesome.min.css">
	<style type="text/css">
		*{
		box-sizing: border-box;
	}
		table{
			border-collapse: collapse;
			margin: auto;
		}
		table td{
			background-color: #fff;

		}
		table th{
			padding: 5px 2px;
			font-weight: bold;
			text-transform: uppercase;
		}
	</style>
	
</head>
<body>

<div class="main search">
	<div class="nav">
		<ul>
			<li><a href="addnurse.php">Add nurse</a></li>
			<li><a href="viewnurse.php">View nurse</a></li>	
			<li class="current right"><a href="searchnurse.php">Search nurse</a></li>
		</ul>
	</div>
	<div class="header">
		<h1>Search nurse</h1>
			<div class="out">
				<a href="adminlogin.php"><i class="fa fa-power-off"></i>
				<h2>Logout</h2></a>
			</div>
			<div class="home">
				<a href="adminportal.php"><i class="fa fa-home"></i>
				<h2>Home</h2></a>
			</div>
	</div>
		<div class="doc">
			<i class="fa fa-user-md"></i>
		</div>

		<div class="doc-form patient search">
			<form method="post" action="searchnurse.php">
				<div class="form1">
					<div class="id search">
					<label>nurse Name</label>
				<input type="text" name="search_name">
				    </div>
				    <div class="search">
				    	<button type="submit" name="search">Search</button>
				    </div>
				</div>
		    </form>	
		</div>	
		<div class="line"></div>



<?php

// To search details from database 
if (isset($_POST['search'])) {
	$search = trim($_POST['search_name']);
		if (empty($search)) {
		echo "<h1 style='text-align: center;'>Please, Enter a Name to Search</h1>";
	}elseif (!empty($search)) {
		
	$value = "SELECT * FROM nurse_reg WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%'";
	$result = mysqli_query($db, $value);
if (mysqli_num_rows($result) >= 1) {
	echo '<table class="table" border="1">';

	echo '<tr class="data-heading">
				<th>id</th>
				<th>first_name</th>
				<th>last_name</th>
				<th>age</th>
				<th>specialization</th>
				<th>sex</th>
				<th>address</th>
				<th>State</th>
				<th>City</th>
				<th>marital_status</th>
				<th>phone</th>
				<th>Joining Date</th>
				<th>User</th>
				<th>Pass</th>
				<th>Email</th>
				<th colspan = "2">ACTION</th>

				</tr>';
	

	while ($row = mysqli_fetch_assoc($result)){
		$id = $row["nurse_id"];

		echo '
		<form method="POST" action="searchnurse.php">
			<tr>
			<td>'.$row["nurse_id"].'</td>
			<td>'.$row["first_name"].'</td>
			<td>'.$row["last_name"].'</td>
			<td>'.$row["age"].'</td>
			<td>'.$row["qualification"].'</td>
			<td>'.$row["gender"].'</td>
			<td>'.$row["address"].'</td>
			<td>'.$row["state"].'</td>
			<td>'.$row["city"].'</td>
			<td>'.$row["marital_status"].'</td>
			<td>'.$row["phone_no"].'</td>
			<td>'.$row["joining_date"].'</td>
			<td>'.$row["username"].'</td>
			<td>'.$row["password"].'</td>
			<td>'.$row["email"].'</td>
			<th><button type="submit" name="delete" style="cursor: pointer;">UPDATE</button></th>
			<input type="hidden" value='.$id.' name="nurse_id">
			<th><button type="submit" name="delete" style="cursor: pointer;">DELETE</button></th>
			</tr>
		</form>';
	}
	echo '</table>';
}else{
	echo "<h1 style='text-align: center;'>Sorry! User do not Exist</h1>";
}
	
}
}

if (isset($_POST['delete'])) {
	$id = $_POST['nurse_id'];
	$query = "DELETE FROM nurse_reg WHERE nurse_id = $id ";
	$user = mysqli_query($db, $query);
	if($user){
		echo "<h1 style='text-align: center;'>Deleted Successfully</h1>";
	}else{
		echo "Not Deleted";
	}
}


//re-direct to update.php


?>
	
</div>


</body>
</html>