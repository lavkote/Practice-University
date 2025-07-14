<?php

require_once __DIR__ . '\helpr.php' ;

$login = $_POST['AccountName'];
$password = $_POST['Password'];
$email = $_POST['Email'];
$connect = getDb();


//запись данных в бд
//echo $login . '-' . $password . '-' . $email;
// //print_r(getDb());
try {

$sql = "INSERT INTO `users` (login , password, email) VALUES ('$login', '$password', '$email')";

If ($connect -> query($sql) === TRUE) {
   // echo 'регистрация успешна';
   header("Location: /login.html");
} else {
   // echo 'Ошибка';
   header("Location: /regist.html");
}

} catch (mysqli_sql_exception $e) {
header("Location: /regist.html");
}
