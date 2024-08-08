<?php
include('database.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert into database
$sql = "INSERT INTO customers (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Account created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
