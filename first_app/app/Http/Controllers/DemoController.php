<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function Home1(){
        return "I am Home1 from DemoController";
    }

    function About1(){
        return "I am About1 from DemoController";
    }

    function Contact1(){
        return "I am Contact1 from DemoController";
    }
}
