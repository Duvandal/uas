 <?php
$servername = "mysql-server";
$username = "root";
$password = "password";
$dbname = "Trucorp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["ID"]. " - Nama: " . $row["Nama"]. " - Kantor:" . $row["Kantor"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 
