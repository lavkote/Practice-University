<?php

require_once __DIR__ . '\helpr.php' ;

unset($_SESSION["user"]["id"]);
session_abort();

header("Location: /index.php");

?>