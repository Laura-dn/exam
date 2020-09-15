<?php

class Router
{
    private $routes;
    private $page404;

    public function __construct()
    {
        $this->routes = include_once(ROOT . "/config/routes.php");
        $this->page404 = true;
    }

    private function getUri()
    {
        if(!empty($_SERVER["REQUEST_URI"]))
        {
            return trim($_SERVER["REQUEST_URI"], '/');
        }
    }

    public function run()
    {
        $uri = $this->getUri();
        
        if ($uri == "")
        {
            $uri = "home";
        }

        //Есть ли такой запрос в $routes
        foreach ($this->routes as $userUri => $path)
        {
            if(preg_match("~$userUri~", $uri) == 1)
            {
                $path = preg_replace("~$userUri~", $path, $uri);
                //Если есть - определяем какой контроллер запускает класс и метод
                $arr = explode("/", $path);

                $controllerName = "Controller" . ucfirst(array_shift($arr));
                $actionName = "action" . ucfirst(array_shift($arr));

                //Подключаем файл класса-контроллера
                $pathToController = ROOT . "/controllers/" . $controllerName . ".php";

                //Проверяем, существует ли такой файл
                if(file_exists($pathToController))
                {
                    include_once($pathToController);
                }

                $controllerObject = new $controllerName();
                $result = $controllerObject->$actionName($arr);

                if($result != null)
                {
                    $this->page404 = false;
                    break;
                }
            }
        }

        if ($this->page404)
        {
            include (ROOT . "/controllers/ControllerNotFound.php");
            $controllerObject = new ControllerNotFound();
            $result = $controllerObject->actionPage404();
        }
    }
}