<?php


class Controller {
    public function view($view, $data = []) //parameter pertama adalah view Home
    {
        require_once '../app/views/' . $view . '.php'; //ini tu $view yg di Home
    }

    public function model($model) 
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}