<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM staff, barangay WHERE staff.staff_id = staff.staff_id AND barangay.barangay_id = staff.barangay_id";
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

	  <center><h1>STAFF RECORD</h1></center>
	  <a href ="index.php"><input class="btn btn-danger btn-lg" type="button" id="list_btn" value="LOGOUT"/></a>
	  <table class="table table-dark">
	  <thead>
      	<tr>
		<br>
      		<th scope="col">ID_NO</th>
      		<th scope="col">FIRST NAME</th>
      		<th scope="col">MIDDLE NAME</th>
      		<th scope="col">LAST NAME</th>
			<th scope="col">BARANGAY NAME</th>
			<th scope="col">OPERATION</th>
		</br>
      	</tr>
		</thead>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['staff_id']?></td>
							<td><?php echo $information['Firstname']?></td>
							<td><?php echo $information['Middlename']?></td>
							<td><?php echo $information['Lastname']?></td>
							<td><?php echo $information['barangay_name']?></td>

							<td>
							<a href="Dstaff.php?delete_id=<?php echo $information['staff_id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="Estaff.php?edit_id=<?php echo $information['staff_id']; ?>">Edit</i></a>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<center><br><a href ="Astaff.php"><input class="btn" type="button" id="list_btn" value="ADD STAFF"/></br></a>
						<br><a href ="admin.php"><input class="btn" type="button" id="list_btn" value="HOME"/></a></br></center>

						
</body>
</html>
