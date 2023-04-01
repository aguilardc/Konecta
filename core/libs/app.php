<?php

namespace Core\libs;

use App\Controllers\ErrorController;

class App
{
    public function __construct()
    {
        $url = $_GET['url'] ?? null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        $class = empty($url[0]) ? "\\App\\Controllers\\mainController" : "\\App\\Controllers\\{$url[0]}Controller";

        $controller = class_exists($class) ? new $class() : new ErrorController();
        if (isset($url[1]) && method_exists($controller, $url[1])) {
            $nparam = sizeof($url);
            if ($nparam > 1) {
                if ($nparam > 2) {
                    $param = [];
                    for ($i = 2; $i < $nparam; $i++) {
                        $param[] = $url[$i];
                    }
                    $controller->{$url[1]}($param);
                }
            } else {
                $controller->{$url[1]}();
            }
        } else {
            $controller->render();
        }
    }
}