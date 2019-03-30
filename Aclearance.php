<?php
  session_start();
  require 'config.php';
  $sql = "SELECT * FROM person, barangay, cedula, captain, staff
		 WHERE person.persons_id = person.persons_id  AND barangay.barangay_id = barangay.barangay_id AND cedula.cedula_id = cedula.cedula_id AND captain.captain_id = captain.captain_id
		 AND staff.staff_id = staff.staff_id";
  if(isset($_POST['save'])){
    $clearance_id = $_POST['clearance_id'];
	$persons_id = $_POST['persons_id'];
	$barangay_id = $_POST['barangay_id'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $cedula_id = $_POST['cedula_id'];
	$captain_id = $_POST['captain_id'];
	$staff_id = $_POST['staff_id'];
	$purpose = $_POST['purpose'];
	
	
    $insert_information = "INSERT INTO  `clearance`(`clearance_id`, `persons_id`, `barangay_id`, `date`, `amount`, `cedula_id`, `captain_id`, `staff_id`, `purpose`) VALUES ('$clearance_id','$persons_id','$barangay_id','$date','$amount', '$cedula_id','$captain_id','$staff_id','$purpose')";
    
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
		 <h1>CLEARANCE</h1>
		 <form class="needs-validation" action="" method='post'>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">CLEARANCE NUMBER</label>
	      			<input name="clearance_id" type="number" class="form-control" id="validationCustom01" placeholder=" clearance id" required>
    			</div>
	            <br>PERSONS_ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM person";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "persons_id" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['persons_id']; ?>"><?php echo $line[1] ?> <?php echo $line[2] ?> <?php echo $line[3] ?></option>
		            <?php } ?>
		            </select>
	            BARANGAY_ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM barangay";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "barangay_id" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['barangay_id']; ?>"><?php echo $line[1] ?></option>
		            <?php } ?>
					</br>
		            </select>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">DATE</label>
	      			<input type="date" name="date" class="form-control" id="validationCustom01" placeholder="date" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">AMOUNT</label>
	      			<input type="number" name="amount" class="form-control" id="validationCustom01" placeholder="amount" required>
    			</div>
	            <br>CEDULA_NO:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM cedula";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "cedula_id" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['cedula_id']; ?>"><?php echo $line[0] ?></option>
		            <?php } ?>
		            </select>
	            CAPTAIN_ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM captain";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "captain_id" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['captain_id']; ?>"><?php echo $line[1] ?></option>
		            <?php } ?>
		            </select>
	            STAFF_ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM staff";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "staff_id" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['staff_id']; ?>"><?php echo $line[1] ?></option>
		            <?php } ?>
					
		            </select>
					</br>
	        </div>
			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">Purpose</label>
	      			<input name="purpose" type="text" class="form-control" id="validationCustom01" placeholder="purpose" required>
    			</div>				
	        </div>
		
			

			
    			<br><form class="myform" method="post">
				            <input type="submit" name ="save" class="btn btn-success" id="save_btn" value="Save"/>
				            <a href ="Lclearance.php"><input class="btn btn-success" type="button" id="list_btn" value="Record"/></a></center></br>
	
  				</form>
		</form>
</body>
</html>