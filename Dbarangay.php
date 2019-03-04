<?php

  require 'config.php';

  $contact_id = $_GET['delete_id'];
  $delete= "Delete from barangay where id = ".$contact_id;
  if (mysqli_query($con, $delete)) {
    header('location: Lbarangay.php');
  }else {
    echo "Error: " . $contact_id . "<br>" . mysqli_error($con);
  }


?>