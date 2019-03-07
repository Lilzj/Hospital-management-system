<?php
		$username = "";
		$email = "";
		$error = array();

// connecting to the database
	$db = mysqli_connect('localhost', 'root', 'lilzjosh', 'add_patient');

if (isset($_POST['edit'])) {
       	$id = $_POST['nurse_id'];
        $fname =  $_POST['fname'];
		$lname =  $_POST['lname'];
		$age =  $_POST['age'];
		$spec =  $_POST['spec'];
		$gender =  $_POST['gender'];
		$address =  $_POST['address'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$status = $_POST['status'];
		$phone = $_POST['phone'];
		$date = $_POST['date'];
	    $username = $_POST['username'];
	    $password_1 = $_POST['password_1'];
	    $password_2 = $_POST['password_2'];
	    $email = $_POST['email'];



		$result = "UPDATE nurse_reg 
				   SET 
					  first_name = '$fname', 	
					  last_name ='$lname', 
					  age = '$age', 
					  qualification = '$spec', 
					  gender = '$gender', 
					  address = '$address', 
					  state = '$state', 
					  city = '$city', 
					  marital_status =  '$status', 
					  phone_no = '$phone', 
					  joining_date = '$date', 
					  username = '$username',
					  password = '$password_1',
					  email = '$email'
				   WHERE 
				   	  nurse_id = '$id'
				   ";

		
		if(mysqli_query($db, $result))
		{
			
			header('location: viewnurse.php');
		}
}

?>