<?php
        if (isset($_SESSION["id"])){
            echo($_SESSION['username']);
			echo '';
            echo($_SESSION['password']);
            header('location:loginadmin.php');
        }else{
            $err = 'Invalid username/password';
        }
 ?>

<!DOCTYPE html>
<html>
<center>
	<title>BarangayClearance</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<style>
		body{
			  background-image: url(ss.jpg);
		}
		</style>
<body>
	<h1>BARANGAY CLEARANCE</h1>
    <h2>Oroquieta City, Misamis Occidental</h2>
						<br><a href ="Astaff.php"><button type="button" class="btn btn-primary btn-lg">Add Staff</button>
						<a href ="Abarangay.php"><button type="button" class="btn btn-primary btn-lg">Add Barangay</button>
						<a href ="Acaptain.php"><button type="button" class="btn btn-primary btn-lg">Add Captain</button>
						<br><a href ="index.php"><input class="btn" type="button" id="list_btn" value="LOGOUT"/></a></br>
</center>
 </body>
 </html>
