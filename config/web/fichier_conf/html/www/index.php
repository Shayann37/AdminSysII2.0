<?php
$servername = "localhost";
$username = "selectuserb2b";
$password = "Pa1534./.*";
$dbname = "www";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo 'Ceci est la page www ...';
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Value1: " . $row["test1"]. " - Value2: " . $row["test2"]. " - Value3: " . $row["test3"]. " - Value4: " .$row["test4"]."<br>";
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

$sql = "INSERT INTO test (test1, test2, test3, test4)
VALUES (1, 1, 2, 3)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
