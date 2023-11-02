<!DOCTYPE html>
<html>
<head>
    <title>Table Availability</title>
    <style>
        /* Style the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>



<?php
// Establish connection to the database
$servername="localhost";
$username = "root";
$password = "";
$dbname = "table_reservations";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
        echo "<h2>Tables available for $reservation_date:</h2>";
        echo "<table>";
        echo "<tr><th>Table Number</th><th>Capacity</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["table_number"] . "</td>";
            echo "<td>" . $row["capacity"] . " persons</td>";
           
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No tables available for $reservation_date</p>";
    }
}

$conn->close();
?>

</body>
</html>

