<?php
  session_start();
  require 'config.php';
  if(isset($_POST['save'])){
    $barangay_id = $_POST['barangay_id'];
    $barangay_name = $_POST['barangay_name'];


	
    $insert_information = "INSERT INTO  `barangay`(`barangay_id`, `barangay_name` ) VALUES ('$barangay_id', '$barangay_name')";
    
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
		 <h1>ADD BARANGAY</h1>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">ID_NO:</label>
				      <input type="number" name="barangay_id" class="form-control"  id="validationCustom05" placeholder="barangay_id" required>
    			</div>
    		</div>

    			<div class="col-md-4 md-3">
	      			<label for="validationCustom08">BARANGAY NAME:</label>
	      			<input type="text" name="barangay_name" class="form-control" id="validationCustom01" placeholder="barangay_name" required>
    			</div>
    		</div>
    		</div>			
			

			
    			<br><form class="myform" method="post">
				            <input type="submit" name ="save" class="btn btn-success" id="save_btn" value="Save"/>
				            <a href ="Lbarangay.php"><input class="btn btn-success" type="button" id="list_btn" value="Record"/><br></a></br>
  				</form>
		</form>
</body>
</html>