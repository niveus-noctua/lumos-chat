<?php

    //константы для обращения к контроллерам
    define('PathPrefix', '../controllers/');
    define('PathPostfix', 'Controller.php');

    //используемый шаблон
    $template = 'default';

    //пути к файлам шаблонов *.tpl
    define('TemplatePrefix', "../views/{$template}/");
    define('TemplatePostfix', '.tpl');

    //пути к файлам шаблонов в веб пространстве
    define('TeplateWebPath', "/templates/{$template}/");
    define('ImgWebPath', "/img/");
    define('JsWebPath', "/js/");

    //Инициализация шаблонизатора
    require('../library/Smarty/libs/Smarty.class.php');
    $smarty = new Smarty();

    $smarty->setTemplateDir(TemplatePrefix);
    $smarty->setCompileDir('../tmp/smarty/templates_c');
    $smarty->setCacheDir('../tmp/smarty/cache');
    $smarty->setConfigDir('../library/Smarty/configs');

    $smarty->assign('templateWebPath', TeplateWebPath);
    $smarty->assign('imgWebPath', ImgWebPath);
    $smarty->assign('jsWebPath', JsWebPath);
