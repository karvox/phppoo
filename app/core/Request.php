<?php

namespace app\core;

use Exception;

class Request
{
    public static function input(string $name)
    {
        if(isset($_POST[$name])){
            return $_POST[$name];
        }

        throw new Exception("O índice {$name} não existe.");
    }

    public static function all()
    {
        return $_POST;
    }

    public static function only(string|array $only)
    {
        $fieldsPost = self::all();
        $fieldsPostKeys = array_keys($fieldsPost);
        dd($fieldsPostKeys);
    }
    
}