<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    // Validate form inputs
    if(empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "Please fill in all fields";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } else {
        // Send email
        $to = "webmsater@sidmosestech.com";
        $subject = "New Inquiry";
        $mailBody = "Name: $name\n";
        $mailBody .= "Email: $email\n";
        $mailBody .= "Phone: $phone\n";
        $mailBody .= "Message: $message\n";
        
        $headers = "From: $email";
        
        if(mail($to, $subject, $mailBody, $headers)) {
            echo "Email sent successfully";
        } else {
            echo "Failed to send email";
        }
    }
}

?>