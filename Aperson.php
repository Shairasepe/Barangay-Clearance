<?php
  session_start();
  require 'config.php';
	$sql = "SELECT * FROM barangay
		 WHERE barangay.barangay_id = barangay.barangay_id";
  if(isset($_POST['save'])){
    $persons_id = $_POST['persons_id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $status = $_POST['status'];
    $address = $_POST['address'];
    $birth_date = $_POST['birth_date'];
	$barangay_id = $_POST['barangay_id'];

	
    $insert_information = "INSERT INTO  `person`(`persons_id`,`first_name`, `middle_name`, `last_name`, `status`, `address`, `birth_date`, `barangay_id` ) VALUES ('$persons_id','$first_name', '$middle_name','$last_name','$status','$address','$birth_date','$barangay_id')";
    
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
		 <center><h1>ADD PERSON</h1>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">ID:</label>
				      <input type="number" name="persons_id" class="form-control"  id="validationCustom05" placeholder="persons_id" required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">FIRST NAME:</label>
				      <input type="text" name="first_name" class="form-control"  id="validationCustom05" placeholder="First Name" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">MIDDLE NAME</label>
	      			<input type="text" name="middle_name" class="form-control" id="validationCustom01" placeholder="Middle name" required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom05">LAST NAME:</label>
	      			<input type="text" name="last_name" class="form-control" id="validationCustom01" placeholder="Last name" required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom06">STATUS:</label>
	      			<input type="text" name="status" class="form-control" id="validationCustom01" placeholder="status" required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom07">ADDRESS:</label>
	      			<input type="text" name="address" class="form-control" id="validationCustom01" placeholder="address" required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom08">BIRTHDATE:</label>
	      			<input type="date" name="birth_date" class="form-control" id="validationCustom01" placeholder="birthdate" required>
    			</div>
    		</div>
    		</div>
				<br>BARANGAY ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM barangay";
		            	$res = mysqli_query($con, $sql);
		            ?> 
		            <select name= "barangay_id" value="<?php echo $information['barangay_id']?>" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['barangay_id']; ?>"><?php echo $line[1] ?></option>
		            <?php } ?>
		            </select>
					</br>
    		</div>
    		</div>			
			

			
    			<br><form class="myform" method="post">
				            <input type="submit"  name ="save" class="btn btn-success" id="save_btn" value="Save"/>
				            <a href ="Lperson.php"><input class="btn btn-success" type="button" id="list_btn" value="Record"/><br></a></br>
		 </center>
  				</form>
		</form>
</body>
</html>