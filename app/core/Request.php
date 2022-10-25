<?php

namespace app\core;

class Request
{
    public static function input(string $name)
    {
        if(isset($_POST[$name])){
            return $_POST[$name];
        }
    }

    public static function all()
    {
        return $_POST;
    }

    public static function name()
    {
        
    }

    
}