<?php include('server.php'); 

   if (empty($_SESSION['username'])){
	   header('location: login.php');
   }
   
  
?>  
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Barangay Clearance</title>
</head>
<body>


<header class="main">
    <center><h1 class="col-sm-4">BARANGAY CLEARANCE</h1></center>
    <div class="row">
     <nav class="col-sm-8 text-right"> 

      </nav>
    </div>
  </header>
<br>
  
	<br>
	<form>

		<p>
		<h1>Welcome</h1>
		
		</p>  

          <?php if (isset($_SESSION['success'])): ?>
		      
		 <?php endif ?>
		 
		 <?php if(isset($_SESSION["username"])): ?>
		    
		 <?php endif ?> 

		<a href="add.php" class="btn">View</a>
		<a href="register.php" class="btn">Back</a>


    </form>


</body>
</html>
