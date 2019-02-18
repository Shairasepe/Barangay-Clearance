<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Barangay Clearance</title>
	
</head>
<body>
	<header class="main">
	<center><h1 class="col-sm-12">BARANGAY CLEARANCE</h1></center>
	<center><h2>CITY OF OROQUIETA</h2></center>
    <div class="row">
    
     <nav class="col-sm-8 text-right"> 

      </nav>
    </div>
  </header>
<br>
<br>
    
        <section class="main">
        <div class="row">
		 <div class="col-sm-6">
		<form method="post" action="login.php">
			<?php include('errors.php'); ?>
            <h1>Staff</h1>
			<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
			</div>
			<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button> 
			</div>
			<p>
				Not yet a member? <a href="register.php">Sign in</a>
			</p>
		</form>
		</div>
		
		
		
	
	


	


</body>
</html>
