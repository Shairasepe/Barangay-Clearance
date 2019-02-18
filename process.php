<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','clearance') or die(mysqli_error($mysqli));

$id='';
$update = false;
$firstname ="";
$lastname="";
$status="";
$address="";
$birthdate="";
$barangay_id="";
$staff_id="";

if(isset($_POST['save'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$status = $_POST['status'];
	$address = $_POST['address'];
	$birthdate = $_POST['birthdate'];
	$barangay_id = $_POST['barangay_id'];
	$staff_id = $_POST['staff_id'];
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO staff (userid,firstname,lastname,status,address,birthdate,barangay_id,staff_id) VALUES ('$userid','$firstname','$lastname','$status','$address','$birthdate','$barangay_id','$staff_id')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:add.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM staff WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:add.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM staff WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$status = $row['status'];
		$address = $row['address'];
		$birthdate = $row['birthdate'];
		$barangay_id = $row['barangay_id'];
		$staff_id = $row['staff_id'];
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$status = $_POST['status'];
	$address = $_POST['address'];
	$birthdate = $_POST['birthdate'];
	$barangay_id = $_POST['barangay_id'];
	$staff_id = $_POST['staff_id'];
	
	$mysqli->query("UPDATE staff SET firstname='$firstname',lastname='$lastname',status='$status',address='$address',birthdate='$birthdate',barangay_id='$barangay_id',staff_id='$sta' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:add.php');
}


?>
