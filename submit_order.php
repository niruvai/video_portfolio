<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data
    $effect = $_POST['effect'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Email details
    $to = "nurunnabiislamnirob@gmail.com"; // Replace with your email address
    $subject = "New Effect Order - $effect";
    $message = "
    You have received a new order for an effect. \n
    Order Details: \n
    Name: $name \n
    Email: $email \n
    Address: $address \n
    Ordered Effect: $effect \n
    ";
    $headers = "From: no-reply@yourwebsite.com";

    // Sending the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Order submitted successfully!";
    } else {
        echo "Failed to submit the order. Please try again.";
    }
}
?>