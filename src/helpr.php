<?php

const DB_HOST = 'MySQL-8.0';
const DB_NAME = 'practice';
const DB_USER = 'root';
const DB_PASS = '';

function getDb(): bool|mysqli {
    return mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME );
}

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