<?php
session_start();

require_once __DIR__ . '\helpr.php' ;

$login = $_POST['AccountName'];
$password = $_POST['Password'];
$connect = getDb();

//Запрашиваем все строки с совпадением

$sql = "SELECT * FROM `users` WHERE `Login` = ('$login') AND `password` = ('$password') ";

$result = $connect->query($sql);

//Сырые данные
//print_r($result-> fetch_assoc());

//Проверка на совподение введёного пароля и логина

if ($result -> num_rows > 0) {
    while($row = $result-> fetch_assoc()){
      //  echo $row['id'];
      //  echo $row['login'];

      //Записываем id пользователя в сессию
      $_SESSION["user"]["id"] = $row['id'];

      header("Location: /index.php");
    }
} else {
    header("Location: /login.html");
}