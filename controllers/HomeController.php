<?php

namespace Controllers;

class HomeController
{
    public function index()
    {
        $this->render('index');
    }

    public function show()
    {
        $this->render('show');
    }

    private function render($view, $data = [])
    {
        extract($data);
        require_once __DIR__ . '/../views/' . $view . '.php';
    }
}
