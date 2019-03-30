<?php

  require 'config.php';

  $contact_id = $_GET['delete_id'];
  $delete= "Delete from person where persons_id = ".$contact_id;
  if (mysqli_query($con, $delete)) {
    header('location: Lperson.php');
  }else {
    echo "Error: " . $contact_id . "<br>" . mysqli_error($con);
  }


?>