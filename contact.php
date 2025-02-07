<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "kalmykov.k.24@gmail.com"; 
    $subject = "Новое сообщение с портфолио";
    $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";

    mail($to, $subject, $body);
    echo "Сообщение отправлено!";
}
?>
