<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM staff";
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
	  <table class="table table-dark">
	  <thead>
      	<tr>
      		<th scope="col">ID_NO</th>
      		<th scope="col">FIRST NAME</th>
      		<th scope="col">MIDDLE NAME</th>
      		<th scope="col">LAST NAME</th>
      	</tr>
		</thead>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['id']?></td>
							<td><?php echo $information['first_name']?></td>
							<td><?php echo $information['middle_name']?></td>
							<td><?php echo $information['last_name']?></td>

							<td>
							<a href="Dstaff.php?delete_id=<?php echo $information['id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="Estaff.php?edit_id=<?php echo $information['id']; ?>">Edit</i></a>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<center><br><a href ="Astaff.php"><input class="btn" type="button" id="list_btn" value="ADD STAFF"/></br></a>
      					<br><a href ="index.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>
						<br><a href ="login.php"><input class="btn" type="button" id="list_btn" value="LOGOUT"/></a></br></center>

						
</body>
</html>