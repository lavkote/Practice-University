<?php

const DB_HOST = 'MySQL-8.0';
const DB_NAME = 'practice';
const DB_USER = 'root';
const DB_PASS = '';

function getDb(): bool|mysqli {
    return mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME );
}

//Проверка на авторизацию
function isAuth(): bool{
    $connect = getDb();

    try {
        if (isset($_SESSION["user"]["id"]) && $_SESSION["user"]["id"] !== '') {
            return true;
        } else {
            return false;
        }
    } catch (mysqli_sql_exception $e) {

    //игнорируем все ощипки т.к. код идеален

    }
}

//Получение имени (с заменой на 'Гость' при отсутствии авторизации)
function getName(): string {

    $connect = getDb();

    try {
    //Проверяем вход на сайт (если нет, то не будет существовать $_SESSION["user"]["id"])
    if (isset($_SESSION["user"]["id"])) {
        $idUser = $_SESSION["user"]["id"];
        //Если отсутствует ID 
        if ($idUser == '' ) {
        $login = 'Гость';
        } else {
        
        //Получаем строку из БД
        $sql = "SELECT * FROM `users` WHERE `id` = ('$idUser') ";

        $result = mysqli_query($connect, $sql);
        $result = mysqli_fetch_all($result);

        //заносим имя в переменную
        foreach($result as $item){
        $login = $item[1];
        }

    }

    } else {
        $login = 'Гость';
    }


    }catch (mysqli_sql_exception $e) {

    //игнорируем все ощипки т.к. код идеален

    }

    return($login);
}

function getNameFromID($id) : string{

    $connect = getDb();

    try {
        //Получаем строку из БД
        $sql = "SELECT * FROM `users` WHERE `id` = ('$id') ";

        $result = mysqli_query($connect, $sql);
        $result = mysqli_fetch_all($result);

        //заносим имя в переменную
        foreach($result as $item){
        $login = $item[1];
        }
    }catch (mysqli_sql_exception $e) {
    //Присваеваем стандартное имя если произошла ошибка
    return('Гость');
    }
    return($login);
}

//Возвращает кол-во написанных отзывов
function getNumReview(): int {
    if(isAuth()){
        $idUser = $_SESSION["user"]["id"];

        $connect = getDb();

        $sql = "SELECT * FROM `review` WHERE `userId` = ('$idUser') ";

        $result = mysqli_query($connect, $sql);
        $result = mysqli_fetch_all($result);

        $reviewList = [];

        //заносим имя в переменную
        foreach($result as $item){
        $reviewList[] = $item;
        }

        return count($reviewList);

    } else {
        return 0;
    }
}

//Возвращает название игры по её ID
function getGameNameFromID($id) : string{

    
    $connect = getDb();

    try {
        //Получаем строку из БД
        $sql = "SELECT * FROM `games` WHERE `id` = ('$id') ";

        $result = mysqli_query($connect, $sql);
        $result = mysqli_fetch_all($result);

        //заносим имя в переменную
        foreach($result as $item){
        $game = $item[1];
        }
    }catch (mysqli_sql_exception $e) {
    //Присваеваем стандартное имя если произошла ошибка
    return('неизвестно');
    }
    return($game);

}

//Возвращает путь к связанному с игрой файлу по ID
function getPicsFromID($id) : string{

    
    $connect = getDb();

    try {
        //Получаем строку из БД
        $sql = "SELECT * FROM `games` WHERE `id` = ('$id') ";

        $result = mysqli_query($connect, $sql);
        $result = mysqli_fetch_all($result);

        //заносим путь в переменную
        foreach($result as $item){
        $game = $item[6];
        }
    }catch (mysqli_sql_exception $e) {
    //Присваеваем стандартный путь изображения если произошла ошибка
    return('/Images/avatar.svg');
    }
    return($game);

}


