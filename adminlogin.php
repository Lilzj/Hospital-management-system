<?php include('server.php');?>

<!DOCTYPE html>
<html>

<?php include ('head/head.php'); ?>

<body>

<div class="wrapper">
	<?php include ('header.php'); ?>

	<div class="box">
		<a href="index.php"><i class="fa fa-arrow-left"></i></a>

	</div>

	<div class="login">
		<form method="post" action="adminlogin.php">
				<h1>
					Login Here
				</h1>
				<p class="p">ADMIN LOGIN PANEL</p>

				<!-- Display error message here -->
				<?php include('error.php'); ?>

			<div class="input">
				<i class="fa fa-user"></i>
				<input type="text" placeholder="Enter your username" name="username" id="un">
			</div>

			<div>
				<input type="hidden" name="profile" value="admin">
			</div>

			<div class="input">
				<i class="fa fa-lock"></i>
				<input type="password" placeholder="Enter your password" name="password" id="pw">
			</div>

			<div class="submit">
				<button type="submit" name="login">Login</button>
			</div>
		</form>
	</div>

</div>

<script type="text/javascript">
	

		// onfocus event
		var user_name = document.getElementById("un");
		user_name.onfocus = function() {
			if (user_name.placeholder == "Enter your username") {
				user_name.placeholder = " ";
			}
		};

		// onblur event
		user_name.onblur = function() {
			if (user_name.placeholder == " ") {
				user_name.placeholder = "Enter your username";
			}
		};

		// for the password
		// onfcus
		var pass_word = document.getElementById("pw");
		pass_word.onfocus = function() {
			if (pass_word.placeholder == "Enter your password") {
				pass_word.placeholder = " ";
			}
		};

		// onblur event
		pass_word.onblur = function() {
			if (pass_word.placeholder == " ") {
				pass_word.placeholder = "Enter your password";
			}
		};
			
</script>
</body>
</html>