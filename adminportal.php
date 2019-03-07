
<!DOCTYPE html>
<html>

<?php include ('head/head.php'); ?>

<body>

<div class="content">
	<div class="header">
				<h1>Admin Portal</h1>
				<h2 style="cursor: pointer;" id="out">Logout</h2>
	</div>
		<div class="box">
			<i class="fa fa-user"></i>
		</div>
		<div class="left">
			<h1>WELCOME to Admin Portal</h1>
		</div>
		<div class="right">
			<div class="up">
				<a href=""><h1>Non-Medical Staff</h1></a>
			</div>
			<div class="down">
				<div class="details doctor">
					<i class="fa fa-user-md"></i>
					<h1 style="cursor: pointer;" id="doc">Add Doctor</h1>
				</div>
				<div class="details nurse">
					<i class="fa fa-user-plus"></i>
					<h1 style="cursor: pointer;" id="nur">Add Nurse</h1>
				</div>
			</div>
		</div>

		
</div>

<script type="text/javascript">
	document.getElementById('doc').onclick = function() {
	window.location.href='adddoctor.php';
}

document.getElementById('nur').onclick = function() {
	window.location.href='addnurse.php';
}

document.getElementById('out').onclick = function() {
	window.location.href='adminlogin.php';
}

document.getElementById('update').onclick = function() {
	window.location.href='updatepatient.php';
}
</script>
</body>
</html>
