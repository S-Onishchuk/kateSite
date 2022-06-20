<?php
$number = $_POST['tel'];
$message = "Call me now $number";

$subject = "Call me NOW!!!";
$headers = "Content-type: text/html; charset=utf-8\r\n";

if (mail('onis208@gmail.com', $subject, $message, $headers)) {

    header('Refresh: 2; index.php');
    echo "Ваш номер відправлено";
    exit;
} else {
    header('Refresh: 2; index.php');
    echo "Помилка";
    exit;
}
