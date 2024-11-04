<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $email = htmlspecialchars($_POST['email']);

    // Define recipient email
    $to = "divyaneela75@gmail.com"; // Replace with your email address
    $subject = "New Service Inquiry from $name";
    
    // Construct email message
    $message = "You have received a new inquiry with the following details:\n\n";
    $message .= "Name: $name\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Service Needed: $service\n";
    $message .= "Email: $email\n";
    
    // Additional headers
    $headers = "From: no-reply@example.com\r\n"; // Replace with a valid "From" email address
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your inquiry. We'll get back to you soon!";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
