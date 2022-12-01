<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController2 extends Controller
{
    function MyName($namevalue){
        return "My Name is: ".$namevalue;
    }
}
