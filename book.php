<?php include('header.php'); ?>

<h2>Book Your Package</h2>
<form method="POST" action="process_booking.php">
    <label for="package">Package:</label>
    <select id="package" name="package">
        <option value="flight">Flight</option>
        <option value="hotel">Hotel</option>
    </select><br><br>

    <label for="date">Date:</label>
    <input type="date" id="date" name="date"><br><br>

    <label for="payment">Payment Method:</label>
    <select id="payment" name="payment">
        <option value="credit_card">Credit Card</option>
        <option value="paypal">PayPal</option>
    </select><br><br>

    <input type="submit" value="Book Now">
</form>

<?php include('footer.php'); ?>
