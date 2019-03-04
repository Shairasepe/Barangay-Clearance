<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from staff where id = '$contact_id'");

  $information = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];



    
    $update = "UPDATE `staff` SET `id`='$id',`first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name' WHERE id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: Lstaff.php');
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
		 <h1>STAFF</h1>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">ID NUMBER</label>
	      			<input type="number" name="id" class="form-control" id="validationCustom01" placeholder="id number" required>
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
          <form class="myform" method="post">
                    <br><input type="submit" name ="update" class="btn" id="save_btn" value="Update"/>
                    <a href ="Lstaff.php"><input class="btn" type="button" id="list_btn" value="List"/><br></br></a>
          </form>
    </form>
</body>
</html>
