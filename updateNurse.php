<?php
include('server.php');

$id_N = $_GET["nurse_id"];

$coll = "SELECT * FROM nurse_reg WHERE nurse_id = '$id_N'";
	$outN = mysqli_query($db, $coll);

if (mysqli_num_rows($outN) >= 1) {

	while ($row = mysqli_fetch_assoc($outN)){
		$id = $row["nurse_id"];
		$firstNameN = $row["first_name"];
		$last_NameN = $row["last_name"];
		$ageN = $row["age"];
		$qualificationN= $row["qualification"];
		$genderN = $row["gender"];
		$addressN = $row["address"];
		$stateN = $row["state"];
		$cityN = $row["city"];
		$marital_statusN = $row["marital_status"];
		$phone_noN = $row["phone_no"];
		$joining_dateN = $row["joining_date"];
		$usernameN = $row["username"];
		$PasswordN = $row["password"];
		$emailN = $row["email"];

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
			<li class="current"><a href="addnurse.php">Add nurse</a></li>
			<li><a href="viewnurse.php" >View nurse</a></li>
			<li class="right"><a href="searchnurse.php">Search nurse</a></li>
		</ul>
	</div>
	<div class="header">
		
		<h1>Update nurse Record</h1>
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
			<form method="post" action="upd_nur_process.php">
				<div class="form1">
		
				<div class="id">
					<label>nurse ID</label>
				<input id = "nurse_id" type="text" name="nurse_id" value="<?php echo $id; ?>" placeholder="<?php echo $id; ?>">
				</div>
				<br>

				<div class="fname">
					<label>First Name</label>
				<input id="fname" onblur="changeFieldValue('fname',this.value)" type="text" name="fname" value="<?php echo $firstNameN; ?>"  placeholder = "<?php echo $firstNameN; ?>">
				</div>

				<div class="lname">
					<label>Last Name</label>
				<input id="lname" onblur="changeFieldValue('lname',this.value)" type="text" name="lname" value="<?php echo $last_NameN; ?>"  placeholder = "<?php echo $last_NameN; ?>">
				</div>
				<br>

				<div class="age">
					<label>Age</label>
				<input id="age" onblur="changeFieldValue('age',this.value)" type="number" name="age" value="<?php echo $ageN; ?>"   placeholder="<?php echo $ageN; ?>">
				</div>

				<div class="spec">
					<label>Qulification</label>
				<input type="text" name="spec" id="spec" onblur="changeFieldValue('spec',this.value)" value="<?php echo $qualificationN; ?>"   placeholder="<?php echo $qualificationN; ?>">
				</div>
				<br>

				<div class="gender">
					<label>Gender</label>
				<select id="gend" onblur="changeFieldValue('gend',this.value)" name="gender" value="<?php echo $genderN; ?>"  placeholder="<?php echo $genderN; ?>">
					<option>Male</option>
					<option>Female</option>
				</select>
				</div>
				<br>

				<div class="address">
					<label class="add">Address</label>
				<textarea id="ad" onblur="changeFieldValue('ad',this.value)" type="text" name="address"><?php echo $addressN; ?></textarea>
				</div>
				<br>

				<div class="state">
					<label>State</label>
				<input type="text" name="state" id="st" onblur="changeFieldValue('st',this.value)" value="<?php echo $stateN; ?>" placeholder="<?php echo $stateN; ?>">
				</div>

				<div class="city">
					<label>City</label>
				<input type="text" name="city" id="cit" onblur="changeFieldValue('cit',this.value)" value="<?php echo $cityN?>" placeholder="<?php echo $cityN?>">
				</div>
				<br>
				<div>				
					<input type="hidden" name="identity" value="nurse">
				</div>
				<div class="mstatus">
					<label>Marital Status</label>
				<input type="text" name="status" id="ms" onblur="changeFieldValue('ms',this.value)" value="<?php echo $marital_statusN?>" placeholder="<?php echo $marital_statusN ?>">
				</div>

				<div class="num">
					<label>Phone No</label>
					<input type="number" name="phone" id="ph" onblur="changeFieldValue('ph',this.value)" value="<?php echo $phone_noN?>" placeholder="<?php echo $phone_noN?>">
				</div>
				<br>

				<div class="date">
					<label>Joining Date</label>
				<input type="date" name="date" id="jd" onblur="changeFieldValue('jd',this.value)" value="<?php echo $joining_dateN?>" placeholder="<?php echo $joining_dateN?>">
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
				<input type="text" name="username" id="un" onblur="changeFieldValue('un',this.value)" value="<?php echo $usernameN?>" placeholder="<?php echo $usernameN?>">
				</div>
				<br>

				<div class="pass">
					<label>Password</label>
				<input type="password" name="password_1" id="pass1" id="ps" onblur="changeFieldValue('ps',this.value)" value="<?php echo $passwordN?>" placeholder="<?php echo $passwordN?>">
				</div>
				<br>

				<div class="cpass">
					<label>Confirm password</label>
				<input type="password" name="password_2" id="pass2" id="cp" onblur="changeFieldValue('cp',this.value)" >
				</div>
				<br>

				<div class="email">
					<label>Email</label>
				<input type="email" name="email" id="em" onblur="changeFieldValue('em',this.value)" value="<?php echo $emailN?>" placeholder="<?php echo $emailN; ?>">
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