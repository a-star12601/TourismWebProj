<?php
  $servername = "localhost";
    $username = "Anuroop";
    $password = "1234";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, "udupitourism");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>