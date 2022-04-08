<?php

if (!empty($_POST)) {
    if (empty($_POST['name'])) {
        $errors[] = 'Поле name пустое';
    }
    if (empty($_POST['age'])) {
        $errors[] = 'Поле age пустое';
    } else if (!is_numeric($_POST['age'])) {
        $errors[] = 'Поле age не содержит цифры';
    }
    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo "<strong>$err</strong><br>";
        }
    }
}

if (!empty($_POST)) {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $pass = htmlspecialchars($_POST['password']);
}



echo "Привет $name, твой возраст: $age Твой пароль: $pass";



?>