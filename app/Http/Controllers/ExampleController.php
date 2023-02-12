<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage(){
        $ourName = 'Scott';
        $allAnimals = ['cats','dogs','birds'];
        return view('homepage',['allAnimals' => $allAnimals ,'name' => $ourName,'catname' => 'gongon']);
    }

    public function aboutPage(){
        return view('single-post');
    }
    
}
