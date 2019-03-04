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
<center>
	  <h1>CEDULA RECORD</h1>
     <table class="table table-dark">
	  <thead>
      <tr>
      		<th scope="col">CEDULA NUMBER</th>
      		<th scope="col">DATE</th>
      		<th scope="col">AMOUNT</th>
      		<th scope="col">PLACE</th>
      	</tr>
		</thead>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['id']?></td>
							<td><?php echo $information['date']?></td>
							<td><?php echo $information['amount']?></td>
							<td><?php echo $information['place']?></td>

							<td>
							<a href="Dcedula.php?delete_id=<?php echo $information['id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="Ecedula.php?edit_id=<?php echo $information['id']; ?>">Edit</i></a>
						</td>
					</tr>
</center>

					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<center><br><a href ="Acedula.php"><input class="btn" type="button" id="list_btn" value="ADD CEDULA"/></br></a>
      					<br><a href ="index.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>						
						<br><a href ="login.php"><input class="btn" type="button" id="list_btn" value="LOGOUT"/></a></br></center>
						
</body>
</html>