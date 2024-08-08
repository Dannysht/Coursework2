<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to the CSS file -->
</head>
<body>
<?php 
include('header.php'); 
include('database.php'); // Include the database connection
?>

<div class="container">
        <h1>Welcome to Our Travel Website</h1>

        <h2>Current Promotions</h2>
        <ul>
            <li class="element">Save 20% on your next booking!</li>
            <li class="element">Fly to Paris for just $199!</li>
        </ul>

        <h2>Popular Flights</h2>
        <table cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Flight Number</th>
                    <th>Airline</th>
                    <th>Departure Airport</th>
                    <th>Arrival Airport</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $pdo->query("SELECT flight_number, airline, departure_airport, arrival_airport, price FROM flights ORDER BY RAND() LIMIT 5");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['flight_number'] . '</td>';
                    echo '<td>' . $row['airline'] . '</td>';
                    echo '<td>' . $row['departure_airport'] . '</td>';
                    echo '<td>' . $row['arrival_airport'] . '</td>';
                    echo '<td>' . $row['price'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

        <h2>Popular Hotels</h2>
        <table cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Hotel Name</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Price per night</th>
                    <th>Max guests</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $pdo->query("SELECT name, city, country, price_per_night, max_guests FROM accommodations ORDER BY RAND() LIMIT 5");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['city'] . '</td>';
                    echo '<td>' . $row['country'] . '</td>';
                    echo '<td>' . $row['price_per_night'] . '</td>';
                    echo '<td>' . $row['max_guests'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

        <a href="search.php">Search Flights and Hotels</a><br>
        <a href="signup.php">Create an Account</a><br>
        <a href="admin.php">Admin Panel</a>
    </div>

<?php include('footer.php'); ?>

</body>
</html>