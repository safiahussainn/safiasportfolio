<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient_email = "safiahussain08@icloud.com"; // Replace with your email address

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $subject = "Contact Form Submission from $name";
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    $headers = "From: $email";

    $success = mail($recipient_email, $subject, $email_message, $headers);

    if ($success) {
        echo "Thank you for your message. We'll get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
