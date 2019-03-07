<?php

// connecting to the database
$db = mysqli_connect('localhost', 'root', 'lilzjosh', 'add_patient');

if (isset($_POST['create'])) {
		$p_name = mysqli_real_escape_string($db, $_POST['pName']);
		$d_name = mysqli_real_escape_string($db, $_POST['dName']);
		$app_date = mysqli_real_escape_string($db, $_POST['aDate']);
		$app_time = mysqli_real_escape_string($db, $_POST['aTime']);
		$app_desc = mysqli_real_escape_string($db, $_POST['adescrip']);
		$app_stat = '<b>PENDING</b>';

		$query = "INSERT INTO appointment (patient_name, doctor_name, app_date, app_time, description, creation_date, status)
				VALUES ('$p_name', '$d_name', '$app_date', '$app_time', '$app_desc', now(), '$app_stat')";

	
	if (mysqli_query($db, $query)) {
		
		header('location: nurseappointmenthistory.php');
	}
	
}

$query2 = "SELECT * FROM add_patient";
$result = mysqli_query($db, $query2);

$query3 = "SELECT * FROM doctor_reg";
$result2 = mysqli_query($db, $query3);
?>



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

</head>
<body>
<div class="main patient app">
	<div class="nav">
		<ul>
			<li class="current"><a href="appointment.php">Book Appointment</a></li>
			<li><a href="addpatient.php">Add Patient</a></li>
			<li><a href="viewpatient.php">View Patient</a></li>	
			<li class="right"><a href="searchpatient.php">Search Patient</a></li>
		</ul>
	</div>
	<div class="header">
		<h1>Book Appointment</h1>
			<div class="out">
				<a href="nurselogin.php"><i class="fa fa-power-off"></i>
				<h2>Logout</h2></a>
			</div>
			<div class="home">
				<a href="nurseportal.php"><i class="fa fa-home"></i>
				<h2>Home</h2></a>
			</div>
			<div class="home">
				<a href="nurseappointmenthistory.php"><i class="fa fa-calendar"></i>
				<h2>Appointments</h2></a>
			</div>
	</div>
		<div class="doc app">
			<i class="fa fa-calendar"></i>
		</div>

		<div class="line"></div>

		<div class="app-form">
			<form method="POST" action="appointment.php">
				<fieldset>
					<legend>Patient Name</legend>
					<select name="pName">
						<?php 
							while ($row = mysqli_fetch_assoc($result)){ 
								echo "<option value="
									.$row['patient_id'].">" 
								    .$row['first_name']." "
								    .$row['last_name']." 
									</option>"
									;
							}
						?>
					</select>
				</fieldset>
				<fieldset>
					<legend>Doctor Name</legend>
					<select name="dName">
						<?php
							while ($row2 = mysqli_fetch_assoc($result2)){
								echo "<option value="
									.$row2['doctor_id'].">"
									.$row2['first_name']." "
									.$row2['last_name']." 
									</option>"
									;
							}

					    ?>
					</select>
				</fieldset>
				<fieldset>
					<legend>Appointment Date/Time</legend>
						<input type="date" name="aDate" style="margin-right: 50px; height: 25px; border-radius: 7px;">
						<input type="time" name="aTime" style=" height: 25px; border-radius: 7px;">
				</fieldset>
				<fieldset>
					<legend>Description</legend>
					<textarea name="adescrip" style="resize: none; width: 450px; height: 100px; border-radius: 7px;"></textarea>
				</fieldset>

				<div class="creat">
						<input type="submit" name="create" placeholder="SEND">
           			<input type="reset" name="reset" placeholder="RESET">
				</div>
			</form>
			<?phpif (mysqli_query($db, $query)) {
		
		echo "Appointment Created Successfully";
	}else{
		echo "Error: ".mysqli_error($db);
	}?>
		</div>
</div>
</body>
</html>