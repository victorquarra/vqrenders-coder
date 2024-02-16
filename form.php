<?php
// Retrieve form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Handle invalid email
    echo "Invalid email format";
    exit; // Stop script execution
}

// Construct email message
$to = "vqrenders@gmail.com";
$subject = "Mail from website";
$txt = "Name: $name\r\nEmail: $email\r\nMessage: $message";
$headers = "From: noreply@vqrendersstudio.com";

// Send email
if (mail($to, $subject, $txt, $headers)) {
    // Email sent successfully, redirect to success page
    header('Location: https://vqrendersstudio.com/pages/exito.html');
    exit;
} else {
    // Handle email sending failure
    echo "Failed to send email";
}
?>