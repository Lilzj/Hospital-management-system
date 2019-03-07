<?php
include('server.php');

$id_dt = $_GET["doctor_id"];

$col = "SELECT * FROM doctor_reg WHERE doctor_id = '$id_dt'";
	$outC = mysqli_query($db, $col);

if (mysqli_num_rows($outC) >= 1) {

	while ($row = mysqli_fetch_assoc($outC)){
		$id = $row["doctor_id"];
		$firstNameD = $row["first_name"];
		$last_NameD = $row["last_name"];
		$ageD = $row["age"];
		$specializationD= $row["specialization"];
		$genderD = $row["gender"];
		$addressD = $row["address"];
		$stateD = $row["state"];
		$cityD = $row["city"];
		$marital_statusD = $row["marital_status"];
		$phone_noD = $row["phone_no"];
		$joining_dateD = $row["joining_date"];
		$usernameD = $row["username"];
		$PasswordD = $row["password"];
		$emailD = $row["email"];

	}

}

?>



<!DOCTYPE html>
<html>

	<?php include ('head/head.php'); ?>
	<script src="js/preview.js"></script>

<body>

<div class="main">
	<div class="nav">
		<ul>
			<li class="current"><a href="adddoctor.php">Add Doctor</a></li>
			<li><a href="viewdoctor.php" >View Doctor</a></li>
			<li class="right"><a href="searchdoctor.php">Search Doctor</a></li>
		</ul>
	</div>
	<div class="header">
		
		<h1>Update Doctor Record</h1>
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

		<div class="doc-form">
			<form method="post" action="upd_doc_process.php">
				<div class="form1">
		
				<div class="id">
					<label>Doctor ID</label>
				<input id = "doctor_id" type="text" name="doctor_id" value="<?php echo $id; ?>" placeholder="<?php echo $id; ?>">
				</div>
				<br>

				<div class="fname">
					<label>First Name</label>
				<input id="fname" onblur="changeFieldValue('fname',this.value)" type="text" name="fname" value="<?php echo $firstNameD; ?>"  placeholder = "<?php echo $firstNameD; ?>">
				</div>

				<div class="lname">
					<label>Last Name</label>
				<input id="lname" onblur="changeFieldValue('lname',this.value)" type="text" name="lname" value="<?php echo $last_NameD; ?>"  placeholder = "<?php echo $last_NameD; ?>">
				</div>
				<br>

				<div class="age">
					<label>Age</label>
				<input id="age" onblur="changeFieldValue('age',this.value)" type="number" name="age" value="<?php echo $ageD; ?>"   placeholder="<?php echo $ageD; ?>">
				</div>

				<div class="spec">
					<label>Specialization</label>
				<input type="text" name="spec" id="spec" onblur="changeFieldValue('spec',this.value)" value="<?php echo $specializationD; ?>"   placeholder="<?php echo $specializationD; ?>">
				</div>
				<br>

				<div class="gender">
					<label>Gender</label>
				<select id="gend" onblur="changeFieldValue('gend',this.value)" name="gender" value="<?php echo $genderD; ?>"  placeholder="<?php echo $genderD; ?>">
					<option>Male</option>
					<option>Female</option>
				</select>
				</div>
				<br>

				<div class="address">
					<label class="add">Address</label>
				<textarea id="ad" onblur="changeFieldValue('ad',this.value)" type="text" name="address"><?php echo $addressD; ?></textarea>
				</div>
				<br>

				<div class="state">
					<label>State</label>
				<input type="text" name="state" id="st" onblur="changeFieldValue('st',this.value)" value="<?php echo $stateD; ?>" placeholder="<?php echo $stateD; ?>">
				</div>

				<div class="city">
					<label>City</label>
				<input type="text" name="city" id="cit" onblur="changeFieldValue('cit',this.value)" value="<?php echo $cityD?>" placeholder="<?php echo $cityD?>">
				</div>
				<br>
				<div>				
					<input type="hidden" name="identity" value="doctor">
				</div>
				<div class="mstatus">
					<label>Marital Status</label>
				<input type="text" name="status" id="ms" onblur="changeFieldValue('ms',this.value)" value="<?php echo $marital_statusD?>" placeholder="<?php echo $marital_statusD ?>">
				</div>

				<div class="num">
					<label>Phone No</label>
					<input type="number" name="phone" id="ph" onblur="changeFieldValue('ph',this.value)" value="<?php echo $phone_noD?>" placeholder="<?php echo $phone_noD?>">
				</div>
				<br>

				<div class="date">
					<label>Joining Date</label>
				<input type="date" name="date" id="jd" onblur="changeFieldValue('jd',this.value)" value="<?php echo $joining_dateD?>" placeholder="<?php echo $joining_dateD?>">
				</div>
				</div>

					<div class="form2">
						<div class="preview" >
						<!-- <i class="fa fa-user"></i> --> 
					<img src="" id="preview" width="200" height="200">
				</div>

				<label class="detail1">Passport: </label>
				<input type="file" name="preview">
				<br>

				<div class="uname">
					<label>Username</label>
				<input type="text" name="username" id="un" onblur="changeFieldValue('un',this.value)" value="<?php echo $usernameD?>" placeholder="<?php echo $usernameD?>">
				</div>
				<br>

				<div class="pass">
					<label>Password</label>
				<input type="password" name="password_1" id="pass1" id="ps" onblur="changeFieldValue('ps',this.value)" value="<?php echo $passwordD?>" placeholder="<?php echo $passwordD?>">
				</div>
				<br>

				<div class="cpass">
					<label>Confirm password</label>
				<input type="password" name="password_2" id="pass2" id="cp" onblur="changeFieldValue('cp',this.value)" >
				</div>
				<br>

				<div class="email">
					<label>Email</label>
				<input type="email" name="email" id="em" onblur="changeFieldValue('em',this.value)" value="<?php echo $emailD?>" placeholder="<?php echo $emailD?>">
				</div>
					</div>

					
						<input type="submit" name="edit" placeholder="SEND">
           			<input type="reset" name="reset" placeholder="RESET">
					

			</form>

		</div>
		
	
</div>
<script type="text/javascript">
	function changeFieldValue(id,value){
	document.getElementById(id).value = value;
	}
</script>
</body>
</html>