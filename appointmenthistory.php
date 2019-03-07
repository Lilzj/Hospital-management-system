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
<div class="main patient app">
	<div class="nav">
		<ul>
			<li class="current"><a href="appointmenthistory.php">Appointment History</a></li>
			<li><a href="docviewpatient.php">View Patient</a></li>	
			<li class="right"><a href="docsearchpatient.php">Search Patient</a></li>
		</ul>
	</div>
	<div class="header">
		<h1>Appointment History</h1>
			<div class="out">
				<a href="doctorlogin.php"><i class="fa fa-power-off"></i>
				<h2>Logout</h2></a>
			</div>
			<div class="home">
				<a href="doctorportal.php"><i class="fa fa-home"></i>
				<h2>Home</h2></a>
			</div>

	</div>
		<div class="doc app">
			<i class="fa fa-calendar"></i>
		</div>

		<div class="line"></div>
<?php

$db = mysqli_connect('localhost', 'root', 'lilzjosh', 'add_patient');

$result = mysqli_query($db, "SELECT * FROM appointment JOIN add_patient ON appointment.patient_name = add_patient.patient_id");
$stmt = mysqli_query($db, "SELECT * FROM appointment JOIN doctor_reg ON appointment.doctor_name = doctor_reg.doctor_id");
	if ((mysqli_num_rows($result) >= 1) && (mysqli_num_rows($stmt) >= 1)) {
		echo '<table class="table" border="1">';
		echo '<tr class="data-heading">
				<th>id</th>
				<th>Patient Name</th>
				<th>Doctor Name</th>
				<th>Appointment Date</th>
				<th>Appointment Time</th>
				<th>Description</th>
				<th>Creation Date</th>
				<th>Status</th>
				<th colspan = "2">Action</th>
				</tr>';

		while (($row = mysqli_fetch_assoc($result)) && ($st_row = mysqli_fetch_assoc($stmt))){
				$id = $row["id"];
				$patientName = $row['first_name'].' '.$row['last_name'];
				$doctorName = $st_row['first_name'].' '.$st_row['last_name'];

				

				

			echo '
				<form method="POST" action="appointmenthistory.php">
			<tr>

			<td>'.$row["id"].'</td>
			<td style="text-transform:capitalize">'.$patientName.'</td>
			<td style="text-transform:capitalize">'.$doctorName.'</td>
			<td>'.$row["app_date"].'</td>
			<td>'.$row["app_time"].'</td>
			<td style="text-transform:capitalize">'.$row["description"].'</td>
			<td>'.$row["creation_date"].'</td>
			<td style="text-transform:capitalize"><span id="status">'.$row["status"].'</span></td>
			<th><button type="submit" onclick="senD()" name="accept" style="cursor: pointer; text-transform: uppercase;">Accept</button></th>
			<input type="hidden" value='.$id.' name="id">
			<th><button type="submit" name="reject" style="cursor: pointer; text-transform: uppercase;">Reject</button></th>

			</tr>
			</form>';
		
			} echo '</table>';
		}else{
			echo "<h1 style='text-align: center;'>Sorry! No Records Found in Database</h1>";
		}


if (isset($_POST['accept'])) {
	$a_id = $_POST['id'];
	$querys = "UPDATE appointment 
			  SET 
			  status = '<b>APPROVED</b>'
			  WHERE id = $a_id ";
	$users = mysqli_query($db, $querys);
	if($users){
		echo "<h1 style='text-align: center;'>Appointment Approved Successfully</h1>";
		
	}else{
		echo "Error";
	}
}

if (isset($_POST['reject'])) {
	$r_id = $_POST['id'];
	$r_querys = "UPDATE appointment 
			  SET 
			  status = '<b>DECLINE</b>'
			  WHERE id = $r_id ";
	$r_users = mysqli_query($db, $r_querys);
	if($r_users){
		echo "<h1 style='text-align: center;'>Appointment Decline</h1>";
		
	}else{
		echo "Error";
	}
}




?>
</div>
<!-- <script type="text/javascript">

	function senD(){
		alert('Send Approved Notification to Patient?');
			alert('Notification sent Successfully');
	}
</script> -->
</body>
</html>