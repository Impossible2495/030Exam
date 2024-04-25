<?php

header('Content-Type: text/html; charset=utf-8');

$name = $_POST["name"];
$email = trim($_POST["email"]);

// $host = "localhost";
// $db = "qltbmqtm_030Exam";
// $user = "qltbmqtm_030Exam";
// $password = "qwerty123456789";

$host = "localhost";
$db = "qltbmqtm_030";
$user = "qltbmqtm_030";
$password = "qwerty123";

//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect($host, $user, $password, $db);

// Добавляем пользователя в базу данных
if ($mysqli == false) {
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
} else {
    print("Соединение установлено успешно");
    $result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");

    if ($result->num_rows != 0 ) {
      print("exist");
    } else {
      $mysqli->query("INSERT INTO `users`(`name`, `email`) VALUES ('$name','$email')");
      print("ok");
    }
  }

// $sql = "INSERT INTO `users`(`name`, `email`) VALUES ('$name','$email')";
// $stmt = $mysqli->prepare($sql);
// $stmt->bind_param("ss", $name, $email);
// $stmt->execute();