<?php

namespace app\controllers;

use League\Plates\Engine;

class HomeController extends Controller
{
    public function index($params)
    {
        $templates = new Engine('../app/views');
        echo $templates->render('home', ['name' => 'Página Index', 'title' => 'Página do inicial']);
    }
}