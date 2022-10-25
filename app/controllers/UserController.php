<?php

namespace app\controllers;

use app\core\Request;
use app\controllers\Controller;
use League\Plates\Engine;


class UserController extends Controller
{
    public function edit($params)
    {
        $templates = new Engine('../app/views');
        echo $templates->render('user', ['name' => 'Judson', 'title' => 'Página do user']);

        //$this->view('user', ['title' => 'Editar usuário']);
    }

    public function update($params)
    {
        dd(Request::only('firstName'));
    }
}