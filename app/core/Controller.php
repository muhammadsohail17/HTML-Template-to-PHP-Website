<?php

class Controller
{
    protected function view($view, $data = [])
    {
        $filename = "../app/views/" . $view . ".php";

        if (file_exists($filename)) {
            include $filename;
        } else {
            include "../app/views/_404.php";
        }
    }


    protected function loadModel($model)
    {
        $filename = "../app/models/" . $model . ".php";

        if (file_exists($filename)) {
            include $filename;
            return $model = new $model();
        }

        return false;
    }
}
