<?php

namespace App\Controllers;

class Controller
{
    public function response(array $data, int $httpCode = 200)
    {
        header("HTTP/1.0 ". $httpCode);
        header('Content-type: application/json');
        die(json_encode($data));
    }

    public function view($page,$variables=[]){
    if(count($variables))
    {
        extract($variables);
    }
       require_once('App\\Views\\' . $page);
	}

}
