<?php
  session_start();
  require 'config.php';
  if(isset($_POST['save'])){
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];


	
    $insert_information = "INSERT INTO  `staff`(`id`, `first_name`, `middle_name`, `last_name` ) VALUES ('$id','$first_name', '$middle_name','$last_name')";
    
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
	      			<input type="number" name="id" class="form-control" id="validationCustom01" placeholder="id number"  required>
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
    			<center><div class="col-md-4 md-3">
	      			<label for="validationCustom05">LAST NAME:</label>
	      			<input type="text" name="last_name" class="form-control" id="validationCustom01" placeholder="Last name"  required>
    			</div>
    		</div>			
		
			

			
    			<br><form class="myform" method="post">
				            <input type="submit" name ="save" class="btn" id="save_btn" value="Save"/>
				            <a href ="Lstaff.php"><input class="btn" type="button" id="list_btn" value="Record"/><br></a></center></br>
  				</form>
		</form>
</body>
</html>