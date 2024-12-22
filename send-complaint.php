<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $email = htmlspecialchars($_POST['email']);
    $pin = htmlspecialchars($_POST['pin']);
    $ward = htmlspecialchars($_POST['ward']);
    $complaint = htmlspecialchars($_POST['complaint']);
    
    $to = "ayushmansarkar123@gmail.com"; // Replace with your recipient email address
    $subject = "New Complaint Submission from $name";
    
    $message = "
    <html>
    <head>
        <title>Complaint Details</title>
    </head>
    <body>
        <h2>Complaint Form Details</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Phone Number:</strong> $phone</p>
        <p><strong>Address:</strong> $address</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>PIN Code:</strong> $pin</p>
        <p><strong>Ward Number:</strong> $ward</p>
        <p><strong>Complaint:</strong> $complaint</p>
    </body>
    </html>
    ";
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: ayushmansarkar123@gmail.com" . "\r\n"; // Replace with your domain email
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your complaint has been submitted.";
    } else {
        echo "Sorry, there was an error submitting your complaint. Please try again.";
    }
}
?>
