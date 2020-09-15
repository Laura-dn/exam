<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

//Корневой каталог
define("ROOT", dirname(__FILE__));

//Подключаем Роутер
include_once(ROOT . "/components/Router.php");

//Подключение базы данных
include_once(ROOT . "/components/DataBase.php");

//Вызов Роутера
$router = new Router();
$router->run();
