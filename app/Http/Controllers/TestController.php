<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function firstAction(){
        $localName  = "Ali Sharaf";
        $localList = ["Php", "Flutter"];
        return view('test',['localName' => $localName , 'localList' => $localList]);
    }
    public function greet(){
        echo "Hello this is a greet";
    }
}
