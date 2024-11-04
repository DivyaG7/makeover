<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $email = $_POST['email'];

    // Recipient email address
    $to = "divyaneela75@gmail.com"; // Replace with your email address

    // Email subject
    $subject = "New Contact Form Submission";

    // Email body content
    $body = "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Service Needed: $service\n";
    $body .= "Email: $email\n";

    // Email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Failed to send your message. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
