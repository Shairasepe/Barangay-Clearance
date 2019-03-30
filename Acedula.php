<?php
  session_start();
  require 'config.php';
  if(isset($_POST['save'])){
    $cedula_id = $_POST['cedula_id'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $place = $_POST['place'];


	
    $insert_information = "INSERT INTO  `cedula`(`cedula_id`, `date`, `amount`, `place` ) VALUES ('$cedula_id','$date', '$amount','$place')";
    
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
		 <center><h1>ADD CEDULA</h1>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom01">CEDULA_NO:</label>
	      			<input type="number" name="cedula_id" class="form-control" id="validationCustom01" placeholder="cedula_id" required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom01">DATE:</label>
				      <input type="date" name="date" class="form-control"  id="validationCustom01" placeholder="date" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom01">AMOUNT:</label>
	      			<input type="number" name="amount" class="form-control" id="validationCustom01" placeholder="amount" required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom01">PLACE:</label>
	      			<input type="text" name="place" class="form-control" id="validationCustom01" placeholder="place" required>
    			</div>
    		</div>			
		
			

			
    			<br><form class="myform" method="post">
				            <input type="submit" name ="save" class="btn btn-success" id="save_btn" value="Save"/>
				            <a href ="Lcedula.php"><input class="btn btn-success" type="button" id="list_btn" value="Record"/><br></a></br>
						</center>
  				</form>
		</form>
</body>
</html>