<?php
//session_start();
error_reporting(0);
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="data"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select database.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");
  
if($_POST['submit']){
$username = mysqli_escape_string($con, ($_POST['username']));

$password = mysqli_escape_string($con, isset($_POST['password']));

$uname = mysqli_escape_string($con, ($_POST['uname']));

$father = mysqli_escape_string($con, isset($_POST['father']));

$dob = mysqli_escape_string($con, isset($_POST['dob']));

$gender = mysqli_escape_string($con, isset($_POST['gender']));

$email = mysqli_escape_string($con, isset($_POST['email']));

$contact = mysqli_escape_string($con, isset($_POST['contact']));

$address = mysqli_escape_string($con, isset($_POST['address']));

$registration = mysqli_escape_string($con, isset($_POST['registration']));

$dept = mysqli_escape_string($con, isset($_POST['dept']));

$roll = mysqli_escape_string($con, isset($_POST['roll']));

$hobbies = mysqli_escape_string($con, isset($_POST['hobbies']));

$age = mysqli_escape_string($con, isset($_POST['age']));

// update data into mysql 
$query = "update student set uname='$uname', father='$father' where username='$username' ";

$result=mysqli_query($con,$query);

// if successfully insert data into database, displays message "Successful". 
if($result){
  // echo "successful";
  
  
}

else {
 echo "unsuccessful";
}
}
?> 