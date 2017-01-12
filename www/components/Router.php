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
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        // Получить отправку запроса
        $uri = $this->getURI();
        // проверка наличия запроса в роутер.пхп
        foreach ($this->routes as $uriPattern => $path) {
            //Сравнение $uriPattern  $uri
            if (preg_match("~$uriPattern~", $uri)) {

                $segments = explode('/', $path);
                // определяем контроллер и action который обрабатывает запрос
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);


                $actionName = 'action' . ucfirst((array_shift($segments)));
                // подключать файл класса контролерра
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
                //Создать обьект вызвать метод, (action)
                $controllerObject = new $controllerName;
                $result = $controllerObject->$actionName();
                if ($result != null) {
                    break;
                }
            }

        }
    }
}