<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // ensure all fields are filled in
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        return;
    }

    // use wordwrap() if lines are longer than 70 characters
    $message = wordwrap($message, 70);

    // send email
    $to = "connect.bilalsheikh@gmail.com";
    $subject = "Contact Form Submission from " . $name;
    $headers = "From: " . $email;

    if(mail($to, $subject, $message, $headers)){
        echo "Thank you for your email!";
    } else {
        echo "Failed to send email. Please try again.";
    }
}
?>
