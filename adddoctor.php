<?php include('server.php');?>

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
		
		<h1>Add Doctor</h1>
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
			<form method="post" action="adddoctor.php">
				<div class="form1">
		
				<?php include('error.php'); ?>

				<div class="fname">
					<label>First Name</label>
				<input type="text" name="fname" required="true">
				</div>

				<div class="lname">
					<label>Last Name</label>
				<input type="text" name="lname" required="true">
				</div>
				<br>

				<div class="age">
					<label>Age</label>
				<input type="number" name="age" required="true">
				</div>

				<div class="spec">
					<label>Specialization</label>
				<input type="text" name="spec" required="true">
				</div>
				<br>

				<div class="gender">
					<label>Gender</label>
				<select name="gender">
					<option>Select</option>
					<option>Male</option>
					<option>Female</option>
				</select>
				</div>
				<br>

				<div class="address">
					<label class="add">Address</label>
				<textarea name="address" required="true"></textarea>
				</div>
				<br>

				<div class="state">
					<label>State</label>
				<input type="text" name="state" required="true">
				</div>

				<div class="city">
					<label>City</label>
				<input type="text" name="city" required="true">
				</div>
				<br>
				<div>				
					<input type="hidden" name="identity" value="doctor">
				</div>
				<div class="mstatus">
					<label>Marital Status</label>
				<input type="text" name="status" required="true">
				</div>

				<div class="num">
					<label>Phone No</label>
					<input type="number" name="phone" required="true">
				</div>
				<br>

				<div class="date">
					<label>Joining Date</label>
				<input type="date" name="date" required="true">
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
				<input type="text" name="username" required="true">
				</div>
				<br>

				<div class="pass">
					<label>Password</label>
				<input type="password" name="password_1" id="pass1">
				</div>
				<br>

				<div class="cpass">
					<label>Confirm password</label>
				<input type="password" name="password_2" id="pass2">
				</div>
				<br>

				<div class="email">
					<label>Email</label>
				<input type="email" name="email">
				</div>
					</div>

					
						<input type="submit" name="submit" placeholder="SEND">
           			<input type="reset" name="reset" placeholder="RESET">
					

			</form>

		</div>
		
	
</div>
</body>
</html>