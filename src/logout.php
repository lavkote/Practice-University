<?php
session_start();

require_once __DIR__ . '\helpr.php' ;

unset($_SESSION["user"]["id"]);

header("Location: /index.php");

?>