<!DOCTYPE html>
<html>
<head>
    <title>Table Reservation System</title>
</head>
<body>
<h1>Check Table Availability</h1>
    <form action="check_availability.php" method="post">
        <label for="reservation_date">Check Availability for Date:</label>
        <input type="date" id="reservation_date" name="reservation_date" required><br><br>

        <input type="submit" value="Check Availability">
    </form>
    <h1>Make a Table Reservation</h1>
    <form action="process_reservation.php" method="post">
        <label for="customer_name">Your Name:</label>
        <input type="text" id="customer_name" name="customer_name" required><br><br>

        <label for="reservation_date">Reservation Date:</label>
        <input type="date" id="reservation_date" name="reservation_date" required><br><br>

        <label for="table_number">Table Number:</label>
        <input type="number" id="table_number" name="table_number" required><br><br>

        <input type="submit" value="Reserve Table">
    </form>
   
</body>
</html>
