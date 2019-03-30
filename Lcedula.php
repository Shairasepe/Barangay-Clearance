<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM cedula";
	$records=mysqli_query($con,$sql);

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
	  <center><h1>CEDULA RECORD</h1></center>
	  <a href ="index.php"><input class="btn btn-danger btn-lg" type="button" id="list_btn" value="LOGOUT"/></a>
     <table class="table table-dark">
	  <thead>
      <tr>
	  <br>
      		<th scope="col">CEDULA NUMBER</th>
      		<th scope="col">DATE</th>
      		<th scope="col">AMOUNT</th>
      		<th scope="col">PLACE</th>
			<th scope="col">OPERATION</th>
		</br>
      	</tr>
		</thead>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['cedula_id']?></td>
							<td><?php echo $information['date']?></td>
							<td><?php echo $information['amount']?></td>
							<td><?php echo $information['place']?></td>

							<td>
							<a href="Dcedula.php?delete_id=<?php echo $information['cedula_id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="Ecedula.php?edit_id=<?php echo $information['cedula_id']; ?>">Edit</i></a>
						</td>
					</tr>

					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<center><br><a href ="Acedula.php"><input class="btn" type="button" id="list_btn" value="ADD CEDULA"/></br></a>				
						<br><a href ="staff.php"><input class="btn" type="button" id="list_btn" value="HOME"/></a></br></center>
						
</body>
</html>
