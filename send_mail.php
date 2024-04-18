<?php
if(isset($_POST['submit'])) {
    $to = "rohitblade0105@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: $name <$from>";

    if(mail($to, $subject, $message, $headers)) {
        echo "<p>Your message has been sent successfully!</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message.</p>";
    }
}
?>