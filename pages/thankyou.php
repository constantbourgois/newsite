<?php

    // Sanitize user input
    $u_name = htmlspecialchars(trim($_POST['u_name'] ?? ''));
    // Remove line breaks and special characters from name to prevent header injection
    $u_name = preg_replace('/[\r\n]+/', ' ', $u_name);
    $u_name = strip_tags($u_name);
    $u_name = htmlspecialchars($u_name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

    $u_email = filter_var(trim($_POST['u_email'] ?? ''), FILTER_SANITIZE_EMAIL);
    if (!filter_var($u_email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email address
        echo 'invalid_email';
        exit;
    }
    // Remove line breaks from email to prevent header injection
    $u_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $u_email);

    $user_message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Send email
    $to      = 'constantbourgois@gmail.com';
    $subject = 'contact site web';

    // Prepare the message
    $message = "Name: $u_name\n";
    $message .= "Email: $u_email\n";
    $message .= "Message:\n$user_message\n";

    // Prepare headers
    $headers = "From: $u_name <$u_email>\r\n";
    $headers .= "Reply-To: $u_email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

	if (mail($to, $subject, $message, $headers)) {
		// Send back to client
    echo 'mail_sent';
    exit;
} else {
    //send back to client
    echo 'mail_failed';
    exit;
}
   