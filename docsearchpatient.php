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
			<li><a href="appointmenthistory.php">Appointment History</a></li>
			<li><a href="docviewpatient.php">View Patient</a></li>	
			<li class="current right"><a href="docsearchpatient.php">Search Patient</a></li>
		</ul>
	</div>
	<div class="header">
		<h1>Search Patient</h1>
			<div class="out">
				<a href="doctorlogin.php"><i class="fa fa-power-off"></i>
				<h2>Logout</h2></a>
			</div>
			<div class="home">
				<a href="doctorportal.php"><i class="fa fa-home"></i>
				<h2>Home</h2></a>
			</div>
	</div>
		<div class="doc">
			<i class="fa fa-bed"></i>
		</div>

		<div class="doc-form patient search">
			<form method="post" action="docsearchpatient.php">
				<div class="form1">
					<div class="id search">
					<label>Patient Name</label>
				<input type="text" name="search_names">
				    </div>
				    <div class="search">
				    	<button type="submit" name="search1">Search</button>
				    </div>
				</div>
		    </form>	
		</div>	
		<div class="line"></div>



<?php
// $db = mysqli_connect('localhost', 'root', 'lilzjosh', 'add_patient');

// To search details from database 
if (isset($_POST['search1'])) {
	
	$searchi = trim($_POST['search_names']);
	if (empty($searchi)) {
		echo "<h1 style='text-align: center;'>Please, Enter a Name to Search</h1>";
	}elseif (!empty($searchi)) {
	$valu = "SELECT * FROM add_patient WHERE first_name LIKE '%$searchi%' OR last_name LIKE '%$searchi%'";
	$resut = mysqli_query($db, $valu);
if (mysqli_num_rows($resut) >= 1) {
	echo '<table class="table" border="1">';
	echo '<tr class="data-heading">
			<th>id</th><th>first_name</th><th>last_name</th><th>age</th><th>occupation</th><th>gender</th><th>address</th><th>adm_date</th><th>adm_time</th><th>marital_status</th><th>phone_no</th><th>symptoms</th><th>diagnosis</th><th>update</th></tr>';
	

	while ($row = mysqli_fetch_assoc($resut)){
		$id = $row["patient_id"];

		echo '
		<form method="POST" action="docsearchpatient.php">
			<tr>
				<td>'.$id.'</td>
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
				
			</tr>
		</form>';
	}
	echo '</table>';
}else{
	echo "<h1 style='text-align: center;'>Sorry! User do not Exist</h1>";
}
	
}
}


?>

</div>
</body>
</html>