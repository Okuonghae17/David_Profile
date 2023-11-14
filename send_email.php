<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Your email address
    $to = "dokuonghae256@gmail.com"; // Replace with your actual email address

    // Email subject
    $subject = "New Message from $name";

    // Email headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect the user after sending the email (you can customize this URL)
    header("Location: Thank_You.html");
} else {
    // Redirect if accessed directly without form submission
    header("Location: index.html");
}
?>
