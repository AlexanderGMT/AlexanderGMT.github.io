<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $message = $_POST["subject"];

    // You can add further processing or validation here

    // For demonstration purposes, let's just print the data
    echo "Name: $fname $lname<br>";
    echo "Message: $message";
}
?>