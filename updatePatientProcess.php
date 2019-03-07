<?php
include('server.php');

$id_dat = $_GET["patient_id"];

$value = "SELECT * FROM add_patient WHERE patient_id = '$id_dat'";
	$result = mysqli_query($db, $value);

if (mysqli_num_rows($result) >= 1) {

	while ($row = mysqli_fetch_assoc($result)){
		$id = $row["patient_id"];
		$firstNameC = $row["first_name"];
		$last_NameC = $row["last_name"];
		$ageC = $row["age"];
		$occupationC = $row["occupation"];
		$genderC = $row["gender"];
		$addressC = $row["address"];
		$adm_dateC = $row["adm_date"];
		$adm_timeC = $row["adm_time"];
		$marital_statusC = $row["marital_status"];
		$phone_noC = $row["phone_no"];
		$symptomsC = $row["symptoms"];
		$diagnosisC = $row["diagnosis"];
		$photo = $row["photo"];

	}

}

?>




<!DOCTYPE html>
<html>

<?php include ('head/head.php'); ?>

<body>

<div class="main patient">
	<div class="nav">
		<ul>
			<li class="current"><a href="updatePatientProcess.php">Update Patient Record</a></li>
			<li><a href="viewpatient.php">View Patient</a></li>	
			<li class="right"><a href="searchpatient.php">Search Patient</a></li>
		</ul>
	</div>
	<div class="header">
		<h1>Update Patient Record</h1>
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

		<div class="doc-form patient">

			<form method="post" action="UPD_PROCESS.php">

				<div class="form1">
					<div class="id">
					<label>Patient ID</label>
				<input id = "patient_id" type="text" name="patient_id" value="<?php echo $id; ?>" placeholder="<?php echo $id; ?>">
				</div>
				<br>

				<div class="fname">
					<label>First Name</label>
				<input id="fname" onblur="changeFieldValue('fname',this.value)" type="text" name="fname" value="<?php echo $firstNameC; ?>"  placeholder = "<?php echo $firstNameC; ?>">
				</div>

				<div class="lname">
					<label>Last Name</label>
				<input id="lname" onblur="changeFieldValue('lname',this.value)" type="text" name="lname" value="<?php echo $last_NameC; ?>"  placeholder="<?php echo $last_NameC; ?>">
				</div>
				<div>				
					<input type="hidden" name="identity" value="patient">
				</div>

				<div class="age">
					<label>Age</label>
				<input id="age" onblur="changeFieldValue('age',this.value)" type="number" name="age" value="<?php echo $ageC; ?>"   placeholder="<?php echo $ageC; ?>">
				</div>
			
				<div class="spec">
					<label>Occupation</label>
				<input id="occupation" onblur="changeFieldValue('occupation',this.value)" type="text" name="occupation" value="<?php echo $occupationC; ?>"  placeholder="<?php echo $occupationC; ?>">
				</div>
				<br>

				<div class="gender">
					<label>Gender</label>
				<select id="genderA" onblur="changeFieldValue('genderA',this.value)" name="gender" value="<?php echo $genderC; ?>"  placeholder="<?php echo $genderC; ?>">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
				</div>
				<br>

				<div class="address">
					<label class="add">Address</label>
					<textarea id="adresp" onblur="changeFieldValue('adresp',this.value)" type="text" name="address"><?php echo $addressC; ?></textarea>
				</div>
				<br>

				<div class="state">
					<label>Admission Date</label>
				<input id="admDate" onblur="changeFieldValue('admDate',this.value)" type="date" name="admd" value="<?php echo $adm_dateC; ?>"  placeholder="<?php echo $adm_dateC; ?>" >
				</div>

				<div class="city">
					<label>Admission Time</label>
				<input id="admTime" onblur="changeFieldValue('admTime',this.value)" type="time" name="admt" value="<?php echo $adm_timeC; ?>"  placeholder="<?php echo $adm_timeC; ?>">
				</div>
				<br>

				<div class="mstatus">
					<label>Marital Status</label>
				<input id="M_status" onblur="changeFieldValue('M_status',this.value)" type="text" name="status" value="<?php echo $marital_statusC; ?>"  placeholder="<?php echo $marital_statusC; ?>">
				</div>

				<div class="num">
					<label>Phone No</label>
					<input id="phone" onblur="changeFieldValue('phone',this.value)" type="number" name="phone" value="<?php echo $phone_noC; ?>"  placeholder="<?php echo $phone_noC; ?>">
				</div>
				<!-- <br> -->

				<div id="symps">
					<label class="symps">Symptoms</label>
					<textarea id="symp" onblur="changeFieldValue('symp',this.value)" class="desci" name="symp"><?php echo $symptomsC;?></textarea>
				</div>

				</div>

					<div class="form2">
						<div class="preview" >
						<!-- <i class="fa fa-user"></i> --> 
					<img src="images/uploads/<?php echo $photo; ?>" id="preview" onblur="changeFieldValue('symp',this.value)"width="200" height="200">
				</div>

				<label class="detail1">Passport: </label>
				<input type="file" name="preview">
				<br>

				<div id="diagnosis">
					<label class="diagnos">Diagnosis</label>
					<textarea id="diagnosi" onblur="changeFieldValue('diagnosi',this.value)" class="diagnosis" name="diag"><?php echo $diagnosisC; ?></textarea>
				</div>
				<br>


					<div class="send patient">
						<input type="submit" name="update">
           			<input type="reset" name="reset" placeholder="RESET">
					</div>
					
				</div>

			</form>

		</div>
		
	
</div>


</body>
<script type="text/javascript">
	function changeFieldValue(id,value){
	document.getElementById(id).value = value;
	}
</script>
</html>