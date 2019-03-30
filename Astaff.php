<?php
  session_start();
  require 'config.php';
	 $sql = "SELECT * FROM barangay
		 WHERE barangay.barangay_id = barangay.barangay_id";
  if(isset($_POST['save'])){
    $staff_id = $_POST['staff_id'];
    $Firstname = $_POST['Firstname'];
    $Middlename = $_POST['Middlename'];
    $Lastname = $_POST['Lastname'];
	$barangay_id = $_POST['barangay_id'];


	
    $insert_information = "INSERT INTO  `staff`(`staff_id`, `Firstname`, `Middlename`, `Lastname`, `barangay_id` ) VALUES ('$staff_id','$Firstname', '$Middlename','$Lastname','$barangay_id')";
    
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
		 <center><h1>ADD STAFF</h1></center>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">ID_NO</label>
	      			<input type="number" name="staff_id" class="form-control" id="validationCustom01" placeholder="staff_id"  required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">FIRST NAME:</label>
				      <input type="text" name="Firstname" class="form-control"  id="validationCustom05" placeholder="Firstname" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">MIDDLE NAME</label>
	      			<input type="text" name="Middlename" class="form-control" id="validationCustom01" placeholder="Middlename" required>
    			</div>
    		</div>
    			<center><div class="col-md-4 md-3">
	      			<label for="validationCustom05">LAST NAME:</label>
	      			<input type="text" name="Lastname" class="form-control" id="validationCustom01" placeholder="Lastname"  required>
    			</div>
    		</div>	
				 <br>BARANGAY_ID:
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
			
		
		
    			<br><form class="myform" method="post">
				            <input type="submit" name ="save" class="btn btn-success" id="save_btn" value="Save"/>
				            <a href ="Lstaff.php"><input class="btn btn-success" type="button" id="list_btn" value="Record"/><br></a></center></br>
  				</form>
		</form>
</body>
</html>