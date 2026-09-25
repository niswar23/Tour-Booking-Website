<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name   = strip_tags(trim($_POST["name"]));
    $review = strip_tags(trim($_POST["review"]));

    // Your Email
    $to = "mhmdashfaq180@gmail.com";   

    $email_subject = "New Review from $name";
    
    $email_body = "Name: $name\n\n";
    $email_body .= "Review:\n$review\n";

    $headers = "From: $name";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<h2 style='text-align:center; margin-top:80px; color:green;'>✅ Thank You! Your review has been submitted successfully.</h2>";
        echo "<p style='text-align:center;'><a href='contact.php'>← Back to Contact Page</a></p>";
    } else {
        echo "<h2 style='text-align:center; margin-top:80px; color:red;'>❌ Sorry! Something went wrong. Please try again.</h2>";
    }
} else {
    header("Location: contact.php");
    exit;
}
?>