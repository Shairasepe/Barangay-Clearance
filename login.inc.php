<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
	
 session_start();
if(isset($_POST['submit'])){

$conn = mysqli_connect("localhost","root","","clearance");
	$uid = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = (mysqli_real_escape_string($conn, $_POST['password']));
	$sql = "SELECT * FROM users WHERE username='$uid' AND password='$pwd' ";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);

		if ($resultCheck < 1) {
			echo "your are not log in ";
		}
		else{
			echo "FsdfsdfsdF";
			$_SESSION['id'] = $row["id"];
            header('Location: ../admin.php');
		}
}
?>