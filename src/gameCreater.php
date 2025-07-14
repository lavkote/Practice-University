<?php

require_once __DIR__ . '\helpr.php' ;

$name = "Atomic Heart";
$grade = "10";
$developer = "Mundfish";
$creationDate = date("d-m-Y", strtotime("2023-02-21"));
$description = "Масштабный сбой системы на Советском Предприятии №3826 привел к восстанию машин против человечества. Вы — Майор P-3, ваша задача — ликвидировать последствия глобальной катастрофы и сдержать утечку засекреченной информации, угрожающей уничтожением всему миру.";
$imageUrl = "/Images/Atomic_Heart.webp";

$connect = getDb();

$sql = "INSERT INTO `users` (login , password, email) VALUES ('$login', '$password', '$email')";

$result = $connect->query($sql);

If ($connect -> query($sql) === TRUE) {
 echo 'игра добавленна';
} else {
 echo 'не работает';
}

?>
