<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    // Get other form fields (phone, subject, etc.)

    // Send email (you can use a library like PHPMailer for better handling)
    $to = "mumairliqatO@gmail.com"; // Your email address
    $subject = "New Contact Form Submission from $name";
    $message = "Name: $name\nEmail: $email\n"; // Add other fields similarly
    mail($to, $subject, $message);

    // Redirect to a thank-you page or display a success message
    header("Location: thank-you.html");
    exit;
}
?>
