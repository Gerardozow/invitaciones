<?php
  $conn = new mysqli("localhost", "User", "Password", "DB");
  
  if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } else  {
      return $conn;
  }
    
    $conn->close();
?>
