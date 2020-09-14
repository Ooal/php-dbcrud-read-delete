<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_hotel";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn && $conn->connect_error) {
echo "Connection failed: " . $conn->connect_error;
}



$sql = "DELETE
FROM pagamenti
WHERE pagante_id = 6
AND status LIKE 'rejected'";
$result = $conn->query($sql);
if ($result ) {
echo "delete complete";
} else {
echo "error";
}
$conn->close();


 ?>
