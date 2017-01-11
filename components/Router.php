<?php

class Router
{


    private $routes;


    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }


    /**
     * Returns request string
     * @return string
     */
    private function getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        // Получить отправку запроса
        $uri = $this->getUri();

        // проверка наличия запроса в роутер.пхп
        foreach ($this->routes as $uriPattern => $path) {
            //Сравнение $uriPattern  $uri
            if (preg_match("~$uriPattern~", $uri)) {
                // определяем контроллер и action который обрабатывает запрос
                $segments = explode('/', $path);
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));
            }
        }

        //Если есть совпадаение определить какой контроллер и actione обрабатывать запросы

        // подключать файл класса контролерра

        //Создать обьект вызвать метод, (action)
    }

}