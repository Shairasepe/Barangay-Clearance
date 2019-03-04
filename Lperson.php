<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM persons";
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

	  <center><h1>PERSON RECORD</h1></center>
       <table class="table table-dark">
	  <thead>
      <tr>
      		<th scope="col">ID</th>
      		<th scope="col">FIRST NAME</th>
      		<th scope="col">MIDDLE NAME</th>
      		<th scope="col">LAST NAME</th>
      		<th scope="col">STATUS</th>
      		<th scope="col">ADDRESS</th>
      		<th scope="col">BIRTHDATE</th>
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
							<td><?php echo $information['status']?></td>
							<td><?php echo $information['address']?></td>
							<td><?php echo $information['birth_date']?></td>

							<td>
							<a href="Dperson.php?delete_id=<?php echo $information['id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="Eperson.php?edit_id=<?php echo $information['id']; ?>">Edit</i></a>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<center><br><a href ="Aperson.php"><input class="btn" type="button" id="list_btn" value="ADD PERSON"/></br></a>							
						<br><a href ="index.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>
						<br><a href ="login.php"><input class="btn" type="button" id="list_btn" value="LOGOUT"/></a></br></center>

						
</body>
</html>