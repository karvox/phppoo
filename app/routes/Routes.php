<?php

namespace app\routes;

class Routes
{
    public function get()
    {
        return [
            'get'  => [
                '/' => 'HomeController@index',
                '/user/[a-zA-Z]' => 'RegisterController@store'
            ],
            'post' => []
        ];
    }
    
}