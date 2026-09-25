<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name    = strip_tags(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone   = strip_tags(trim($_POST["phone"]));
    $subject = strip_tags(trim($_POST["subject"]));
    $message = strip_tags(trim($_POST["message"]));

    $to = "mhmdashfaq180@gmail.com";

    $email_subject = "New Inquiry: $subject";
    
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n\n";
    $email_body .= "Message:\n$message\n";

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<h2 style='text-align:center; margin-top:80px; color:green;'>✅ Thank You! Your message has been sent successfully.</h2>";
        echo "<p style='text-align:center; margin-top:20px;'><a href='contact.php'>← Back to Contact Page</a></p>";
    } else {
        echo "<h2 style='text-align:center; margin-top:80px; color:red;'>❌ Sorry! Could not send email. Please try WhatsApp instead.</h2>";
        echo "<p style='text-align:center;'><a href='contact.php'>← Back</a></p>";
    }
} else {
    header("Location: contact.php");
    exit;
}
?>