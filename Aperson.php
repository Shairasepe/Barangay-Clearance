<?php
  session_start();
  require 'config.php';
  if(isset($_POST['save'])){
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $status = $_POST['status'];
    $address = $_POST['address'];
    $birth_date = $_POST['birth_date'];

	
    $insert_information = "INSERT INTO  `persons`(`id`,`first_name`, `middle_name`, `last_name`, `status`, `address`, `birth_date` ) VALUES ('$id','$first_name', '$middle_name','$last_name','$status','$address','$birth_date')";
    
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
				      <input type="number" name="id" class="form-control"  id="validationCustom05" placeholder="ID" required>
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
			

			
    			<br><form class="myform" method="post">
				            <input type="submit"  name ="save" class="btn" id="save_btn" value="Save"/>
				            <a href ="Lperson.php"><input class="btn" type="button" id="list_btn" value="Record"/><br></a></br>
		 </center>
  				</form>
		</form>
</body>
</html>