<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Construct email message
    $email_message = "
    Name: $name
    Email: $email
    Phone: $phone
    Subject: $subject
    Message: $message
    ";

    // Send email
    $to = "karinternationalinfotech@gmail.com";
    $subject = "New Message";
    $headers = "From: $email";

    if (mail($to, $subject, $email_message, $headers)) {
        // Redirect to index.html
        header("Location: https://karinternationalinfotech.com/index.html");
        exit();
    } else {
        // If mail function fails
        echo "Failed to send email. Please try again later.";
    }
} else {
    // If not a POST request, redirect to index.html
    header("Location: https://karinternationalinfotech.com/index.html");
    exit();
}
?>
