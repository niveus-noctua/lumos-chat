
<?php

    include_once '../config/config.php';                   //подключение файла настроек
    include_once '../config/db.php';                       //инициализация соединения с бд
    include_once '../library/mainFunctions.php';           //основные функции

    //определяем какой контроллер пришел
    if ($controllerName = isset($_GET['controller'])) {
        $controllerName = ucfirst($_GET['controller']);
    } else {
        $controllerName = 'Index';
    }

    //определяем какая функция пришла
    if ($actionName = isset($_GET['action'])) {
        $actionName = ucfirst($_GET['action']);
    } else {
        $actionName = 'index';
    }



    loadPage($smarty, $controllerName, $actionName);

    ?>
