<?php
		$username = "";
		$email = "";
		$error = array();

// connecting to the database
	$db = mysqli_connect('localhost', 'root', 'lilzjosh', 'add_patient');

if (isset($_POST['update'])) {
       	$id = $_POST['patient_id'];
        $fname =  $_POST['fname'];
		$lname =  $_POST['lname'];
		$age =  $_POST['age'];
		$gender =  $_POST['gender'];
		$address =  $_POST['address'];
		$mstatus =  $_POST['status'];
		$phone = $_POST['phone'];
		$adm_date = $_POST['admd'];
		$adm_time = $_POST['admt'];
		$symp = $_POST['symp'];
		$diag = $_POST['diag'];
		$occupation = $_POST['occupation'];
		$preview = $_POST['preview'];


		$result = "UPDATE add_patient 
				   SET 
					  first_name = '$fname', 	
					  last_name ='$lname', 
					  age = '$age', 
					  occupation = '$occupation', 
					  gender = '$gender', 
					  address = '$address', 
					  adm_date = '$adm_date', 
					  adm_time = '$adm_time', 
					  marital_status =  '$mstatus', 
					  phone_no = '$phone', 
					  symptoms = '$symp', 
					  diagnosis = '$diag',
					  photo = '$preview'
				   WHERE 
				   	  patient_id = '$id'
				   ";

		
		if(mysqli_query($db, $result) == TRUE)
		{

			header('location: viewpatient.php');
		}
}

?>