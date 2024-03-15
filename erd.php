<?php
$correctUsername = "user123";
$correctPassword = "password123";

$userUsername = "user123";
$userPassword = "password123";

if ($userUsername == $correctUsername && $userPassword == $correctPassword) {
    echo "Добро пожаловать!";
} else {
    echo "Ошибка входа. Пожалуйста, проверьте введенные данные и попробуйте снова.";
}
?>