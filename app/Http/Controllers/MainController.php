<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function services(){
        return view('services');
    }
    public function portfolio(){
        return view('portfolio');
    }
    public function contact(){
        return view('contact');
    }
}
