<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set recipient email address
    $to = 'muadeyinka@gmail.com'; // Replace with your email address

    // Email subject and body
    $subject = 'New message from your website';
    $message_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Email headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message_body, $headers)) {
        // Email sent successfully
        echo '<p>Your message has been sent successfully. We will contact you shortly.</p>';
    } else {
        // Email sending failed
        echo '<p>Sorry, we encountered an error while sending your message. Please try again later.</p>';
    }
}
?>
