<?php include('header.php'); ?>

<h2>Search Flights and Hotels</h2>
<form method="GET" action="search_results.php">
    <label for="destination">Destination:</label>
    <input type="text" id="destination" name="destination"><br><br>
    
    <label for="date">Date:</label>
    <input type="date" id="date" name="date"><br><br>
    
    <label for="type">Type:</label>
    <select id="type" name="type">
        <option value="flight">Flight</option>
        <option value="hotel">Hotel</option>
    </select><br><br>
    
    <input type="submit" value="Search">
</form>

<?php include('footer.php'); ?>
