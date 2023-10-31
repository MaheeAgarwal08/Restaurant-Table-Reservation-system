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
$customer_name = $_POST['customer_name'];
$reservation_date = $_POST['reservation_date'];
$table_number = $_POST['table_number'];

// SQL to insert the reservation into the database
$sql = "INSERT INTO reservations (customer_name, reservation_date, table_number) VALUES ('$customer_name', '$reservation_date', $table_number)";

if ($conn->query($sql) === TRUE) {
    echo "Reservation made successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
