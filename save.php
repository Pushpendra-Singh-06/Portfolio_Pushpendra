<?php

$name = htmlspecialchars($_POST['name']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$phone = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address");
}

$to = "pushpendrasingh85793@gmail.com";
$subject = "Response from Portfolio";

$body = "
New Contact Form Submission

Name: $name
Email: $email
Phone: $phone

Message:
$message
";

$headers = "From: info@yourdomain.com\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
    header("Location: index.html?success=1");
    exit();
} else {
    echo "<script>
    alert('Failed to send message');
    history.back();
    </script>";
}
?>
