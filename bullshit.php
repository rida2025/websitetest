<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$from = 'theemailyousent@gmail.com';
ini_set('sendmail_from', $from);
$to      = 'ridaeljirari@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $test = mail($to, $subject, $message, $headers);
    var_dump($test);
?>