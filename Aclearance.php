<?php
  session_start();
  require 'config.php';
  if(isset($_POST['save'])){
    $id = $_POST['id'];
	$person_id = $_POST['person_id'];
	$barangay_id = $_POST['barangay_id'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $cedula_no = $_POST['cedula_no'];
	$captain_id = $_POST['captain_id'];
	$staff_id = $_POST['staff_id'];


	
    $insert_information = "INSERT INTO  `cedula`(`id`, `person_id`, `barangay_id`, `date`, `amount`, `cedula_no`, `captain_id`, `staff_id` ) VALUES ('$id','$person_id','$barangay_id','$date','$date','$amount', '$cedula_no','$captain_id','$captain_id')";
    
    if (mysqli_query($con, $insert_information)) {
      echo"
        <script>
          var msg=confirm('Saved!');
          if(msg == true || msg==false){

          }
        </script>
      ";
    } else {
        echo "Error: " . $insert_information . "<br>" . mysqli_error($con);
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
		 <h1>ADD CLEARANCE</h1>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">PERSON_ID:</label>
	      			<input type="number" name="person_id" class="form-control" id="validationCustom01" placeholder="person_id" required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">BARANGAY_ID:</label>
				      <input name="barangay_id" type="number" class="form-control"  id="validationCustom05" placeholder="barangay_id" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">DATE:</label>
	      			<input type="date" name="date" class="form-control" id="validationCustom01" placeholder="date" required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom05">AMOUNT:</label>
	      			<input type="text" name="amount" class="form-control" id="validationCustom01" placeholder="amount" required>
    			</div>
				<div class="col-md-4 md-3">
	      			<label for="validationCustom05">CEDULA_NO:</label>
	      			<input type="text" name="cedula_no" class="form-control" id="validationCustom01" placeholder="cedula_no" required>
    			</div>
				<div class="col-md-4 md-3">
	      			<label for="validationCustom05">CAPTAIN_ID:</label>
	      			<input type="text" name="captain_id" class="form-control" id="validationCustom01" placeholder="captain_id" required>
    			</div>
				<div class="col-md-4 md-3">
	      			<label for="validationCustom05">STAFF_ID:</label>
	      			<input type="text" name="staff_id" class="form-control" id="validationCustom01" placeholder="staff_id" required>
    			</div>
    		</div>			
		
			

			
    			<br><form class="myform" method="post">
				            <input type="submit" name ="save" class="btn" id="save_btn" value="Save"/>
				            <a href ="Lclearance.php"><input class="btn" type="button" id="list_btn" value="Record"/><br></a></br></center>
  				</form>
		</form>
</body>
</html>