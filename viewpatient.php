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
			<li><a href="appointment.php">Book Appointment</a></li>
			<li><a href="addpatient.php">Add Patient</a></li>
			<li class="current"><a href="viewpatient.php">View Patient</a></li>	
			<li><a href="searchpatient.php">Search Patient</a></li>
		</ul>
	</div>
	<div class="header">
		<h1>View Patients</h1>
			<div class="out">
				<a href="nurselogin.php"><i class="fa fa-power-off"></i>
				<h2>Logout</h2></a>
			</div>
			<div class="home">
				<a href="nurseportal.php"><i class="fa fa-home"></i>
				<h2>Home</h2></a>
			</div>
	</div>
		<div class="doc">
			<i class="fa fa-bed"></i>
		</div>

		<div class="line view"></div>


<?php

// To view details from database 

	$result = mysqli_query($db, "SELECT * FROM add_patient");
	if (mysqli_num_rows($result) >= 1) {
		echo '<table class="table" border="1">';
		echo '<tr class="data-heading">
				<th>id</th><th>first_name</th><th>last_name</th><th>age</th><th>occupation</th><th>gender</th><th>address</th><th>adm_date</th><th>adm_time</th><th>marital_status</th><th>phone_no</th><th>symptoms</th><th>diagnosis</th><th>update</th><th>delete</th></tr>';

		while ($row = mysqli_fetch_assoc($result)){
				$id = $row["patient_id"];

			echo '
				<form method="POST" action="viewpatient.php">
			<tr>

			<td>'.$row["patient_id"].'</td>
			<td>'.$row["first_name"].'</td>
			<td>'.$row["last_name"].'</td>
			<td>'.$row["age"].'</td>
			<td>'.$row["occupation"].'</td>
			<td>'.$row["gender"].'</td>
			<td>'.$row["address"].'</td>
			<td>'.$row["adm_date"].'</td>
			<td>'.$row["adm_time"].'</td>
			<td>'.$row["marital_status"].'</td>
			<td>'.$row["phone_no"].'</td>
			<td>'.$row["symptoms"].'</td>
			<td>'.$row["diagnosis"].'</td>
			<th><a href="updatePatientProcess.php?patient_id='.$id.'"><button type="button" id="update" style="cursor: pointer;">Update</button></a></th>
			<input type="hidden" value='.$id.' name="patient_id">
			<th><button type="submit" name="delete" style="cursor: pointer;">Delete</button></th>

			</tr>
			</form>';
		
			} echo '</table>';
		}else{
			echo "<h1 style='text-align: center;'>Sorry! No Records Found in Database</h1>";
		}


if (isset($_POST['delete'])) {
	$id = $_POST['patient_id'];
	$query = "DELETE FROM add_patient WHERE patient_id = $id ";
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