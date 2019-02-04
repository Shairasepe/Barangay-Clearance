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
		<form method="post" action="login.php">
			<?php include('errors.php'); ?>
            <h1>Log In</h1>
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
		
		</div>
	
		
	
	


	


</body>
</html>