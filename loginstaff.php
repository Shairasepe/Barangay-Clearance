<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Barangay Clearance</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<style>
		body{
			  background-image: url(ss.jpg);
		}
		</style>
</head>
<body>
  </header>
<br>
<br>
    
        <section class="main">
        <div class="row">
		 <div class="col-sm-6">
		<form method="post" action="staff.php">
            <h1>Login Staff</h1>	
			
			<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" required>
			</div>
			<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" required>
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button> 
			</div>
			<p>
				Not yet a member? <a href="registerstaff.php">Sign in</a>
			</p>
		</form>
		</div>
		
		
	
	


	


</body>
</html>