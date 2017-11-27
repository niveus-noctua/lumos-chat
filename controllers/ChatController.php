<?php

    function chatAction($smarty) {
        $smarty->assign('pageTitle', 'Добро пожаловать в чат');
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'chat.block');
        loadTemplate($smarty, 'footer');
    }



?>