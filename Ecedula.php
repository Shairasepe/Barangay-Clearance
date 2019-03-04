<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from cedula where id = '$contact_id'");

  $information = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
    $id = $_POST['id'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $place = $_POST['place'];



    
    $update = "UPDATE `cedula` SET `id`='$id',`date`='$date',`amount`='$amount',`place`='$place' WHERE id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: Lcedula.php');
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
	     <h1>CEDULA</h1>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">CEDULA NUMBER:</label>
	      			<input type="number" name="id" class="form-control" id="validationCustom01" placeholder="cedula number" required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">DATE:</label>
				      <input type="date" name="date" class="form-control"  id="validationCustom05" placeholder="date" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">AMOUNT:</label>
	      			<input type="number" name="amount" class="form-control" id="validationCustom01" placeholder="amount" required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom05">PLACE:</label>
	      			<input type="text" name="place" class="form-control" id="validationCustom01" placeholder="place" required>
    			</div>
    		</div>				
          <form class="myform" method="post">
                    <br><input type="submit" name ="update" class="btn" id="save_btn" value="Update"/>
                    <a href ="Lcedula.php"><input class="btn" type="button" id="list_btn" value="List"/><br><br></a>
          </form>
    </form>
</body>
</html>
