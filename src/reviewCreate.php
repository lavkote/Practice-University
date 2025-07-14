<?php
session_start();

require_once __DIR__ . '\helpr.php' ;

//Проверка на авторизацию
if(isAuth()) {
   $userId =  $_SESSION["user"]["id"];
} else {
   header("Location: /login.html"); 
}

//Получаем данные 
$gameId = $_POST['search'];
$creationDate = time();
$grade = $_POST['grade'];
$message = $_POST['message'];
$gameId = 1;

$connect = getDb();

try {

$sql = "INSERT INTO `review` (userId , gameId, creationDate, revGrade, revMessage) VALUES ('$userId', '$gameId', '$creationDate', '$grade', '$message')";

If ($connect -> query($sql) === TRUE) {
   // echo 'обзор создан успешно';
   header("Location: /index.php");
} else {
   // echo 'ошибка';
   header("Location: /review.html");
}

} catch (mysqli_sql_exception $e) {
header("Location: /review.html");
}