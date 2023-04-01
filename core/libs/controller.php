<?php

namespace Core\libs;

class Controller
{
    protected View $view;
    protected Model $model;

    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * @param $model
     * @return void
     */
//    public function loadModel($model): void
//    {
//        $modelName = "\\App\\Models\\{$model}Model";
//        if (class_exists($modelName)) {
//            $this->model = new $modelName();
//        }
//    }
}