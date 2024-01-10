<?php

require_once "views/view.php";


class Router
{
    private $view;

    public function routeReq()
    {
        try {
            spl_autoload_register(function ($class) {
                $path = "models/" . $class . ".php";
                if (file_exists($path)) {
                    require_once "$path";
                } else {
                    $path = "app/" . $class . ".php";
                    require_once "$path";
                }
            });

            $params = explode('/', $_GET['param']);

            if (isset($params[0]) & !empty($params[0])) {

                $controllerClass = "Controller" . ucfirst(strtolower($params[0]));

                if (file_exists("controllers/" . $controllerClass . ".php")) {
                    require_once 'controllers/' . $controllerClass . ".php";
                    $obj = new $controllerClass();
                } else {
                    http_response_code(404);
                    echo "this page doesn't exsit";
                }
            } else {
                require_once "controllers/controllerLogin.php";
                $obj = new controllerLogin();
                $obj->index();
            }
        } catch (\Exception $e) {
            $erroMsg = $e->getMessage();
            require_once('views/viewLogin.php');
        }
    }
}