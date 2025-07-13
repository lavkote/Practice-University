<?php

require_once __DIR__ . '\helpr.php' ;

if(isAuth()) {
   $userId =  $_SESSION["user"]["id"]
} else {
   header("Location: /login.html"); 
}

$gameId = $_POST['search'];
$creationDate = time();
$grade = $_POST['grade'];
$message = $_POST['message'];

$connect = getDb();
