<?php
session_start();

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="student"; // Database name 
$tbl_name="data"; // Table name 

// Connect to server and select database.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

$var = $_SESSION['login_user'];
$q = "select * from data where username = '$var'";

$query = mysqli_query($con,$q);
if (!$query) {
  printf("Error: %s\n", mysqli_error($con));
  exit();
}
$table1 = mysqli_fetch_array($query);



$uname = $table1[0];
$name = $table1[2];
$father = $table1[3];
$email = $table1[4];
$dob = $table1[5];
$age = $table1[6];
$gender = $table1[7];
$contact = $table1[8];
$address = $table1[9];
$rnumber = $table1[10];
$dept = $table1[11];
$roll = $table1[12];
$hobbies = $table1[13];
/*
if ($query->num_rows > 0)
{
	while($row = $query->fetch_assoc())
	{	
		    
	}	
}*/
?>


<!doctype html>
<html lang="en">
<head>
  <title>Student Information System</title>
  <meta charset="utf-8">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="main.css">
</head>
<body>
    <ul class="navigation">
        <li><a>Student Information System</a></li>
        <li style="padding-left: 50%;"><a href="lg_home.php">Home</a></li>
        <li><a href="logout.php">Login</a></li>
        <li><a href="./reg.html">Register Yourself</a></li>
        <!-- <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li> -->
    </ul>
  <!-- <div class="container" style ="margin-left:auto; margin-right:auto;"> -->
  <!-- </div> -->
  <div class="container2">
  <ul class="navigation">
        <li><a>Student Profile</a></li>
        <li style="padding-left: 75%;"><a href="logout.php">Logout</a></li>

        <!-- <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li> -->
    </ul>
      <div class="registration" style="float: left;">
      <h3>Personal Details</h3>
        <!-- <label for="username"> -->
				<span>Username  :  <?php echo htmlentities($uname); ?></span>
				<br>
				<br>


				<!-- </label> -->
				<!-- <label for="name"> -->
				<span>Name  :   <i><?php echo htmlentities($name); ?></i></span>
				<br>
				<br>
				<!-- </label> -->
				<label for="father">
					<span>Father's Name  :   <i><?php echo htmlentities($father); ?></i></span>
				<br>
				<br>

        </label>

				<label for="email">
					<span>Email id  :   <i><?php echo htmlentities($email); ?></i></span>
				</label>
				<br>
        <br>
        </label>

				<label for="dob">
					<span>DOB  :   <i><?php echo htmlentities($dob); ?></i></span>
				</label>
				<br>
        <br>
        </label>

				<label for="age">
					<span>Age  :   <i><?php echo htmlentities($age); ?></i></span>
				</label>
				<br>
        <br>
        </label>

				<label for="gender">
					<span>Gender :   <i><?php echo htmlentities($gender); ?></i></span>
				</label>
				<br>
        <br>
        </label>

				<label for="contact">
					<span>Contact :   <i><?php echo htmlentities($contact); ?></i></span>
				</label>
				<br>
        <br>
        </label>

				
			</div>
      <div class="registration" style="float: right;">
      <h3>Educational Details</h3>
          <label for="address">
					  <span>Address :   <i><?php echo htmlentities($address); ?></i></span>
				  </label>
				  <br>
          <br>
          <label for="rnumber">
					  <span>Registration number :   <i><?php echo htmlentities($rnumber); ?></i></span>
				  </label>
				  <br>
          <br>
          <label for="dept">
					  <span>Department :   <i><?php echo htmlentities($dept); ?></i></span>
				  </label>
				  <br>
          <br>
          <label for="roll">
					  <span>Roll Number :   <i><?php echo htmlentities($roll); ?></i></span>
				  </label>
				  <br>
          <br>
          <label for="hobbies">
					  <span>Hobbies :   <i><?php echo htmlentities($hobbies); ?></i></span>
				  </label>
				  <br>
				  <br>
			</div>
	</div>
  <script src="script.js"></script>
</body>
</html>