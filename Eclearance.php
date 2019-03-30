<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from clearance where clearance_id = '$contact_id'");

  $information = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
    $clearance_id = $_POST['clearance_id'];
	$persons_id = $_POST['persons_id'];
	$barangay_id = $_POST['barangay_id'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $cedula_id = $_POST['cedula_id'];
	$captain_id = $_POST['captain_id'];
	$staff_id = $_POST['staff_id'];


    
    $update = "UPDATE `clearance` SET `clearance`='$clearance_id',`persons_id`='$persons_id',`barangay_id`='$barangay_id', `date`='$date', `amount`='$amount',`cedula_id`='$cedula_id', `captain_id`='$captain_id', `staff_id`='$staff_id' WHERE clearance_id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: Lclearance.php');
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
		 <h1>CLEARANCE</h1>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="id">CLEARANCE NUMBER:</label>
				      <input type="number" name="clearance_id" class="form-control"  id="id" placeholder="clearance_id" value="<?php echo $information['clearance_id']?>" required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="first_name">PERSONS_ID:</label>
				      <input type="number" name="persons_id" class="form-control"  id="persons_id" value="<?php echo $information['persons_id']?>" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="middle_name">BARANGAY_ID</label>
	      			<input type="number" name="barangay_id" class="form-control" id="barangay_id" value="<?php echo $information['barangay_id']?>" required>
    			</div>
    		</div>
			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">DATE</label>
	      			<input type="date" name="date" class="form-control" id="date" value="<?php echo $information['date']?>" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">AMOUNT</label>
	      			<input type="number" name="amount" class="form-control" id="amount" value="<?php echo $information['amount']?>" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="last_name">CEDULA_NO:</label>
	      			<input type="number" name="cedula_id" class="form-control" id="cedula_id" value="<?php echo $information['cedula_id']?>" required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="status">CAPTAIN_ID:</label>
	      			<input type="number" name="captain_id" class="form-control" id="captain_id" value="<?php echo $information['captain_id']?>" required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="address">STAFF_ID:</label>
	      			<input type="number" name="staff_id" class="form-control" id="staff_id" value="<?php echo $information['staff_id']?>" required>
    			</div>
    		</div>			
          <form class="myform" method="post">
                    <br><input type="submit" name ="update" class="btn" id="save_btn" value="Update"/>
                    <a href ="Lclearance.php"><input class="btn" type="button" id="list_btn" value="Record"/><br></br></a>
				</center>
          </form>
    </form>
</body>
</html>
