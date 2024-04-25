<?php

// Создаем переменные для принятия данных из POST массива
$name = $_POST['name'];
$email = $_POST['email'];

// Преобразуем символы, добавленные в форму
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);

// Декодируем URL
$name = urldecode($name);
$email = urldecode($email);

// Убираем пробелы
$name = trim($name);
$email = trim($email);


// Функция mail в PHP
// mail("abramov-24@yandex.ru", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email ,"From: qltbmqtm@junji.p-host.in \r\n");

// Проверка отправки формы
// echo $name;
// echo "<br>";
// echo $email;


if (mail("abramov-24@yandex.ru", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email ,"From: qltbmqtm@junji.p-host.in \r\n")) {

  print("ok");
  // echo "Вы успешно отправили заявку";
} else {
  print("wrong");
  // echo "при отправке заявки возникли ошибки";
}

