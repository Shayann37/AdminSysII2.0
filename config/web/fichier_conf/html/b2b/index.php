<?php
echo'Ceci est la page pour les fournisseurs (b2b)';
$servername = "localhost";
$username = "selectuserb2b";
$password = "Pa1534./.*";
$dbname = "b2b";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Donnée de test 1 : " . $row["xxx"]. " - Donnée de test 2: " . $row["sss"]. " - Donnée de test 3: " . $row["zzzz"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sqlinsert = "INSERT INTO test (sss, xxx, www, zzzz)
VALUES (1, 2, 3, 4)";

if ($conn->query($sqlinsert) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sqlinsert . "<br>" . $conn->error;
}

$conn->close();
?>
