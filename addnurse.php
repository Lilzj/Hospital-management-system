<?php include('server.php');?>

<!DOCTYPE html>
<html>

<?php include ('head/head.php'); ?>
<script src="js/preview.js"></script>

<body>

<div class="main">
	<div class="nav">
		<ul>
			<li class="current"><a href="addnurse.php">Add Nurse</a></li>
			<li><a href="viewnurse.php" >View Nurse</a></li>
			<li class="right"><a href="searchnurse.php">Search Nurse</a></li>
		</ul>
	</div>
	<div class="header">
		<h1>Add Nurse</h1>
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
			<i class="fa fa-user-plus"></i>
		</div>

		<div class="doc-form">
			<form method="post" action="addnurse.php">
				<div class="form1">
					<div class="id" id="e">
					<!-- Display error message here -->
				<?php include('error.php'); ?>
				</div>
				<br> 

				<div class="fname">
					<label>First Name</label>
				<input type="text" name="fname">
				</div>

				<div class="lname">
					<label>Last Name</label>
				<input type="text" name="lname">
				</div>
				<br>

				<div class="age">
					<label>Age</label>
				<input type="number" name="age">
				</div>

				<div class="spec">
					<label>Qualification</label>
				<input type="text" name="spec">
				</div>
				<br>
				<div>				
					<input type="hidden" name="identity" value="nurse">
				</div>
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
					<label>State</label>
				<input type="text" name="state">
				</div>

				<div class="city">
					<label>City</label>
				<input type="text" name="city">
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
				<br>

				<div class="date">
					<label>Joining Date</label>
				<input type="date" name="date">
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
				<input type="text" name="username">
				</div>
				<br>
				
				<div class="pass">
					<label>Password</label>
				<input type="password" name="password_1">
				</div>
				<br>

				<div class="cpass">
					<label>Confirm password</label>
				<input type="password" name="password_2">
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