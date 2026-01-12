<?php
$to = $_POST['email'];
$message = $_POST['message'];
$subject = "Job Application Update";
$headers = "From: hr@company.com";

if (mail($to, $subject, $message, $headers)) {
    echo "<h2>Email sent successfully!</h2>";
} else {
    echo "<h2>Failed to send email.</h2>";
}
?>