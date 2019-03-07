<?php

        session_start();
		$username = "";
		$email = "";
		$error = array();

// connecting to the database
	$db = mysqli_connect('localhost', 'root', 'lilzjosh', 'add_patient');


// When the submit button is clicked
	if (isset($_POST['submit'])) {
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$age = mysqli_real_escape_string($db, $_POST['age']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$mstatus = mysqli_real_escape_string($db, $_POST['status']);
		$phone = $_POST['phone'];
		$target = "images/uploads/".basename($_FILES['preview']['name']);
		$image = $_FILES['preview']['name'];
		$hidden = $_POST['identity'];

		if ($hidden == "doctor"){		
			$state = mysqli_real_escape_string($db, $_POST['state']);
			$city = mysqli_real_escape_string($db, $_POST['city']);
			$spec = mysqli_real_escape_string($db, $_POST['spec']);
			$date = mysqli_real_escape_string($db, $_POST['date']);
			$username = mysqli_real_escape_string($db, $_POST['username']);
			$email = mysqli_real_escape_string($db, $_POST['email']);
			$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
			$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
			$target = "images/uploads/".basename($_FILES['preview']['name']);
			$image = $_FILES['preview']['name'];
			if (empty($password_1)) {
			
			array_push($error, 'Password is required');
		}
		if ($password_1 != $password_2) {
			array_push($error, 'The Two passwords do not match');
		}

			
		}

		if ($hidden == "nurse") {
			$state = mysqli_real_escape_string($db, $_POST['state']);
			$city = mysqli_real_escape_string($db, $_POST['city']);
			$qual = mysqli_real_escape_string($db, $_POST['spec']);
			$date = mysqli_real_escape_string($db, $_POST['date']);
			$username = mysqli_real_escape_string($db, $_POST['username']);
			$email = mysqli_real_escape_string($db, $_POST['email']);
			$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
			$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
			$target = "images/uploads/".basename($_FILES['preview']['name']);
			$image = $_FILES['preview']['name'];
			if (empty($password_1)) {
			
			array_push($error, 'Password is required');
		}
		if ($password_1 != $password_2) {
			array_push($error, 'The Two passwords do not match');
		}

			
		}

		if ($hidden == "patient") {
			$occupation = mysqli_real_escape_string($db, $_POST['occupation']);
			$admd = mysqli_real_escape_string($db, $_POST['admd']);
			$admt = mysqli_real_escape_string($db, $_POST['admt']);
			$symp = mysqli_real_escape_string($db, $_POST['symp']);
			$diag = mysqli_real_escape_string($db, $_POST['diag']);
			$target = "images/uploads/".basename($_FILES['preview']['name']);
			$image = $_FILES['preview']['name'];
		}

// 		if (empty($password_1)) {
			
// 			array_push($error, 'Password is required');
// 		}
// 		if ($password_1 != $password_2) {
// 			array_push($error, 'The Two passwords do not match');
// 		}
		

// //Saving user to database when there is no error
// 		 if (count($error) ==0) {

// 				$password = ($password_1); 
// 			}
				
			
				
				
if($hidden == "doctor"){
	if (count($error) ==0) {

				$password = ($password_1); 
			
				
	$sql = "INSERT INTO doctor_reg (first_name, last_name, age, specialization, gender, address, state, city, marital_status, phone_no, joining_date, username, password, email, photo)
				VALUES ('$fname', '$lname', '$age', '$spec', '$gender', '$address', '$state', '$city', '$mstatus', '$phone', '$date', '$username', '$password', '$email', '$image')";

	mysqli_query($db, $sql);
}
}

if ($hidden == "nurse") {
	if (count($error) ==0) {

				$password = ($password_1); 
			
				
	$sql = "INSERT INTO nurse_reg (first_name, last_name, age, qualification, gender, address, joining_date, state, marital_status, phone_no, city, username, password, email, photo)
				VALUES ('$fname', '$lname', '$age', '$qual', '$gender', '$address', '$date', '$state', '$mstatus', $phone, '$city', '$username', '$password', '$email', '$image')";

				mysqli_query($db, $sql);
			
}
}

			if ($hidden == "patient") {
				$sql = "INSERT INTO add_patient (first_name, last_name, age, occupation, gender, address, adm_date, adm_time, marital_status, phone_no, symptoms, diagnosis, photo)
							VALUES ('$fname', '$lname', '$age', '$occupation', '$gender', '$address', '$admd', '$admt', '$mstatus', '$phone', '$symp', '$diag', '$image')";

							mysqli_query($db, $sql);
			}

			move_uploaded_file($_FILES['preview']['tmp_name'], $target);
				
				// $_SESSION['username'] = $username;
				// $_SESSION['success'] = 'You have Successfully Registered';
				// header('location: index.php');//Re-directing the user to homepage
		
	}



// Log user in from login page

	if (isset($_POST['login'])) {

		$loginhidden = $_POST['profile'];
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);


// To ensure that the form are filled properly

		if (empty($username)) {
			array_push($error, 'Username is required');
		}

		if (empty($password)) {
			array_push($error, 'password is required');
		}


		if (count($error) == 0) {
		$password = ($password);

			if($loginhidden == "doctor"){
				$query= "SELECT * FROM doctor_reg WHERE username = '$username' AND password = '$password' ";
				$result = mysqli_query($db, $query);

				if (mysqli_num_rows($result) == 1) {
					session_start();
					$_SESSION['username'] = $username;
					header('location: doctorportal.php');
				 }else{
					array_push($error, "Wrong username/password combination");
				}
			}

			if($loginhidden == "nurse"){
				$query= "SELECT * FROM nurse_reg WHERE username = '$username' AND password = '$password' ";
				$result = mysqli_query($db, $query);

				if (mysqli_num_rows($result) == 1) {

						// Log user in
					$_SESSION['username'] = $username;
					// $_SESSION['success'] = 'You Are Now Logged In';
					header('location: nurseportal.php');//Re-directing the user to homepage
				 }else{
					array_push($error, "Wrong username/password combination");
				}
			}

			if($loginhidden == "admin"){
				$query= "SELECT * FROM admin_login WHERE admin_id = '$username' AND admin_pass = '$password' ";
				$result = mysqli_query($db, $query);

				if (mysqli_num_rows($result) == 1) {

						// Log user in
					$_SESSION['username'] = $username;
					// $_SESSION['success'] = 'You Are Now Logged In';
					header('location: adminportal.php');//Re-directing the user to homepage
				 }else{
					array_push($error, "Wrong username/password combination");
				}
			}

		}

	}





//Search patient through name





?>