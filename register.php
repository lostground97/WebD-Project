<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="student"; // Database name 
$tbl_name="data"; // Table name 

// Connect to server and select database.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

$username = mysqli_escape_string($con, $_POST['username']);

$password = mysqli_escape_string($con, $_POST['password']);

$uname = mysqli_escape_string($con, $_POST['uname']);

$father = mysqli_escape_string($con, $_POST['father']);

$dob = mysqli_escape_string($con, $_POST['dob']);

$gender = mysqli_escape_string($con, $_POST['gender']);

$email = mysqli_escape_string($con, $_POST['email']);

$contact = mysqli_escape_string($con, $_POST['contact']);

$address = mysqli_escape_string($con, $_POST['address']);

$registration = mysqli_escape_string($con, $_POST['registration']);

$dept = mysqli_escape_string($con, $_POST['dept']);

$roll = mysqli_escape_string($con, $_POST['roll']);

$hobbies = mysqli_escape_string($con, $_POST['hobbies']);

$age = mysqli_escape_string($con, $_POST['age']);

// Insert data into mysql 
$query = "insert into data values('$username', '$password', '$uname', '$father','$email', '$dob', 
 '$age','$gender', '$contact', '$address', '$registration', '$dept', '$roll','$hobbies');";

$result=mysqli_query($con,$query);

// if successfully insert data into database, displays message "Successful". 
if($result){
    header("Location: index.html"); /* Redirect browser */
  exit();
}

else {

}
?> 