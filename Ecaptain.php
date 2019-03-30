<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from captain where captain_id = '$contact_id'");

  $information = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
    $captain_id = $_POST['captain_id'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];



    
    $update = "UPDATE `captain` SET `captain_id`='$captain_id',`firstname`='$firstname',`middlename`='$middlename',`lastname`='$lastname' WHERE captain_id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: Lcaptain.php');
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
<center>
		 <h1>CAPTAIN</h1>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">ID NUMBER</label>
	      			<input type="number" name="captain_id" class="form-control" id="validationCustom01" placeholder="captain_id" value="<?php echo $information['captain_id']?>" required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">FIRST NAME:</label>
				      <input type="text" name="firstname" class="form-control"  id="validationCustom05" placeholder="First Name" value="<?php echo $information['firstname']?>" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">MIDDLE NAME</label>
	      			<input type="text" name="middlename" class="form-control" id="validationCustom01" placeholder="Middle name" value="<?php echo $information['middlename']?>" required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom05">LAST NAME:</label>
	      			<input type="text" name="lastname" class="form-control" id="validationCustom01" placeholder="Last name" value="<?php echo $information['lastname']?>" required>
    			</div>
    		</div>		
          <form class="myform" method="post">
                    <br><input type="submit" name ="update" class="btn" id="save_btn" value="Update"/>
                    <a href ="Lcaptain.php"><input class="btn" type="button" id="list_btn" value="Record"/><br></br></a>
				</center>
          </form>
    </form>
</body>
</html>
