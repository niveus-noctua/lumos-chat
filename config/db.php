<?php

    $dblocation = "127.0.0.1";
    $dbname = "chat";
    $dbuser = "root";
    $dbpass = "root";

    $db = mysqli_connect($dblocation, $dbuser, $dbpass);

    if (!$db) {
        echo "Ошибка доступа к MySQL";
        exit();
    }

    mysqli_set_charset($db,'utf-8');

    if (!mysqli_select_db($db, $dbname)) {
        echo "Ошибка доступа к базе данных: {$dbname}";
    }

?>