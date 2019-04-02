<?php 
	session_start();
	require 'config.php';

	$clearance_id = isset($_GET['clearance_id']) ? $_GET['clearance_id']: null; 
	$sql = "SELECT * FROM person, barangay, cedula, captain, staff, clearance 
			WHERE person.persons_id = person.persons_id
			AND barangay.barangay_id = barangay.barangay_id
			AND cedula.cedula_id = cedula.cedula_id 
			AND captain.captain_id = captain.captain_id 
			AND staff.staff_id = staff.staff_id AND person.persons_id = clearance.persons_id 
			AND barangay.barangay_id=clearance.barangay_id AND captain.captain_id=clearance.captain_id 
			AND staff.staff_id=clearance.staff_id and clearance.clearance_id = ".   $clearance_id; 
			
	
	$res = mysqli_query($con, $sql);
	$line = mysqli_fetch_array($res);
	
?>

<!DOCTYPE html>
<html>
	<title>BarangayClearance</title>
<body>
		<center><h1>Republic of the Philippines</h1>
		<h4>Province of Misamis Occidental</h4>	
		<h4>City of Oroquieta</h4>
		<h4>BARANGAY <u><?php echo ucfirst( $line["barangay_name"])?></h4></u></center>

		
		<center><h2>BARANGAY CLEARANCE</h2></center>
			
		<p>To Whom It May Concern:</p>
				<blockquote><p>This is to certify that <u><?php echo ucfirst( $line["first_name"] . " " .$line["middle_name"] . " " .$line["last_name"] )?></u>,
				legal age, <u><?php echo $line["status"]; ?></u>, a bonafide resident of Barangay <u><?php echo ucfirst( $line["barangay_name"])?></u>, Oroquieta City is personally known by the undersigned as peaceful
				and law abiding citizen in the community.</p></blockquote>			

				<blockquote><p>This is to certifies that he/she has no pending case or criminal
				involving moral turpitude neither he/she charge for any criminal case
				in the community or per records in the Barangay.</p></blockquote>
				
				<blockquote><p>This is to certification is issued upon the request of the aboved-
				named person in connection with his/her desire <u><?php echo ucfirst( $line["purpose"])?></u>.</p></blockquote>
			<blockquote><p>Given this <u><?php date_default_timezone_set('Asia/Manila'); echo date('F j, Y '); ?></u>at 
			Barangay Taboc Sur, Oroquieta City, Philippines.</p></blockquote>
			
			
			
			<center><u><?php echo ucfirst( $line ["firstname"] . " " .$line ["middlename"] . " " .$line ["lastname"] )?></u>
		          
	           	            

	           
			<h4>PUNONG BARANGAY</h4></br></br></br></center>
			
			<center><input class="btn btn-primary" type="button" onclick="window.print()" value="Print page"/>
			<a href ="Lclearance.php"><input class="btn" type="button" id="list_btn" value="Back"/><br></a>

</body>
</html>