<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>

	<title>Barangay Clearance</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<style>
		body{
			  background-image: url(ss.jpg);
		}
		</style>

<body>
    
        <section class="main">
        <div class="row">
		 <div class="col-sm-6">
        <br><form method="post" action="include/login.inc.php"></br>
		<h1>Login Admin</h1>
		<div class="input-group">
		<label for="validationCustom02">username:</label>
        <input type="text" name="username" placeholder="username" required>
		<div class="input-group">
		<br><label for="validationCustom02">password:</label>
        <input type="password" name="password" placeholder="password" required>
		<div class="input-group">
		<input type="submit" class="btn" name="submit" value="Login" class="button">
        </form>
    </div>

	
 </body>
 </html>
