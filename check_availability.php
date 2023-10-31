<?php
// Establish connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "table_reservations";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$reservation_date = $_POST['reservation_date'];

// SQL to check table availability for the given date
$sql = "SELECT t.table_number, t.capacity
        FROM tables t
        WHERE t.table_number NOT IN (
            SELECT r.table_number
            FROM reservations r
            WHERE r.reservation_date = '$reservation_date'
        )";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Tables available for $reservation_date: <br>";
    while ($row = $result->fetch_assoc()) {
        echo "Table " . $row["table_number"] . " - Capacity: " . $row["capacity"] . " persons" .  "<br>";
    }
} else {
    echo "No tables available for $reservation_date";
}

$conn->close();
?>
