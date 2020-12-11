<?php
    
$servername = "localhost";
$username = "a19albjanmed_r";
$password = "viatgesbbdd";
$dbname = "a19albjanmed_viatges";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "hola <br><br>--";     

$sql = "INSERT INTO usuari (nom_usuari , contrasenya, email) VALUES ('ausias', 'ausias', 'albert@bogart.com');";




if ($conn->query($sql) === TRUE) {
  echo "New record created successfully <br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
