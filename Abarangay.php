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
          var msg=confirm('New Record Inserted!!!');
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
<body>
		 <h1>BARANGAY</h1>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">ID_NO:</label>
				      <input name="id" type="number" class="form-control"  id="validationCustom05" placeholder="id_no" value="" required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom08">BARANGAY NAME:</label>
	      			<input name="barangay_name" type="text" class="form-control" id="validationCustom01" placeholder="barangay_name" value="" required>
    			</div>
    		</div>
    		</div>			
			

			
    			<form class="myform" method="post">
				            <input class="btn" type="submit" name ="save" id="save_btn" value="Save"/>
				            <a href ="Lbarangay.php"><input class="btn" type="button" id="list_btn" value="Record"/><br></a>
  				</form>
		</form>
</body>
</html>