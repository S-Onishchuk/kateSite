<?php

$name = htmlspecialchars($_POST['name']);
$name = urldecode($name);
$name = trim($name);

$number = $_POST['number'];

if ($number == '') {
    $from = $name;
} else {
    $from = "$name - $number";
}

$message = htmlspecialchars($_POST['message']);
$message = urldecode($message);
$message = trim($message);
$message = "$from : $message";

$subject = "Review!!!";
$to = "onis208@gmail.com";

$headers = "Content-type: text/html; charset=utf-8\r\n";

$img = move_uploaded_file($_FILES['filename']['tmp_name'], __DIR__ . '/temp//' . $_FILES['filename']['name']);
//send
if (mail('onis208@gmail.com', $subject, $message, $headers) && $img) {

    if ($_FILES['filename']['size'] > 10 * 1024 * 1024) {
        header('Refresh: 2; /sendreview.php');
        echo "Зображення за велике";
        exit;
    } else {
        header('Refresh: 2; /sendreview.php');
        echo "Зображення загружено <br>";
        echo "Ваш відгук відправлено";
        exit;
    }
} elseif (mail('onis208@gmail.com', $subject, $message, $headers) || $img) {
    header('Refresh: 2; /sendreview.php');
    echo "Ваш відгук відправлено";
    exit;
} else {
    header('Refresh: 2; /sendreview.php');
    echo "Помилка відправки";
    exit;
}