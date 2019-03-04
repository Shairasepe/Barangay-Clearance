<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from barangay where id = '$contact_id'");

  $information = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
    $id = $_POST['id'];
    $barangay_name = $_POST['barangay_name'];



    
    $update = "UPDATE `barangay` SET `id`='$id',`barangay_name`='$barangay_name' WHERE id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: Lbarangay.php');
    }else {
      echo "Error: " . $update . "<br>" . mysqli_error($con);
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
		 <h1>BARANGAY</h1>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">ID_NO:</label>
				      <input type="number" name="id" class="form-control"  id="validationCustom05" placeholder="id_no" required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom08">BARANGAY NAME:</label>
	      			<input type="number" name="barangay_name" class="form-control" id="validationCustom01" placeholder="barangay_name" required>
    			</div>
    		</div>
    		</div>	
          <form class="myform" method="post">
                    <br><input type="submit" name ="update" class="btn" id="save_btn" value="Update"/>
                    <a href ="Lbarangay.php"><input class="btn" type="button" id="list_btn" value="List"/><br></br></a>
          </form>
    </form>
</body>
</html>
