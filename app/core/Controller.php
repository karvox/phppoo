<?php

namespace app\core;

use Exception;

class Controller
{
    public function execute(string $router)
    {
        if(!str_contains($router, '@')){
            throw new Exception('Rota registrada de forma errada.');
        }

        list($controller, $method) = explode('@', $router);
        dd($controller,$method);
    }
}