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
</head>
<body>

<div class="body">
	<div class="nurse-portal">
		<h1>Doctor Portal</h1>
	</div>


	<div class="view-patient">
		<a href="docviewpatient.php"><h1>View Patient</h1></a>	
	</div>

	<div class="search-patient">
		<a href="docsearchpatient.php"><h1>Search Patient</h1></a>
	</div>
	<div>
		<input type="hidden" name="check" value="doctor">
	</div>

	<div class="appointment">
		<a href="appointmenthistory.php"><h1>Appointments</h1></a>
	</div>

	<div class="logout">
		<a href="doctorlogin.php"><h2>logout</h2></a>
	</div>
</div>
</body>
</html>