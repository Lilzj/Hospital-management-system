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
	<link rel="stylesheet" href="css/awesome/css/font-awesome.min.css">
	<style type="text/css">
	*{
		box-sizing: border-box;
	}
		table.ta{
			border-collapse: collapse;
			margin: auto;
		}
		table.ta td{
	background-color: #fff;

}
table.ta th{
	/*padding: 5px 2px;*/
	font-weight: bold;
	text-transform: uppercase;
}
	</style>
</head>
<body>

<div class="main search">
	<div class="nav">
		<ul>
			<li><a href="addnurse.php">Add Nurse</a></li>
			<li class="current"><a href="viewnurse.php">View Nurse</a></li>	
			<li><a href="searchnurse.php">Search Nurse</a></li>
		</ul>
	</div>
	<div class="header">
		<h1>View Nurse</h1>
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
			<i class="fa fa-user-plus"></i>
		</div>

		<div class="line view"></div>


<?php

// To view details from database 

	$result = mysqli_query($db, "SELECT * FROM nurse_reg");
	if (mysqli_num_rows($result) >= 1) {

		echo '<table class="ta" border="1">';

		echo '<tr class="data-heading">
				<th>id</th>
				<th>first_name</th>
				<th>last_name</th>
				<th>age</th>
				<th>qualification</th>
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
				<form method="POST" action="viewnurse.php">
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
			<th><a href="updateNurse.php?nurse_id='.$id.'"><button type="button" id="update" style="cursor: pointer;">Update</button></a></th>
			<input type="hidden" value='.$id.' name="nurse_id">
			<th><button type="submit" name="delete" style="cursor: pointer; text-transform: uppercase;" >Delete</button></th>

			</tr>
			</form>';
		
			} echo '</table>';
		}else{
			echo "<h1 style='text-align: center;'>Sorry! No Records Found in Database</h1>";
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


?>
		
</div>


</body>
</html>