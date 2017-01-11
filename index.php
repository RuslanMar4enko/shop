<?php


// FRONT CONTROLLER

// 1. Общие настройки, вывод ошибок!
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');

// 3. БД соеденение



// 4. Вызов роут
$router = new Router();
$router -> run();