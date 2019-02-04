<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>phonebook</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<header class="main">
	 <center><h1 class="col-sm-4">PHONEBOOK</h1></center>
    <div class="row">
     <nav class="col-sm-8 text-right"> 

      </nav>
    </div>
  </header>
<br>
<br>
  
		<section class="main">
        <div class="row">
		 <div class="col-sm-10">
		<form method="post" action="register.php">
		    <h1>Register</h1>
			<?php include('errors.php'); ?>
			<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
			</div>
			<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
			</div>
			<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
			</div>
			<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
			</div>
			<div class="input-group">
				<button type="submit" name="register" class="btn">Register</button> 
			</div>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
		</div>
		
		</div>
		</section>
		


</body>
</html>