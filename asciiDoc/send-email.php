<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "robert.macalintal0302@gmail.com";
    $subject = "New Message from " . $_POST['name'] . " - " .  $_POST['email'];
    $message = "Message: " . $_POST['message'];
    mail($to, $subject, $message);
    header("Location: thanks.adoc");
    exit();
}
?>
