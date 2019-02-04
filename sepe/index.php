<?php include('server.php'); 

   if (empty($_SESSION['username'])){
	   header('location: login.php');
   }
   
  
?>  
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Phonebook</title>
	
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
	<form>

		<p>
		<h1>Welcome to Phonebook</h1>
		Create your own contact list 
		</p>  

          <?php if (isset($_SESSION['success'])): ?>
		      
		 <?php endif ?>
		 
		 <?php if(isset($_SESSION["username"])): ?>
		     <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		      <p><a href="index.php?logout='1'" style="color:white;">Logout</a></p>
		 <?php endif ?> 

		<a href="add.php" class="btn">View Contact</a>
		<a href="register.php" class="btn">Back</a>


    </form>


</body>
</html>