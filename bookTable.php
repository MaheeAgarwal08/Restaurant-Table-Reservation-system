<!DOCTYPE html>
<html>
<head>
    <title>Table Reservation System</title>
    <style>
        /* Add these styles to your existing CSS or create a new CSS file */

.booking-form {
  background-color: #f9f9f9;
  padding: 40px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin: 20px 0;
}

.booking-form h2 {
  text-align: center;
  margin-bottom: 20px;
}

.booking-form form {
  display: flex;
  flex-direction: column;
}

.booking-form label {
  margin-bottom: 5px;
}

.booking-form input {
  padding: 8px;
  margin-bottom: 10px;
}

.booking-form button {
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.booking-form button:hover {
  background-color: #0056b3;
}
</style>
</head>
<body>
    <section class="booking-form">
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
</section>
</body>
</html>
