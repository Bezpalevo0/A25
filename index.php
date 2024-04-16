<?php
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the MyGuests table
$sql = "SELECT id, firstname, lastname, city, street, streetnumber FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"] . "<br>";
    echo "Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    echo "City: " . $row["city"] . "<br>";
    echo "Address: " . $row["street"] . " " . $row["streetnumber"] . "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
