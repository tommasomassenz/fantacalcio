<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function index()
    {
        return "Hello from MyFirstController!";
    }
    public function indexWithQueryString(Request $request){
        $all = $request ->all();
        $p1 = $request ->input('p1');
        $p2 = $request ->input('p2');

        var_dump($all);
        var_dump($p1);
        var_dump($p2);
    }
}