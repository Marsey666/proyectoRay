<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request){
        $data = array();
        return view('home/home',$data);
    }
    public function about(Request $request){
        $data = array();
        return view('home/about',$data);
    }
}