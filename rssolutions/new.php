<?php
if(isset($_POST['submit'])) {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set recipient email address
    $to = "youremail@example.com";

    // Set email subject
    $subject = "New Contact Form Submission";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers
    $headers = "From: $name <$email>";

    // Send the email
    if(mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "There was a problem sending your message. Please try again later.";
    }
}
?>


<form method="post" action="contact.php">
    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="message">Message:</label>
    <textarea name="message" required></textarea>

    <button type="submit" name="submit">Send</button>
</form>
