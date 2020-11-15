 <?php
$servername = "localhost";
$username = "ltest";
$password = "Adein1Dva2!";
//eschborn.lysithea.dreamhost.com

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error . "\n");
}
//echo "Connected successfully \n";
?> 