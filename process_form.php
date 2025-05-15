<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Save to a text file
    $data = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n\n";
    file_put_contents('form_submissions.txt', $data, FILE_APPEND);
    
    // Or send an email
    $to = "tanmayupadhyay20@gmail.com";
    $headers = "From: $email";
    mail($to, $subject, $message, $headers);
    
    // Redirect after submission
    header('Location: thank-you.html');
    exit;
}
?>