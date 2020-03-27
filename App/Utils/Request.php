<?php

namespace App\Utils;

class Request
{

    public function input($key){
        return isset($_REQUEST[$key]) ? $_REQUEST[$key] : '';
    }

    public function path(){
        return $_SERVER['REQUEST_URI'];
    }

    public function url(){
        return getenv('SERVER_URL') . $_SERVER['REQUEST_URI'];
    }

    public function headers(){
        return getallheaders();
    }

    public function header($header){
        return getallheaders()[$header];
    }

    public function only($only){
        $array = [];
        foreach ($_REQUEST as $key => $value){
            if(in_array($key, $only)){
                array_push($array, [$key => $value]);
            }
        }

        return $array;
    }

}