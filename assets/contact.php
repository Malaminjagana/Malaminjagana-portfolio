<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"]; // New line to get the subject
    $message = $_POST["message"];

    // my email address
    $to = "jaganalamin@gmail.com";

    // Subject of the email
    $email_subject = "New Contact Form Submission: $subject"; 
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Subject: $subject\n\n";
    $email_content .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send email
    mail($to, $email_subject, $email_content, $headers);
    
    
    echo "Thank you for your message malamin will get back to you soon!";
}
?>
