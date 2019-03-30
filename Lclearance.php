<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM person, barangay, cedula, captain, staff, clearance WHERE person.persons_id = person.persons_id AND barangay.barangay_id = barangay.barangay_id AND cedula.cedula_id = cedula.cedula_id AND captain.captain_id = captain.captain_id AND staff.staff_id = staff.staff_id AND person.persons_id =clearance.persons_id AND barangay.barangay_id=clearance.barangay_id AND captain.captain_id=clearance.captain_id AND staff.staff_id=clearance.staff_id";
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
	  <center><h1>CLEARANCE RECORD</h1></center>
	 <a href ="index.php"><input class="btn btn-danger btn-lg" type="button" id="list_btn" value="LOGOUT"/></a>
     <table class="table table-dark">
	  <thead>
      <tr>
	  <br>
			<th scope="col">CLEARANCE NO</th>
      		<th scope="col">NAME</th>
			<th scope="col">BARANGAY NAME</th>
      		<th scope="col">DATE</th>
      		<th scope="col">AMOUNT</th>
      		<th scope="col">CEDULA NO</th>
			<th scope="col">CAPTAIN NAME</th>
			<th scope="col">STAFF NAME</th>
			<th scope="col">Purpose</th>
			<th scope="col">OPERATION</th>
		</br>
      	</tr>
		</thead>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['clearance_id']?></td>
							<td><?php echo $information['first_name']?> <?php echo $information['middle_name']?> <?php echo $information['last_name']?></td>
							<td><?php echo $information['barangay_name']?></td>
							<td><?php echo $information['date']?></td>
							<td><?php echo $information['amount']?></td>
							<td><?php echo $information['cedula_id']?></td>
							<td><?php echo $information['firstname']?></td>
							<td><?php echo $information['Firstname']?></td>
							<td><?php echo $information['purpose']?></td>

							<td>
							<a href="Dclearance.php?delete_id=<?php echo $information['clearance_id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="Eclearance.php?edit_id=<?php echo $information['clearance_id']; ?>">Edit</i></a>
						</td>
						<td>
							<a href="print.php?clearance_id=<?php echo $information['clearance_id']; ?>"><input class="btn" type="button" id="list_btn" value="PRINT"/>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<center><br><a href ="Aclearance.php"><input class="btn" type="button" id="list_btn" value="ADD CLEARANCE"/></br></a>					
						<br><a href ="staff.php"><input class="btn" type="button" id="list_btn" value="HOME"/></a></br>
						</center>
						
</body>
</html>
