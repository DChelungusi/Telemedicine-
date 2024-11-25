<?php
  require_once('../dbconn.php');

  $sql = "INSERT INTO appointments (name,email, phone,date,department	, doctor, message )
  VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['date']."',    '".$_POST['department']."',   '".$_POST['doctor']."', '".$_POST['message']."')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  
?>