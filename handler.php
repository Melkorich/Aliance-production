<?php 

$user_name = $_POST["username"];
$user_phone = $_POST["userphone"];

echo "Привет,  <b>" . $user_name . "</b>" . "<br>";
echo "Ваш номер:  <b>" . $user_phone . "</b>";