<?php include('header.php'); ?>

<h2>Create an Account</h2>
<form method="POST" action="process_signup.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Sign Up">
</form>

<h2>Your Previous Bookings</h2>
<!-- Assume session handling and DB query -->
<ul>
    <li>Booking 1: New York to London on 2024-08-15</li>
    <li>Booking 2: Hotel Stay at The Plaza Hotel from 2024-09-01 to 2024-09-05</li>
</ul>

<?php include('footer.php'); ?>
