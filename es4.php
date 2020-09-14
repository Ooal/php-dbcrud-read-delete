<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_hotel";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn && $conn->connect_error) {
echo "Connection failed: " . $conn->connect_error;
}



$sql = "SELECT id , status , price
FROM pagamenti
WHERE price > 600";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
  echo '<ul>';
while($row = $result->fetch_assoc()) {
  echo '<li>' .$row['id'] ." - " .$row['status'] ." - " .$row['price'] .'</li>';
}
  echo '</ul>';
} elseif ($result) {
echo "0 results";
} else {
echo "query error";
}
$conn->close();


 ?>
