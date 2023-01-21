<?php 

$user_name = htmlspecialchars ($_POST["username"]);
$user_phone = htmlspecialchars ($_POST["userphone"]);


$token = "5713451563:AAEskfKY6ITsRmW05vSzb1KesFcQEyKcU3k";
$chat_id = "-811545265";

$formData = array(
    "Клиент: " => $user_name,
    "Телефон: " => $user_phone,
);

foreach($formData as $key => $value) {
    $text .= $key . "<b?>" . urldecode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
    echo "succes";
} else {
    echo "error";
}

// echo "Привет,  <b>" . $user_name . "</b>" . "<br>";
// echo "Ваш номер:  <b>" . $user_phone . "</b>";