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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "your-email@example.com";
    $subject = "Новое сообщение с портфолио";
    $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Сообщение отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
}