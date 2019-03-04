<?php
  session_start();
  require 'config.php';
  if(isset($_POST['save'])){
    $id = $_POST['id'];
    $barangay_name = $_POST['barangay_name'];


	
    $insert_information = "INSERT INTO  `barangay`(`id`, `barangay_name` ) VALUES ('$id', '$barangay_name')";
    
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
<center>
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
				      <input type="number" name="id" class="form-control"  id="validationCustom05" placeholder="id_no" required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom08">BARANGAY NAME:</label>
	      			<input type="text" name="barangay_name" class="form-control" id="validationCustom01" placeholder="barangay_name" required>
    			</div>
    		</div>
    		</div>			
			

			
    			<br><form class="myform" method="post">
				            <input type="submit" name ="save" class="btn" id="save_btn" value="Save"/>
				            <a href ="Lbarangay.php"><input class="btn" type="button" id="list_btn" value="Record"/><br></a></br>
  				</form>
		</form>
</center>
</body>
</html>