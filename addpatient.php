<?php include('server.php');?>

<!DOCTYPE html>
<html>

<?php include ('head/head.php'); ?>
<script src="js/preview.js"></script>

<body>

<div class="main patient">
	<div class="nav">
		<ul>
			<li><a href="appointment.php">Book Appointment</a></li>
			<li class="current"><a href="addpatient.php">Add Patient</a></li>
			<li><a href="viewpatient.php">View Patient</a></li>	
			<li class="right"><a href="searchpatient.php">Search Patient</a></li>
		</ul>
	</div>
	<div class="header">
		<h1>Add Patient</h1>
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
			<form method="post" action="addpatient.php" enctype="multipart/form-data">
				<div class="form1">
					<!-- <div class="id">
					<label>Patient ID</label>
				<input type="text" name="patient_id">
				</div> -->
				<br>

				<div class="fname">
					<label>First Name</label>
				<input type="text" name="fname">
				</div>

				<div class="lname">
					<label>Last Name</label>
				<input type="text" name="lname">
				</div>
				<div>				
					<input type="hidden" name="identity" value="patient">
				</div>

				<div class="age">
					<label>Age</label>
				<input type="number" name="age">
				</div>
			
				<div class="spec">
					<label>Occupation</label>
				<input type="text" name="occupation">
				</div>
				<br>

				<div class="gender">
					<label>Gender</label>
				<select name="gender">
					<option>Male</option>
					<option>Female</option>
				</select>
				</div>
				<br>

				<div class="address">
					<label class="add">Address</label>
					<textarea name="address"></textarea>
				</div>
				<br>

				<div class="state">
					<label>Admission Date</label>
				<input type="date" name="admd">
				</div>

				<div class="city">
					<label>Admission Time</label>
				<input type="time" name="admt">
				</div>
				<br>

				<div class="mstatus">
					<label>Marital Status</label>
				<input type="text" name="status">
				</div>

				<div class="num">
					<label>Phone No</label>
					<input type="number" name="phone">
				</div>
				<!-- <br> -->

				<div id="symp">
					<label class="symp">Symptoms</label>
					<textarea type="text" name="symp" class="desc"></textarea>
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

				<div id="diagnosis">
					<label class="diagnos">Diagnosis</label>
					<textarea class="diagnosis" name="diag"></textarea>
				</div>
				<br>


					<div class="send patient">
						<input type="submit" name="submit" placeholder="SEND">
           			<input type="reset" name="reset" placeholder="RESET">
					</div>
					
				</div>

			</form>

		</div>
		
	
</div>
</body>
</html>