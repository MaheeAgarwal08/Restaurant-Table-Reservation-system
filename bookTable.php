<!DOCTYPE html>
<html>
<head>
    <title>Table Reservation System</title>
</head>
<body>
<h1>BOOK TABLE ACCORDING TO YOUR NEED AND CHOICE</h1>
<h2>Check Table Availability</h2>
    <form action="check_availability.php" method="post">
        <label for="reservation_date">Check Availability for Date:</label>
        <input type="date" id="reservation_date" name="reservation_date" required><br><br>

        <input type="submit" value="Check Availability">
    </form>
    <h2>Make a Table Reservation</h2>
    <form action="process_reservation.php" method="post">
        <label for="customer_name">Your Name:</label>
        <input type="text" id="customer_name" name="customer_name" required><br><br>

        <label for="reservation_date">Reservation Date:</label>
        <input type="date" id="reservation_date" name="reservation_date" required><br><br>

        <label for="table_number">Table Number:</label>
        <input type="number" id="table_number" name="table_number" required><br><br>

        <input type="submit" value="Reserve Table">
    </form>
    <h6>Thanks for booking a .Hope you will have a great time with your family and friends</h6>
   
</body>
</html>
