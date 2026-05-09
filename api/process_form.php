<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = htmlspecialchars(strip_tags($_POST['name'] ?? ''));
    $email   = htmlspecialchars(strip_tags($_POST['email'] ?? ''));
    $phone   = htmlspecialchars(strip_tags($_POST['phone'] ?? ''));
    $service = htmlspecialchars(strip_tags($_POST['service'] ?? ''));
    $message = htmlspecialchars(strip_tags($_POST['message'] ?? ''));

    $to      = "bukogeotechnical@gmail.com";
    $subject = "New Inquiry from BUGAMEC Website";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    if ($service) $body .= "Service: $service\n";
    $body .= "\nMessage:\n$message\n\n";
    $body .= "Submitted on: " . date('Y-m-d H:i:s');

    $headers = "From: no-reply@bugamec.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Thank you! We will contact you soon.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to send. Please try again.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>