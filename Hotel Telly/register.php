<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $contact  = $_POST['contact'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, contact, password) 
            VALUES ('$name', '$email', '$contact', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: hotel.html");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>