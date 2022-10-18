<?php

namespace app\controllers;

use League\Plates\Engine;

class UserController extends Controller
{
    public function edit($params)
    {
        $templates = new Engine('../app/views');
        echo $templates->render('user', ['name' => 'Judson', 'title' => 'Página do user']);
    }
}