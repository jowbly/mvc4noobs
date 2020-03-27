<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\People;
use App\Utils\Request;

class Teste extends Controller
{
    function index()
    {
        print_r(Request::headers());
    }
}
