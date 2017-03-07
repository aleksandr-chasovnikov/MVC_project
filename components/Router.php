<?php

class Router
{
    private $routes;
    
    public function __construct()
    {
        $routesPath=ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }
    
    /**
     * Return request string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        // Получить строку запроса
        $uri = $this->getURI();
        echo $uri;
        
        // Проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {
            
            // Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {
               
                // Определить какой контроллер
                // и action обрабатывают запрос
                
                $segments = explode('/', $path);
                $cotrollerName = array_shift($segments).'Controller';
                $cotrollerName = ucfirst($cotrollerName);
                echo $cotrollerName;
                
            }
        }
        
        // Если есть совпадение, определить какой контроллер
        // и action обрабатывают запрос
        
        // Подключить файл класса-контроллера
        
        // Создать объект, вызвать метод (т.е. action_
    }
}