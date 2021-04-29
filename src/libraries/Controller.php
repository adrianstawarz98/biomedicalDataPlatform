<?php
declare(strict_types=1);

class Controller
{
    public function model(string $model)
    {
        require_once '../src/models/'.$model.'.php';
        return new $model();
    }

    public function view(string $view, array $data = [])
    {
        if (file_exists('../src/views/' . $view . '.php')) {
            require_once '../src/views/' . $view . '.php';
        } else {
            die("View does not exists.");
        }
    }
}