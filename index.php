<!DOCTYPE html>
<html>

<?php include ('head/head.php'); ?>

<body>

<div class="container">
	
	<?php include ('header.php'); ?> 

	<div class="login">
		<div class="box">
			<h1>Login As</h1>
		</div>
	</div>

	<div class="staff-section">
		<div class="section">
			<div class="box">
				<i class="fa fa-user"></i>
			</div>
				<a href="adminlogin.php"><h1>Admin</h1></a>
		</div>
		<div class="section">
			<div class="box">
				<i class="fa fa-user-plus"></i>
			</div>
				<a href="nurselogin.php"><h1>Nurse</h1></a>
		</div>
		<div class="section">
			<div class="box">
				<i class="fa fa-user-md"></i>
			</div>
				<a href="doctorlogin.php"><h1>Doctor</h1></a>
		</div>
	</div>
		
			
</div>
	


</body>
</html>