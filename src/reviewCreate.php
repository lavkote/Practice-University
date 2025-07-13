<?php
session_start();

require_once __DIR__ . '\helpr.php' ;

if(isAuth()) {
   $userId =  $_SESSION["user"]["id"];
} else {
   header("Location: /login.html"); 
}

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
   header("Location: /index.html");
} else {
   // echo 'ошибка';
   header("Location: /regist.html");
}

} catch (mysqli_sql_exception $e) {
header("Location: /regist.html");
}