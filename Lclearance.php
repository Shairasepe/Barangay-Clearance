<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM clearance";
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
<center>
	  <h1>CLEARANCE RECORD</h1>
     <table class="table table-dark">
	  <thead>
      <tr>
      		<th scope="col">PERSON_ID</th>
			<th scope="col">BARANGAY_ID</th>
      		<th scope="col">DATE</th>
      		<th scope="col">AMOUNT</th>
      		<th scope="col">CEDULA_NO</th>
			<th scope="col">CAPTAIN_NO</th>
			<th scope="col">STAFF_ID</th>
      	</tr>
		</thead>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['id']?></td>
							<td><?php echo $information['person_id']?></td>
							<td><?php echo $information['barangay_id']?></td>
							<td><?php echo $information['date']?></td>
							<td><?php echo $information['amount']?></td>
							<td><?php echo $information['cedula_no']?></td>
							<td><?php echo $information['captain_id']?></td>
							<td><?php echo $information['staff_id']?></td>

							<td>
							<a href="Dclearance.php?delete_id=<?php echo $information['id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="Eclearance.php?edit_id=<?php echo $information['id']; ?>">Edit</i></a>
						</td>
					</tr>

</center>
					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<center><br><a href ="Aclearance.php"><input class="btn" type="button" id="list_btn" value="ADD CLEARANCE"/></br></a>
      					<br><a href ="index.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>						
						<br><a href ="login.php"><input class="btn" type="button" id="list_btn" value="LOGOUT"/></a></br></center>
						
</body>
</html>