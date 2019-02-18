 <?php include('process.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>Barangay Clearance</title>
</head>
<body>

  
	<header class="main">
	<center><h1 class="col-sm-4">PERSON</h1></center>
    <div class="row">
     <nav class="col-sm-1 text-left"> 

     	 <?php if (isset($_SESSION['success'])): ?>
		      
		 <?php endif ?>
		 
		 <?php if(isset($_SESSION["username"])): ?>
		    
		 <?php endif ?> 

      </nav>
    </div>
  </header>
<br>
<br>

<div id="main">
			
<br>
   
	<div class="row justify-content-center">
	<form action="process.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<label>firstname</label>
			<input type="text" name="firstname" class="form-control" value="<?php echo $firstname;?>"placeholder="Enter your firstname">
		</div>
		<div class="form-group">
			<label>lastname</label>
			<input type="text" name="lastname" class="form-control" value="<?php echo $lastname;?>"placeholder="Enter your lastname">
		</div>
			<div class="form-group">
			<label>status</label>
			<input type="text" name="status" class="form-control" value="<?php echo $status;?>"placeholder="Enter your status">
		</div>
		<div class="form-group">
			<label>address</label>
			<input type="text" name="address" class="form-control" value="<?php echo $address;?>"placeholder="Enter your address">
		</div>
		<div class="form-group">
			<label>birthdate</label>
			<input type="date" name="birthdate" class="form-control" value="<?php echo $birthdate;?>"placeholder="Enter your birthdate">
		</div>
		<div class="form-group">
			<label>barangay_id</label>
			<input type="number" name="barangay_id" class="form-control" value="<?php echo $barangay_id;?>"placeholder="Enter your barangay_id">
		</div>
		<div class="form-group">
			<label>staff_id</label>
			<input type="number" name="staff_id" class="form-control" value="<?php echo $staff_id;?>"placeholder="Enter your staff_id">
		</div>
		<?php 
			if($update==true):
		?>
		<br>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="add.php"class="btn">back</a>
		<?php else: ?>

			<br>
			<button type="submit" class="btn" name="save">save</button>
			<a href="add.php"class="btn">back</a>
		<?php endif;?>
		</div>
	</form>
	</div>



</body>
</html>
