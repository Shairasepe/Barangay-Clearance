<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from person where persons_id = '$contact_id'");

  $information = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
    $persons_id = $_POST['persons_id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $status = $_POST['status'];
    $address = $_POST['address'];
    $birth_date = $_POST['birth_date'];


    
    $update = "UPDATE `person` SET `persons_id`='$persons_id',`first_name`='$first_name',`middle_name`='$middle_name',`last_name`='last_name',`status`='$status',`address`='$address',`birth_date`='$birth_date' WHERE persons_id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: Lperson.php');
    }else {
      echo "Error: " . $update . "<br>" . mysqli_error($con);
    }

      }
        
?>

<!DOCTYPE html>
<html>
	<title>BarangayClearance</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<style>
		body{
			  background-image: url(ss.jpg);
		}
		</style>
<body>
<center>
		 <h1>PERSON</h1>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="id">ID:</label>
				      <input type="number" name="persons_id" class="form-control"  id="persons_id" placeholder="persons_id" value="<?php echo $information['persons_id']?>" required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="first_name">FIRST NAME:</label>
				      <input type="text" name="first_name" class="form-control"  id="first_name" value="<?php echo $information['first_name']?>" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="middle_name">MIDDLE NAME</label>
	      			<input type="text" name="middle_name" class="form-control" id="middle_name" value="<?php echo $information['middle_name']?>" required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="last_name">LAST NAME:</label>
	      			<input type="text" name="last_name" class="form-control" id="last_name" value="<?php echo $information['last_name']?>" required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="status">STATUS:</label>
	      			<input type="text" name="status" class="form-control" id="status" value="<?php echo $information['status']?>" required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="address">ADDRESS:</label>
	      			<input type="text" name="address" class="form-control" id="address" value="<?php echo $information['address']?>" required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="birth_date">BIRTHDATE:</label>
	      			<input type="date" name="birth_date" class="form-control" id="birth_date" value="<?php echo $information['birth_date']?>" required>
    			</div>
    		</div>
    		</div>	
          <form class="myform" method="post">
                    <br><input type="submit" name ="update" class="btn" id="save_btn" value="Update"/>
                    <a href ="Lperson.php"><input class="btn" type="button" id="list_btn" value="Record"/><br></br></a>
				</center>
          </form>
    </form>
</body>
</html>
